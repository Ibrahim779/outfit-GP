<?php

namespace App\Exceptions;

use Facade\FlareClient\Http\Exceptions\NotFound;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $e)
    {
        if (is_a($e, NotFoundHttpException::class) && $request->wantsJson()){
            return response()->error('Not Found !', 404);
        }

        if (is_a($e, ValidationException::class) && $request->wantsJson()){
            return response()->error(collect($e->errors())->first()[0], 422);
        }

        if (is_a($e, \Exception::class) && $request->wantsJson()){
            return response()->error($e->getMessage(), 400);
        }

        if (is_a($e, \Error::class) && $request->wantsJson()){
            return response()->error($e->getMessage(), 400);
        }
        return parent::render($request, $e);
    }
}

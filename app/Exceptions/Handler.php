<?php

namespace App\Exceptions;

use Exception;
use illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
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

    

    protected function unauthenticated($request, AuthenticationException $exception){
        if($request->expectsjson()){
            return response()->json(['error' => 'Unauthenticated.'], 401);

        }
        $guard = Array($exception->guards(), 0);

        switch ($guard) {
            case 'admin':
            $login = 'admin.login';

                # code...
                break;

            case 'tutor':
                $login = 'tutor.login';
    
                    # code...
                    break;

            case 'principal':
                    $login = 'principal.login';
        
                        # code...
                        break;
            
            default:
            $login = 'login';
                # code...
                break;
        }
        
        return redirect()->guest(route($login));
    }

    
}

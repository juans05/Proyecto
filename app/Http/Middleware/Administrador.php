<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Session;

class Administrador
{
    protected $auth;
    public function __construct(Guard $auth){

        $this->auth = $auth;
    }


    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      switch($this->auth->user()->perfil_id){
          case '1':
              return redirect()->to('AdminPrin');
              break;

          default:

      }
    }
}

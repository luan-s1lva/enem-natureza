<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Autenticacao
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $acesso)
    {
        if (session()->has('usuario') && session()->get('tipo') == $acesso) {
            return $next($request);    
        }
        return redirect('/');
    }
}

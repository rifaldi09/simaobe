<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isGuest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Middleware untuk halaman yang dapat di akses sebelum login

        // Jika user sudah login, maka akan dikembalikan ke halaman yang di akses saat ini 
        if(Auth::check()) {
            return back();
        }

        //Jika tidak, user dapat mengkases halaman sebelum login
        return $next($request);
    }
}

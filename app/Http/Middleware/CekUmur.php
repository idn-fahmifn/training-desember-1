<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CekUmur
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // mengambil nilai dari input (umur)
        $umur = $request->session()->get('umur');

        // jika lebih dari 18 tahun, maka akan dilanjutkan ke routing yang dituju.
        if($umur <= 18){
            return redirect()->route('form')->with('error', 'Belum cukup umur');
        }
        return $next($request);

    }
}

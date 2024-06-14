<?php

namespace App\Http\Middleware;

use App\Models\Visitor;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RecordVisitorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     // Simpan alamat IP pengunjung
    //     $ipAddress = $request->ip();

    //     if ($ipAddress !== null) {

    //         Visitor::create(['ip_address' => $ipAddress]);
    //     }
    //     return $next($request);
    // }

}

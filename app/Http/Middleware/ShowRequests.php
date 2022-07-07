<?php

namespace App\Http\Middleware;

use App\Models\RequestItem;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ShowRequests
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
        $requests = RequestItem::all();

        return new Response(view('dashboard', compact('requests')));
    }
}

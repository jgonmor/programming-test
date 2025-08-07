<?php

namespace App\Http\Middleware;

use App\Models\Policy;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class OwnPolicy
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $policyId = $request->route('id');
        $ownerId = Policy::find($policyId)->user_id;

        if (Auth::check() && Auth::id() == $ownerId) {
            return $next($request);
        }

        abort(403, 'Unauthorized access.');
    }
}

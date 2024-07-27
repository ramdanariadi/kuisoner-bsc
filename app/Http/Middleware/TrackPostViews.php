<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Modules\Post\Models\PostView;

class TrackPostViews
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $id = $request->route('id');
        $ip = $request->ip();
        if ($id && !PostView::where('post_id', decode_id($id))->where('ip_address', $ip)->exists()) {
            PostView::create([
                'post_id' => decode_id($id),
                'ip_address' => $ip,
            ]);
        }

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\ReferralLink;

class StoreReferralCode
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
//     public function handle(Request $request, Closure $next)
//     {
//          $response = $next($request);

//     if ($request->has('ref')){
//         $referral = ReferralLink::whereCode($request->get('ref'))->first();
//         $response->cookie('ref', $referral->id, $referral->lifetime_minutes);
//     }
//         return $next($request);
//     }
public function handle($request, Closure $next)
{
    $response = $next($request);

    if ($request->has('ref')){
        $referral = ReferralLink::whereCode($request->get('ref'))->first();
        $response->cookie('ref', $referral->id, $referral->lifetime_minutes);
    }

    return $response;
}
}

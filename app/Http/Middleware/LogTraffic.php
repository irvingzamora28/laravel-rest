<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LogTraffic
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
        $response = $next($request);
        Log::channel('inbound-traffic')->info($request->getHost(), [
            'user'        => $request->user() ? $request->user()->dni : $request->user(),
            'IP'        => $this->getIp() . '|' . $request->getIp . '|' . $request->getClientIp(),
            'URL'       => $request->getUri(),
            'METHOD'    => $request->getMethod(),
            'BODY'    => $request->all(),
        ]);
        return $response;
    }

    /**
     * Handle tasks after the response has been sent to the browser.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Http\Response  $response
     * @return void
     */
    public function terminate(Request $request, $response)
    {
        if (config('app.debug') === true) {
            Log::channel('outbound-traffic')->info($request->getHost(), [
                'user'        => $request->user() ? $request->user()->dni : $request->user(),
                'IP'        => $this->getIp() . '|' . $request->getIp . '|' . $request->getClientIp(),
                'URL'       => $request->getUri(),
                'METHOD'    => $request->getMethod(),
                'RESPONSE'    => $response->getContent(),
                'STATUS'    => $response->getStatusCode(),
            ]);
        }
    }

    /**
     * Custom method to get the client's IP address
     *
     * @return string
     */
    public function getIp(): string
    {
        foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key) {
            if (array_key_exists($key, $_SERVER) === true) {
                foreach (explode(',', $_SERVER[$key]) as $ip) {
                    $ip = trim($ip);
                    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false) {
                        return $ip;
                    }
                }
            }
        }
        return request()->ip();
    }
}

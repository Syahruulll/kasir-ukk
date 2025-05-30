<?php

            namespace App\Http\Middleware;
            
            use Closure;
            use Illuminate\Http\Request;
            use Symfony\Component\HttpFoundation\Response;
            use Illuminate\Support\Facades\Auth;
            
            class IsGuest
            {
                /**
                 * Handle an incoming request.
                 *
                 * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
                 */
                public function handle(Request $request, Closure $next): Response
                {
                    if(Auth::check()== false){
                        return $next($request);
                    }else{
                        return redirect()->route('home.page')->with('check','Anda Sudah Login');
                    }
                }
            }
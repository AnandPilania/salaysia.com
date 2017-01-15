<?php

namespace App\Http\Middleware;

use Closure;
use App;
session_start();//php session from scratch
class checkLang
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $comp = explode("/", $request->url());
        $lang = $comp[count($comp)-1];
        

        if($lang=="ar" || $lang=="en"){
            $_SESSION["local"]=$lang;
            App::setLocale($_SESSION["local"]);//when call the set lang url for en,ar   
            //please redirect as there is not handler for it !  
            return back();//back to breviuos url !
        }else{
            if(!isset($_SESSION["local"])){
                $_SESSION["local"]="en";
            }
            App::setLocale($_SESSION["local"]);//for other pages to use session
            return $next($request);            
        }
    }
}

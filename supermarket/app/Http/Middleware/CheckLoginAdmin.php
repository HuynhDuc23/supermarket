<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLoginAdmin
{
    public function handle(Request $request, Closure $next)
    {
        $id = $request->id;
        dd($id);
        // if ($this->isLogin() == false) {
        //     return redirect(route('home'));
        // }
        if ($id == 2) {
            return redirect(route('home'));
        }

        return $next($request);
    }
    public function isLogin()
    {
        return true;
    }
}

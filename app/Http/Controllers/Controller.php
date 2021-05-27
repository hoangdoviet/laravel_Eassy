<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
<<<<<<< HEAD
=======
    public function userCan($action, $option = null)
    {
        $user = Auth::user();
        return Gate::forUser($user)->allows($action, $option);
    }
>>>>>>> 6d99061 (Authentication and Mail)
}

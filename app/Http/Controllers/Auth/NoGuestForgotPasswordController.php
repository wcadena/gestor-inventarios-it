<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

/**
 * Class NoGuestForgotPasswordController.
 */
class NoGuestForgotPasswordController extends ForgotPasswordController
{
    /**
     * NoGuestForgotPasswordController constructor.
     */
    public function __construct()
    {
        //Let authenticated users use this controller.
//        $this->middleware('guest');
    }
}

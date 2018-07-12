<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponser;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Facades\Gate;

class ApiController extends Controller
{
    use ApiResponser;

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    protected function allowedAdminAction()
    {
        if (Gate::denies('admin-action')) {
            throw new AuthorizationException('Esta acción no te es permitida');
        }
    }
}

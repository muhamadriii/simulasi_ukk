<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class HomeController extends Controller
{
    protected $model;
    protected $view;
    protected $route;

    public function __construct()
    {
        $this->view     = "pages.admin.dashboard";
        $this->route    = "admin.users";
        $this->titlePage    = "Dashboard";
        $this->titleCard    = "";

        View::share('route', $this->route);
        View::share('view', $this->view);
        View::share('titlePage', $this->titlePage);
        View::share('titleCard', $this->titleCard);
    }

    public function index(){
        dd('ini dashboard admin');
    }
}

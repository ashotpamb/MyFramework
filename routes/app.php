<?php

use MF\Config\Router;
use MF\controller\HomeController;


//Router::get("home", function() {
//    return redirect("home");
//});

Router::get("home", [HomeController::class, 'index']);



<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class RouteController extends Controller {

  public function param(int $id=1) {
    return 'id value: '.$id;
  }
}

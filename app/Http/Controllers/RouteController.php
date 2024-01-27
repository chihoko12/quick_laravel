<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class RouteController extends Controller {

  public function param(int $id) {
    return 'id value: '.$id;
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{

  public function escape() {
    return view('view.escape', [
      'msg' => '<img src="https://wings.msn.to/image/wings.jpg" title="Logo" />
      <p>Welcome to WINGS</p>'
    ]);
  }

  public function if(){
    return view('view.if', [
      'random' => random_int(0,100)
    ]);
  }

  public function unless() {
    return view('view.unless', [
      'random' => random_int(0,100)
    ]);
  }

}

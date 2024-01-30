<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CtrlController extends Controller {

  public function plain() {
    return response('Hello World!', 200)
    -> header('Content-Type', 'text/plain');
  }

  public function header() {
    return response()
    ->view('ctrl.header', ['msg' => 'Hello World!'], 200)
    // ->header('Content-Type', 'text/xml');
    ->withHeaders([
      'Content-Type' => 'text/xml',
      'X-Powered-FW' => 'Laravel/6'
    ]);

  }

  public function outJson() {
    return response()
    ->json([
      'name' => 'Yoshihiro, YAMADA',
      'sex' => 'male',
      'age' => 19,
    ])
    ->withCallback('callback');
  }

  public function outFile() {
    return response()
    ->download('C:/Data/data_log.csv','download.csv',['content-type' => 'text/csv']);
  }

  public function outCsv() {
    return response()
    ->streamDownload(function() {
      print(
        "1,2019/10/1,123\n".
        "2,2019/10/2,116\n".
        "3,2019/10/3,98\n".
        "4,2019/10/4,102\n".
        "5,2019/10/5,134\n"
      );
    }, 'download.csv', ['content-type' => 'text/csv' ]);
  }
}

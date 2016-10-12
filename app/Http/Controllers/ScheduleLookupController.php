<?php

namespace App\Http\Controllers;

class ScheduleLookupController extends Controller {

  public function index() {

    return response(
      file_get_contents(__DIR__ . '/../../../resources/views/index.html')
    );
  }

  public function info() {

    return response()->json([
      'name' => 'Sample',
      'version' => '1.0'
    ]);
  }

  public function scheduleDataForShow($show) {

    //
  }
}

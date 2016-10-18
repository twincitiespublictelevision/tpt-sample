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

  // $show = 'almanac'

  // POST http://dev-api.tpt.org/schedule/series
  // Content-Type: application/json
  // {"title": "Almanac", "channel": "2"}

  public function scheduleDataForShow($show) {

    //
  }
}

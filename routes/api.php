<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {

  return response([
      'test' => 'ok'
  ]);
});

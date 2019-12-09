<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TestController extends Controller
{
    use ApiResponser;

    public function coba() {
        return 'hello';
    }
}

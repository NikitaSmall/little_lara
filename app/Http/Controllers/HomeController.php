<?php

namespace todoparrot\Http\Controllers;

use Illuminate\Http\Request;

use todoparrot\Http\Requests;
use todoparrot\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     * @Get("/")
     */
    public function index()
    {
        $data = array(
          'name' => 'Nikita',
          'date' => date('Y-m-d')
        );
        return view('home.welcome');
    }
}

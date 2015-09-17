<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = [];
        $data['title'] = "Some Conference";
        return view('index', $data);
    }

    public function login()
    {
        $data = [];
        $data['title'] = "Registration method";
        return view('login', $data);
    }

    public function register()
    {
        $data = [];
        $data['title'] = "Conference Registration";
        return view('register', $data);
    }

    public function accommodation()
    {
        $data = [];
        $data['title'] = "Book Accommodation";
        return view('accommodation', $data);
    }

    public function accommodations()
    {
        $data = [];
        $data['title'] = "Select Accommodations";
        return view('accommodations', $data);
    }

    public function attraction()
    {
        $data = [];
        $data['title'] = "Book Attraction";
        return view('attraction', $data);
    }

    public function attractions()
    {
        $data = [];
        $data['title'] = "Select Attractions";
        return view('attractions', $data);
    }

    public function pay()
    {
        $data = [];
        $data['title'] = "Make Payment";
        return view('pay', $data);
    }

}

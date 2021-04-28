<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index(){
        return view('welcome');

    }
    public function chartjs(){
        return view('chartjs');

    }
    public function blank(){
        return view('blank');

    }
    public function signup(){
        return view('signup');

    }
}


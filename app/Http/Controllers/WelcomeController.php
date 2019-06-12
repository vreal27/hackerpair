<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
    	$events = [
    		'Laravel Hacking and Coffee',
    		'IoT with Raspberry Pi',
    		'Free Vue.Js Lessons'
    	];

    	return view('welcome.welcome')
    	->withEvents($events);
    }
}

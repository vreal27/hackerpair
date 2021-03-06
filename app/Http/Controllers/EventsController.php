<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function show($id) {

    	$data = [
    		'name' => 'Laravel Hacking and Coffee',
    		'date' => date('Y-m-d')
    	];

    	return view('events.show')
    	->with($data)
    	->withId($id);
    	
    }

    public function category($category, $subcategory = 'all') {

    	dd("Category: {$category} Subcategory: {$subcategory}");
    }



    public function index() {

        return view('events.index');
        
    }
}

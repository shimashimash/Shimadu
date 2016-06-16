<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function about()
    {
//     	$data = [];
//     	$data['first_name'] = 'wataru';
//     	$data['last_name'] = 'shimadu';
		$first_name = "wataru";
    	$last_name = "shimadu";
    	
    	return view('pages.about', compact('first_name', 'last_name'));
    }
    
    public function contact()
    {
    	return view('pages.contact');
    }
}

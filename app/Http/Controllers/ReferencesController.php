<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\References;

class ReferencesController extends Controller
{
    public function index() 
    {

    	$references = References::all();

    	return view('admin.references.index', compact('references'));
    	
    }
}

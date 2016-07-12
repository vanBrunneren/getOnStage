<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\HomeSite;

class HomeSiteController extends Controller
{
	public function index() 
	{
		$homesite = HomeSite::first();

		return view('admin.homesite.index', compact('homesite'));
	}

	public function indexSave(Request $request) 
	{

		$results = $request->all();

		$homesite = HomeSite::first();

		if($request->file('input_image') && $request->file('input_image')->isValid()) {

			$destinationPath = public_path('images') . '/homeSite/';
			$request->file('input_image')->move($destinationPath, $request->file('input_image')->getClientOriginalName());

			$homesite->imagepath = $destinationPath . $request->file('input_image')->getClientOriginalName();

		}

		$homesite->centertext = $results['centertext'];
		$homesite->righttext = $results['righttext'];
		$homesite->save();

		return back();
		
	}
}

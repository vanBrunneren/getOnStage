<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Portrait;

class PortraitController extends Controller
{
     public function index() 
	{
		$portrait = Portrait::first();

		return view('admin.portrait.index', compact('portrait'));
	}

	public function indexSave(Request $request) 
	{

		$results = $request->all();

		$portrait = Portrait::first();

		if($request->file('input_image') && $request->file('input_image')->isValid()) {

			$destinationPath = public_path('images') . '/portrait/';
			$request->file('input_image')->move($destinationPath, $request->file('input_image')->getClientOriginalName());

			$portrait->imagepath = $destinationPath . $request->file('input_image')->getClientOriginalName();

		}

		$portrait->titletext = $results['titletext'];
		$portrait->maintext = $results['maintext'];
		$portrait->save();

		return back();
		
	}
}

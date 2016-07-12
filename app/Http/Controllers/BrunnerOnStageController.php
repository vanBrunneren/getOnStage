<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\BrunnerOnStage;

class BrunnerOnStageController extends Controller
{
    
	public function index() 
	{
		$brunnerOnStage = BrunnerOnStage::first();

		return view('admin.brunnerOnStage.index', compact('brunnerOnStage'));
	}

	public function indexSave(Request $request) 
	{

		$results = $request->all();

		$brunnerOnStage = BrunnerOnStage::first();

		if($request->file('input_image') && $request->file('input_image')->isValid()) {

			$destinationPath = public_path('images') . '/brunnerOnStage/';
			$request->file('input_image')->move($destinationPath, $request->file('input_image')->getClientOriginalName());

			$brunnerOnStage->imagepath = $destinationPath . $request->file('input_image')->getClientOriginalName();

		}

		$brunnerOnStage->centertext = $results['centertext'];
		$brunnerOnStage->righttext = $results['righttext'];
		$brunnerOnStage->save();

		return back();
		
	}

}

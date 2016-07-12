<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ArtistOnStage;

class ArtistOnStageController extends Controller
{
    public function index() 
	{
		$artistOnStage = ArtistOnStage::first();

		return view('admin.artistOnStage.index', compact('artistOnStage'));
	}

	public function indexSave(Request $request) 
	{

		$results = $request->all();

		$artistOnStage = ArtistOnStage::first();

		if($request->file('input_image') && $request->file('input_image')->isValid()) {

			$destinationPath = public_path('images') . '/artistOnStage/';
			$request->file('input_image')->move($destinationPath, $request->file('input_image')->getClientOriginalName());

			$artistOnStage->imagepath = $destinationPath . $request->file('input_image')->getClientOriginalName();

		}

		$artistOnStage->centertext = $results['centertext'];
		$artistOnStage->righttext = $results['righttext'];
		$artistOnStage->save();

		return back();
		
	}
}

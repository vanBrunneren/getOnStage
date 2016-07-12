<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\HomeSite;
use App\BrunnerOnStage;
use App\ArtistOnStage;
use App\Portrait;
use App\Message;
use App\References;

class PublicController extends Controller
{
    
	public function home() 
	{

		$homesite = HomeSite::first();

		return view('public.home', compact('homesite'));
	
	}

	public function brunnerOnStage() 
	{

		$brunnerOnStage = BrunnerOnStage::first();

		return view('public.brunnerOnStage', compact('brunnerOnStage'));
	}

	public function artistOnStage() 
	{

		$artistOnStage = ArtistOnStage::first();

		return view('public.artistOnStage', compact('artistOnStage'));
	}

	public function news() 
	{
		return view('public.news');
	}

	public function references()
	{

		$references = References::all();
		
		return view('public.references', compact('references'));
	}

	public function projects() 
	{
		return view('public.projects');
	}

	public function portrait() 
	{

		$portrait = Portrait::first();

		return view('public.portrait', compact('portrait'));
	}

	public function contact() 
	{
		return view('public.contact');
	}

	public function contactSend(Request $request) 
	{

		$this->validate($request, [
			'name' => 'required',
			'email' => 'email|required',
			'subject' => 'required',
			'message' => 'required'
		]);

		$params = $request->all();
	
		$message = new Message;
		$message->name = $params['name'];
		$message->email = $params['email'];
		$message->subject = $params['subject'];
		$message->message = $params['message'];
		$message->save();

		return back();

	}

}


















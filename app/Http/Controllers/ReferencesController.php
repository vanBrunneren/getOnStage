<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\References;
use DB;

class ReferencesController extends Controller
{
    public function index() 
    {
    	$references = References::orderBy('ordering')->get();

    	$order_low = References::select('ordering')
								->orderBy('ordering', 'asc')
								->first();
		$order_high = References::select('ordering')
								->orderBy('ordering', 'desc')
								->first();

    	return view('admin.references.index', compact('references', 'order_low', 'order_high'));
    }

    public function create() 
    {
    	return view('admin.references.create');
    }

    public function createSave(Request $request)
    {

    	$ref = new References;

    	if($request->file('reference-file') && $request->file('reference-file')->isValid()) {

			$destinationPath = public_path('files') . '/references/';
			$request->file('reference-file')->move($destinationPath, $request->file('reference-file')->getClientOriginalName());

			$ref->filepath = $destinationPath . $request->file('reference-file')->getClientOriginalName();

		}

		$max_order = DB::table('gos_references')->select(DB::raw('MAX(`ordering`) as max_order'))->get();
		$ref->ordering = ++$max_order[0]->max_order;
    	$ref->title = $request->title;
    	$ref->description = $request->description;
    	$ref->feedback = $request->feedback;
    	$ref->save();

    	return redirect('/admin/references/index');
    }

    public function edit(References $ref) 
    {
    	return view('admin.references.edit', compact('ref'));
    }

    public function editSave(References $ref, Request $request)
    {

    	if($request->file('reference-file') && $request->file('reference-file')->isValid()) {

			$destinationPath = public_path('files') . '/references/';
			$request->file('reference-file')->move($destinationPath, $request->file('reference-file')->getClientOriginalName());

			$ref->filepath = $destinationPath . $request->file('reference-file')->getClientOriginalName();

		}

    	$ref->title = $request->title;
    	$ref->description = $request->description;
    	$ref->feedback = $request->feedback;
    	$ref->save();

    	return view('admin.references.edit', compact('ref'));
    }

    public function delete(References $ref) 
    {
    	$ref->delete();
    	return back();
    }

    public function orderUp(References $ref)
    {
    	$order_now = $ref->ordering;
		$order_new = $ref->ordering - 1;

		DB::table('gos_references')
			->where('ordering', $order_new)
			->update(['ordering' => $order_now]);

		$ref->ordering = $order_new;
		$ref->save();
		
		return back();
    }

    public function orderDown(References $ref)
    {
    	$order_now = $ref->ordering;
		$order_new = $ref->ordering + 1;

		DB::table('gos_references')
			->where('ordering', $order_new)
			->update(['ordering' => $order_now]);

		$ref->ordering = $order_new;
		$ref->save();
		
		return back();
    }

}















<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator;
use App\Http\Requests;
use App\Navigation;
use DB;

class NavigationController extends Controller
{
	public function index()
	{
		$navigation = Navigation::orderBy('order', 'asc')
								->get();

		$order_low = Navigation::select('order')
								->orderBy('order', 'asc')
								->first();
		$order_high = Navigation::select('order')
								->orderBy('order', 'desc')
								->first();


		return view('admin.navigation.index', compact('navigation', 'order_low', 'order_high'));
	}

	public function create() 
	{
		return view('admin.navigation.create');
	}

	public function createSave(Request $request) 
	{

		$this->validate($request, [
	        'name' => 'required|string|max:255',
	        'route' => 'required|string|max:255',
	        'title' => 'required|string|max:255'
	    ]);

		$nav = new Navigation;
		$nav->name = $request['name'];
		$nav->route = $request['route'];
		$nav->title = $request['title'];
		isset($request['line']) ? $nav->line = 1 : $nav->line = 0;
		isset($request['hidden']) ? $nav->hidden = 1 : $nav->hidden = 0;
		$max_order = DB::table('gos_navigation')->select(DB::raw('MAX(`order`) as max_order'))->get();
		$nav->order = ++$max_order[0]->max_order;
		$nav->save();


		return redirect('/admin/navigation/index');
	}

	public function edit(Navigation $nav) 
	{
		return view('admin.navigation.edit', compact('nav'));
	}

	public function editSave(Request $request, Navigation $nav)
	{
		$results = $request->all();

		$nav->name = $results['name'];
		$nav->route = $results['route'];
		$nav->title = $results['title'];
		isset($results['line']) ? $nav->line = 1 : $nav->line = 0;
		isset($results['hidden']) ? $nav->hidden = 1 : $nav->hidden = 0;
		$nav->save();

		return view('admin.navigation.edit', compact('nav'));

	}

	public function delete(Navigation $nav)
	{
		$nav->delete();
		return back();

	}

	public function orderUp(Navigation $nav)
	{
		
		$order_now = $nav->order;
		$order_new = $nav->order - 1;

		DB::table('gos_navigation')
			->where('order', $order_new)
			->update(['order' => $order_now]);

		$nav->order = $order_new;
		$nav->save();
		
		return back();

	}

	public function orderDown(Navigation $nav)
	{
		$order_now = $nav->order;
		$order_new = $nav->order + 1;

		DB::table('gos_navigation')
			->where('order', $order_new)
			->update(['order' => $order_now]);

		$nav->order = $order_new;
		$nav->save();
		
		return back();
	}
}























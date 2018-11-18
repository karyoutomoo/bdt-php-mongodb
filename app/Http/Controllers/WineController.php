<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wine;

class WineController extends Controller
{
    //
    public function create()
    {
        return view('winescreate');
    }

    public function edit($id)
    {
        $wine = Wine::find($id);
        return view('wineedit',compact('wine','id'));
    }

    public function update(Request $request, $id)
    {
        $wine= Wine::find($id);
        $wine->title = $request->get('title');
        $wine->points = $request->get('points');
        $wine->description = $request->get('de');
        $wine->taster_name = $request->get('taster_name');
        $wine->taster_twitter_handle = $request->get('taster_twitter_handle');
        $wine->price = $request->get('price');
        $wine->designation = $request->get('designation');
        $wine->variety = $request->get('variety');
        $wine->region_1 = $request->get('region_1');
        $wine->region_2 = $request->get('region_2');
        $wine->province = $request->get('province');
        $wine->country = $request->get('country');
        $wine->winery = $request->get('winery');
        $wine->save();
        return redirect('wines')->with('success', 'The review has been successfully updated');
    }

    public function destroy($id)
    {
        $wine = Wine::find($id);
        $wine->delete();
        return redirect('wines')->with('success','The review has been  deleted');
    }

    public function store(Request $request)
    {
        $wine = new Wine();
        $wine->title = $request->get('title');
        $wine->points = $request->get('points');
        $wine->description = $request->get('description');
        $wine->taster_name = $request->get('taster_name');
        $wine->taster_twitter_handle = $request->get('taster_twitter_handle');
        $wine->price = $request->get('price');
        $wine->designation = $request->get('designation');
        $wine->variety = $request->get('variety');
        $wine->region_1 = $request->get('region_1');
        $wine->region_2 = $request->get('region_2');
        $wine->province = $request->get('province');
        $wine->country = $request->get('country');
        $wine->winery = $request->get('winery');
        $wine->save();
        return redirect('wines')->with('success', 'Your review has been successfully added');
    }

    public function index()
    {
        $wines = Wine::all();
        return view('wineindex',compact('wines'));
    }
}

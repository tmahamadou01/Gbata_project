<?php

namespace App\Http\Controllers;

use App\Offer;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;

class OffersController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Guard $auth)
    {
        $offers = $auth->user()->offers()->get();
        return view('offer.list', compact('offers'));
    }

    public function edit($id){
        $offer = Offer::find($id);
        return view('offer.edit', compact('offer'));
    }

    public function update($id , Request $request){
        //
        $offer = Offer::findOrFail($id);
        $offer->update($request->all());
        return redirect(route('offers.edit', $offer));

    }
    public function create(){
        return view('offer.create');
    }
    public function store(Request $request, Guard $auth){
        $this->validate($request, [
            'description' => 'required|unique:posts|max:255',
            'piece' => 'required',
        ]);
        $user_id = $auth->id();
        $request->merge(['user_id' => $user_id, 'agence' => 'GBATA']);
        $offer = Offer::create($request->all());
        return redirect(route('offers.edit', $offer));
    }
}

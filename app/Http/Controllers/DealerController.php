<?php

namespace App\Http\Controllers;

use App\Models\Dealer;
use Illuminate\Http\Request;
use App\Http\Requests\CreateDealerRequest;


class DealerController extends Controller
{
    function showDealer()
    {
        $dealers = Dealer::all();
        return view('dealers.index', compact('dealers'));
    }
    
    function createDealer()
    {
        $dealers = Dealer::all();
        return view('dealers.create', compact('dealers'));
    }


    function store(CreateDealerRequest $request)
    {   
        $dealer = new Dealer();
        $dealer->dealer_name = $request->dealer_name;
        $dealer->phone = $request->phone;
        $dealer->status = $request->status;
        $dealer->email = $request->email;
        $dealer->address = $request->address;
        $dealer->manager = $request->manager;
        $dealer->save();

        return redirect()->route('show.dealer');
    }

    function updateDealer($id)
    {
        $dealer = dealer::findOrFail($id);
        return view('dealers.update', compact('dealer'));
        
    }

    function editDealer(Request $request, $id) {
        $dealer = Dealer::findOrFail($id);
        $dealer->dealer_name = $request->dealer_name;
        $dealer->phone = $request->phone;
        $dealer->status = $request->status;
        $dealer->email = $request->email;
        $dealer->address = $request->address;
        $dealer->manager = $request->manager;
        $dealer->save();
        return redirect()->route('show.dealer');
    }

    function deleteDealer(Request $request, $id){
        
        $dealer = Dealer::findOrFail($id);
       
        $dealer->delete();

        return redirect()->route('show.dealer');

    }

    public function search(Request $request)
    {
        $dealerSearch = $request->search;
        $dealers = Dealer::where('dealer_name', 'LIKE', "%" . $dealerSearch . "%")->get();
        return view('dealers.index', compact('dealers'));
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Events\UserLogsEntry;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(){
        $items = Item::latest()->paginate(10);
    
        return view('items.index',compact('items'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create(){
        return view('items.create');
    }

    public function store(Request $request){
        
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
    
        $item = Item::create($request->all());

        event(new UserLogsEntry("Create item with ID#$item->id"));
     
        return redirect()->route('items.index')
        ->with('success','Item created successfully.');
    }


    public function show(Item $item)
    {
        return view('items.show',compact('item'));
    }

    public function edit(Item $item)
    {
        return view('items.edit',compact('item'));
    }

    public function update(Request $request, Item $item){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|integer',
            'quantity' => 'required|integer',
        ]);
    
        $item->update($request->all());

        event(new UserLogsEntry("Updated item with ID#$item->id"));
    
        return redirect()->route('items.index')
        ->with('success','Item updated successfully');

    }
    public function destroy(Item $item){
        $item->delete();
    
        event(new UserLogsEntry("Deleted item with ID#$item->id"));

        return redirect()->route('items.index')
        ->with('success','Item deleted successfully');
    }
}

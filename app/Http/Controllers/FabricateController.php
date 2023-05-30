<?php

namespace App\Http\Controllers;

use App\Models\Fabricate;
use Illuminate\Http\Request;

class FabricateController extends Controller
{
    
    public function index()
    {
        $fabricate = Fabricate::paginate(5);
     
        return view('fabricate.index',compact('fabricate'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('fabricate.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Title' => 'required',
            'Author' => 'required',
            'Summary' => 'required',
            'Genre' => 'required',
            'Cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
   
        $input = $request->all();
   
        if ($image = $request->file('Cover')) {
            $destinationPath = 'images/';
            $BookCover = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $BookCover);
            $input['Cover'] = "$BookCover";
        }
     
        Fabricate::create($input);
      
        return redirect()->route('fabricate')
            ->with('success','Story fabricated successfully.');
    }

    public function show(Fabricate $fabricate, $id)
    {
        $fabricate = Fabricate::find($id);
        return view('fabricate.show',compact('fabricate'));
        $fabricate->Content = nl2br($fabricate->Content);
    }

    public function edit(Fabricate $published, $id)
    {
        $fabricate = Fabricate::find($id);
        return view('fabricate.edit',compact('fabricate'));
    }

    public function update(Request $request, $id)
    {
        $fabricate = Fabricate::find($id);

        $request->validate([
            'Title' => 'required',
            'Author' => 'required',
            'Summary' => 'required',
            'Cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
   
        $input = request()->except(['_method', '_token']);

        if ($image = $request->file('Cover')) {
            $destinationPath = 'images/';
            $BookCover = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $BookCover);
            $input['Cover'] = "$BookCover";
        }else{
            unset($input['Cover']);
        }

        $fabricate->update($input);
     
        return redirect()->route('fabricate')
            ->with('success','Story Updated successfully');
    }

    public function destroy($id) {
        $fabricate = Fabricate::find($id);
        $fabricate->delete();
        return redirect('/fabricate');
    }


}

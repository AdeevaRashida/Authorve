<?php

namespace App\Http\Controllers;

use App\Models\Published;
use Illuminate\Http\Request;

class PublishedController extends Controller
{
    public function index()
    {
        $published = Published::paginate(5);
     
        return view('published.index',compact('published'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('published.create');
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
     
        Published::create($input);
      
        return redirect()->route('index')
            ->with('success','Book added successfully.');
    }

    // public function show(Published $published)
    // {
  
    //     return view('published.show',compact('published'));
    // }

    public function edit(Published $published, $id)
    {
        $published = Published::find($id);
        return view('published.edit',compact('published'));
    }

    public function update(Request $request, $id)
    {
        $published = Published::find($id);

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

        $published->update($input);
     
        return redirect()->route('index')
            ->with('success','Book Details Updated successfully');
    }

    public function destroy($id) {
        $published = Published::find($id);
        $published->delete();
        return redirect('/');
    }

}

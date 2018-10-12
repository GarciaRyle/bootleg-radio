<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Band;
use Illuminate\Support\Facades\Auth;
use Image;

class BandRegController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bands = Band::where('UserId', '=', Auth::user()->id)->get();
        return view('bands.profile', compact('bands'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'bandName'    =>  'required',
            'genre'    =>  'required',
            'bandDescription'     =>  'required',
        
        ]);
        $bands = new Band([
            'bandName'    =>  $request->get('bandName'),
            'userId'  => auth()->id(),
            'genre'     =>  $request->get('genre'),
            'bandDescription'     =>  $request->get('bandDescription'),
     
        ]);

        $bands->save();
        return redirect()->route('bands.profile')->with('success', 'Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bands = Band::find($id);
        return view('bands.edit', compact('bands', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'bandName'    =>  'required',
            'genre'    =>  'required',
            'bandDescription'     =>  'required',

        ]);
        $bands = Band::find($id);
        $bands->bandName = $request->get('bandName');
        $bands->genre = $request->get('genre');
        $bands->bandDescription = $request->get('bandDescription');
        $bands->save();
        return redirect()->route('bands.index')->with('success', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bands = Band::find($id);
        $bands->delete();
        return redirect()->route('bands.index')->with('success', 'Data Deleted');
    }
}

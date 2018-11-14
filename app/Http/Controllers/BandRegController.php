<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Band;
use App\Member;
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
        $members = Member::with('bands')->get();
        return view('bands.profile', compact('bands', 'members'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2()
    {
        $bands = Band::where('UserId', '=', Auth::user()->id)->get();
        return view('viewBanduser', compact('bands'));
    }

  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index3()
    {
        $bands = Band::where('UserId', '2', Auth::user()->id)->get();
        return view('viewBanduser', compact('bands'));
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
        if($request->hasFile('fileUpload')){
    		$fileUpload = $request->file('fileUpload');
    		$filename = time() . '.' . $fileUpload->getClientOriginalExtension();
    		Image::make($fileUpload)->resize(300, 300)->save( public_path('/uploads/bands/' . $filename ) );
    		$bands->fileUpload = $filename;
		} 

      
        $bands->save();

        $membersName = $request->memberName; //array 
        $membersPosition = $request->position; //array
        $memberBio = $request->bio; //array
        $membersPhoto = $request->file('photoUpload');
        $membersCount = count($membersName);
        

        
for($x = 0; $x < $membersCount; $x++){
    $members = new Member;

    $members->memberName = $membersName[$x];
    $members->position = $membersPosition[$x];
    $members->bio = $memberBio[$x];
    $members->bandId = $bands->id;
    
     if($request->hasFile('photoUpload')){
         $photoUpload = $membersPhoto[$x];
         $filename[$x] = time() . '.' . $photoUpload-> getClientOriginalExtension();
         Image::make($photoUpload)->resize(300, 300)->save( public_path('/uploads/members/' . $filename[$x] ) );
         $members->photoUpload = $filename[$x];
     }
    $members->save();
}
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
    public function edit($id) //show
    {
        $bands = Band::find($id);
        return view('bands.edit', compact('bands', 'id'));
        $members = Member::with('bands')->get();
        return view('bands.profile',compact('members'));    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) //edit
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
        return redirect()->to('bands')->with('success', 'Data Updated');
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

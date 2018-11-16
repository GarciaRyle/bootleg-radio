<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Band;
use App\Member;
use Illuminate\Support\Facades\Auth;
use Image;

class bandMemController extends Controller
{
    //
    

    public function index(){
        $members = Member::with('bands')->get();
        return view('bands.profile',compact('members'));
      }
  
      public function showCreatePage(){
          $bands = Band::all();
          return view('bands.AddBandMember', compact('bands'));

      }
      public function show($id){
        $member = Member::find($id); 
        $bands = Band::all(); 
        return view('bands.Memedit',compact('members', 'bands'));
      }
      public function store(Request $request){
//   dd($request->all());

        $newMember = new Member;
        $newMember->bandId = $request->bandId;
        $newMember->memberName = $request->memberName;
        $newMember->bio = $request->bio;
        $newMember->position = $request->position;
    

        if($request->hasFile('photoUpload')){
      $photoUpload = $request->file('photoUpload');
      $filename = time() . '.' . $photoUpload->getClientOriginalExtension();
      Image::make($photoUpload)->resize(300, 300)->save( public_path('/uploads/members/' . $filename ) );
      $newMember->photoUpload = $filename;
  }
  
  
        $newMember->save();
  
        return redirect()->back();
  
      }
      
      public function update(Request $request, $id){
         $member = Member::find($id);
         $member->bandId = $request->bandid;
         $member->memberName = $request->memberName;
         $member->bio = $request->bio;
         $member->position = $request->position;
         $member->save();
  
         return redirect()->back();
      }
      public function delete(Request $request){
          //dd($request->all());
          $id = $request->id;
          Member::destroy($id);
            return redirect()->to('bands.profile');
        }
  }
<?php

namespace App\Http\Controllers;
use App\models\album;
use App\models\photo;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class albumController extends Controller
{     public function index(){
	$albums =album::get();
	return view('album.index')->with('albums',$albums);
    //
}

 public function create(){
 	return view('album.create');
 }
 public function store (Request $request){
$this->validate( $request ,[
 'name'=>'required',

  'description'=>'required',
   'cover_image'=>'required|image'

]);

$filename=$request->file('cover_image')->getClientoriginalName();
$file= pathinfo($filename. PATHINFO_FILENAME);
$extension =$request->file('cover_image')->getClientoriginalExtension();
$filenamefinal=$filename .'_'.time().'.'.$extension;
$path=$request->file('cover_image')->storeAs('public/album_cover',$filenamefinal);

 $al= new album();  
$al->name=$request->input('name');
$al->description=$request->input('description');
$al->cover_image=$filenamefinal;
$al->save();
 return redirect('/album')->with('success', 'album add succsfully');
 }
 public function show($id){
 	 $photos=album::with('photos')->find($id);
 	
 	    return view('album.show')->with('album',$photos);
 }
 public function edit($id){
 	 $a =album::find($id);
 	  return view('album.edit')->with('album',$a);

 }
 public function update(Request $request,$id){
 	$this->validate( $request ,[
 'name'=>'required',

  'description'=>'required',
   'cover_image'=>'required|image'

]);

$filename=$request->file('cover_image')->getClientoriginalName();
$file= pathinfo($filename. PATHINFO_FILENAME);
$extension =$request->file('cover_image')->getClientoriginalExtension();
$filenamefinal=$filename .'_'.time().'.'.$extension;
$path=$request->file('cover_image')->storeAs('public/album_cover',$filenamefinal);

 $al= album::find($id);  
$al->name=$request->input('name');
$al->description=$request->input('description');
$al->cover_image=$filenamefinal;
$al->save();
 return redirect('/album')->with('success', 'album edit succsfully');
 }
  public function delete($id){
  	 $a=album::find($id);

  	 if(Storage::delete('public/album_cover/'.$a->cover_image))
  	 {
  	 	$a->delete();
  	 	return redirect('/')->with('success',' album deleted sucesssfully');
  	 }
  }
}

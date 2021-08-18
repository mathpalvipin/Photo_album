<?php

namespace App\Http\Controllers;
use App\models\photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class photoController extends Controller
{ public function create(int $album_id){
	return view('photo.create')->with('album_id',$album_id);
    //
}
public function store (Request $request){
$this->validate( $request ,[
 'title'=>'required',

  'description'=>'required',
   'photo'=>'required|image'

]);

$filename=$request->file('photo')->getClientoriginalName();
$file= pathinfo($filename. PATHINFO_FILENAME);
$extension =$request->file('photo')->getClientoriginalExtension();
$filenamefinal=$filename;
$path=$request->file('photo')->storeAs('public/album/'.$request->input('album_id'),$filenamefinal);

 $ph= new photo(); 
 $ph->album_id=$request->input('album_id');
$ph->title=$request->input('title');
$ph->description=$request->input('description');
$ph->size=$request->file('photo')->getSize();

$ph->photo=$filenamefinal;
$ph->save();
 return redirect('/album/'.$request->input('album_id'))->with('success', 'photo add succsfully');
 }

public function show($id){
 	 $photos=photo::find($id);
 	
 	    return view('photo.show')->with('photo',$photos);
 }

public function delete($id){
  $photo= photo::find($id);
  $id=$photo->album_id;
  if(Storage::delete('/public/album/'.$id .'/'.$photo->photo))
  {
  	$photo->delete();
  	return redirect('/album/'.$id)->with('success',' photo deletes sucessfully');
  }
}
public function edit($id){
	$p=photo::find($id);

	return view('photo.edit')->with('photo',$p);
}
public function update(Request $request, $id){
	$this->validate( $request ,[
 'title'=>'required',

  'description'=>'required',
   'photo'=>'required|image'

]);

$filename=$request->file('photo')->getClientoriginalName();
$file= pathinfo($filename. PATHINFO_FILENAME);
$extension =$request->file('photo')->getClientoriginalExtension();
$filenamefinal=$filename .'_'.time().'.'.$extension;
$path=$request->file('photo')->storeAs('public/album/'.$request->input('album_id'),$filenamefinal);

 $ph= photo::find($id); 
 $ph->album_id=$request->input('album_id');
$ph->title=$request->input('title');
$ph->description=$request->input('description');
$ph->size=$request->file('photo')->getSize();

$ph->photo=$filenamefinal;
$ph->save();
 return redirect('/album/'.$request->input('album_id'))->with('success', 'photo edit succsfully');
}
}

<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ArtworkController extends Controller
{
   public function index()
   {
      $artworks = Artwork::all();
      
      return response()->json([
         'status' => true,
         'artworks' => $artworks
      ]);
   }
   
   public function store(Request $request)
   {
      $artworks = new Artwork();
      $request->validate([
         "title" => "required|max:30",
         "author" => "required|max:30",
         "image" => "required|max:1024",
         "age" => "required|numeric",
         "stockNumber" => "required|max:20",
         "size" => "required" 
      ]);
      
      $filename = "";
      
      if($request->hasFile('image')){
         $filename = $request->file('image')->store('posts','public');
      }else{
         $filename = Null;
      }
      
      $artworks->title = $request->title;
      $artworks->author = $request->author;
      $artworks->image = $filename;
      $artworks->age = $request->age;
      $artworks->stockNumber = $request->stockNumber;
      $artworks->size = $request->size;
      
      $result = $artworks->save();
      
      if ($result) {
         return response()->json(['sucess'=>true]);
      }else{
         return response()->json(['sucess'=>false]);
      }
   }
   
   public function edit($id)
   {
      $artworks = Artwork::findOrFail($id);
      return response()->json($artworks);
   }
   
   public function update(Request $request, $id)
   {
      $artworks = Artwork::findOrFail($id);

      $destination = public_path("storage\\".$artworks->image);
      $filename = "";
      if($request->hasFile('new_image')){
         if(File::exists($destination)){
            File::delete($destination);
         }

         $filename = $request->file('new_image')->store('posts','public');
      }else{
         $filename = $request->image;
      }

      $artworks->title = $request->title;
      $artworks->author = $request->author;
      $artworks->image = $filename;
      $artworks->age = $request->age;
      $artworks->stockNumber = $request->stockNumber;
      $artworks->size = $request->size;
      
      $result = $artworks->save();
      if ($result) {
         return response()->json(['sucess'=>true]);
      }else{
         return response()->json(['sucess'=>false]);
      }

   }

   public function destroy($id)
   {
      $artworks = Artwork::findOrFail($id);

      $destination = public_path("storage\\".$artworks->image);
      if(File::exists($destination)){
         File::delete($destination);
      }
      $result = $artworks->delete();
      if ($result) {
         return response()->json(['sucess'=>true]);
      }else{
         return response()->json(['sucess'=>false]);
      }
   }
   
}

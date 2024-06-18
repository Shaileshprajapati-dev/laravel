<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function index()
     {
         $result['data']=Color::all();
       return view('admin/color',$result);
     }

     public function manage_color(Request $request ,$id='')
     {
         if($id>0){
             $result['data']=Color::where(['id'=>$id])->get();
         }else{
             $result['data']['color']='';
           //  $result['data']['status']='';
         }
         return view('admin/manage_color');
     }

     public function manage_color_process(Request $request)
     {
         // Validate the incoming request data
         $validatedData = $request->validate([
            // 'color' => 'required',
             'color' => 'required|unique:colors',
         ]);

         // Create a new instance of the Category model and save the data
         $model = new Color();
         $model->color = $request->input('color');
       //  $model->status = $request->input('status');
         $model->save();

         // Flash a success message to the session and redirect
         $request->session()->flash('message', 'color Inserted');
         return redirect('admin/color');
     }


    public function delete(Request $request , $id){
          $model=Color::find($id);
          $model->delete();
          $request->session()->flash('message', 'color Deleted');
          return redirect('admin/color');
    }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
         //
     }

     /**
      * Display the specified resource.
      *
      * @param  \App\Models\Category  $category
      * @return \Illuminate\Http\Response
      */
     public function show(Color $category)
     {
         //
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  \App\Models\Category  $category
      * @return \Illuminate\Http\Response
      */
     public function edit(Color $category)
     {
         //
     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  \App\Models\Category  $category
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, Color $category)
     {
         //
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  \App\Models\Category  $category
      * @return \Illuminate\Http\Response
      */
     public function destroy(Color $category)
     {
         //
     }
 }

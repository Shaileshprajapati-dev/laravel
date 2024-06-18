<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result['data']=Size::all();
      return view('admin/size',$result);
    }

    public function manage_size(Request $request ,$id='')
    {
        if($id>0){
            $result['data']=Size::where(['id'=>$id])->get();
        }else{
            $result['data']['size']='';
            $result['data']['status']='';
        }
        return view('admin/manage_size');
    }

    public function manage_size_process(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'size' => 'required',
            'status' => 'required|unique:sizes',
        ]);

        // Create a new instance of the Category model and save the data
        $model = new Size();
        $model->size = $request->input('size');
        $model->status = $request->input('status');
        $model->save();

        // Flash a success message to the session and redirect
        $request->session()->flash('message', 'size Inserted');
        return redirect('admin/size');
    }


   public function delete(Request $request , $id){
         $model=Size::find($id);
         $model->delete();
         $request->session()->flash('message', 'size Deleted');
         return redirect('admin/size');
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
    public function show(Size $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Size $category)
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
    public function update(Request $request, Size $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Size $category)
    {
        //
    }
}

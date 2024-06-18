<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result['data']=Category::all();
      return view('admin/category',$result);
    }

    public function manage_category(Request $request ,$id='')
    {
        if($id>0){
            $result['data']=Category::where(['id'=>$id])->get();
        }else{
            $result['data']['category_name']='';
            $result['data']['category_slug']='';
        }
        return view('admin/manage_category');
    }

    public function manage_category_process(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'category_name' => 'required',
            'category_slug' => 'required|unique:categories',
        ]);

        // Create a new instance of the Category model and save the data
        $model = new Category();
        $model->category_name = $request->input('category_name');
        $model->category_slug = $request->input('category_slug');
        $model->save();

        // Flash a success message to the session and redirect
        $request->session()->flash('message', 'Category Inserted');
        return redirect('admin/category');
    }


   public function delete(Request $request , $id){
         $model=Category::find($id);
         $model->delete();
         $request->session()->flash('message', 'Category Deleted');
         return redirect('admin/category');
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
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
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
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}

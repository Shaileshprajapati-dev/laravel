<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result['data']=Coupon::all();
      return view('admin/coupon',$result);
    }

    public function manage_coupon(Request $request ,$id='')
    {
        if($id>0){
            $result['data']=Coupon::where(['id'=>$id])->get();
        }else{
            $result['data']['title']='';
            $result['data']['code']='';
            $result['data']['value']='';
        }
        return view('admin/manage_coupon');
    }

    public function manage_coupon_process(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required',
            'code' => 'required|unique:coupons,code',
            'value' => 'required',
        ]);

        // Create a new instance of the Category model and save the data
        $model = new Coupon();
        $model->title = $request->input('title');
        $model->code = $request->input('code');
        $model->value = $request->input(' value');
        $model->save();

        // Flash a success message to the session and redirect
        $request->session()->flash('message', 'coupon Inserted');
        return redirect('admin/coupon');
    }


   public function delete(Request $request , $id){
         $model=Coupon::find($id);
         $model->delete();
         $request->session()->flash('message', 'coupon Deleted');
         return redirect('admin/coupon');
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function show(Coupon $coupon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function edit(Coupon $coupon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coupon $coupon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coupon $coupon)
    {
        //
    }
}

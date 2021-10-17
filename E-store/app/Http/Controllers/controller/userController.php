<?php

namespace App\Http\Controllers\controller;

use App\Http\Controllers\Controller;
use App\Models\ecommerce\customer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class userController extends Controller
{
    public $uploadPath = 'uploads/user';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = customer::get();
        return view('admin.user.index', compact('user'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fileName = strtotime(Carbon::now());
        if($request->file('image')){
            $fileName = $fileName.".".$request->file('image')->extension();
            $uploadPath = (public_path($this->uploadPath."/".$fileName));
            move_uploaded_file($request->file('image'), $uploadPath);
        }
        $user = new customer();
        $user -> image =$fileName;
        $user -> product_price =$request->get('product_price');
        $user -> product_name =$request->get('product_name');
        $user -> product_mark =$request->get('product_mark');
        $user -> save();
        return redirect()->route('user.index');

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
        $user = customer::find($id);
         return view('admin.user.edit', compact('user'));
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
        $fileName = strtotime(Carbon::now());
        if($request->file('image')){
            $fileName = $fileName.".".$request->file('image')->extension();
            $uploadPath = (public_path($this->uploadPath."/".$fileName));
            move_uploaded_file($request->file('image'), $uploadPath);
        }
        $user = customer::find($id);
        $user -> image =$fileName;
        $user -> product_price =$request->get('product_price');
        $user -> product_name =$request->get('product_name');
        $user -> product_mark =$request->get('product_mark');
        $user -> save();
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $user = customer::find($id);
        if(!empty($user)){
            $user->delete();
            return redirect()->route('user.index');
        }
    }
}

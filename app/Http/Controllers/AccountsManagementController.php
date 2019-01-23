<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;



class AccountsManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function profile()
    {
        return view('auth.profile');
    }

    public function profile_avatar_post( Request $request)
    {
        if($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/avatars/' . $filename));
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        return view('auth.profile');

    }
    public function profile_cover_post( Request $request)
    {
        if ($request->hasFile('cover')) {
            $cover = $request->file('cover');
            $filename = time() . '.' . $cover->getClientOriginalExtension();
            Image::make($cover)->save(public_path('/uploads/covers/' . $filename));
            $user = Auth::user();
            $user->cover = $filename;
            $user->save();
        }

        return redirect(route('profile'));
    }
    public function inventory_post()
    {
        $inventory = new stores_inventory(Input::all());
        $inventory->save();
        return redirect(route('inventory'));
    }
    public function requisitions_post()
    {
        $inventory = new stores_requisitions(Input::all());
        $inventory->save();
        return redirect(route('requisitions'));
    }
    public function suppliers_post(){
        $store_supplier = new stores_suppliers(Input::all());
        $store_supplier->save();
        return redirect(route('suppliers'));
    }
    public function requests_post(){
        $store_request = new stores_requests(Input::all());
        $store_request->save();
        return redirect(route('requests'));
    }
}

<?php

namespace App\Http\Controllers;

use App\recruitments_form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class RecruitmentsFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
     * @param  \App\recruitments_form  $recruitments_form
     * @return \Illuminate\Http\Response
     */

    public function recruitment()
    {
        $recruitment_results =DB::table('recruitments_form') ->latest() ->get();
        return view('departments.administration.human_resource.recruitment',[
            'recruitment_results'=>$recruitment_results
        ]);
    }
    public function recruitments_post()
    {
        $recruitment = new recruitments_form(Input::all());
        $recruitment->save();
        return redirect(route('recruitment'));

    }



    public function show(recruitments_form $recruitments_form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\recruitments_form  $recruitments_form
     * @return \Illuminate\Http\Response
     */
    public function edit(recruitments_form $recruitments_form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\recruitments_form  $recruitments_form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, recruitments_form $recruitments_form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\recruitments_form  $recruitments_form
     * @return \Illuminate\Http\Response
     */
    public function destroy(recruitments_form $recruitments_form)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $companies = Company::withCount('companyBranch')->orderBy('id','desc')->paginate(21);
        return response()->view('essam.company.index' , compact('companies'));
        // $infos = Company::all();

        // foreach($infos as $info){
        //     echo $info->name . "||" . $info->email . "<br>" ;
        // }
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

    // for restore the trashed items
    public function restore($id){
        $infos = Company::onlyTrashed()->findOrFail($id)->restore();
    }

    // to delete the item perfectly
    public function force($id){
        $infos = Company::findOrFail($id)->forceDelete();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $companies = Company::findOrFail($id);
        return response()->view('essam.company.show' , compact('companies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $companies = Company::findOrFail($id);
        return response()->view('essam.company.edit' , compact('companies'));
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $companies = Company::destroy($id);

    }
}

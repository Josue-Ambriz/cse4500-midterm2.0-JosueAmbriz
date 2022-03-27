<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manufacturer;

class ContactInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactinfos = Manufacturer::all();
        return view('contactinfos', compact('contactinfos'));
    }

   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contactinfos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validated = $request->validate([ 
           'sales_name' => 'required',
           'sales_email' => 'required',
           'sales_number' => 'required',
           'tech_name' => 'required',
           'tech_email' => 'required',
           'tech_number' => 'required',
        ]);
        
       $contactinfo = ContactInfo::create([
            'sales_name' => $request->sales_name,
            'sales_email' => $request->sales_email,
            'sales_number' => $request->sales_number,
            'tech_name' => $request->tech_name,
            'tech_email' => $request->tech_email,
            'tech_number' => $request->tech_number,
        ]);
        
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contactinfo = ContactInfo::find($id);
        return view('contactinfos.show',compact('contactinfo'));
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
}
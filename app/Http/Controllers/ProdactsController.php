<?php

namespace App\Http\Controllers;

use App\Models\prodact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProdactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     //
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Prodacts.prodact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
         
     */


     
   
       

   
    
    public function store(Request $request)
    {
        
        $roles = [

            'name' => ['required', 'string', 'max:255'],
            'prise' => ['required', ' numeric', 'min:6'],
            'store' => ['required', 'numeric', 'min:6'],
            'country' => ['required', 'string','max:20'],
        ];

        $validtour = Validator::make($request->all(), $roles , [

            'name.required' => __('validaion.name required'),
            'prise.required' => __('validaion.prise required'),
            'store.required' => __('validaion.store required'),
            'country.required' => __('validaion.country required'),


        ]);
            if($validtour->fails()){
                return redirect()->back()->withErrors($validtour)->withInput($request->all());

            }




        prodact::create([
            "name" => $request->name,
            "prise" => $request->prise,
            "store" => $request->store,
            "country" => $request->country,

        ]);

        return redirect()->back()->with(['secs' => 'Good']);
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
}

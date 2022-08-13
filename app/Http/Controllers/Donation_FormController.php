<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Category;
use App\Models\Package;
use Illuminate\Http\Request;


class Donation_FormController extends Controller
{


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $donations = Package::all();

        $city = City::all();
        $category = Category::all();
        return view('pages.donation_form',compact('city','category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            $input = $request->all();

            //Validate the input
            $request->validate([

               'doner_name'=> 'required',
               'phone_number'=> 'required',
               'city_id'=> 'required',
               'products_number'=> 'required',
               ]);

            //    //Create a new donation in the database
            //    //$request->all(): Retreiving all input data
            //    Package::create($request->all());




            if($request->file('image')){
                $file= $request->file('image');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('Image'), $filename);
                $input['image'] = "$filename";

            }


            Package::create($input);

                      //Redirect the user and send friendly message
                          return redirect()->route('donations.create')
                        ->with('donation','Your donation is pending until approval.');

       }
    }


}

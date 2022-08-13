<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    

    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */


    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phonenumber' => ['required', 'max:10', 'min:10'],
            'image'=>['required'],
            'logo'=>['required'],
            'city_id'=>['required']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
       // $imageName = time().'-'.$request->post('title').'-'.$request->file('image')->extension();

        $filename ='';
        $logoname ='';
        if(request()->file('image')) {
            $file = request()->file('image');
            $filename = time().'-'.request()->post('name').'1-.'.request()->file('image')->extension();
            $file->move('image',$filename);
        }


        if(request()->file('logo')) {
            $logo = request()->file('logo');
            $logoname =time().'-'.request()->post('name').'2-.'.request()->file('logo')->extension();
            $logo->move('image',$logoname);
        }


        return User::create([

            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phonenumber' => $data['phonenumber'],
            'city_id' => $data['city_id'],
            'image'=>$filename,
            'logo'=>$logoname,

        ]);
    }
    public function index()
    {
        $cities = City::all();
        return view('auth.register',compact('cities'));
    }
}

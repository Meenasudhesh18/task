<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Picture;
use Illuminate\Support\Str;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('image');
    }
    
      

     public function store(Request $request)

    {

        $this->validate($request, [

                'images' => 'required',
                'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        
        if($request->hasfile('images'))
         {

            foreach($request->file('images') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/uploads/', $name);  
                $data[] = $name;  
            }
         }

         $form= new Picture();
         $form->images=json_encode($data);
         
        
        $form->save();

        return back()->with('success', 'Your images has been successfully');
    }


}

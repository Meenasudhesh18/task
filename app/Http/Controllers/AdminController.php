<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\User;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $data = Admin::all();
        return view('bookUpload');
            return view('bookDisplay',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bookUpload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'upload' => 'required',
        ]);

        $data= $this->excelUpload($request);
        $data= new Admin();
        $data->upload = request('upload');
        $data->save();
        return redirect('/book-upload');
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
       return view('bookUpload');
        
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
        $data= Admin::find($id);
        $data->upload = request('upload');
        $data->save();
        return redirect('/book-upload');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data= Admin::find($id);
        $data->delete();
    }

    public function excelUpload(Request $request) {
    $this->validate($request, [
      'upload' => 'required|file|mimes:xlsx',
    ]);

    if ($request->hasFile('upload')) {
        $upload = $request->file('upload');
        $name = time().'.'.$upload->getClientOriginalExtension();
        $destinationPath = public_path('/excel');
        $upload->move($destinationPath, $name);
        return back()->with('success','excel Upload successfully');
    }
}
}

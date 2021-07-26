<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddressbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $addbook = DB::table('addressbook')->paginate(10);
        
        return view('home', ['addbook'=>$addbook]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
            $validate = $request->validate([
                'name'  => 'required',
                'email' => 'required',
                'mobile'=> 'required',
                'fname' => 'required',
                'add'   => 'required',
                'city'  => 'required',
                'state' => 'required',
                'country'=> 'required',
                'pincode'=> 'required',
            ]); 

            DB::table('addressbook')->insert([
                'name'  => $request->name,
                'email'  => $request->email,     
                'mobile'=> $request->mobile,
                'fname' => $request->fname,
                'add'   => $request->add,
                'city'  => $request->city,
                'state' => $request->state,
                'country'=> $request->country,
                'pincode'=> $request->pincode,
            ]);

            return redirect(route('home'))->with('status', 'Student Added !!');

            // return view('create')->with('status','New Address Successfully Added !! ');
            
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
    public function show()
    {
        return view('create');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function display()
    {
        $addbook = DB::table('addressbook')->paginate(10);
        return view('display',['addbook'=>$addbook]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function change()
    {
            $addbook = DB::table('addressbook')->paginate(10);
            return view('edit',['addbook'=>$addbook])->with('status', 'Student Updated !!');
    }
    public function edit($id)
    {
            $addbook = DB::table('addressbook')->find($id);
            return view('editform',['addbook'=>$addbook]);
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
        DB::table('addressbook')->where('id', $id)->update([
                'name'  => $request->name,
                'email'  => $request->email,     
                'mobile'=> $request->mobile,
                'fname' => $request->fname,
                'add'   => $request->add,
                'city'  => $request->city,
                'state' => $request->state,
                'country'=> $request->country,
                'pincode'=> $request->pincode,
        ]);
        return redirect(route('change'))->with('status', 'Student Updated !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $addbook = DB::table('addressbook')->paginate(10);
        return view('deleteForm',['addbook'=>$addbook]);
    }

    public function destroy1($id)
    {
        DB::table('addressbook')->where('id', $id)->delete();
        $addbook = DB::table('addressbook')->paginate(10);
        // return view('deleteForm' ,['addbook'=>$addbook])->with('status', 'Record Successfuly Deleted !!');
        return redirect(route('home'))->with('status', 'Student Updated !!');

    }
}

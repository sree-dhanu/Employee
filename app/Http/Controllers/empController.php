<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\emp_reg;

class empController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }
    public function empregAction(Request $request)
    {
        $empname=$request->input('empname');
        $dob=$request->input('dob');
        $gender=$request->input('gender');
        $address=$request->input('address');
        $email=$request->input('empmail');
        $contact=$request->input('phn');
        $designation=$request->input('desig');
        $username=$request->input('uname');
        $password=$request->input('passwd');


        $data=[
            'empname'=>$empname,
            'dob'=>$dob,
            'gender'=>$gender,
            'address'=>$address,
            'email'=>$email,
            'phone'=>$contact,
            'designation'=>$designation,
            'username'=>$username,
            'password'=>$password
        ];
        emp_reg::insert($data);
        return redirect('/emplogin');

    }
    public function emplogin()
    {
        return view('emplogin');
    }
    public function emploginAction(Request $request)
    {
        $username=$request->input('user');
        $password=$request->input('pass');

        $result=emp_reg::where('username',$username)->where('password',$password)->first();
        if(isset($result))
        {
            $request->session()->put(array('sessid'=>$result->id));
            return redirect('/emprofile');
        }
        else{
            return redirect('/emplogin')->with('error',"Invalid username or password");
        }
    }
    public function emprofile()
    {
        $data['empdetail']=emp_reg::get();
        return view('emprofile',$data);
    }
    public function empprofiledit($id)
    {
        $data1['empdata']=emp_reg::where('id',$id)->get();
        return view('empprofiledit',$data1);
    }
    public function emprofileupdate(Request $req,$id)
    {
        $empname=$req->input('empname');
        $dob=$req->input('dob');
        $gender=$req->input('gender');
        $address=$req->input('address');
        $email=$req->input('empmail');
        $phone=$req->input('phn');
        $designation=$req->input('desig');
        $user=$req->input('uname');
        $pass=$req->input('passwd');

       $data=[ 
        'empname'=>$empname,
        'dob'=>$dob,
        'gender'=>$gender,
        'address'=>$address,
        'email'=>$email,
        'phone'=>$phone,
        'designation'=>$designation,
        'username'=>$user,
        'password'=>$pass
        ];
        emp_reg::where('id',$id)->update($data);
        return redirect('/emprofile');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function empprofildelete($id)
    {
        emp_reg::where('id',$id)->delete();
        return redirect('/emprofile');
    }
    public function logout(Request $req)
    {
        $req->session()->forget('sessid');
        return redirect('/emplogin');

    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

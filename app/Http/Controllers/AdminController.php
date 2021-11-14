<?php

namespace App\Http\Controllers;

use App\Admin;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.login');
    }

    public function admin(Request $request)
    {
        $admin_data = $request->input();
        //dd($admin_data);
        $request->session()->put('email', $admin_data['admin_email']);
        $email_login = $request->post('admin_email');
        $password = $request->post('admin_pass');
        
        $admin_login = new Admin();
        $user_validate = $admin_login
            ->where('email', '=', $email_login)
            ->where('password', '=', $password)
            ->count();
        //dd($user_validate);
        if ($user_validate == 1) {
            return redirect('/admin/userview');
        } else {
            return redirect('/admin')->withErrors('Acount does not Exist');
        }

    }
    public function userview()
    {
        $users = User::all();
        //dd($users);
        return view('admin.userview',['users' => $users]);
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
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $selecteUser = User::where('id', $id)->first();

        $selecteUser->delete();
        return redirect('/admin/userview');
    }
}

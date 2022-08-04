<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class FrontController extends Controller
{
    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            session(['user' => Auth::user()]);
            return redirect('/admin/dashboard');
        }else {
            return redirect('/');
        }

        
    }

    public function register(Request $request)
    {
            $email = session('email');
            $role=User::where('email',$email)->first();

            if($role->role  == 'Administrateur'){
                if ($request->isMethod('post')) {
                    $data = $request->all();
                    if ($data['password'] == $data['cpassword']) {
                        if (!User::where(['email' => $data['email']])->first() && !User::where(['name' => $data['name']])->first() ) {
                            $newAdmin = new User;
                            $newAdmin->email = $data['email'];
                            $newAdmin->role = $data['role'];
                            $newAdmin->password = bcrypt($data['password']);
                            $newAdmin->name=$data['name'];
                            $newAdmin->save();
                            return redirect('/admin/new-user')->with('flash_message_success', 'Nouvel utilisateur ajouté avec succès!');
                        }
                        return back()->with('flash_message_error', 'Cet utilisateur est déjà utilisé!');
                    }
                    return back()->with('flash_message_error', 'Désolé! Mots de passes non identiques!');
                }
                return view('register')->with(compact('email','role'));

            }else{
                return view('error.error-404');
            }
 
    }

    public function index()
    {
        return view('login');
    }

    public function dashboard () {
        return view('layouts.layout_design');
    }

    public function error404(Request $request)
    {
        return view('error.error-404');
    }

    public function error500(Request $request)
    {
        return view('error.error-500');
    }
    
    public function viewAdmins(Request $request)
    {
        $email = session('email');
        $role=User::where('email',$email)->first();

        if($role->role  == 'Administrateur'){
            $email = session('email');
            $adminsList = DB::table('users')->get();
            return view('admin.all_admin')->with(compact('adminsList', 'email','role'));
        }else{
            return view('error.error-404');
        }

    }

    public function logout()
    {
       
        Session::flush();
        return view('/');
    }
 
}

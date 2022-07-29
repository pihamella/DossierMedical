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
        if ($request->isMethod('post')) {
            $data = $request->input();
            $connecte=User::where(['email' => $data['email']])->first();
            if ($connecte) {
                $currentAdmin = User::where(['email' => $data['email']])->first();
                if (Hash::check($data['password'], $currentAdmin->password)) {
                        session(['id' => $currentAdmin->id,
                        'email' => $currentAdmin->email]);
                        return redirect('/admin/dashboard');
                    
            } else {
                return redirect()->back()->with('flash_message_error', 'Email invalide! Veuillez réessayer');
            }
        }
        else {
            return redirect()->back()->with('flash_message_error', 'Email invalide! Veuillez réessayer');
        }
        }
        return view('login');
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

    public function index(Request $request)
    {
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
 
}

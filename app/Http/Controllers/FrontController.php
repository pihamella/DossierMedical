<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\Models\User;
use App\Models\Admin;
use App\Models\Paris;
use App\Models\Paiement;
use App\Models\MatchModel;
use App\Models\ChargeWallet;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Helpers\HelperFunctions;
use App\Models\WithdrawalWallet;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class FrontController extends Controller
{
    public function index(Request $request)
    {
        
        return view('layouts.layout_design');
    }
    
 
}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CostSheet;
use App\Models\User;
use Illuminate\Http\Request;

class SecondaryHomeController extends Controller
{
    /**
     * DASHBOARD INDEX 
     */
    public function homeIndex(){
        $totalUsers = User::count();
        $userPainding = User::where('status', 0)->count();
        $addAmount =  CostSheet::all()->sum('add_amout');
        $costAmount =  CostSheet::all()->sum('cost_amout');
        $availableAmount = $addAmount - $costAmount; 
        return view('Admin.home.secondaryHome',compact('totalUsers','userPainding','addAmount','costAmount','availableAmount'));
    }
}

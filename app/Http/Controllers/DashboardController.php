<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\categorie;
use App\Models\task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $CompletedTask = task::where('user_id', Auth::user()->id)->where('status', 'completed')->count();

        $UnfinishedTask = task::where('user_id', Auth::user()->id)->where('status','in_progress')->count();

        $TotalTask = task::where('user_id',Auth::user()->id)->count();

        $TotalCategory = categorie::where('user_id', Auth::user()->id)->count();


        return view('Page.home',compact('CompletedTask','UnfinishedTask','TotalTask','TotalCategory'));
    }
}

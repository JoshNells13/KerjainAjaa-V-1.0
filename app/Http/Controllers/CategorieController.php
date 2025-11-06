<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\categorie;
use App\Models\task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategorieController extends Controller
{

    public function index()
    {

        $Category = Categorie::withCount('task')
            ->where('user_id', Auth::id())
            ->get();

        return view('Page.Category', compact('Category'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        categorie::create([
            'user_id' => $request->user()->id,
            'name' => $request->name
        ]);


        return redirect()->route('ShowCategoryPage');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $Category = categorie::find($id);

        $Category->update([
            'name' => $request->name
        ]);


        return redirect()->route('ShowCategoryPage');
    }


     public function destroy($id){
        $Category = categorie::find($id);

        $Category->delete();

        return redirect()->route('ShowCategoryPage');
    }
}

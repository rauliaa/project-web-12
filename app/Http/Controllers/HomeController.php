<?php
// app/Http/Controllers/HomeController.php
namespace App\Http\Controllers;

use App\Models\Resep;

class HomeController extends Controller
{
    public function index()
    {
        return view('templates.index'); 
    }

    public function home()
    {
        $featuredRecipes = Resep::where('is_featured', true)->get();
        return view('component.home', compact('featuredRecipes'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use App\Imports\ProduitImport;
use Maatwebsite\Excel\Facades\Excel;

class ProduitController extends Controller
{
    //
    public function create()
    {

        return view('produits.create');
    }

    public function store(Request $request)
    {
        Excel::import(new ProduitImport(), $request->file('file'));
        return redirect()->route('produits.index');
    }

    public function index()
    {
        // $produits = Produit::with('categories')->get();
        $produits = Produit::all();
        return view('produits.index', compact('produits'));
    }
}

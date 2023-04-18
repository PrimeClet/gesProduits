<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProduitStorerequest;
use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProduitStorerequest $request)
    {
        $slug = Str::slug($request->input('produit'));
        Produit::create([
            'nom' => $request->input('produit'),
            'slug' => $slug,
            'marque' => $request->input('marque'),
            'description' => $request->input('description'),
            'categorie_id' => $request->input('categorie'),
        ]);
        return redirect()->route('dashboard')->with('success', "L'article a été crée");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug, Produit $produit)
    {
        return view('dashboard.view-product')->with('data', compact('produit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug, Produit $produit)
    {
        $categories = Categorie::all();
        return view('dashboard.modify-product')->with('data', compact('produit', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProduitStorerequest $request, string $slug, Produit $produit)
    {
        if ($produit->nom == $request->input('produit')) {
            Produit::where('id', $produit->id)
                ->update([
                    'marque' => $request->input('marque'),
                    'description' => $request->input('description'),
                    'categorie_id' => $request->input('categorie'),
                ]);
            return redirect()->route('dashboard')->with('success', "L'article a été Modifié");

        } else {
            $slug = Str::slug($request->input('produit'));
            Produit::where('id', $produit->id)
                    ->update([
                        'nom' => $request->input('produit'),
                        'slug' => $slug,
                        'marque' => $request->input('marque'),
                        'description' => $request->input('description'),
                        'categorie_id' => $request->input('categorie'),
                    ]);
            return redirect()->route('dashboard')->with('success', "L'article a été Modifié");

        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug, Produit $produit)
    {
        Produit::destroy($produit->id);
        return redirect()->route('dashboard')->with('danger', "L'article a été Supprimé");
    }
}

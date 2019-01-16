<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Analista;

class AnalistaController extends Controller
{
    public function index()
    {
        return Analista::all();
    }

    public function show($id)
    {
        return Analista::find($id);
    }

    public function store(Request $request)
    {
        return Analista::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $analista = Analista::findOrFail($id);
        $analista->update($request->all());
        return $analista;
    }

    public function delete(Request $request, $id)
    {
        $analista = Analista::findOrFail($id);
        $analista->delete();
        return 204;
    }
}

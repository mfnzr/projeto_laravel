<?php

namespace App\Http\Controllers\Site;


use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateExplorer;
use App\Models\Explorer;
use Illuminate\Http\Request;

class ExploradoresController extends Controller
{
    public function index(Explorer $explorer)
    {
        $explorers = $explorer->all();

        return view('site/exploradores/index', compact('explorers')
    );

    }


    public function show(string|int $id)
    {
        if(!$explorer = Explorer::find($id)) {
            return back();
        }

        return view('site/exploradores/show', compact('explorer'));
    }


    public function create()
    {
        return view('site/exploradores/create');
    }


    public function store(Request $request, Explorer $explorer)
    {

        $validatedData = $request->validate([
            'id' => '|unique:explorers',
            'nome' => 'required|string|unique:explorers',
            'idade' => 'required|integer',
            'latitude' => 'required|integer',
            'longitude' => 'required|integer',
            'inventario' => 'nullable|string',
        ]);

        $inventario = $request->inventario ?? 'vazio';

        $data = $request->all();

        $explorer->create($data);

        return redirect()->route('exploradores.index');
    }


    public function edit(Explorer $explorer, string|int $id)
    {
        if(!$explorer = $explorer->where('id',$id)->first()) {
            return back();
        }

        return view('site/exploradores.edit', compact('explorer'));
    }


    public function update(Request $request, Explorer $explorer, string|int $id)
    {
        if(!$explorer = $explorer->find($id)) {
            return back();
        }

        $explorer->update($request->only([
            'latitude',
            'longitude',
            'inventario'
        ]));

        $explorer->latitude = $request->latitude;
        $explorer->longitude = $request->longitude;
        $explorer->save();

        return redirect()->route('exploradores.index');
    }


    public function destroy(Explorer $explorer, string|int $id)
    {
        if(!$explorer = Explorer::find($id)->delete()) {
            return back();
        }

        return redirect()->route('exploradores.index');
    }
}

<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateExplorer;
use App\Models\Explorer;
use App\Models\Item;
use Illuminate\Http\Request;

use function Laravel\Prompts\error;

class ItensController extends Controller
{

    public function show(string|int $id)
    {
        if(!$item = Item::find($id)) {
            return back();
        }

        return view('site/itens/show', compact('item'));
    }

    public function create()
    {
    return view('itens.create');
    }


    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nome' => 'required|string',
            'valor' => 'required|integer',
            'latitude' => 'required|integer',
            'longitude' => 'required|integer',
            'inventario' => 'nullable|string',
        ]);

        Item::create([
            'nome' => $request->nome,
            'valor' => $request->valor,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'inventario' => $request->inventario,
        ]);

        return redirect()->route('exploradores.index');

    }

    public function edit($id)
    {
        // if($item->explorador_id != $id) {
        //     return error('Item não encontrado');
        // }

        $explorer = Explorer::find($id);
        return view('site/itens/edit', compact('explorer'));
    }

    public function update(Request $request, Item $item)
    {

        $item->update($request->only([
            'inventario'
        ]));

        $item->inventario = $request->inventario;
        $item->save();

        return redirect()->route('exploradores.index');
    }
}

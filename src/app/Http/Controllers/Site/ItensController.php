<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateItensRequest;
use App\Models\Explorer;
use App\Models\Item;
use Illuminate\Http\Request;

use function Laravel\Prompts\error;

class ItensController extends Controller
{
    public function show($id)
    {
        $item = Item::find($id);
        return view('site/itens/show', compact('item'));
    }

    public function create(Explorer $explorer)
    {
        return view('site/itens/create', compact('explorer'));
    }


    public function store(StoreUpdateItensRequest $request, Explorer $explorer)
    {
        $data = $request->all();
        $data['explorer_id'] = $explorer->id;
        Item::create($data);

        return redirect()->route('exploradores.index');

    }

    public function edit($id)
    {

        $explorer = Explorer::find($id);
        return view('site/itens/edit', compact('explorer'));
    }

    public function update(StoreUpdateItensRequest $request, Item $item, Explorer $explorer)
    {

        $item->update($request->only([
            'inventario'
        ]));

        $explorer->inventario = array_merge($explorer->inventario, [$request->item]);
        // $item->inventario = $request->inventario;
        // $item->save();
        $explorer->save();

        return redirect()->route('exploradores.index');
    }
}

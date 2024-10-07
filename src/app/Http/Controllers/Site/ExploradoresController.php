<?php

namespace App\Http\Controllers\Site;


use App\Http\Controllers\Controller;
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

    public function create()
    {
        return view('site/exploradores/create');
    }

    public function store(Request $request, Explorer $explorer)
    {
        $data = $request->all();

        $explorer = $explorer->create($data);

        return redirect()->route('exploradores.index');
    }
}

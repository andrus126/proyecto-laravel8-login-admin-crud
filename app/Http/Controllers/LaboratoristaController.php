<?php

namespace App\Http\Controllers;

use App\Models\Laboratorista;
use Illuminate\Http\Request;

/**
 * Class LaboratoristaController
 * @package App\Http\Controllers
 */
class LaboratoristaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laboratoristas = Laboratorista::paginate();

        return view('laboratorista.index', compact('laboratoristas'))
            ->with('i', (request()->input('page', 1) - 1) * $laboratoristas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $laboratorista = new Laboratorista();
        return view('laboratorista.create', compact('laboratorista'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Laboratorista::$rules);

        $laboratorista = Laboratorista::create($request->all());

        return redirect()->route('laboratoristas.index')
            ->with('success', 'Laboratorista created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $laboratorista = Laboratorista::find($id);

        return view('laboratorista.show', compact('laboratorista'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $laboratorista = Laboratorista::find($id);

        return view('laboratorista.edit', compact('laboratorista'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Laboratorista $laboratorista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laboratorista $laboratorista)
    {
        request()->validate(Laboratorista::$rules);

        $laboratorista->update($request->all());

        return redirect()->route('laboratoristas.index')
            ->with('success', 'Laboratorista updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $laboratorista = Laboratorista::find($id)->delete();

        return redirect()->route('laboratoristas.index')
            ->with('success', 'Laboratorista deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Archivo;
use Illuminate\Http\Request;

/**
 * Class ArchivoController
 * @package App\Http\Controllers
 */
class ArchivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $archivos = Archivo::paginate();

        return view('archivo.index', compact('archivos'))
            ->with('i', (request()->input('page', 1) - 1) * $archivos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $archivo = new Archivo();
        return view('archivo.create', compact('archivo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Archivo::$rules);

        $archivo = Archivo::create($request->all());

        return redirect()->route('archivos.index')
            ->with('success', 'Archivo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $archivo = Archivo::find($id);

        return view('archivo.show', compact('archivo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $archivo = Archivo::find($id);

        return view('archivo.edit', compact('archivo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Archivo $archivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Archivo $archivo)
    {
        request()->validate(Archivo::$rules);

        $archivo->update($request->all());

        return redirect()->route('archivos.index')
            ->with('success', 'Archivo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $archivo = Archivo::find($id)->delete();

        return redirect()->route('archivos.index')
            ->with('success', 'Archivo deleted successfully');
    }
}

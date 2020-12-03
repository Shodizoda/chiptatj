<?php

namespace App\Http\Controllers;

use App\Models\Autobusho;
use Illuminate\Http\Request;

/**
 * Class AutobushoController
 * @package App\Http\Controllers
 */
class AutobushoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autobusho = Autobusho::paginate();

        return view('autobusho.index', compact('autobusho'))
            ->with('i', (request()->input('page', 1) - 1) * $autobusho->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $autobusho = new Autobusho();
        return view('autobusho.create', compact('autobusho'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Autobusho::$rules);

        $autobusho = Autobusho::create($request->all());

        return redirect()->route('autobusho.index')
            ->with('success', 'Autobusho created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $autobusho = Autobusho::find($id);

        return view('autobusho.show', compact('autobusho'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $autobusho = Autobusho::find($id);

        return view('autobusho.edit', compact('autobusho'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Autobusho $autobusho
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Autobusho $autobusho)
    {
        request()->validate(Autobusho::$rules);

        $autobusho->update($request->all());

        return redirect()->route('autobusho.index')
            ->with('success', 'Autobusho updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $autobusho = Autobusho::find($id)->delete();

        return redirect()->route('autobusho.index')
            ->with('success', 'Autobusho deleted successfully');
    }
}

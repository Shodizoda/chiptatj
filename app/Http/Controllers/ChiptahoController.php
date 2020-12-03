<?php

namespace App\Http\Controllers;

use App\Models\Chiptaho;
use Illuminate\Http\Request;

/**
 * Class ChiptahoController
 * @package App\Http\Controllers
 */
class ChiptahoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chiptaho = Chiptaho::paginate();

        return view('chiptaho.index', compact('chiptaho'))
            ->with('i', (request()->input('page', 1) - 1) * $chiptaho->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chiptaho = new Chiptaho();
        return view('chiptaho.create', compact('chiptaho'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Chiptaho::$rules);

        $chiptaho = Chiptaho::create($request->all());

        return redirect()->route('chiptaho.index')
            ->with('success', 'Chiptaho created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chiptaho = Chiptaho::find($id);

        return view('chiptaho.show', compact('chiptaho'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chiptaho = Chiptaho::find($id);

        return view('chiptaho.edit', compact('chiptaho'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Chiptaho $chiptaho
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chiptaho $chiptaho)
    {
        request()->validate(Chiptaho::$rules);

        $chiptaho->update($request->all());

        return redirect()->route('chiptaho.index')
            ->with('success', 'Chiptaho updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $chiptaho = Chiptaho::find($id)->delete();

        return redirect()->route('chiptaho.index')
            ->with('success', 'Chiptaho deleted successfully');
    }
}

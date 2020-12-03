<?php

namespace App\Http\Controllers;

use App\Models\Noziron;
use Illuminate\Http\Request;

/**
 * Class NozironController
 * @package App\Http\Controllers
 */
class NozironController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noziron = Noziron::paginate();

        return view('noziron.index', compact('noziron'))
            ->with('i', (request()->input('page', 1) - 1) * $noziron->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $noziron = new Noziron();
        return view('noziron.create', compact('noziron'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Noziron::$rules);

        $noziron = Noziron::create($request->all());

        return redirect()->route('noziron.index')
            ->with('success', 'Noziron created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $noziron = Noziron::find($id);

        return view('noziron.show', compact('noziron'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $noziron = Noziron::find($id);

        return view('noziron.edit', compact('noziron'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Noziron $noziron
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Noziron $noziron)
    {
        request()->validate(Noziron::$rules);

        $noziron->update($request->all());

        return redirect()->route('noziron.index')
            ->with('success', 'Noziron updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $noziron = Noziron::find($id)->delete();

        return redirect()->route('noziron.index')
            ->with('success', 'Noziron deleted successfully');
    }
}

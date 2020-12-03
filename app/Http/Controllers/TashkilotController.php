<?php

namespace App\Http\Controllers;

use App\Models\Tashkilot;
use Illuminate\Http\Request;

/**
 * Class TashkilotController
 * @package App\Http\Controllers
 */
class TashkilotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tashkilots = Tashkilot::paginate();

        return view('tashkilot.index', compact('tashkilots'))
            ->with('i', (request()->input('page', 1) - 1) * $tashkilots->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tashkilot = new Tashkilot();
        return view('tashkilot.create', compact('tashkilot'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tashkilot::$rules);

        $tashkilot = Tashkilot::create($request->all());

        return redirect()->route('tashkilots.index')
            ->with('success', 'Tashkilot created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tashkilot = Tashkilot::find($id);

        return view('tashkilot.show', compact('tashkilot'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tashkilot = Tashkilot::find($id);

        return view('tashkilot.edit', compact('tashkilot'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tashkilot $tashkilot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tashkilot $tashkilot)
    {
        request()->validate(Tashkilot::$rules);

        $tashkilot->update($request->all());

        return redirect()->route('tashkilots.index')
            ->with('success', 'Tashkilot updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tashkilot = Tashkilot::find($id)->delete();

        return redirect()->route('tashkilots.index')
            ->with('success', 'Tashkilot deleted successfully');
    }
}

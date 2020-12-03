<?php

namespace App\Http\Controllers;

use App\Models\Ronandagon;
use Illuminate\Http\Request;

/**
 * Class RonandagonController
 * @package App\Http\Controllers
 */
class RonandagonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ronandagon = Ronandagon::paginate();

        return view('ronandagon.index', compact('ronandagon'))
            ->with('i', (request()->input('page', 1) - 1) * $ronandagon->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ronandagon = new Ronandagon();
        return view('ronandagon.create', compact('ronandagon'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Ronandagon::$rules);

        $ronandagon = Ronandagon::create($request->all());

        return redirect()->route('ronandagon.index')
            ->with('success', 'Ronandagon created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ronandagon = Ronandagon::find($id);

        return view('ronandagon.show', compact('ronandagon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ronandagon = Ronandagon::find($id);

        return view('ronandagon.edit', compact('ronandagon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ronandagon $ronandagon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ronandagon $ronandagon)
    {
        request()->validate(Ronandagon::$rules);

        $ronandagon->update($request->all());

        return redirect()->route('ronandagon.index')
            ->with('success', 'Ronandagon updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ronandagon = Ronandagon::find($id)->delete();

        return redirect()->route('ronandagon.index')
            ->with('success', 'Ronandagon deleted successfully');
    }
}

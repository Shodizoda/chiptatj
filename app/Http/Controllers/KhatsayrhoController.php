<?php

namespace App\Http\Controllers;

use App\Models\Khatsayrho;
use Illuminate\Http\Request;

/**
 * Class KhatsayrhoController
 * @package App\Http\Controllers
 */
class KhatsayrhoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $khatsayrho = Khatsayrho::paginate();

        return view('khatsayrho.index', compact('khatsayrho'))
            ->with('i', (request()->input('page', 1) - 1) * $khatsayrho->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $khatsayrho = new Khatsayrho();
        return view('khatsayrho.create', compact('khatsayrho'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Khatsayrho::$rules);

        $khatsayrho = Khatsayrho::create($request->all());

        return redirect()->route('khatsayrho.index')
            ->with('success', 'Khatsayrho created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $khatsayrho = Khatsayrho::find($id);

        return view('khatsayrho.show', compact('khatsayrho'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $khatsayrho = Khatsayrho::find($id);

        return view('khatsayrho.edit', compact('khatsayrho'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Khatsayrho $khatsayrho
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Khatsayrho $khatsayrho)
    {
        request()->validate(Khatsayrho::$rules);

        $khatsayrho->update($request->all());

        return redirect()->route('khatsayrho.index')
            ->with('success', 'Khatsayrho updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $khatsayrho = Khatsayrho::find($id)->delete();

        return redirect()->route('khatsayrho.index')
            ->with('success', 'Khatsayrho deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\ChiptaStatus;
use Illuminate\Http\Request;

/**
 * Class ChiptaStatusController
 * @package App\Http\Controllers
 */
class ChiptaStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chiptaStatuses = ChiptaStatus::paginate();

        return view('chipta-status.index', compact('chiptaStatuses'))
            ->with('i', (request()->input('page', 1) - 1) * $chiptaStatuses->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chiptaStatus = new ChiptaStatus();
        return view('chipta-status.create', compact('chiptaStatus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ChiptaStatus::$rules);

        $chiptaStatus = ChiptaStatus::create($request->all());

        return redirect()->route('chipta-statuses.index')
            ->with('success', 'ChiptaStatus created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chiptaStatus = ChiptaStatus::find($id);

        return view('chipta-status.show', compact('chiptaStatus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chiptaStatus = ChiptaStatus::find($id);

        return view('chipta-status.edit', compact('chiptaStatus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ChiptaStatus $chiptaStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChiptaStatus $chiptaStatus)
    {
        request()->validate(ChiptaStatus::$rules);

        $chiptaStatus->update($request->all());

        return redirect()->route('chipta-statuses.index')
            ->with('success', 'ChiptaStatus updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $chiptaStatus = ChiptaStatus::find($id)->delete();

        return redirect()->route('chipta-statuses.index')
            ->with('success', 'ChiptaStatus deleted successfully');
    }
}

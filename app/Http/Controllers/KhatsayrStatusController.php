<?php

namespace App\Http\Controllers;

use App\Models\KhatsayrStatus;
use Illuminate\Http\Request;

/**
 * Class KhatsayrStatusController
 * @package App\Http\Controllers
 */
class KhatsayrStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $khatsayrStatuses = KhatsayrStatus::paginate();

        return view('khatsayr-status.index', compact('khatsayrStatuses'))
            ->with('i', (request()->input('page', 1) - 1) * $khatsayrStatuses->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $khatsayrStatus = new KhatsayrStatus();
        return view('khatsayr-status.create', compact('khatsayrStatus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(KhatsayrStatus::$rules);

        $khatsayrStatus = KhatsayrStatus::create($request->all());

        return redirect()->route('khatsayr-statuses.index')
            ->with('success', 'KhatsayrStatus created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $khatsayrStatus = KhatsayrStatus::find($id);

        return view('khatsayr-status.show', compact('khatsayrStatus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $khatsayrStatus = KhatsayrStatus::find($id);

        return view('khatsayr-status.edit', compact('khatsayrStatus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  KhatsayrStatus $khatsayrStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KhatsayrStatus $khatsayrStatus)
    {
        request()->validate(KhatsayrStatus::$rules);

        $khatsayrStatus->update($request->all());

        return redirect()->route('khatsayr-statuses.index')
            ->with('success', 'KhatsayrStatus updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $khatsayrStatus = KhatsayrStatus::find($id)->delete();

        return redirect()->route('khatsayr-statuses.index')
            ->with('success', 'KhatsayrStatus deleted successfully');
    }
}

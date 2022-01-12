<?php

namespace App\Http\Controllers;

use App\Models\SubSubBidang;
use Illuminate\Http\Request;

class SubSubBidangController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subsubBidangs = SubSubBidang::with(['subBidangs'])->get();

        return view('sub-sub-bidang.index')->with([
            'subsubBidangs' => $subsubBidangs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sub-sub-bidang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        SubSubBidang::create($input);

        return redirect()->route('sub-sub-bidangs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(SubSubBidang $subsubBidang)
    {
        return view('sub-bidang.show')->with([
            'subsubBidang' => $subsubBidang
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SubSubBidang $subsubBidang)
    {
        return view('sub-sub-bidang.edit')->with([
            'subsubBidang' => $subsubBidang
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubSubBidang $subsubBidang)
    {
        $input = $request->all();

        $subsubBidang->update($input);

        return redirect()->route('sub-sub-bidangs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

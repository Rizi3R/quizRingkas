<?php

namespace App\Http\Controllers;

use App\Models\SubBidang;
use App\Models\SubBidangSubSubBidangs;
use App\Models\SubSubBidang;
use Illuminate\Http\Request;

class SubBidangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subBidangs = SubBidang::with(['bidangs'])->get();

        return view('sub-bidang.index')->with([
            'subBidangs' => $subBidangs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subsubBidangs = SubSubBidang::whereDoesntHave('subBidangs')
            ->where('status', 1)
            ->get();

        return view('sub-bidang.create')->with([
            'subsubBidangs' => $subsubBidangs
        ]);

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

        $subBidang = SubBidang::create($input);

        foreach ($input['subsubBidangs'] as $key => $value) {
            SubBidangSubSubBidangs::create([
                'sub_bidang_id' => $subBidang->id,
                'sub_sub_bidang_id' => $value,
            ]);
        }

        return redirect()->route('sub-bidangs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(SubBidang $subBidang)
    {
        $subsubBidangs = $subBidang->subsubBidangs->where('id');
        
        $subsubBidangsDropdown = SubSubBidang::where('status', 1)
            ->get();

        return view('sub-bidang.show')->with([
            'subBidang' => $subBidang,
            'subsubBidangs' => $subsubBidangs,
            'subsubBidangsDropdown' => $subsubBidangsDropdown
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SubBidang $subBidang)
    {
        $subsubBidangs = $subBidang->subsubBidangs->where('id');
        
        $subsubBidangsDropdown = SubSubBidang::where('status', 1)
            ->get();
        
        /*((in_array($bidang->subBidangs->old("id") ?: []) ? "selected" : "")
        {{in_array($bidang->subBidangs->id, old('id') ?: []) ? "selected" : ""}}>{{$bidang->id}}*/
        
        return view('sub-bidang.edit')->with([
            'subBidang' => $subBidang,
            'subsubBidangs' => $subsubBidangs
        ]);    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubBidang $subBidang)
    {
        $input = $request->all();

        $subBidang->update($input);

        return redirect()->route('sub-bidangs.index');
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

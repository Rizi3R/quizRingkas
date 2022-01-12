<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use App\Models\BidangSubBidangs;
use App\Models\SubBidang;
use Illuminate\Http\Request;

class BidangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bidangs = Bidang::with(['subBidangs'])->get();

        return view('bidang.index')->with([
            'bidangs' => $bidangs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subBidangs = SubBidang::whereDoesntHave('bidangs')
            ->where('status', 1)
            ->get();

        return view('bidang.create')->with([
            'subBidangs' => $subBidangs
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

        $bidang = Bidang::create($input);

        foreach ($input['subBidangs'] as $key => $value) {
            BidangSubBidangs::create([
                'bidang_id' => $bidang->id,
                'sub_bidang_id' => $value,
            ]);
        }

        return redirect()->route('bidangs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Bidang $bidang)
    {
        $subBidangs = $bidang->subBidangs->where('id');

        $subBidangsDropdown = SubBidang::where('status', 1)
            ->get();

        return view('bidang.show')->with([
            'bidang' => $bidang,
            'subBidangs' => $subBidangs,
            'subBidangsDropdown' => $subBidangsDropdown
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Bidang $bidang)
    {
        $subBidangs = $bidang->subBidangs->where('id');

        $subBidangsDropdown = SubBidang::where('status', 1)
            ->get();
        
        /*((in_array($bidang->subBidangs->old("id") ?: []) ? "selected" : "")
        {{in_array($bidang->subBidangs->id, old('id') ?: []) ? "selected" : ""}}>{{$bidang->id}}*/
        
        return view('bidang.edit')->with([
            'bidang' => $bidang,
            'subBidangs' => $subBidangs
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bidang $bidang)
    {
        $input = $request->all();

        $bidang->update($input);

        return redirect()->route('bidangs.index');
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

    public function hierarchy()
    {
        $bidangs = Bidang::with('subBidangs')->get();

        return view('bidang.hierarchy')->with([
            'bidangs' => $bidangs
        ]);
    }
    public function readbidang()
    {
        $bidangs = Bidang::with('subBidangs')->get();

        return view('bidang.readbidang')->with([
            'bidangs' => $bidangs
        ]);
    }
}

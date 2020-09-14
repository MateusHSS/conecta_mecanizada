<?php

namespace App\Http\Controllers;

use App\ChecklistItem;
use App\Section;
use Illuminate\Http\Request;

class ChecklistItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $checklistitem = new ChecklistItem;

        $checklistitem->description = $request->description;
        $checklistitem->section_id = Section::find($request->section)->id;

        $checklistitem->save();

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ChecklistItem  $checklistItem
     * @return \Illuminate\Http\Response
     */
    public function show(ChecklistItem $checklistItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ChecklistItem  $checklistItem
     * @return \Illuminate\Http\Response
     */
    public function edit(ChecklistItem $checklistItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ChecklistItem  $checklistItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChecklistItem $checklistItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ChecklistItem  $checklistItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChecklistItem $checklistItem)
    {
        //
    }
}

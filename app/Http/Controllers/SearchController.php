<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;

use Spatie\Searchable\Search;
use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Notifications\GeneralNotification;

class SearchController extends Controller
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
        $searchterm = $request->input('search');

        $searchResults = (new Search())->registerModel(User::class, 'name', 'primary_category', 'secondary_category', 'tertiary_category')->perform($searchterm);

        // dd($searchResults['attributes']);

        $message = 'Searched for';
        $user = Auth::User();
        $body = 'You ' .$message. ' ' . '"'. $searchterm.'"'. ' ' . 'Successfully';
        $title = 'Search Notification';
        $user->notify(new GeneralNotification($user, $body, $title));

        return view('dashboard.search', compact('searchterm', 'searchResults'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

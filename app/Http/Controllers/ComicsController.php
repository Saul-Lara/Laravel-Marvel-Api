<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $timestamp = time();
        $privateKey = config('services.marvelapi.private_key');
        $publicKey = config('services.marvelapi.public_key');

        $hash = md5($timestamp.$privateKey.$publicKey);

        $comicsLastMonth = Http::get('https://gateway.marvel.com/v1/public/comics', [
            'format' => 'comic',
            'formatType' => 'comic',
            'dateDescriptor' => 'thisMonth',
            'orderBy' => 'title',
            'limit' => '10',
            'ts' => $timestamp,
            'apikey' => $publicKey,
            'hash' => $hash,
        ])->json();

        //dump($comicsLastMonth['data']['results']);
        
        return view('index', [
            'comicsLastMonth' => $comicsLastMonth['data']['results']
        ]);
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
        //
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

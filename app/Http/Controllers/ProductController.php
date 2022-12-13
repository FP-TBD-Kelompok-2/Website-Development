<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Client\Response|\Illuminate\Http\Response
     */
    public function index()
    {
        //
//        $response = Http::get('https://formal-audio-370910.as.r.appspot.com/hp?verify=0');
//        $response = request('https://formal-audio-370910.as.r.appspot.com/hp',['verify'=>false]);
        $response = Http::withOptions(['verify' => false])->get('https://formal-audio-370910.as.r.appspot.com/hp');

        return view('home', ['products' => $response->json()]);
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {
        //show product details
//        $response = Http::get('https://formal-audio-370910.as.r.appspot.com/hp/'.$id.'?verify=0');
        $response = Http::withOptions(['verify' => false])->get('https://formal-audio-370910.as.r.appspot.com/hp/'.$id);
        $title = $response->json()['device_name'];
        return view('product', ['product' => $response->json(), 'title' => $title]);
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

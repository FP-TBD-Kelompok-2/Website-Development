<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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
//        Alert::success('Congrats', 'You\'ve Successfully Registered');
        $response = Http::withOptions(['verify' => false])->get('https://formal-audio-370910.as.r.appspot.com/hp');
        $recommendation = Http::withOptions(['verify' => false])->get('http://127.0.0.1:5000/product/rank');


        return view('home', ['products' => $response->json(), 'recommendation' => $recommendation->json()]);
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

    public function process(Request $request)
    {
        if($request->button == 'cart'){

            $total_harga = $request->qty_order * $request->price;
            $response = Http::withOptions(['verify' => false])->post('https://formal-audio-370910.as.r.appspot.com/cart/add', [
                'id_hp' => $request->id_hp,
                'nama_hp' => $request->device_name,
                'harga_hp' => $request->price,
                'qty_order' => $request->qty_order,
                'qty_stock' => $request->qty_stock,
                'total_harga' => $total_harga ,
                'gambar_hp' => $request->gambar_hp,
            ]);
//            return redirect()->route('cart');
            alert()->success($response->json()['msg'],'Happy Shopping 😊');
            return redirect('/product/'.$request->id_hp);

//            return [ $request->qty_order,  $request->qty_stock];
        }
        else if($request->button == 'buy'){
            $response = Http::withOptions(['verify' => false])->post('https://formal-audio-370910.as.r.appspot.com/checkout', [
                'device_id' => $request->device_id,
                'user_id' => $request->user_id,
                'quantity' => $request->quantity,
            ]);

            return redirect()->route('checkout');
        }
        return $request->all();
    }
}

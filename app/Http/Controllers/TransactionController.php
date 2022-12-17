<?php

namespace App\Http\Controllers;
use DateTime;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;

class TransactionController extends Controller
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

    public function cart()
    {
        $response = Http::withOptions(['verify' => false])->get('https://formal-audio-370910.as.r.appspot.com/cart');
        return view('cart', ['cart' => $response->json()]);
    }
    public function checkout()
    {
        $detailUser = Http::withOptions(['verify' => false])->get('https://formal-audio-370910.as.r.appspot.com/user/1');
        $response = Http::withOptions(['verify' => false])->get('https://formal-audio-370910.as.r.appspot.com/checkout');
        return view('checkout', ['checkout' => $response->json(),'detailUser' => $detailUser->json()]);
    }

    public function process(Request $request)

    {
        if ($request['button'] == 'delete') {
            $response = Http::withOptions(['verify' => false])->delete('https://formal-audio-370910.as.r.appspot.com/cart/'.$request['id_hp'].'/delete');
            alert()->success($response->json()['msg'],'Happy Shopping 😊');
            return redirect('cart');
//            return 'cok';
            }
        elseif ($request['button'] == 'buy') {
//            $response = Http::withOptions(['verify' => false])->post('https://formal-audio-370910.as.r.appspot.com/cart/'.$request['id_cart'].'/update',[
//                'qty' => $request['qty']
//            ]);
//            alert()->success($response->json()['msg'],'Happy Shopping 😊');
//            return redirect('cart');
            $id_hp = $request['id_hp'];
            $detail_hp = Http::withOptions(['verify' => false])->get('https://formal-audio-370910.as.r.appspot.com/hp/'.$id_hp);

            $response = Http::withOptions(['verify' => false])->post('https://formal-audio-370910.as.r.appspot.com/checkout/add',[
                'id_hp' => $id_hp,
                'device_name' => $detail_hp->json()['device_name'],
                'device_brand' => $detail_hp->json()['device_brand'],
                'device_storage' => $detail_hp->json()['device_storage'],
                'device_connectivity' => $detail_hp->json()['device_connectivity'],
                'price' => $detail_hp->json()['price'],
                'color' => $detail_hp->json()['color'],
                'img' => $detail_hp->json()['img'],
                'qty_order' => $request['qty_order']
            ]);

            Http::withOptions(['verify' => false])->delete('https://formal-audio-370910.as.r.appspot.com/cart/'.$id_hp.'/delete');
            alert()->success($response->json()['msg'],'Happy Shopping 😊');

            return redirect('cart');
//            return $response->json();
        }
        return $request->all();

    }

    public function addOrder(Request $request)
    {
        $responseOrder = Http::withOptions(['verify' => false])->post('https://formal-audio-370910.as.r.appspot.com/order/add',[
            'device_name' => $request['device_name'],
            'device_brand' => $request['device_brand'],
            'device_storage' => $request['device_storage'],
            'device_connectivity' => $request['device_connectivity'],
            'device_price' => $request['device_price'],
            'color' => $request['color'],
            'img' => $request['img'],
            'id_hp' => $request['id_hp'],
            'qty_order' => $request['qty_order'],
            'total_price' => $request['total_price'],
            'address' => $request['address'],
            'email' => $request['email'],
            'id_user' => $request['id_user'],
            'name' => $request['name'],
            'password' => $request['password'],
            'phone_number' => $request['phone_number'],
        ]);

        Http::withOptions(['verify' => false])->delete('https://formal-audio-370910.as.r.appspot.com/checkout/clear');

        $detail_hp = Http::withOptions(['verify' => false])->get('https://formal-audio-370910.as.r.appspot.com/hp/'.$request['id_hp']);
        $stock = $detail_hp->json()['stock'];

        $newStock = $stock - $request['qty_order'];

        Http::withOptions(['verify' => false])->post('https://formal-audio-370910.as.r.appspot.com/hp/stock',[
            'stock' => $newStock,
            'id_hp' => $request['id_hp'],
        ]);


        alert()->success($responseOrder->json()['msg'],'Happy Shopping 😊');
        return redirect('order');
//        return $request->all();
    }

    public function showOrder()
    {
        $response = Http::withOptions(['verify' => false])->get('https://formal-audio-370910.as.r.appspot.com/order');


        return view('order', ['orders' => $response->json()]);
//        return view('order');
    }

}

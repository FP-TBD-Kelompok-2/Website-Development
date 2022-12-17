@extends('layouts.app')

@section('title', 'Cart')

@section('nav')

@endsection
@section('content')
@section('cart-tag', 'class=text-blue-600')
{{--    {{dd(sizeof($cart))}}--}}

{{--    {{dd($cart)}}--}}
    <h3 class="font-semibold dark:text-white px-44 pt-8">Keranjang</h3>
    @if(isset($cart['msg']))
        <center>
            <p>- keranjang kosong -</p>
            </center>
    @else
        @foreach($cart as $c)
            <div class="grid grid-cols-3 px-44 pt-8">
                <div>
                    <img class="object-scale-down h-48 w-auto rounded" src="{{ $c['gambar_hp'] }}" alt="product image"/>
                </div>
                <div class="lg:pt-2">
                    <p class="text-3xl font-bold">{{$c['nama_hp']}}</p>
                    <p class="pt-2 text-xl pb-2">IDR {{$c['harga_hp']}}</p>
                    <p class="pt-2 text-xl pb-2">Jumlah : {{$c['qty_order']}}</p>
                    <p class="pt-2 text-xl pb-2">Total : {{$c['total_harga']}}</p>
                </div>
                <div class="lg:pt-8">
                    <form action="/cart/process" method="post">
                        {{@csrf_field()}}
                        <input type="hidden" name="qty_order" value="{{$c['qty_order']}}">
                        <input type="hidden" name="total_harga" value="{{$c['total_harga']}}">
                        <input type="hidden" name="id_hp" value="{{$c['id_hp']}}">
                        <button type="submit" name="button" value="delete" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">
                            Hapus
                        </button>
                        <button type="submit" name="button" value="buy" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                            Beli Sekarang
                        </button>
                    </form>
                </div>
            </div>

        @endforeach

    @endif



@endsection

@extends('layouts.app')

@section('title', 'Checkout')

@section('nav')

@endsection
@section('content')
{{--    {{dd([$checkout, $detailUser])}}--}}
<div class="px-44 pt-8">
    <h2 class="font-semibold text-xl dark:text-white">Checkout</h2>
    <h4 class="pt-8 mb-4">Informasi pengiriman</h4>

    <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
        <div class="flex flex-col pb-3">
            <dt class="mb-1 text-gray-500 md:text-md dark:text-gray-400">Email address</dt>
            <dd class="text-md font-semibold">{{ $detailUser['email'] }}</dd>
        </div>
        <div class="flex flex-col py-3">
            <dt class="mb-1 text-gray-500 md:text-md dark:text-gray-400">Home address</dt>
            <dd class="text-md font-semibold">{{ $detailUser['address'] }}</dd>
        </div>
        <div class="flex flex-col pt-3">
            <dt class="mb-1 text-gray-500 md:text-md dark:text-gray-400">Phone number</dt>
            <dd class="text-md font-semibold">{{ $detailUser['phone_number'] }}</dd>
        </div>
    </dl>

    <hr class="mt-4">
    <h5 class="pt-4">Informasi produk</h5>


</div>
{{--    @foreach($checkout as $c)--}}
{{--        <div class="grid grid-cols-3 px-44 pt-8">--}}
{{--            <div>--}}
{{--                <img class="object-scale-down h-48 w-auto rounded" src="{{ $c['gambar_hp'] }}" alt="product image"/>--}}
{{--            </div>--}}
{{--            <div class="lg:pt-2">--}}
{{--                <p class="text-3xl font-bold">{{$c['nama_hp']}}</p>--}}
{{--                <p class="pt-2 text-xl pb-2">IDR {{$c['harga_hp']}}</p>--}}
{{--                <p class="pt-2 text-xl pb-2">Jumlah : {{$c['qty_order']}}</p>--}}
{{--                <p class="pt-2 text-xl pb-2">Total : {{$c['total_harga']}}</p>--}}
{{--            </div>--}}
{{--            <div class="lg:pt-8">--}}
{{--                <form action="/cart/delete" method="post">--}}
{{--                    {{@csrf_field()}}--}}
{{--                    <input type="hidden" name="id_cart" value="{{$c['id_hp']}}">--}}
{{--                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">--}}
{{--                        Hapus--}}
{{--                    </button>--}}
{{--                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">--}}
{{--                        Beli Sekarang--}}
{{--                    </button>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    @endforeach--}}

@endsection

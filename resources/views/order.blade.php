@extends('layouts.app')

@section('title', 'My Order')

@section('content')
{{--    {{dd($result_date)}}--}}
    <div class="px-80 pt-8">
        <p>My Order</p>
        @foreach($orders as $order)
            <a href="#" class="flex flex-row items-center bg-white border rounded-lg shadow-md md:flex-row w-max-content hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 mt-4">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ $order['img'] }}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <p>ID Transaksi : {{$order['order_id']}}
{{--                    <p>{{ Carbon\Carbon::parse($order['order_time'])->format('Y-m-d') }}</p>--}}
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $order['device_name'] }} {{ $order['device_connectivity'] }}</h5>
                    <p class="">Total Price: IDR {{$order['total_price']}}</p>
                    <p class="text-sm tracking-tight text-gray-900 dark:text-white">Qty Order : {{$order['qty_order']}} pcs</p>
                    <p class=" text-sm tracking-tight text-gray-900 dark:text-white">Brand: {{ $order['device_brand'] }}</p>

                    <p class="mt-4">Informasi Pengiriman</p>
                    <p class="text-sm">Nama Penerima : {{ $order['name'] }}</p>
                    <p class="text-sm">Alamat Pengiriman : {{ $order['address'] }}</p>
                    <p class="text-sm">handphone : {{ $order['phone_number'] }}</p>

                </div>
            </a>
        @endforeach

    </div>
@endsection

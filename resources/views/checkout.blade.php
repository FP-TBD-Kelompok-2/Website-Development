@extends('layouts.app')

@section('title', 'Checkout')

@section('nav')

@endsection
@section('content')
{{--    {{dd([$checkout])}}--}}
<form action="/order/add" method="post">
    {{@csrf_field()}}
    <input type="hidden" name="address" value="{{ $detailUser['address'] }}">
    <input type="hidden" name="email" value="{{ $detailUser['email'] }}">
    <input type="hidden" name="id_user" value="{{ $detailUser['id_user'] }}">
    <input type="hidden" name="name" value="{{ $detailUser['name'] }}">
    <input type="hidden" name="password" value="{{ $detailUser['password'] }}">
    <input type="hidden" name="phone_number" value="{{ $detailUser['phone_number'] }}">

    <div class="px-44 pt-8">
        <h2 class="font-semibold text-xl dark:text-white">Checkout</h2>
        <h4 class="pt-8 mb-4">Informasi pengiriman</h4>

        <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
            <div class="flex flex-col pb-3">
                <dt class="mb-1 text-gray-500 md:text-md dark:text-gray-400 text-xs">Email address</dt>
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
        <h5 class="pt-4 mb-4 font-semibold">Informasi produk</h5>
        @foreach($checkout as $c)
            <input type="hidden" name="device_name" value="{{ $c['device_name'] }}">
            <input type="hidden" name="device_brand" value="{{ $c['device_brand'] }}">
            <input type="hidden" name="device_storage" value="{{ $c['device_storage'] }}">
            <input type="hidden" name="device_price" value="{{ $c['price'] }}">
            <input type="hidden" name="color" value="{{ $c['color'] }}">
            <input type="hidden" name="img" value="{{ $c['img'] }}">
            <input type="hidden" name="id_hp" value="{{ $c['id_hp'] }}">
            <input type="hidden" name="qty_order" value="{{ $c['qty_order'] }}">
            <input type="hidden" name="total_price" value="{{ $c['price']  * $c['qty_order'] }}">

            <div class="flex flex-col my-2  items-center bg-white border rounded-lg shadow-md md:flex-row  hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ $c['img'] }}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-lg tracking-tight text-gray-900 dark:text-white">{{$c['device_name']}} {{$c['device_connectivity']}} - {{ $c['device_storage'] }} GB </h5>
                    <div class="flex flex-col text-sm">
                        <p>Brand : {{$c['device_brand']}} </p>
                        <p>Color : {{$c['color']}} </p>
                        <p>Qty Order : {{ $c['qty_order'] }}x</p>
                        <p class="text-lg font-semibold">Total : {{ $c['price']  * $c['qty_order'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
        <center>
            <div class="my-8">
                <button class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
              <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                  Proceed to Order
              </span>
                </button>
            </div>
        </center>



    </div>
</form>
@endsection

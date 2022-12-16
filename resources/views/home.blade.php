@extends('layouts.app')

@section('title', 'Welcome to NAV Consign Store')

@section('content')
    <div class="px-48 pt-8">
        <h3 class=" dark:text-white  text-xl font-semibold">Rekomendasi Produk Spesial Untukmu 🥰</h3>

        <div class="flex">
            <div class="mx-2 w-1/6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg object-scale-down h-48 w-auto p-8 rounded-t-lg" src="https://carisinyal.com/wp-content/uploads/2022/02/Samsung-Galaxy-S22-5G-Phantom-White_-1.webp" alt="" />
                </a>
                <div class="p-5">
                    <p class="text-xs">Terbaik Nomor 1</p>
                    <a href="#">
                        <h5 class="mb-2 text-md font-bold tracking-tight text-gray-900 dark:text-white">#1 Samsung Galaxy S22+ 5G</h5>
                    </a>
                    <p class=" font-normal text-gray-700 dark:text-gray-400">IDR 19123819</p>
                    {{--                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">--}}
                    {{--                    Read more--}}
                    {{--                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>--}}
                    {{--                </a>--}}
                </div>
            </div>
            <div class="mx-2 w-1/6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg object-scale-down h-48 w-auto p-8 rounded-t-lg" src="https://images.tokopedia.net/img/cache/500-square/VqbcmM/2022/1/11/11ac47e6-c547-4e7d-b8c1-020dfed4a4d9.jpg.webp?ect=4g" alt="" />
                </a>
                <div class="p-5">
                    <p class="text-xs">Terbaik Nomor 2</p>
                    <a href="#">
                        <h5 class="mb-2 text-md font-bold tracking-tight text-gray-900 dark:text-white">OnePlus 10 Pro 5G</h5>
                    </a>
                    <p class=" font-normal text-gray-700 dark:text-gray-400">IDR 19123819</p>
                    {{--                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">--}}
                    {{--                    Read more--}}
                    {{--                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>--}}
                    {{--                </a>--}}
                </div>
            </div>
            <div class="mx-2 w-1/6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg object-scale-down h-48 w-auto p-8 rounded-t-lg" src="https://carisinyal.com/wp-content/uploads/2022/02/Samsung-Galaxy-S22-Ultra-5G-Phantom-Black_.webp" alt="" />
                </a>
                <div class="p-5">
                    <p class="text-xs">Terbaik Nomor 3</p>
                    <a href="#">
                        <h5 class="mb-2 text-md font-bold tracking-tight text-gray-900 dark:text-white">Samsung Galaxy S22 Ultra 5G</h5>
                    </a>
                    <p class=" font-normal text-gray-700 dark:text-gray-400">IDR 19123819</p>
                    {{--                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">--}}
                    {{--                    Read more--}}
                    {{--                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>--}}
                    {{--                </a>--}}
                </div>
            </div>
            <div class="mx-2 w-1/6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg object-scale-down h-48 w-auto p-8 rounded-t-lg" src="https://images.tokopedia.net/img/cache/500-square/VqbcmM/2022/8/31/506f62b5-2da7-4229-89bf-c73f4c787bce.jpg.webp?ect=4g" alt="" />
                </a>
                <div class="p-5">
                    <p class="text-xs">Terbaik Nomor 4</p>
                    <a href="#">
                        <h5 class="mb-2 text-md font-bold tracking-tight text-gray-900 dark:text-white">OnePlus 10T 5G</h5>
                    </a>
                    <p class=" font-normal text-gray-700 dark:text-gray-400">IDR 19123819</p>
                    {{--                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">--}}
                    {{--                    Read more--}}
                    {{--                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>--}}
                    {{--                </a>--}}
                </div>
            </div>
            <div class="mx-2 w-1/6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg object-scale-down h-48 w-auto p-8 rounded-t-lg" src="https://cdn.eraspace.com/pub/media/catalog/product/i/p/iphone_14_blue_1_5.jpg" alt="" />
                </a>
                <div class="p-5">
                    <p class="text-xs">Terbaik Nomor 5</p>
                    <a href="#">
                        <h5 class="mb-2 text-md font-bold tracking-tight text-gray-900 dark:text-white">Iphone 14 Pro Max</h5>
                    </a>
                    <p class=" font-normal text-gray-700 dark:text-gray-400">IDR 19123819</p>
                    {{--                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">--}}
                    {{--                    Read more--}}
                    {{--                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>--}}
                    {{--                </a>--}}
                </div>
            </div>
        </div>

        <h3 class=" dark:text-white  text-xl font-semibold mt-8">Produk Yang Bisa Kamu Beli 👀</h3>
        <div class="flex flex-wrap">
            @foreach($products as $product)
                {{--            {{dd($product)}}--}}
                <div class="w-full max-w-sm bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 mr-4 mb-2">
                    <a href="#">
                        <img class="object-scale-down h-48 w-auto p-8 rounded-t-lg" src="{{ $product['img'] }}" alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="#">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ $product['device_name'] }} - {{ $product['device_storage'] }} GB</h5>
                        </a>
                        <div class="flex items-center mt-2.5 mb-5">
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>First star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Second star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Third star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fourth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Fifth star</title><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-xl font-bold text-gray-900 dark:text-white">IDR {{ $product['price'] }}</span>
                            <a href="/product/{{ $product['id_hp'] }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



@endsection

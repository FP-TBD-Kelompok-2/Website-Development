@extends('layouts.app')

@section('title', $title)

@section('style')
    <style>
        @layer base {
            input[type="number"]::-webkit-inner-spin-button,
            input[type="number"]::-webkit-outer-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }
        }

        input[type='number']::-webkit-inner-spin-button,
        input[type='number']::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .custom-number-input input:focus {
            outline: none !important;
        }

        .custom-number-input button:focus {
            outline: none !important;
        }
    </style>

@endsection

@section('content')
    <div class="grid grid-cols-3 px-24 ">
        <div>
            <img class="object-scale-down h-80 w-auto rounded" src="{{ $product['img'] }}" alt="product image"/>
        </div>
        <div class="lg:pt-8">
            <p class="text-3xl font-bold">{{$product['device_name']}} - {{$product['device_storage']}} GB</p>
            <div class="flex pt-2 ">
                <p class="">stok : {{$product['stock']}} | </p>
                <p class="pl-2">Terjual : banyak gan</p>
            </div>
            <p class="pt-2 font-bold text-xl pb-2">IDR {{$product['price']}}</p>

            <form action="/product/process" method="post">
                {{@csrf_field()}}
                <input type="hidden" name="id_hp" value="{{$product['id_hp']}}">
                <input type="hidden" name="device_name" value="{{$product['device_name']}}">
                <input type="hidden" name="price" value="{{$product['price']}}">
                <input type="hidden" name="qty_stock" value="{{$product['stock']}}">
                <input type="hidden" name="gambar_hp" value="{{$product['img']}}">
                <div class="w-48">
                    <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1 ">
                        <button type="button"   data-action="decrement" class=" bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                            <span class="m-auto text-2xl font-thin">−</span>
                        </button>
                        <input type="text" class="outline-none focus:outline-none text-center w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none" name="qty_order" value="1"></input>
                        <button type="button" data-action="increment" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer ">
                            <span class="pt-1/2 m-auto text-2xl font-thin">+</span>
                        </button>
                    </div>
                </div>
                <div class="flex mt-2">
                    <button name="button" type="submit" value="cart"
                            class=" py-2 px-3 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <div class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"/>
                            </svg>
                            <span class="pl-2 pt-1">Add to Cart</span>
                        </div>
                    </button>
                    <button name="button" type="submit" value="buy"
                            class="py-2 px-3 text-xs ml-2 font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        <div class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/>
                            </svg>
                            <span class="pl-2 pt-1">Buy Now</span>
                        </div>
                    </button>
                </div>
            </form>

            <p class="mt-4 font-semibold">Deskripsi :</p>
            <p>{{$product['description']}}</p>
        </div>
    </div>

    <hr class="mt-2">
    <div class="px-32">
        <p class="text-xl  mt-5">Spesifikasi </p>
        <div class="grid grid-cols-5 mt-2">
            <div>Brand</div>
            <div>: {{$product['device_brand']}}</div>
            <div></div>
            <div></div>
            <div></div>
            <div>Storage</div>
            <div>: {{$product['device_storage']}} GB</div>
            <div></div>
            <div></div>
            <div></div>
            <div>Battery</div>
            <div>: {{$product['device_battery']}} mAh</div>
            <div></div>
            <div></div>
            <div></div>
            <div>Connectivity</div>
            <div>: {{$product['device_connectivity']}}</div>
            <div></div>
            <div></div>
            <div></div>
            <div>Color</div>
            <div>: {{$product['color']}}</div>
            <div></div>
            <div></div>
            <div></div>
            <div>CPU cores</div>
            <div>: {{$product['cpu_cores']}} cores</div>
            <div></div>
            <div></div>
            <div></div>
            <div>CPU name</div>
            <div>: {{$product['cpu_name']}}</div>
            <div></div>
            <div></div>
            <div></div>
            <div>CPU Clock</div>
            <div>: {{$product['cpu_clock']}} mHz</div>
            <div></div>
            <div></div>
            <div></div>
            <div>Antutu Score</div>
            <div>: {{$product['antutu_score']}}</div>
            <div></div>


        </div>
    </div>
@endsection

@section('script')
    <script>
        function decrement(e) {
            const btn = e.target.parentNode.parentElement.querySelector(
                'button[data-action="decrement"]'
            );
            const target = btn.nextElementSibling;
            let value = Number(target.value);
            value--;
            target.value = value;
        }

        function increment(e) {
            const btn = e.target.parentNode.parentElement.querySelector(
                'button[data-action="decrement"]'
            );
            const target = btn.nextElementSibling;
            let value = Number(target.value);
            value++;
            target.value = value;
        }

        const decrementButtons = document.querySelectorAll(
            `button[data-action="decrement"]`
        );

        const incrementButtons = document.querySelectorAll(
            `button[data-action="increment"]`
        );

        decrementButtons.forEach(btn => {
            btn.addEventListener("click", decrement);
        });

        incrementButtons.forEach(btn => {
            btn.addEventListener("click", increment);
        });
    </script>
@endsection

@extends('layouts.authorized_page')

@section('title', 'Pengelolaan')

@section('page-content')
    <div class="md:py-10 md:px-6 flex flex-col items-center w-full">
        <div class="mx-auto p-6 flex flex-col gap-8 md:rounded-xl w-full lg:w-4xl max-h-screen overflow-y-auto bg-white ">
            <h4 class="font-bold text-2xl md:text-3xl text-gray-800">Daftar Kebutuhan Bulanan</h4>
            <ul class="space-y-3">
                @foreach ($needs as $item)
                    <li class="p-4 flex justify-between bg-gray-100 rounded-lg">
                        <h6>{{ $item->name }}</h6>
                        <p class="font-semibold text-right">Rp{{ number_format($item->cost, 0, ',', '.') }}</p>
                    </li>
                @endforeach
            </ul>

            <div class="flex flex-row justify-end gap-4">

                <h6 class="font-semibold text-lg text-gray-800">Total Harga: </h6>

                <p class="font-semibold text-lg text-gray-800">
                    Rp{{ number_format(collect($needs)->sum('cost'), 0, ',', '.') }}</p>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.authorized_page')

@section('title', 'Dashboard')

@section('page-content')
    <div class="md:py-10 md:px-6 flex flex-col justify-center items-center w-full ">
        <div class="p-6 flex flex-col gap-4 w-full md:max-w-md md:rounded bg-white">

            <h1 class="font-semibold text-xl">
                Selamat datang, {{ request()->query('username') }}
            </h1>

            <form action="{{ route('dashboard', ['username' => request()->query('username')]) }}" method="POST"
                class="space-y-4">
                @csrf

                <x-form.text_field name="amount" label="Masukkan Gaji Anda" type="number" />

                <x-form.submit_btn label="Hitung" color="gray-700" border="gray-900" />
            </form>

            @if (!is_null($remaining))
                <div class="mt-2 p-4 bg-gray-100 rounded">
                    <p class="text-gray-700">
                        Sisa Gaji Anda: <strong>Rp{{ number_format($remaining, 0, ',', '.') }}</strong>
                    </p>
                </div>
            @endif
        </div>
    </div>
@endsection

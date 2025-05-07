@extends('layouts.main')

@section('title', 'Login')

@section('content')
    <div class="relative flex md:justify-center md:items-center  min-h-screen bg-gray-200">
        @if (session('error'))
            <x-float.danger_alert content="Password yang diberikan tidak valid" />
        @endif

        <form method="POST"
            class="p-6 flex flex-col justify-center items-center gap-6 rounded-lg w-full md:max-w-sm bg-white ">
            @csrf

            <h2 class="font-bold text-2xl">Login</h2>

            <div class="flex flex-col justify-center items-center gap-4 w-full ">
                <x-form.text_field name="username" label="Username" />
                <x-form.text_field name="password" type="password" label="Password" />
            </div>

            <button type="submit"
                class="py-2 px-4 text-white rounded w-full bg-green-500 hover:bg-green-600 border border-green-600 duration-300">Login</button>

        </form>
    </div>
@endsection

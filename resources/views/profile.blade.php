@extends('layouts.authorized_page')

@section('title', 'Profil')

@section('page-content')
    <div class="py-10 px-6 flex flex-col justify-center items-center">
        <div class="p-6 flex flex-col justify-center items-center rounded-2xl w-full max-w-md bg-white">
            <div class="avatar mb-4">
                <div class="w-24 rounded-full border border-gray-400 mx-auto">
                    <img src="https://st4.depositphotos.com/11634452/21365/v/450/depositphotos_213659488-stock-illustration-picture-profile-icon-human-people.jpg"
                        alt="Avatar">
                </div>
            </div>
            <h2 class="font-semibold  text-2xl text-gray-800">{{ request()->query('username') }}</h2>

            <div class="mt-6 flex justify-center gap-4">
                <a href="{{ route('dashboard', ['username' => request()->query('username')]) }}" class="btn btn-ghost">Kembali
                    ke Dashboard</a>
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-error text-gray-100">Logout</button>
                </form>
            </div>
        </div>
    </div>
@endsection

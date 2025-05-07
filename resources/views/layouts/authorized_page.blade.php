@extends('layouts.main')


@section('content')
    @include('components.navbar')

    <main class="min-h-screen bg-gray-200">
        @yield('page-content')
    </main>

    @include('components.footer')
@endsection

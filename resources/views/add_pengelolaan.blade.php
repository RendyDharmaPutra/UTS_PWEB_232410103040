@extends('layouts.authorized_page')

@section('title', 'Tambah Pengelolaan')

@section('page-content')
    <div class="md:py-10 md:px-6 flex flex-col justify-center items-center w-full ">
        <div class="p-6 flex flex-col gap-4 w-full md:max-w-md md:rounded bg-white">


            <form action="/pengelolaan" method="POST" class="space-y-4">
                @csrf

                <x-form.text_field name="name" label="Nama Kebutuhan" type="text" />
                <x-form.text_field name="cost" label="Harga Kebutuhan" type="number" />

                <x-form.submit_btn label="Simpan" color="gray-700" border="gray-900" />
            </form>
        </div>
    </div>
@endsection

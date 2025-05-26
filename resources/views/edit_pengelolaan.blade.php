@extends('layouts.authorized_page')

@section('title', 'Edit Pengelolaan')

@section('page-content')
    <div class="md:py-10 md:px-6 flex flex-col justify-center items-center w-full ">
        <div class="p-6 flex flex-col gap-4 w-full md:max-w-md md:rounded bg-white">
            <form action="/pengelolaan/{{ $item->id }}" method="POST" class="space-y-4">
                @csrf
                @method('PUT')

                <x-form.text_field name="name" label="Nama Kebutuhan" type="text" defaultValue="{{ $item->name }}" />
                <x-form.text_field name="cost" label="Harga Kebutuhan" type="number"
                    defaultValue="{{ $item->cost }}" />

                <x-form.submit_btn label="Simpan" color="gray-700" border="gray-900" />
            </form>

            <form action="/pengelolaan/{{ $item->id }}" method="POST"
                onsubmit="return confirm('Yakin ingin menghapus item ini?')">
                @csrf
                @method('DELETE')

                <button type="submit"
                    class="w-full py-2 px-4 bg-red-600 text-white rounded hover:bg-red-700 transition duration-200">
                    Hapus
                </button>
            </form>
        </div>
    </div>
@endsection

<x-Layout x-data="{openMenu:true, openMenu2:false, Tambah:false}">
    {{-- <x-slot:title>{{ $title }}</x-slot:title> --}}
    <x-heading-top>Setup Master</x-heading-top>
    <div  x-show="Tambah" class="fixed top-0 left-0 h-full w-screen flex z-50 items-center justify-center bg-black/50">

    <div x-show="Tambah" class="bg-white block w-2/6 rounded-lg p-6 justify-center">
        <h1 class="flex text-xl font-bold text-brands justify-center">Tambah Wilayah</h1>
        <div class="relative mt-6">
                <label for="name" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Name</label>
                <input type="text" name="name" id="name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Masukan Namamu">
        </div>
        <div class="relative mt-6">
            <label for="name" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Email</label>
            <input type="text" name="name" id="name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="@yourmail.com">
        </div>
        <div class="relative mt-6">
            <label for="name" class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Status</label>
            <select name="status" id="status_pegawai" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <option value="1">Aktif</option>
                <option value="2">Tidak Aktif</option>
            </select>
        </div>
        <div class="relative mt-8">
            <label for="name" class="absolute -top-4 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Foto Profil</label>
            <input type="file" class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10">
        </div>
        <div class="flex gap-5 mt-8 justify-center">
            <button class="rounded px-6 py-2 bg-green-400 text-white">Tambah</button>
            <button class="rounded px-6 py-2 bg-red-400 text-white">Kembali</button>
        </div>
    </div>
    </div>
    
    <div class="m-8">
        <x-tabel-wilayah x-show="openMenu"></x-tabel-wilayah>
    </div>
    
    
    
    
</x-Layout>
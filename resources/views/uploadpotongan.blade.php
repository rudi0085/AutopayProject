<x-Layout>
    {{-- <x-slot:title>{{ $title }}</x-slot:title> --}}
   <x-heading-top>Upload Potongan</x-heading-top>
   <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa facilis adipisci iusto laboriosam obcaecati ullam officiis non officia deserunt assumenda ut, sint ab explicabo excepturi rerum architecto laborum. Quisquam, nostrum.</p>
   <div class="flex mt-8 justify-end pb-16">
    <div class="flex gap-5">

    <button type="button" class="rounded-md bg-green-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Tambah</button>
    <button type="button" class="rounded-md bg-yellow-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-yellow-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Edit</button>
    <button type="button" class="rounded-md bg-red-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Hapus</button>
    <x-downloads>
        
    </x-downloads>
</div>
</div>

<x-data-premi></x-data-premi>

</x-Layout>
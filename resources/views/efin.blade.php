<x-Layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-heading-top>Efin</x-heading-top>
    <p class="mt-2 text-sm text-gray-700">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga, laborum tempora esse culpa quam qui? Dolor, perspiciatis! Consequuntur nesciunt id illo sapiente eveniet accusamus voluptatem corrupti placeat. Quisquam, laudantium at.</p>

    <div class="mt-8 w-full h-3/4 py-24 border border-collapse">
        <x-tambah-efin></x-tambah-efin>
    </div>
    <div class="mt-8 mb-4">
        <x-heading-top>Daftar User Efin</x-heading-top>
    </div>
    <x-evin-read></x-evin-read>
    <x-alert></x-alert>
</x-Layout>
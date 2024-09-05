<x-Layout>
  
  <x-slot:title>{{ $title }}</x-slot:title>
    <!-- Your content -->
  
    
    {{-- Stats Start --}}
    <div class="">
      <x-heading-top>Dashboard</x-heading-top>
      <dl class="mt-6 grid grid-cols-1 gap-5 sm:grid-cols-3 ">
        <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6 hover:bg-gray-200">
          <dt class="truncate text-sm font-medium text-gray-500 ">Total Karyawan</dt>
          <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">250</dd>
        </div>
        <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6 hover:bg-gray-200">
          <dt class="truncate text-sm font-medium text-gray-500">Jumlah Wilayah</dt>
          <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">87</dd>
        </div>
        <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6 hover:bg-gray-200">
          <dt class="truncate text-sm font-medium text-gray-500">Jumlah Kebun</dt>
          <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">24</dd>
        </div>
      </dl>
    </div>
    {{-- Stats End --}}

    {{-- Action with shared Border --}}
<x-fav-menu></x-fav-menu>
    
    
    
  
</x-Layout>
<dl class="group mx-auto grid grid-cols-1 gap-px bg-gray-900/5 sm:grid-cols-2 lg:grid-cols-4">
    <div class="flex flex-wrap items-baseline justify-between gap-x-4 gap-y-2 bg-white px-4 py-10 sm:px-6 xl:px-8">
      <dt class="text-sm font-medium leading-6 text-gray-500">Draft (Premi)</dt>
      <dd class="text-xs font-medium text-green-600 group">+4.75%</dd>
      <dd class="w-full flex-none text-3xl font-medium leading-10 tracking-tight text-gray-900">10</dd>
    </div>
    <div class="flex flex-wrap items-baseline justify-between gap-x-4 gap-y-2 bg-white px-4 py-10 sm:px-6 xl:px-8">
      <dt class="text-sm font-medium leading-6 text-gray-500">Data tidak sesuai</dt>
      <dd class="text-xs font-medium text-rose-600">50%</dd>
      <dd class="w-full flex-none text-3xl font-medium leading-10 tracking-tight text-gray-900">5</dd>
    </div>
    <div class="flex flex-wrap items-baseline justify-between gap-x-4 gap-y-2 bg-white px-4 py-10 sm:px-6 xl:px-8">
      <dt class="text-sm font-medium leading-6 text-gray-500">Pengeluaran</dt>
      <dd class="text-xs font-medium text-rose-600">-1.39%</dd>
      <dd class="w-full flex-none text-3xl font-medium leading-10 tracking-tight text-gray-900">165,245</dd>
    </div>
    <div class="flex flex-wrap items-baseline justify-between gap-x-4 gap-y-2 bg-white px-4 py-10 sm:px-6 xl:px-8">
      <dt class="text-sm font-medium leading-6 text-gray-500">Rata-Rata</dt>
      <dd class="text-xs font-medium text-green-600">+10.18%</dd>
      <dd class="w-full flex-none text-3xl font-medium leading-10 tracking-tight text-gray-900">1,200,500</dd>
    </div>
  </dl>
  
  <div class="border w-full h-[500px] mt-8 mb-8">


    {{-- Tampilan Chart --}}
    @livewire('chart.index')
    @livewireScripts
    @livewireChartsScripts



      {{-- Chart 2 --}}

     
    
  </div>
    
  


  




  
  
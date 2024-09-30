<x-Layout>
    {{-- <x-slot:title>{{ $title }}</x-slot:title> --}}
    <x-heading-top>HCM Master</x-heading-top>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, quibusdam cum reprehenderit asperiores nobis labore sunt sint facere blanditiis natus delectus, doloremque vitae necessitatibus quaerat dolore magni est fugit possimus?</p>
    <div class="flex flex-wrap mt-8 justify-end items-center pb-16 gap-6">
        {{-- Tombol tambah --}}
        <div class="relative flex-none" x-data="{open:false}">
            <button @click="open = !open" @click.outside="open =false" type="button" class="rounded-md bg-green-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Tambah</button>
            <div
            :class="open ? '' : 'hidden'"
            x-clock
            x-transition:enter="transition ease-in-out duration-100"
            x-transition:enter-start="opacity-0 scale-95 "
            x-transition:enter-end="opacity-100 scale-100 "
            x-transition:leave="transition ease-in-out duration-75"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"  x-show=open class="absolute right-0 z-10 mt-2 w-32 origin-top-right rounded-md bg-white py-2 shadow-lg ring-1 ring-gray-900/5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="options-menu-0-button" tabindex="-1">
            <!-- Active: "bg-gray-50", Not Active: "" -->

            <a href="#" class="block px-3 py-1 text-sm leading-6 text-gray-900" role="menuitem" tabindex="-1" id="options-menu-0-item-0">Preview<span class="sr-only">, Leslie Alexander</span></a>
            <a href="#" class="block px-3 py-1 text-sm leading-6 text-gray-900" role="menuitem" tabindex="-1" id="options-menu-0-item-1">Download<span class="sr-only">, Leslie Alexander</span></a>
          </div>
        </div>

        {{-- Tombol Edit --}}
        <div class="relative flex-none" x-data="{open:false}">
            <button @click="open = !open" @click.outside="open =false" type="button" class="min-w-max rounded-md bg-yellow-400 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-yellow-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Edit</button>
            <div
            :class="open ? '' : 'hidden'"
            x-clock
            x-transition:enter="transition ease-in-out duration-100"
            x-transition:enter-start="opacity-0 scale-95 "
            x-transition:enter-end="opacity-100 scale-100 "
            x-transition:leave="transition ease-in-out duration-75"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"  x-show=open class="absolute right-0 z-10 mt-2 w-32 origin-top-right rounded-md bg-white py-2 shadow-lg ring-1 ring-gray-900/5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="options-menu-0-button" tabindex="-1">
            <!-- Active: "bg-gray-50", Not Active: "" -->

            <a href="#" class="block px-3 py-1 text-sm leading-6 text-gray-900" role="menuitem" tabindex="-1" id="options-menu-0-item-0">Preview<span class="sr-only">, Leslie Alexander</span></a>
            <a href="#" class="block px-3 py-1 text-sm leading-6 text-gray-900" role="menuitem" tabindex="-1" id="options-menu-0-item-1">Download<span class="sr-only">, Leslie Alexander</span></a>
          </div>
        </div>
        

        {{-- Tombol Delete --}}
        <div class="relative flex-none" x-data="{open:false}">
            <button @click="open = !open" @click.outside="open =false" type="button" class="rounded-md bg-red-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-red-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Hapus</button>
            <div
            :class="open ? '' : 'hidden'"
            x-clock
            x-transition:enter="transition ease-in-out duration-100"
            x-transition:enter-start="opacity-0 scale-95 "
            x-transition:enter-end="opacity-100 scale-100 "
            x-transition:leave="transition ease-in-out duration-75"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"  x-show=open class="absolute right-0 z-10 mt-2 w-32 origin-top-right rounded-md bg-white py-2 shadow-lg ring-1 ring-gray-900/5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="options-menu-0-button" tabindex="-1">
            <!-- Active: "bg-gray-50", Not Active: "" -->

            <a href="#" class="block px-3 py-1 text-sm leading-6 text-gray-900" role="menuitem" tabindex="-1" id="options-menu-0-item-0">Preview<span class="sr-only">, Leslie Alexander</span></a>
            <a href="#" class="block px-3 py-1 text-sm leading-6 text-gray-900" role="menuitem" tabindex="-1" id="options-menu-0-item-1">Download<span class="sr-only">, Leslie Alexander</span></a>
          </div>
        </div>
        
        <x-downloads class="pl-2"></x-downloads>
        <x-export></x-export>
        



    </div>

    {{-- Tabel --}}

    <div class="px-4 sm:px-6 lg:px-8">
        {{-- <div class="sm:flex sm:items-center">
          <div class="sm:flex-auto">
            <h1 class="text-base font-semibold leading-6 text-gray-900">Transactions</h1>
            <p class="mt-2 text-sm text-gray-700">A table of placeholder stock market data that does not make any sense.</p>
          </div>
          <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
            <button type="button" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Export</button>
          </div>
        </div> --}}
        <div class="mt-0 flow-root">
          <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
              <table class="min-w-full divide-y divide-gray-300">
                <thead>
                  <tr>
                    <th scope="col" class="whitespace-nowrap py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Id</th>
                    <th scope="col" class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">Nama</th>
                    <th scope="col" class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">Status</th>
                    <th scope="col" class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">Grup</th>
                    <th scope="col" class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">Sub Area</th>
                    <th scope="col" class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">Unit</th>
                    <th scope="col" class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">Posisi</th>
                    <th scope="col" class="relative whitespace-nowrap py-3.5 pl-3 pr-4 sm:pr-0">
                      <span class="sr-only">Edit</span>
                    </th>
                  </tr>
                </thead>
                
                <tbody class="divide-y divide-gray-200 bg-white">
                    @foreach ($dataTabel as $data )
                    <tr>
                        <td class="whitespace-nowrap py-2 pl-4 pr-3 text-sm text-gray-500 sm:pl-0">{{ $data['id'] }}</td>
                        <td class="whitespace-nowrap px-2 py-2 text-sm font-medium text-gray-900">{{ $data['nama'] }}</td>
                        <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-900">{{ $data['status'] }}</td>
                        <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500">{{ $data['grup'] }}</td>
                        <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500">{{ $data['sub-area'] }}</td>
                        <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500">{{ $data['unit'] }}</td>
                        <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500">{{ $data['posisi'] }}</td>
                        <td class="relative whitespace-nowrap py-2 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                          <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span class="sr-only">{{ $data['id'] }}</span></a>
                        </td>
                      </tr>
                     @endforeach
                
                </tbody>
              </table>
            </div>
          </div>
          <x-pagination class="mb-2"></x-pagination>
        </div>
      </div>
      

  
    


</x-Layout>
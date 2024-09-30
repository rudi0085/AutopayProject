
<div x-data="{openMenu1:false, openMenu2:false}">

  
  <div class="relative border-b border-gray-200 pb-5 sm:pb-0">
      
      <div class="mt-4">
        <!-- Dropdown menu on small screens -->
        <div class="sm:hidden">
          <label for="current-tab" class="sr-only">Select a tab</label>
          <select id="current-tab" name="current-tab" class="block w-full rounded-md border-0 py-1.5 pl-3 pr-10 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-brands">
            
            <option selected>Tabel Wilayah</option>
            <option>Tabel Layanan</option>
            
          </select>
        </div>
        <!-- Tabs at small breakpoint and up -->
        <div class="hidden sm:block">
          <nav class="-mb-px flex space-x-8">
            <!-- Current: "border-indigo-500 text-indigo-600", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
           
            <a @click="openMenu1 = !openmenu1" class="whitespace-nowrap border-b-2 border-transparant px-1 pb-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-brands" aria-current="page">Tabel Wilayah</a>
            <a @click="!openMenu1 = openmenu1" class="whitespace-nowrap border-b-2 border-transparent px-1 pb-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-brands">Tabel Layanan</a>
          </nav>
        </div>
      </div>
    </div>
    


  

  <div x-show='openMenu1' class="px-4 mt-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-base font-semibold leading-6 text-gray-900">Tabel Wilayah</h1>
        <p class="mt-2 text-sm text-gray-700">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga, laborum tempora esse culpa quam qui? Dolor, perspiciatis! Consequuntur nesciunt id illo sapiente eveniet accusamus voluptatem corrupti placeat. Quisquam, laudantium at.</p>
      </div>
      <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
        <button @click="tambah=!tambah" type="button" class="block rounded-md bg-brands px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-brands hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-brands">Tambah</button>
      </div>
    </div>
    <div class="mt-8 flow-root">
      <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
          <table class="min-w-full divide-y divide-gray-300">
            <thead>
              <tr>
                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Name</th>
                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Title</th>
                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Status</th>
                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Role</th>
                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                  <span class="sr-only">Edit</span>
                </th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 bg-white">
              <tr>
                <td class="whitespace-nowrap py-5 pl-4 pr-3 text-sm sm:pl-0">
                  <div class="flex items-center">
                    <div class="h-11 w-11 flex-shrink-0">
                      <img class="h-11 w-11 rounded-full" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    </div>
                    <div class="ml-4">
                      <div class="font-medium text-gray-900">Lindsay Walton</div>
                      <div class="mt-1 text-gray-500">lindsay.walton@example.com</div>
                    </div>
                  </div>
                </td>
                <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                  <div class="text-gray-900">Front-end Developer</div>
                  <div class="mt-1 text-gray-500">Optimization</div>
                </td>
                <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                  <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Active</span>
                </td>
                <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">Member</td>
                <td class="relative whitespace-nowrap py-5 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                  <a href="#" class="text-brands hover:text-indigo-900 mr-4">Edit<span class="sr-only">, Lindsay Walton</span></a>
                  <a href="#" class="text-brands hover:text-indigo-900">Hapus<span class="sr-only">, Lindsay Walton</span></a>
                </td>
              </tr>
              <tr>
                <td class="whitespace-nowrap py-5 pl-4 pr-3 text-sm sm:pl-0">
                  <div class="flex items-center">
                    <div class="h-11 w-11 flex-shrink-0">
                      <img class="h-11 w-11 rounded-full" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    </div>
                    <div class="ml-4">
                      <div class="font-medium text-gray-900">Lindsay Walton</div>
                      <div class="mt-1 text-gray-500">lindsay.walton@example.com</div>
                    </div>
                  </div>
                </td>
                <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                  <div class="text-gray-900">Front-end Developer</div>
                  <div class="mt-1 text-gray-500">Optimization</div>
                </td>
                <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                  <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Active</span>
                </td>
                <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">Member</td>
                <td class="relative whitespace-nowrap py-5 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                  <a href="#" class="text-brands hover:text-indigo-900 mr-4">Edit<span class="sr-only">, Lindsay Walton</span></a>
                  <a href="#" class="text-brands hover:text-indigo-900">Hapus<span class="sr-only">, Lindsay Walton</span></a>
                </td>
              </tr>
              <tr>
                <td class="whitespace-nowrap py-5 pl-4 pr-3 text-sm sm:pl-0">
                  <div class="flex items-center">
                    <div class="h-11 w-11 flex-shrink-0">
                      <img class="h-11 w-11 rounded-full" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    </div>
                    <div class="ml-4">
                      <div class="font-medium text-gray-900">Lindsay Walton</div>
                      <div class="mt-1 text-gray-500">lindsay.walton@example.com</div>
                    </div>
                  </div>
                </td>
                <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                  <div class="text-gray-900">Front-end Developer</div>
                  <div class="mt-1 text-gray-500">Optimization</div>
                </td>
                <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                  <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Active</span>
                </td>
                <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">Member</td>
                <td class="relative whitespace-nowrap py-5 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                  <a href="#" class="text-brands hover:text-indigo-900 mr-4">Edit<span class="sr-only">, Lindsay Walton</span></a>
                  <a href="#" class="text-brands hover:text-indigo-900">Hapus<span class="sr-only">, Lindsay Walton</span></a>
                </td>
              </tr>
              <tr>
                <td class="whitespace-nowrap py-5 pl-4 pr-3 text-sm sm:pl-0">
                  <div class="flex items-center">
                    <div class="h-11 w-11 flex-shrink-0">
                      <img class="h-11 w-11 rounded-full" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    </div>
                    <div class="ml-4">
                      <div class="font-medium text-gray-900">Lindsay Walton</div>
                      <div class="mt-1 text-gray-500">lindsay.walton@example.com</div>
                    </div>
                  </div>
                </td>
                <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                  <div class="text-gray-900">Front-end Developer</div>
                  <div class="mt-1 text-gray-500">Optimization</div>
                </td>
                <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                  <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Active</span>
                </td>
                <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">Member</td>
                <td class="relative whitespace-nowrap py-5 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                  <a href="#" class="text-brands hover:text-indigo-900 mr-4">Edit<span class="sr-only">, Lindsay Walton</span></a>
                  <a href="#" class="text-brands hover:text-indigo-900">Hapus<span class="sr-only">, Lindsay Walton</span></a>
                </td>
              </tr>
              <tr>
                <td class="whitespace-nowrap py-5 pl-4 pr-3 text-sm sm:pl-0">
                  <div class="flex items-center">
                    <div class="h-11 w-11 flex-shrink-0">
                      <img class="h-11 w-11 rounded-full" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    </div>
                    <div class="ml-4">
                      <div class="font-medium text-gray-900">Lindsay Walton</div>
                      <div class="mt-1 text-gray-500">lindsay.walton@example.com</div>
                    </div>
                  </div>
                </td>
                <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                  <div class="text-gray-900">Front-end Developer</div>
                  <div class="mt-1 text-gray-500">Optimization</div>
                </td>
                <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                  <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Active</span>
                </td>
                <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">Member</td>
                <td class="relative whitespace-nowrap py-5 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                  <a href="#" class="text-brands hover:text-indigo-900 mr-4">Edit<span class="sr-only">, Lindsay Walton</span></a>
                  <a href="#" class="text-brands hover:text-indigo-900">Hapus<span class="sr-only">, Lindsay Walton</span></a>
                </td>
              </tr>
              <tr>
                <td class="whitespace-nowrap py-5 pl-4 pr-3 text-sm sm:pl-0">
                  <div class="flex items-center">
                    <div class="h-11 w-11 flex-shrink-0">
                      <img class="h-11 w-11 rounded-full" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    </div>
                    <div class="ml-4">
                      <div class="font-medium text-gray-900">Lindsay Walton</div>
                      <div class="mt-1 text-gray-500">lindsay.walton@example.com</div>
                    </div>
                  </div>
                </td>
                <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                  <div class="text-gray-900">Front-end Developer</div>
                  <div class="mt-1 text-gray-500">Optimization</div>
                </td>
                <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                  <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Active</span>
                </td>
                <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">Member</td>
                <td class="relative whitespace-nowrap py-5 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                  <a href="#" class="text-brands hover:text-indigo-900 mr-4">Edit<span class="sr-only">, Lindsay Walton</span></a>
                  <a href="#" class="text-brands hover:text-indigo-900">Hapus<span class="sr-only">, Lindsay Walton</span></a>
                </td>
              </tr>
              <tr>
                <td class="whitespace-nowrap py-5 pl-4 pr-3 text-sm sm:pl-0">
                  <div class="flex items-center">
                    <div class="h-11 w-11 flex-shrink-0">
                      <img class="h-11 w-11 rounded-full" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    </div>
                    <div class="ml-4">
                      <div class="font-medium text-gray-900">Lindsay Walton</div>
                      <div class="mt-1 text-gray-500">lindsay.walton@example.com</div>
                    </div>
                  </div>
                </td>
                <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                  <div class="text-gray-900">Front-end Developer</div>
                  <div class="mt-1 text-gray-500">Optimization</div>
                </td>
                <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                  <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Active</span>
                </td>
                <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">Member</td>
                <td class="relative whitespace-nowrap py-5 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                  <a href="#" class="text-brands hover:text-indigo-900 mr-4">Edit<span class="sr-only">, Lindsay Walton</span></a>
                  <a href="#" class="text-brands hover:text-indigo-900">Hapus<span class="sr-only">, Lindsay Walton</span></a>
                </td>
              </tr>
              <tr>
                <td class="whitespace-nowrap py-5 pl-4 pr-3 text-sm sm:pl-0">
                  <div class="flex items-center">
                    <div class="h-11 w-11 flex-shrink-0">
                      <img class="h-11 w-11 rounded-full" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    </div>
                    <div class="ml-4">
                      <div class="font-medium text-gray-900">Lindsay Walton</div>
                      <div class="mt-1 text-gray-500">lindsay.walton@example.com</div>
                    </div>
                  </div>
                </td>
                <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                  <div class="text-gray-900">Front-end Developer</div>
                  <div class="mt-1 text-gray-500">Optimization</div>
                </td>
                <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                  <span class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/20">Deactive</span>
                </td>
                <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">Member</td>
                <td class="relative whitespace-nowrap py-5 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                  <a href="#" class="text-brands hover:text-indigo-900 mr-4">Edit<span class="sr-only">, Lindsay Walton</span></a>
                  <a href="#" class="text-brands hover:text-indigo-900">Hapus<span class="sr-only">, Lindsay Walton</span></a>
                </td>
              </tr>
              <tr>
                <td class="whitespace-nowrap py-5 pl-4 pr-3 text-sm sm:pl-0">
                  <div class="flex items-center">
                    <div class="h-11 w-11 flex-shrink-0">
                      <img class="h-11 w-11 rounded-full" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    </div>
                    <div class="ml-4">
                      <div class="font-medium text-gray-900">Lindsay Walton</div>
                      <div class="mt-1 text-gray-500">lindsay.walton@example.com</div>
                    </div>
                  </div>
                </td>
                <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                  <div class="text-gray-900">Front-end Developer</div>
                  <div class="mt-1 text-gray-500">Optimization</div>
                </td>
                <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                  <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Active</span>
                </td>
                <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">Member</td>
                <td class="relative whitespace-nowrap py-5 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                  <a href="#" class="text-brands hover:text-indigo-900 mr-4">Edit<span class="sr-only">, Lindsay Walton</span></a>
                  <a href="#" class="text-brands hover:text-indigo-900">Hapus<span class="sr-only">, Lindsay Walton</span></a>
                </td>
              </tr>
              <tr>
                <td class="whitespace-nowrap py-5 pl-4 pr-3 text-sm sm:pl-0">
                  <div class="flex items-center">
                    <div class="h-11 w-11 flex-shrink-0">
                      <img class="h-11 w-11 rounded-full" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    </div>
                    <div class="ml-4">
                      <div class="font-medium text-gray-900">Lindsay Walton</div>
                      <div class="mt-1 text-gray-500">lindsay.walton@example.com</div>
                    </div>
                  </div>
                </td>
                <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                  <div class="text-gray-900">Front-end Developer</div>
                  <div class="mt-1 text-gray-500">Optimization</div>
                </td>
                <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                  <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Active</span>
                </td>
                <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">Member</td>
                <td class="relative whitespace-nowrap py-5 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                  <a href="#" class="text-brands hover:text-indigo-900 mr-4">Edit<span class="sr-only">, Lindsay Walton</span></a>
                  <a href="#" class="text-brands hover:text-indigo-900">Hapus<span class="sr-only">, Lindsay Walton</span></a>
                </td>
              </tr>
  
              <!-- More people... -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <x-pagination></x-pagination>
  </div>




  <div x-show='openMenu2' class="px-4 mt-4 sm:px-6 lg:px-8">
  <x-heading>Tabel Layanan</x-heading>
  <div class="mt-8 flow-root">
    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
        <table class="min-w-full divide-y divide-gray-300">
          <thead>
            <tr>
              <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Name</th>
              <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Title</th>
              <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Status</th>
              <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Role</th>
              <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                <span class="sr-only">Edit</span>
              </th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200 bg-white">
            <tr>
              <td class="whitespace-nowrap py-5 pl-4 pr-3 text-sm sm:pl-0">
                <div class="flex items-center">
                  <div class="h-11 w-11 flex-shrink-0">
                    <img class="h-11 w-11 rounded-full" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                  </div>
                  <div class="ml-4">
                    <div class="font-medium text-gray-900">Lindsay Walton</div>
                    <div class="mt-1 text-gray-500">lindsay.walton@example.com</div>
                  </div>
                </div>
              </td>
              <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                <div class="text-gray-900">Front-end Developer</div>
                <div class="mt-1 text-gray-500">Optimization</div>
              </td>
              <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Active</span>
              </td>
              <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">Member</td>
              <td class="relative whitespace-nowrap py-5 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                <a href="#" class="text-brands hover:text-indigo-900 mr-4">Edit<span class="sr-only">, Lindsay Walton</span></a>
                <a href="#" class="text-brands hover:text-indigo-900">Hapus<span class="sr-only">, Lindsay Walton</span></a>
              </td>
            </tr>
            <tr>
              <td class="whitespace-nowrap py-5 pl-4 pr-3 text-sm sm:pl-0">
                <div class="flex items-center">
                  <div class="h-11 w-11 flex-shrink-0">
                    <img class="h-11 w-11 rounded-full" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                  </div>
                  <div class="ml-4">
                    <div class="font-medium text-gray-900">Lindsay Walton</div>
                    <div class="mt-1 text-gray-500">lindsay.walton@example.com</div>
                  </div>
                </div>
              </td>
              <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                <div class="text-gray-900">Front-end Developer</div>
                <div class="mt-1 text-gray-500">Optimization</div>
              </td>
              <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Active</span>
              </td>
              <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">Member</td>
              <td class="relative whitespace-nowrap py-5 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                <a href="#" class="text-brands hover:text-indigo-900 mr-4">Edit<span class="sr-only">, Lindsay Walton</span></a>
                <a href="#" class="text-brands hover:text-indigo-900">Hapus<span class="sr-only">, Lindsay Walton</span></a>
              </td>
            </tr>
            <tr>
              <td class="whitespace-nowrap py-5 pl-4 pr-3 text-sm sm:pl-0">
                <div class="flex items-center">
                  <div class="h-11 w-11 flex-shrink-0">
                    <img class="h-11 w-11 rounded-full" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                  </div>
                  <div class="ml-4">
                    <div class="font-medium text-gray-900">Lindsay Walton</div>
                    <div class="mt-1 text-gray-500">lindsay.walton@example.com</div>
                  </div>
                </div>
              </td>
              <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                <div class="text-gray-900">Front-end Developer</div>
                <div class="mt-1 text-gray-500">Optimization</div>
              </td>
              <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Active</span>
              </td>
              <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">Member</td>
              <td class="relative whitespace-nowrap py-5 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                <a href="#" class="text-brands hover:text-indigo-900 mr-4">Edit<span class="sr-only">, Lindsay Walton</span></a>
                <a href="#" class="text-brands hover:text-indigo-900">Hapus<span class="sr-only">, Lindsay Walton</span></a>
              </td>
            </tr>
            <tr>
              <td class="whitespace-nowrap py-5 pl-4 pr-3 text-sm sm:pl-0">
                <div class="flex items-center">
                  <div class="h-11 w-11 flex-shrink-0">
                    <img class="h-11 w-11 rounded-full" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                  </div>
                  <div class="ml-4">
                    <div class="font-medium text-gray-900">Lindsay Walton</div>
                    <div class="mt-1 text-gray-500">lindsay.walton@example.com</div>
                  </div>
                </div>
              </td>
              <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                <div class="text-gray-900">Front-end Developer</div>
                <div class="mt-1 text-gray-500">Optimization</div>
              </td>
              <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Active</span>
              </td>
              <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">Member</td>
              <td class="relative whitespace-nowrap py-5 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                <a href="#" class="text-brands hover:text-indigo-900 mr-4">Edit<span class="sr-only">, Lindsay Walton</span></a>
                <a href="#" class="text-brands hover:text-indigo-900">Hapus<span class="sr-only">, Lindsay Walton</span></a>
              </td>
            </tr>
            <tr>
              <td class="whitespace-nowrap py-5 pl-4 pr-3 text-sm sm:pl-0">
                <div class="flex items-center">
                  <div class="h-11 w-11 flex-shrink-0">
                    <img class="h-11 w-11 rounded-full" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                  </div>
                  <div class="ml-4">
                    <div class="font-medium text-gray-900">Lindsay Walton</div>
                    <div class="mt-1 text-gray-500">lindsay.walton@example.com</div>
                  </div>
                </div>
              </td>
              <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                <div class="text-gray-900">Front-end Developer</div>
                <div class="mt-1 text-gray-500">Optimization</div>
              </td>
              <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Active</span>
              </td>
              <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">Member</td>
              <td class="relative whitespace-nowrap py-5 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                <a href="#" class="text-brands hover:text-indigo-900 mr-4">Edit<span class="sr-only">, Lindsay Walton</span></a>
                <a href="#" class="text-brands hover:text-indigo-900">Hapus<span class="sr-only">, Lindsay Walton</span></a>
              </td>
            </tr>
            <tr>
              <td class="whitespace-nowrap py-5 pl-4 pr-3 text-sm sm:pl-0">
                <div class="flex items-center">
                  <div class="h-11 w-11 flex-shrink-0">
                    <img class="h-11 w-11 rounded-full" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                  </div>
                  <div class="ml-4">
                    <div class="font-medium text-gray-900">Lindsay Walton</div>
                    <div class="mt-1 text-gray-500">lindsay.walton@example.com</div>
                  </div>
                </div>
              </td>
              <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                <div class="text-gray-900">Front-end Developer</div>
                <div class="mt-1 text-gray-500">Optimization</div>
              </td>
              <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Active</span>
              </td>
              <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">Member</td>
              <td class="relative whitespace-nowrap py-5 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                <a href="#" class="text-brands hover:text-indigo-900 mr-4">Edit<span class="sr-only">, Lindsay Walton</span></a>
                <a href="#" class="text-brands hover:text-indigo-900">Hapus<span class="sr-only">, Lindsay Walton</span></a>
              </td>
            </tr>
            <tr>
              <td class="whitespace-nowrap py-5 pl-4 pr-3 text-sm sm:pl-0">
                <div class="flex items-center">
                  <div class="h-11 w-11 flex-shrink-0">
                    <img class="h-11 w-11 rounded-full" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                  </div>
                  <div class="ml-4">
                    <div class="font-medium text-gray-900">Lindsay Walton</div>
                    <div class="mt-1 text-gray-500">lindsay.walton@example.com</div>
                  </div>
                </div>
              </td>
              <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                <div class="text-gray-900">Front-end Developer</div>
                <div class="mt-1 text-gray-500">Optimization</div>
              </td>
              <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Active</span>
              </td>
              <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">Member</td>
              <td class="relative whitespace-nowrap py-5 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                <a href="#" class="text-brands hover:text-indigo-900 mr-4">Edit<span class="sr-only">, Lindsay Walton</span></a>
                <a href="#" class="text-brands hover:text-indigo-900">Hapus<span class="sr-only">, Lindsay Walton</span></a>
              </td>
            </tr>
            <tr>
              <td class="whitespace-nowrap py-5 pl-4 pr-3 text-sm sm:pl-0">
                <div class="flex items-center">
                  <div class="h-11 w-11 flex-shrink-0">
                    <img class="h-11 w-11 rounded-full" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                  </div>
                  <div class="ml-4">
                    <div class="font-medium text-gray-900">Lindsay Walton</div>
                    <div class="mt-1 text-gray-500">lindsay.walton@example.com</div>
                  </div>
                </div>
              </td>
              <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                <div class="text-gray-900">Front-end Developer</div>
                <div class="mt-1 text-gray-500">Optimization</div>
              </td>
              <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                <span class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/20">Deactive</span>
              </td>
              <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">Member</td>
              <td class="relative whitespace-nowrap py-5 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                <a href="#" class="text-brands hover:text-indigo-900 mr-4">Edit<span class="sr-only">, Lindsay Walton</span></a>
                <a href="#" class="text-brands hover:text-indigo-900">Hapus<span class="sr-only">, Lindsay Walton</span></a>
              </td>
            </tr>
            <tr>
              <td class="whitespace-nowrap py-5 pl-4 pr-3 text-sm sm:pl-0">
                <div class="flex items-center">
                  <div class="h-11 w-11 flex-shrink-0">
                    <img class="h-11 w-11 rounded-full" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                  </div>
                  <div class="ml-4">
                    <div class="font-medium text-gray-900">Lindsay Walton</div>
                    <div class="mt-1 text-gray-500">lindsay.walton@example.com</div>
                  </div>
                </div>
              </td>
              <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                <div class="text-gray-900">Front-end Developer</div>
                <div class="mt-1 text-gray-500">Optimization</div>
              </td>
              <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Active</span>
              </td>
              <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">Member</td>
              <td class="relative whitespace-nowrap py-5 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                <a href="#" class="text-brands hover:text-indigo-900 mr-4">Edit<span class="sr-only">, Lindsay Walton</span></a>
                <a href="#" class="text-brands hover:text-indigo-900">Hapus<span class="sr-only">, Lindsay Walton</span></a>
              </td>
            </tr>
            <tr>
              <td class="whitespace-nowrap py-5 pl-4 pr-3 text-sm sm:pl-0">
                <div class="flex items-center">
                  <div class="h-11 w-11 flex-shrink-0">
                    <img class="h-11 w-11 rounded-full" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                  </div>
                  <div class="ml-4">
                    <div class="font-medium text-gray-900">Lindsay Walton</div>
                    <div class="mt-1 text-gray-500">lindsay.walton@example.com</div>
                  </div>
                </div>
              </td>
              <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                <div class="text-gray-900">Front-end Developer</div>
                <div class="mt-1 text-gray-500">Optimization</div>
              </td>
              <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Active</span>
              </td>
              <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">Member</td>
              <td class="relative whitespace-nowrap py-5 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                <a href="#" class="text-brands hover:text-indigo-900 mr-4">Edit<span class="sr-only">, Lindsay Walton</span></a>
                <a href="#" class="text-brands hover:text-indigo-900">Hapus<span class="sr-only">, Lindsay Walton</span></a>
              </td>
            </tr>

            <!-- More people... -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <x-pagination></x-pagination>
</div>

</div>

  
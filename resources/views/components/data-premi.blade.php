<ul x-data="{openTab1:false, openTab2:false, openTab3:false}"  role="list" class="grid grid-cols-1 gap-x-6 gap-y-8 lg:grid-cols-3 xl:gap-x-8">
    <li  class="overflow-hidden rounded-xl border border-gray-200">
      <div  class="flex items-center gap-x-4 border-b border-gray-900/5 bg-gray-50 p-6">
        <img src="https://tailwindui.com/img/logos/48x48/tuple.svg" alt="Tuple" class="h-12 w-12 flex-none rounded-lg bg-white object-cover ring-1 ring-gray-900/10">
        <div class="text-sm font-medium leading-6 text-gray-900">AMCO 5K10 AFD03</div>
        <div class="relative ml-auto" >
          <button @click="openTab1 = !openTab1" @click.outside ="openTab1 = false" type="button" class="-m-2.5 block p-2.5 text-gray-400 hover:text-gray-500" id="options-menu-0-button" aria-expanded="false" aria-haspopup="true">
            <span class="sr-only">Open options</span>
            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path d="M3 10a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM8.5 10a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM15.5 8.5a1.5 1.5 0 100 3 1.5 1.5 0 000-3z" />
            </svg>
          </button>
  
          <!--
            Dropdown menu, show/hide based on menu state.
  
            Entering: "transition ease-out duration-100"
              From: "transform opacity-0 scale-95"
              To: "transform opacity-100 scale-100"
            Leaving: "transition ease-in duration-75"
              From: "transform opacity-100 scale-100"
              To: "transform opacity-0 scale-95"
          -->
          <div x-show="openTab1" class="absolute right-0 z-10 mt-0.5 w-32 origin-top-right rounded-md bg-white py-2 shadow-lg ring-1 ring-gray-900/5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="options-menu-0-button" tabindex="-1">
            <!-- Active: "bg-gray-50", Not Active: "" -->
            <a href="#" class="block px-3 py-1 text-sm leading-6 text-gray-900" role="menuitem" tabindex="-1" id="options-menu-0-item-0">Preview<span class="sr-only">, Tuple</span></a>
            <a href="#" class="block px-3 py-1 text-sm leading-6 text-gray-900" role="menuitem" tabindex="-1" id="options-menu-0-item-1">Download<span class="sr-only">, Tuple</span></a>
          </div>
        </div>
      </div>
      <dl class="-my-3 divide-y divide-gray-100 px-6 py-4 text-sm leading-6">
        <div class="flex justify-between gap-x-4 py-3">
          <dt class="text-gray-500">Tanggal Input</dt>
          <dd class="text-gray-700"><time datetime="2022-12-13">December 13, 2022</time></dd>
        </div>
        <div class="flex justify-between gap-x-4 py-3">
          <dt class="text-gray-500">Total</dt>
          <dd class="flex items-start gap-x-4">
            <div class="font-medium text-gray-900">Rp 200.000</div>
            <div class="rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/10">Tidak Terlampir</div>
          </dd>
        </div>
      </dl>
    </li>
    <li class="overflow-hidden rounded-xl border border-gray-200">
      <div class="flex items-center gap-x-4 border-b border-gray-900/5 bg-gray-50 p-6">
        <img src="https://tailwindui.com/img/logos/48x48/tuple.svg" alt="SavvyCal" class="h-12 w-12 flex-none rounded-lg bg-white object-cover ring-1 ring-gray-900/10">
        <div class="text-sm font-medium leading-6 text-gray-900">AMCO 5P10 5P10</div>
        <div class="relative ml-auto">
          <button @click="openTab2 = !openTab2" @click.outside ="openTab2 = false" type="button" class="-m-2.5 block p-2.5 text-gray-400 hover:text-gray-500" id="options-menu-1-button" aria-expanded="false" aria-haspopup="true">
            <span class="sr-only">Open options</span>
            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path d="M3 10a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM8.5 10a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM15.5 8.5a1.5 1.5 0 100 3 1.5 1.5 0 000-3z" />
            </svg>
          </button>
  
          <!--
            Dropdown menu, show/hide based on menu state.
  
            Entering: "transition ease-out duration-100"
              From: "transform opacity-0 scale-95"
              To: "transform opacity-100 scale-100"
            Leaving: "transition ease-in duration-75"
              From: "transform opacity-100 scale-100"
              To: "transform opacity-0 scale-95"
          -->
          <div x-show="openTab2" class="absolute right-0 z-10 mt-0.5 w-32 origin-top-right rounded-md bg-white py-2 shadow-lg ring-1 ring-gray-900/5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="options-menu-1-button" tabindex="-1">
            <!-- Active: "bg-gray-50", Not Active: "" -->
            <a href="#" class="block px-3 py-1 text-sm leading-6 text-gray-900" role="menuitem" tabindex="-1" id="options-menu-1-item-0">Preview<span class="sr-only">, SavvyCal</span></a>
            <a href="#" class="block px-3 py-1 text-sm leading-6 text-gray-900" role="menuitem" tabindex="-1" id="options-menu-1-item-1">Download<span class="sr-only">, SavvyCal</span></a>
          </div>
        </div>
      </div>
      <dl class="-my-3 divide-y divide-gray-100 px-6 py-4 text-sm leading-6">
        <div class="flex justify-between gap-x-4 py-3">
          <dt class="text-gray-500">Tanggal Input</dt>
          <dd class="text-gray-700"><time datetime="2023-01-22">January 22, 2023</time></dd>
        </div>
        <div class="flex justify-between gap-x-4 py-3">
          <dt class="text-gray-500">Total</dt>
          <dd class="flex items-start gap-x-2">
            <div class="font-medium text-gray-900">Rp 140.000</div>
            <div class="rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Terlampir</div>
          </dd>
        </div>
      </dl>
    </li>
    <li  class="overflow-hidden rounded-xl border border-gray-200">
      <div class="flex items-center gap-x-4 border-b border-gray-900/5 bg-gray-50 p-6">
        <img src="https://tailwindui.com/img/logos/48x48/tuple.svg" alt="Reform" class="h-12 w-12 flex-none rounded-lg bg-white object-cover ring-1 ring-gray-900/10">
        <div class="text-sm font-medium leading-6 text-gray-900">AMCO 5P10 5P14</div>
        <div class="relative ml-auto">
          <button @click="openTab3 = !openTab3" @click.outside ="openTab3 = false" type="button" class="-m-2.5 block p-2.5 text-gray-400 hover:text-gray-500" id="options-menu-2-button" aria-expanded="false" aria-haspopup="true">
            <span class="sr-only">Open options</span>
            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path d="M3 10a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM8.5 10a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM15.5 8.5a1.5 1.5 0 100 3 1.5 1.5 0 000-3z" />
            </svg>
          </button>
  
          <!--
            Dropdown menu, show/hide based on menu state.
  
            Entering: "transition ease-out duration-100"
              From: "transform opacity-0 scale-95"
              To: "transform opacity-100 scale-100"
            Leaving: "transition ease-in duration-75"
              From: "transform opacity-100 scale-100"
              To: "transform opacity-0 scale-95"
          -->
          <div x-show="openTab3" class="absolute right-0 z-10 mt-0.5 w-32 origin-top-right rounded-md bg-white py-2 shadow-lg ring-1 ring-gray-900/5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="options-menu-2-button" tabindex="-1">
            <!-- Active: "bg-gray-50", Not Active: "" -->
            <a href="#" class="block px-3 py-1 text-sm leading-6 text-gray-900" role="menuitem" tabindex="-1" id="options-menu-2-item-0">Preview<span class="sr-only">, Reform</span></a>
            <a href="#" class="block px-3 py-1 text-sm leading-6 text-gray-900" role="menuitem" tabindex="-1" id="options-menu-2-item-1">Download<span class="sr-only">, Reform</span></a>
          </div>
        </div>
      </div>
      <dl class="-my-3 divide-y divide-gray-100 px-6 py-4 text-sm leading-6">
        <div class="flex justify-between gap-x-4 py-3">
          <dt class="text-gray-500">Tanggal Input</dt>
          <dd class="text-gray-700"><time datetime="2023-01-23">January 23, 2023</time></dd>
        </div>
        <div class="flex justify-between gap-x-4 py-3">
          <dt class="text-gray-500">Total</dt>
          <dd class="flex items-start gap-x-2">
            <div class="font-medium text-gray-900">Rp 7.600.000</div>
            <div class="rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Terlampir</div>
          </dd>
        </div>
      </dl>
    </li>
    <li  class="overflow-hidden rounded-xl border border-gray-200">
        <div class="flex items-center gap-x-4 border-b border-gray-900/5 bg-gray-50 p-6">
          <img src="https://tailwindui.com/img/logos/48x48/tuple.svg" alt="Reform" class="h-12 w-12 flex-none rounded-lg bg-white object-cover ring-1 ring-gray-900/10">
          <div class="text-sm font-medium leading-6 text-gray-900">AMCO 5P10 5P14</div>
          <div class="relative ml-auto">
            <button @click="openTab3 = !openTab3" @click.outside ="openTab3 = false" type="button" class="-m-2.5 block p-2.5 text-gray-400 hover:text-gray-500" id="options-menu-2-button" aria-expanded="false" aria-haspopup="true">
              <span class="sr-only">Open options</span>
              <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path d="M3 10a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM8.5 10a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM15.5 8.5a1.5 1.5 0 100 3 1.5 1.5 0 000-3z" />
              </svg>
            </button>
    
            <!--
              Dropdown menu, show/hide based on menu state.
    
              Entering: "transition ease-out duration-100"
                From: "transform opacity-0 scale-95"
                To: "transform opacity-100 scale-100"
              Leaving: "transition ease-in duration-75"
                From: "transform opacity-100 scale-100"
                To: "transform opacity-0 scale-95"
            -->
            <div x-show="openTab3" class="absolute right-0 z-10 mt-0.5 w-32 origin-top-right rounded-md bg-white py-2 shadow-lg ring-1 ring-gray-900/5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="options-menu-2-button" tabindex="-1">
              <!-- Active: "bg-gray-50", Not Active: "" -->
              <a href="#" class="block px-3 py-1 text-sm leading-6 text-gray-900" role="menuitem" tabindex="-1" id="options-menu-2-item-0">Preview<span class="sr-only">, Reform</span></a>
              <a href="#" class="block px-3 py-1 text-sm leading-6 text-gray-900" role="menuitem" tabindex="-1" id="options-menu-2-item-1">Download<span class="sr-only">, Reform</span></a>
            </div>
          </div>
        </div>
        <dl class="-my-3 divide-y divide-gray-100 px-6 py-4 text-sm leading-6">
          <div class="flex justify-between gap-x-4 py-3">
            <dt class="text-gray-500">Tanggal Input</dt>
            <dd class="text-gray-700"><time datetime="2023-01-23">January 23, 2023</time></dd>
          </div>
          <div class="flex justify-between gap-x-4 py-3">
            <dt class="text-gray-500">Total</dt>
            <dd class="flex items-start gap-x-2">
              <div class="font-medium text-gray-900">Rp 7.600.000</div>
              <div class="rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Terlampir</div>
            </dd>
          </div>
        </dl>
      </li>
      <li  class="overflow-hidden rounded-xl border border-gray-200">
        <div class="flex items-center gap-x-4 border-b border-gray-900/5 bg-gray-50 p-6">
          <img src="https://tailwindui.com/img/logos/48x48/tuple.svg" alt="Reform" class="h-12 w-12 flex-none rounded-lg bg-white object-cover ring-1 ring-gray-900/10">
          <div class="text-sm font-medium leading-6 text-gray-900">AMCO 5P10 5P14</div>
          <div class="relative ml-auto">
            <button @click="openTab3 = !openTab3" @click.outside ="openTab3 = false" type="button" class="-m-2.5 block p-2.5 text-gray-400 hover:text-gray-500" id="options-menu-2-button" aria-expanded="false" aria-haspopup="true">
              <span class="sr-only">Open options</span>
              <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path d="M3 10a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM8.5 10a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM15.5 8.5a1.5 1.5 0 100 3 1.5 1.5 0 000-3z" />
              </svg>
            </button>
    
            <!--
              Dropdown menu, show/hide based on menu state.
    
              Entering: "transition ease-out duration-100"
                From: "transform opacity-0 scale-95"
                To: "transform opacity-100 scale-100"
              Leaving: "transition ease-in duration-75"
                From: "transform opacity-100 scale-100"
                To: "transform opacity-0 scale-95"
            -->
            <div x-show="openTab3" class="absolute right-0 z-10 mt-0.5 w-32 origin-top-right rounded-md bg-white py-2 shadow-lg ring-1 ring-gray-900/5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="options-menu-2-button" tabindex="-1">
              <!-- Active: "bg-gray-50", Not Active: "" -->
              <a href="#" class="block px-3 py-1 text-sm leading-6 text-gray-900" role="menuitem" tabindex="-1" id="options-menu-2-item-0">Preview<span class="sr-only">, Reform</span></a>
              <a href="#" class="block px-3 py-1 text-sm leading-6 text-gray-900" role="menuitem" tabindex="-1" id="options-menu-2-item-1">Download<span class="sr-only">, Reform</span></a>
            </div>
          </div>
        </div>
        <dl class="-my-3 divide-y divide-gray-100 px-6 py-4 text-sm leading-6">
          <div class="flex justify-between gap-x-4 py-3">
            <dt class="text-gray-500">Tanggal Input</dt>
            <dd class="text-gray-700"><time datetime="2023-01-23">January 23, 2023</time></dd>
          </div>
          <div class="flex justify-between gap-x-4 py-3">
            <dt class="text-gray-500">Total</dt>
            <dd class="flex items-start gap-x-2">
              <div class="font-medium text-gray-900">Rp 7.600.000</div>
              <div class="rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Terlampir</div>
            </dd>
          </div>
        </dl>
      </li>
      <li  class="overflow-hidden rounded-xl border border-gray-200">
        <div class="flex items-center gap-x-4 border-b border-gray-900/5 bg-gray-50 p-6">
          <img src="https://tailwindui.com/img/logos/48x48/tuple.svg" alt="Reform" class="h-12 w-12 flex-none rounded-lg bg-white object-cover ring-1 ring-gray-900/10">
          <div class="text-sm font-medium leading-6 text-gray-900">AMCO 5P10 5P14</div>
          <div class="relative ml-auto">
            <button @click="openTab3 = !openTab3" @click.outside ="openTab3 = false" type="button" class="-m-2.5 block p-2.5 text-gray-400 hover:text-gray-500" id="options-menu-2-button" aria-expanded="false" aria-haspopup="true">
              <span class="sr-only">Open options</span>
              <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path d="M3 10a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM8.5 10a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM15.5 8.5a1.5 1.5 0 100 3 1.5 1.5 0 000-3z" />
              </svg>
            </button>
    
            <!--
              Dropdown menu, show/hide based on menu state.
    
              Entering: "transition ease-out duration-100"
                From: "transform opacity-0 scale-95"
                To: "transform opacity-100 scale-100"
              Leaving: "transition ease-in duration-75"
                From: "transform opacity-100 scale-100"
                To: "transform opacity-0 scale-95"
            -->
            <div x-show="openTab3" class="absolute right-0 z-10 mt-0.5 w-32 origin-top-right rounded-md bg-white py-2 shadow-lg ring-1 ring-gray-900/5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="options-menu-2-button" tabindex="-1">
              <!-- Active: "bg-gray-50", Not Active: "" -->
              <a href="#" class="block px-3 py-1 text-sm leading-6 text-gray-900" role="menuitem" tabindex="-1" id="options-menu-2-item-0">Preview<span class="sr-only">, Reform</span></a>
              <a href="#" class="block px-3 py-1 text-sm leading-6 text-gray-900" role="menuitem" tabindex="-1" id="options-menu-2-item-1">Download<span class="sr-only">, Reform</span></a>
            </div>
          </div>
        </div>
        <dl class="-my-3 divide-y divide-gray-100 px-6 py-4 text-sm leading-6">
          <div class="flex justify-between gap-x-4 py-3">
            <dt class="text-gray-500">Tanggal Input</dt>
            <dd class="text-gray-700"><time datetime="2023-01-23">January 23, 2023</time></dd>
          </div>
          <div class="flex justify-between gap-x-4 py-3">
            <dt class="text-gray-500">Total</dt>
            <dd class="flex items-start gap-x-2">
              <div class="font-medium text-gray-900">Rp 7.600.000</div>
              <div class="rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Terlampir</div>
            </dd>
          </div>
        </dl>
      </li>
  </ul>
  
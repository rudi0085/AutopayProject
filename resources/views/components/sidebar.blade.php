<aside>
    {{-- mobile sidebar --}}
   <div x-show="openMobile" class="relative z-50 lg:hidden" role="dialog" aria-modal="true"
   x-transition:enter="transition ease-in-linear duration-300"
   x-transition:enter-start="opacity-0 "
   x-transition:enter-end="opacity-100 "
   x-transition:leave="transition ease-in-linear duration-300"
   x-transition:leave-start="opacity-100"
   x-transition:leave-end="opacity-0">
     <!--
       Off-canvas menu backdrop, show/hide based on off-canvas menu state.
 
       Entering: "transition-opacity ease-linear duration-300"
         From: "opacity-0"
         To: "opacity-100"
       Leaving: "transition-opacity ease-linear duration-300"
         From: "opacity-100"
         To: "opacity-0"
     -->
     <div x-show="openMobile" class="fixed inset-0 bg-gray-900/80" aria-hidden="true"></div>
 
     <div  class=" fixed inset-0 flex"
     x-transition:enter="transition ease-in-out duration-300 transform"
     x-transition:enter-start="-translate-x-full "
     x-transition:enter-end="-translate-x-0 "
     x-transition:leave="transition ease-in-out duration-300"
     x-transition:leave-start="-translate-x-0"
     x-transition:leave-end="-translate-x-full">
       <!--
         Off-canvas menu, show/hide based on off-canvas menu state.
 
         Entering: "transition ease-in-out duration-300 transform"
           From: "-translate-x-full"
           To: "translate-x-0"
         Leaving: "transition ease-in-out duration-300 transform"
           From: "translate-x-0"
           To: "-translate-x-full"
       -->
       
       <div 
           x-transition:enter="transition ease-in-out duration-300 transform"
           x-transition:enter-start="opacity-0 "
           x-transition:enter-end="opacity-100 "
           x-translate:enter="x-full"
           x-transition:leave="transition ease-in-out duration-300"
           x-transition:leave-start="opacity-100"
           x-transition:leave-end="opacity-0"
       class="relative mr-16 flex w-full max-w-xs flex-1 ">
         <!--
           Close button, show/hide based on off-canvas menu state.
 
           Entering: "ease-in-out duration-300"
             From: "opacity-0"
             To: "opacity-100"
           Leaving: "ease-in-out duration-300"
             From: "opacity-100"
             To: "opacity-0"
         -->
         <div x-show="openMobile"
          x-transition:enter="transition ease-in-out duration-300"
           x-transition:enter-start="opacity-0 "
           x-transition:enter-end="opacity-100 "
           x-transition:leave="transition ease-in-out duration-300"
           x-transition:leave-start="opacity-100"
           x-transition:leave-end="opacity-0"  
         class="absolute left-full top-0 flex w-16 justify-center pt-5">
           <button @click="openMobile = !openMobile" @click.outside="openMobile = true" type="button" class="-m-2.5 p-2.5 lg:hidden">
             <span class="sr-only">Close sidebar</span>
             <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
               <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
             </svg>
           </button>
         </div>
 
         <!-- Sidebar component, swap this element with another sidebar if you like -->
         
           <div 
           x-show="openMobile" 
           x-transition:enter="transition ease-in-out duration-300"
           x-transition:enter-start="opacity-0 "
           x-transition:enter-end="opacity-100 "
           x-transition:leave="transition ease-in-out duration-300"
           x-transition:leave-start="opacity-100"
           x-transition:leave-end="opacity-0"
           class="flex grow flex-col gap-y-5 overflow-y-auto bg-white px-6 pb-2 lg:">
             <div class="flex h-16 shrink-0 items-center">
               <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
             </div>
             <nav class="flex flex-1 flex-col">
               <ul role="list" class="flex flex-1 flex-col gap-y-7">
                 <li>
                   <ul role="list" class="-mx-2 space-y-1">

                    <x-nav-link href="/dashboard" :active="request()->is('dashboard')">
                        <svg class="{{ request()->is('dashboard') ? 'text-indigo-600' : 'text-gray-400' }} h-6 w-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" >>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                          </svg>
                          Dashboard
                    </x-nav-link>
                     
                     <x-nav-link href="/setupmaster" :active="request()->is('setupmaster')">
                        <svg class="{{ request()->is('setupmaster') ? 'text-indigo-600' : 'text-gray-400' }} h-6 w-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                          </svg>
                          Setup Master
                    </x-nav-link>
    
                    <x-nav-link href="/efin" :active="request()->is('efin')">
                        <svg class="{{ request()->is('efin') ? 'text-indigo-600' : 'text-gray-400' }} h-6 w-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                          </svg>
                          Efin
                    </x-nav-link>
    
                    <x-nav-link href="/uploadpremi" :active="request()->is('uploadpremi')">
                        <svg class="{{ request()->is('uploadpremi') ? 'text-indigo-600' : 'text-gray-400' }} h-6 w-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                          </svg>
                          Upload Premi
                    </x-nav-link>
    
                    <x-nav-link href="/uploadpotongan" :active="request()->is('uploadpotongan')">
                        <svg class="{{ request()->is('uploadpotongan') ? 'text-indigo-600' : 'text-gray-400' }} h-6 w-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 01-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 011.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 00-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 01-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 00-3.375-3.375h-1.5a1.125 1.125 0 01-1.125-1.125v-1.5a3.375 3.375 0 00-3.375-3.375H9.75" />
                          </svg>
                          Upload Potongan
                    </x-nav-link>
                   
                    <x-nav-link href="/hakakses" :active="request()->is('hakakses')">
                        <svg class="{{ request()->is('hakakses') ? 'text-indigo-600' : 'text-gray-400' }} h-6 w-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                          </svg>
                          Hak Akses
                    </x-nav-link>
                   
                    <x-nav-link href="/hcmmaster" :active="request()->is('hcmmaster')">
                        <svg class="{{ request()->is('hcmmaster') ? 'text-indigo-600' : 'text-gray-400' }} h-6 w-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                          </svg>
                          HCM Master
                    </x-nav-link>
                   
                    <x-nav-link href="/hcmwagetype" :active="request()->is('hcmwagetype')">
                        <svg class="{{ request()->is('hcmwagetype') ? 'text-indigo-600' : 'text-gray-400' }} h-6 w-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                          </svg>
                          HCM Wagetype
                    </x-nav-link>
    
                    <x-nav-link href="/managementsub" :active="request()->is('managementsub')">
                        <svg class="{{ request()->is('managementsub') ? 'text-indigo-600' : 'text-gray-400' }} h-6 w-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                          </svg>
                          Management Sub
                    </x-nav-link>
    
                    <x-nav-link href="/datagajisap" :active="request()->is('datagajisap')">
                        <svg class="{{ request()->is('datagajisap') ? 'text-indigo-600' : 'text-gray-400' }} h-6 w-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                          </svg>
                          Data Gaji SAP
                    </x-nav-link>
    
                    <x-nav-link href="/kompilasigaji" :active="request()->is('kompilasigaji')">
                        <svg class="{{ request()->is('/kompilasigaji') ? 'text-indigo-600' : 'text-gray-400' }} h-6 w-6 shrink-0 text-gray-400 group-hover:text-indigo-600 active:" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                          </svg>
                          Kompilasi Gaji
                    </x-nav-link>
                     
                 <li>
                   <div class="text-xs font-semibold leading-6 text-gray-400">Your teams</div>
                   <ul role="list" class="-mx-2 mt-2 space-y-1">
                     <li>
                       <!-- Current: "bg-gray-50 text-indigo-600", Default: "text-gray-700 hover:text-indigo-600 hover:bg-gray-50" -->
                       <a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                         <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-gray-200 bg-white text-[0.625rem] font-medium text-gray-400 group-hover:border-indigo-600 group-hover:text-indigo-600">H</span>
                         <span class="truncate">Heroicons</span>
                       </a>
                     </li>
                     <li>
                       <a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                         <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-gray-200 bg-white text-[0.625rem] font-medium text-gray-400 group-hover:border-indigo-600 group-hover:text-indigo-600">T</span>
                         <span class="truncate">Tailwind Labs</span>
                       </a>
                     </li>
                     <li>
                       <a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                         <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-gray-200 bg-white text-[0.625rem] font-medium text-gray-400 group-hover:border-indigo-600 group-hover:text-indigo-600">W</span>
                         <span class="truncate">Workcation</span>
                       </a>
                     </li>
                   </ul>
                 </li>
               </ul>
             </nav>
           </div>
        
         
       
       </div>
     </div>
   </div>
 
 
   {{-- Desktop Sidebar --}}
   <div x-show="open"  class="hidden lg:flex lg:fixed lg:inset-y-0 lg:z-50  lg:w-72 lg:flex-col " >
     <!-- Sidebar component, swap this element with another sidebar if you like -->
     <div
     x-transition:enter="transition ease-in-out duration-300 transform"
     x-transition:enter-start="-translate-x-full "
     x-transition:enter-end="-translate-x-0 "
     x-transition:leave="transition ease-in-out duration-300"
     x-transition:leave-start="-translate-x-0"
     x-transition:leave-end="-translate-x-full"
     x-show="open"  class="flex grow flex-col gap-y-5 overflow-y-auto border-r border-gray-200 bg-white px-6 h-full">
      
       {{-- change Logo Here! --}}
       <div class="flex h-16 shrink-0 items-center justify-between">
         <img class="h-8 w-auto" src="src/img/frame.png" alt="logo">
         {{-- button close --}}
         <button @click="open = !open">
           <span class="">
             <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#0D4270"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
           </span>
         </button>
         
       </div>
 
       {{-- Sidebar Mulai --}}
       <nav  class="flex flex-1 flex-col">
         <ul role="list" class="flex flex-1 flex-col gap-y-7">
           <li>
             <ul role="list" class="-mx-2 space-y-1">
               <li>
                 <form action="search" class="flex items-center">
                   <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#0F4C81"><path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"/></svg>
                   <input placeholder="Tulis untuk mencari" class="px-2 py-2 rounded-xl  text-sm font-semibold leading-6 w-full border-none active:border-none focus:outline-none text-grey-500">
                 </form>
               </li>
               
                 <!-- Current: "bg-gray-50 text-indigo-600", Default: "text-gray-700 hover:text-indigo-600 hover:bg-gray-50" -->
                 <x-nav-link href="/dashboard" :active="request()->is('dashboard')">
                    <svg class="{{ request()->is('dashboard') ? 'text-indigo-600' : 'text-gray-400' }} h-6 w-6 shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" >>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                      </svg>
                      Dashboard
                </x-nav-link>
                 
                 <x-nav-link href="/setupmaster" :active="request()->is('setupmaster')">
                    <svg class="{{ request()->is('setupmaster') ? 'text-indigo-600' : 'text-gray-400' }} h-6 w-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                      </svg>
                      Setup Master
                </x-nav-link>

                <x-nav-link href="/efin" :active="request()->is('efin')">
                    <svg class="{{ request()->is('efin') ? 'text-indigo-600' : 'text-gray-400' }} h-6 w-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                      </svg>
                      Efin
                </x-nav-link>

                <x-nav-link href="/uploadpremi" :active="request()->is('uploadpremi')">
                    <svg class="{{ request()->is('uploadpremi') ? 'text-indigo-600' : 'text-gray-400' }} h-6 w-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                      </svg>
                      Upload Premi
                </x-nav-link>

                <x-nav-link href="/uploadpotongan" :active="request()->is('uploadpotongan')">
                    <svg class="{{ request()->is('uploadpotongan') ? 'text-indigo-600' : 'text-gray-400' }} h-6 w-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 01-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 011.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 00-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 01-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 00-3.375-3.375h-1.5a1.125 1.125 0 01-1.125-1.125v-1.5a3.375 3.375 0 00-3.375-3.375H9.75" />
                      </svg>
                      Upload Potongan
                </x-nav-link>
               
                <x-nav-link href="/hakakses" :active="request()->is('hakakses')">
                    <svg class="{{ request()->is('hakakses') ? 'text-indigo-600' : 'text-gray-400' }} h-6 w-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                      </svg>
                      Hak Akses
                </x-nav-link>
               
                <x-nav-link href="/hcmmaster" :active="request()->is('hcmmaster')">
                    <svg class="{{ request()->is('hcmmaster') ? 'text-indigo-600' : 'text-gray-400' }} h-6 w-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                      </svg>
                      HCM Master
                </x-nav-link>
               
                <x-nav-link href="/hcmwagetype" :active="request()->is('hcmwagetype')">
                    <svg class="{{ request()->is('hcmwagetype') ? 'text-indigo-600' : 'text-gray-400' }} h-6 w-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                      </svg>
                      HCM Wagetype
                </x-nav-link>

                <x-nav-link href="/managementsub" :active="request()->is('managementsub')">
                    <svg class="{{ request()->is('managementsub') ? 'text-indigo-600' : 'text-gray-400' }} h-6 w-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                      </svg>
                      Management Sub
                </x-nav-link>

                <x-nav-link href="/datagajisap" :active="request()->is('datagajisap')">
                    <svg class="{{ request()->is('datagajisap') ? 'text-indigo-600' : 'text-gray-400' }} h-6 w-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                      </svg>
                      Data Gaji SAP
                </x-nav-link>

                <x-nav-link href="/kompilasigaji" :active="request()->is('kompilasigaji')">
                    <svg class="{{ request()->is('/kompilasigaji') ? 'text-indigo-600' : 'text-gray-400' }} h-6 w-6 shrink-0 text-gray-400 group-hover:text-indigo-600 active:" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                      </svg>
                      Kompilasi Gaji
                </x-nav-link>

             </ul>
           </li>
           <li>
             <div class="text-xs font-semibold leading-6 text-gray-400">Your teams</div>
             <ul role="list" class="-mx-2 mt-2 space-y-1">
               <li>
                 <!-- Current: "bg-gray-50 text-indigo-600", Default: "text-gray-700 hover:text-indigo-600 hover:bg-gray-50" -->
                 <a href="#" class="  group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                   <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-gray-200 bg-white text-[0.625rem] font-medium text-gray-400 group-hover:border-indigo-600 group-hover:text-indigo-600">H</span>
                   <span class="truncate">Heroicons</span>
                 </a>
               </li>
               <li>
                 <a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                   <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-gray-200 bg-white text-[0.625rem] font-medium text-gray-400 group-hover:border-indigo-600 group-hover:text-indigo-600">T</span>
                   <span class="truncate">Tailwind Labs</span>
                 </a>
               </li>
               <li>
                 <a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                   <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-gray-200 bg-white text-[0.625rem] font-medium text-gray-400 group-hover:border-indigo-600 group-hover:text-indigo-600">W</span>
                   <span class="truncate">Workcation</span>
                 </a>
               </li>
             </ul>
           </li>
           <li class="-mx-6 mt-auto">
             <a href="#" class="flex items-center gap-x-4 px-6 py-3 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-50">
               <img class="h-8 w-8 rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
               <span class="sr-only">Your profile</span>
               <span aria-hidden="true">Tom Cook</span>
             </a>
           </li>
         </ul>
       </nav>
 
       
     </div>
   </div>
 </aside>

 
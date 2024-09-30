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
              <img class="h-8 w-auto" src="src/img/frame.png" alt="logo">
             </div>
             <nav class="flex flex-1 flex-col">
               <ul role="list" class="flex flex-1 flex-col gap-y-7">
                 <li>
                   <ul role="list" class="-mx-2 space-y-1">

                    <x-nav-link href="/dashboard" :active="request()->is('dashboard')">
                          
                      <svg class="{{ request()->is('dashboard') ? 'text-brands' : 'text-gray-400' }} h-6 w-6 shrink-0 text-gray-400 group-hover:text-brands" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth="1.5" stroke="currentColor" aria-hidden="true">
                        <path strokeLinecap="round" strokeLinejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                      </svg>
                      Dashboard
                </x-nav-link>
                 <x-nav-link href="/setupmaster" :active="request()->is('setupmaster')">
                      <svg class="{{ request()->is('setupmaster') ? 'text-brands' : 'text-gray-400' }} h-6 w-6 shrink-0 text-gray-400 group-hover:text-brands" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                      </svg>
                      
                      Setup Master
                </x-nav-link>
    
                <x-nav-link href="/efin" :active="request()->is('efin')">
                    
                      <span class="{{ request()->is('efin') ? 'text-brands border-bratext-brands' : 'text-gray-400' }}  flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-gray-400 bg-white text-[0.825rem] font-medium text-black group-hover:border-bratext-brands group-hover:text-brands">E</span>
                      Efin
                </x-nav-link>
    
                <x-nav-link href="/uploadpremi" :active="request()->is('uploadpremi')">
                      <svg class="{{ request()->is('uploadpremi') ? 'text-brands' : 'text-gray-400' }} h-6 w-6 shrink-0 text-gray-400 group-hover:text-brands" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.99 14.993 6-6m6 3.001c0 1.268-.63 2.39-1.593 3.069a3.746 3.746 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043 3.745 3.745 0 0 1-3.068 1.593c-1.268 0-2.39-.63-3.068-1.593a3.745 3.745 0 0 1-3.296-1.043 3.746 3.746 0 0 1-1.043-3.297 3.746 3.746 0 0 1-1.593-3.068c0-1.268.63-2.39 1.593-3.068a3.746 3.746 0 0 1 1.043-3.297 3.745 3.745 0 0 1 3.296-1.042 3.745 3.745 0 0 1 3.068-1.594c1.268 0 2.39.63 3.068 1.593a3.745 3.745 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.297 3.746 3.746 0 0 1 1.593 3.068ZM9.74 9.743h.008v.007H9.74v-.007Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm4.125 4.5h.008v.008h-.008v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                      </svg>
                      
                      Upload Premi
                </x-nav-link>
    
                <x-nav-link href="/uploadpotongan" :active="request()->is('uploadpotongan')">
                  <svg class="{{ request()->is('uploadpotongan') ? 'text-brands' : 'text-gray-400' }} h-6 w-6 shrink-0 text-gray-400 group-hover:text-brands xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 8.25H7.5a2.25 2.25 0 0 0-2.25 2.25v9a2.25 2.25 0 0 0 2.25 2.25h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25H15m0-3-3-3m0 0-3 3m3-3V15" />
                  </svg>
                  
                   
                      Upload Potongan
                </x-nav-link>
               
                <x-nav-link href="/hakakses" :active="request()->is('hakakses')">
                  <svg class="{{ request()->is('hakakses') ? 'text-brands' : 'text-gray-400' }} h-6 w-6 shrink-0 text-gray-400 group-hover:text-brands" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                  </svg>
                    
                      Hak Akses
                </x-nav-link>
               
                <x-nav-link href="/hcmmaster" :active="request()->is('hcmmaster')">
                  
                  <svg class="{{ request()->is('hcmmaster') ? 'text-brands' : 'text-gray-400' }} h-6 w-6 shrink-0 text-gray-400 group-hover:text-brands"xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                  </svg>
                      HCM Master
                </x-nav-link>
               
                <x-nav-link href="/hcmwagetype" :active="request()->is('hcmwagetype')">
                  <svg class="{{ request()->is('hcmwagetype') ? 'text-brands' : 'text-gray-400' }} h-6 w-6 shrink-0 text-gray-400 group-hover:text-brands" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />
                  </svg>
                      HCM Wagetype
                </x-nav-link>
    
                <x-nav-link href="/managementsub" :active="request()->is('managementsub')">
                    
                      <svg class="{{ request()->is('managementsub') ? 'text-brands' : 'text-gray-400' }} h-6 w-6 shrink-0 text-gray-400 group-hover:text-brands" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672Zm-7.518-.267A8.25 8.25 0 1 1 20.25 10.5M8.288 14.212A5.25 5.25 0 1 1 17.25 10.5" />
                      </svg>
                      
                      Management Sub
                </x-nav-link>
    
                <x-nav-link href="/datagajisap" :active="request()->is('datagajisap')">
                    
                      <svg class="{{ request()->is('datagajisap') ? 'text-brands' : 'text-gray-400' }} h-6 w-6 shrink-0 text-gray-400 group-hover:text-brands" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                      </svg>
                      
                      Data Gaji SAP
                </x-nav-link>
    
                <x-nav-link href="/kompilasigaji" :active="request()->is('kompilasigaji')">
                    
                      <svg class="{{ request()->is('kompilasigaji') ? 'text-brands' : 'text-gray-400'}} h-6 w-6 shrink-0 text-gray-400 group-hover:text-brands" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 6.087c0-.355.186-.676.401-.959.221-.29.349-.634.349-1.003 0-1.036-1.007-1.875-2.25-1.875s-2.25.84-2.25 1.875c0 .369.128.713.349 1.003.215.283.401.604.401.959v0a.64.64 0 0 1-.657.643 48.39 48.39 0 0 1-4.163-.3c.186 1.613.293 3.25.315 4.907a.656.656 0 0 1-.658.663v0c-.355 0-.676-.186-.959-.401a1.647 1.647 0 0 0-1.003-.349c-1.036 0-1.875 1.007-1.875 2.25s.84 2.25 1.875 2.25c.369 0 .713-.128 1.003-.349.283-.215.604-.401.959-.401v0c.31 0 .555.26.532.57a48.039 48.039 0 0 1-.642 5.056c1.518.19 3.058.309 4.616.354a.64.64 0 0 0 .657-.643v0c0-.355-.186-.676-.401-.959a1.647 1.647 0 0 1-.349-1.003c0-1.035 1.008-1.875 2.25-1.875 1.243 0 2.25.84 2.25 1.875 0 .369-.128.713-.349 1.003-.215.283-.4.604-.4.959v0c0 .333.277.599.61.58a48.1 48.1 0 0 0 5.427-.63 48.05 48.05 0 0 0 .582-4.717.532.532 0 0 0-.533-.57v0c-.355 0-.676.186-.959.401-.29.221-.634.349-1.003.349-1.035 0-1.875-1.007-1.875-2.25s.84-2.25 1.875-2.25c.37 0 .713.128 1.003.349.283.215.604.401.96.401v0a.656.656 0 0 0 .658-.663 48.422 48.422 0 0 0-.37-5.36c-1.886.342-3.81.574-5.766.689a.578.578 0 0 1-.61-.58v0Z" />
                      </svg>
                      
                      Kompilasi Gaji
                </x-nav-link>
                     
                <li>
                  <div class="text-xs font-semibold leading-6 text-gray-400">Konfigurasi</div>
                  <ul role="list" class="-mx-2 mt-2 space-y-1">
                    {{-- <li>
                      <!-- Current: "bg-gray-50 text-brands", Default: "text-gray-700 hover:text-brands hover:bg-gray-50" -->
                      <a href="#" class="  group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-gray-700 hover:bg-gray-50 hover:text-brands">
                        <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-gray-200 bg-white text-[0.625rem] font-medium text-gray-400 group-hover:border-bratext-brands group-hover:text-brands">H</span>
                        <span class="truncate">Heroicons</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-gray-700 hover:bg-gray-50 hover:text-brands">
                        <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-gray-200 bg-white text-[0.625rem] font-medium text-gray-400 group-hover:border-bratext-brands group-hover:text-brands">T</span>
                        <span class="truncate">Tailwind Labs</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-gray-700 hover:bg-gray-50 hover:text-brands">
                        <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-gray-200 bg-white text-[0.625rem] font-medium text-gray-400 group-hover:border-bratext-brands group-hover:text-brands">W</span>
                        <span class="truncate">Workcation</span>
                      </a>
                    </li>
                  </ul>
                </li> --}}
                <li class="-mx-6 mt-auto">
                  <a href="/profile" :active="request()->is('profile')" class="flex items-center gap-x-4 px-6 py-3 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-50">
                    <img class="h-8 w-8 rounded-full bg-gray-50" src="https://images.goodkind.id/dct/berkas-silon/calon/487469/pas_foto/1696312669_2411c6fc-845e-4f72-898e-938e847c1945.jpeg" alt="">
                    <span class="sr-only">Your profile</span>
                    <span aria-hidden="true">Agus Mulyono</span>
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
                   <input placeholder="Cari" class="px-2 py-2 rounded-xl  text-sm font-semibold leading-6 w-full border-none focus:ring-0 active:border-none focus:outline-none text-grey-500 focus:text-brands">
                 </form>
               </li>
               
                 <!-- Current: "bg-gray-50 text-brands", Default: "text-gray-700 hover:text-brands hover:bg-gray-50" -->
                 <x-nav-link href="/dashboard" :active="request()->is('dashboard')">
                          
                  <svg class="{{request()->is('dashboard') ? 'text-brands' : 'text-gray-400'}} h-6 w-6 shrink-0 text-gray-700 hover:text-brands hover:bg-gray-50" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth="1.5" stroke="currentColor" aria-hidden="true">
                    <path strokeLinecap="round" strokeLinejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                  </svg>
                  Dashboard
                </x-nav-link>
             
             <x-nav-link href="/setupmaster" :active="request()->is('setupmaster')">
                  
                  <svg class="{{ request()->is('setupmaster') ? 'text-brands' : 'text-gray-400' }} h-6 w-6 shrink-0 text-gray-400 group-hover:text-brands" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                  </svg>
                  
                  Setup Master
            </x-nav-link>

            <x-nav-link href="/efin" :active="request()->is('efin')">
                
                  <span class="{{ request()->is('efin') ? 'text-brands' : 'text-gray-400' }}  flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-gray-400 bg-white text-[0.825rem] font-medium  group-hover:border-brands text-brands group-hover:text-brands">E</span>
                  Efin
            </x-nav-link>

            <x-nav-link href="/uploadpremi" :active="request()->is('uploadpremi')">
                  <svg class="{{ request()->is('uploadpremi') ? 'text-brands' : 'text-gray-400' }} h-6 w-6 shrink-0 text-gray-400 group-hover:text-brands" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.99 14.993 6-6m6 3.001c0 1.268-.63 2.39-1.593 3.069a3.746 3.746 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043 3.745 3.745 0 0 1-3.068 1.593c-1.268 0-2.39-.63-3.068-1.593a3.745 3.745 0 0 1-3.296-1.043 3.746 3.746 0 0 1-1.043-3.297 3.746 3.746 0 0 1-1.593-3.068c0-1.268.63-2.39 1.593-3.068a3.746 3.746 0 0 1 1.043-3.297 3.745 3.745 0 0 1 3.296-1.042 3.745 3.745 0 0 1 3.068-1.594c1.268 0 2.39.63 3.068 1.593a3.745 3.745 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.297 3.746 3.746 0 0 1 1.593 3.068ZM9.74 9.743h.008v.007H9.74v-.007Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm4.125 4.5h.008v.008h-.008v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                  </svg>
                  
                  Upload Premi
            </x-nav-link>

            <x-nav-link href="/uploadpotongan" :active="request()->is('uploadpotongan')">
              <svg class="{{ request()->is('uploadpotongan') ? 'text-brands' : 'text-gray-400' }} h-6 w-6 shrink-0 text-gray-400 group-hover:text-brands xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 8.25H7.5a2.25 2.25 0 0 0-2.25 2.25v9a2.25 2.25 0 0 0 2.25 2.25h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25H15m0-3-3-3m0 0-3 3m3-3V15" />
              </svg>
              
               
                  Upload Potongan
            </x-nav-link>
           
            <x-nav-link href="/hakakses" :active="request()->is('hakakses')">
              <svg class="{{ request()->is('hakakses') ? 'text-brands' : 'text-gray-400' }} h-6 w-6 shrink-0 text-gray-400 group-hover:text-brands" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
              </svg>
                
                  Hak Akses
            </x-nav-link>
           
            <x-nav-link href="/hcmmaster" :active="request()->is('hcmmaster')">
              
              <svg class="{{ request()->is('hcmmaster') ? 'text-brands' : 'text-gray-400' }} h-6 w-6 shrink-0 text-gray-400 group-hover:text-brands"xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
              </svg>
                  HCM Master
            </x-nav-link>
           
            <x-nav-link href="/hcmwagetype" :active="request()->is('hcmwagetype')">
              <svg class="{{ request()->is('hcmwagetype') ? 'text-brands' : 'text-gray-400' }} h-6 w-6 shrink-0 text-gray-400 group-hover:text-brands" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />
              </svg>
                  HCM Wagetype
            </x-nav-link>

            <x-nav-link href="/managementsub" :active="request()->is('managementsub')">
                
                  <svg class="{{ request()->is('managementsub') ? 'text-brands' : 'text-gray-400' }} h-6 w-6 shrink-0 text-gray-400 group-hover:text-brands" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672Zm-7.518-.267A8.25 8.25 0 1 1 20.25 10.5M8.288 14.212A5.25 5.25 0 1 1 17.25 10.5" />
                  </svg>
                  
                  Management Sub
            </x-nav-link>

            <x-nav-link href="/datagajisap" :active="request()->is('datagajisap')">
                
                  <svg class="{{ request()->is('datagajisap') ? 'text-brands' : 'text-gray-400' }} h-6 w-6 shrink-0 text-gray-400 group-hover:text-brands" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                  </svg>
                  
                  Data Gaji SAP
            </x-nav-link>

            <x-nav-link href="/kompilasigaji" :active="request()->is('kompilasigaji')">
                
                  <svg class="{{ request()->is('kompilasigaji') ? 'text-brands' : 'text-gray-400'}} h-6 w-6 shrink-0 text-gray-400 group-hover:text-brands" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 6.087c0-.355.186-.676.401-.959.221-.29.349-.634.349-1.003 0-1.036-1.007-1.875-2.25-1.875s-2.25.84-2.25 1.875c0 .369.128.713.349 1.003.215.283.401.604.401.959v0a.64.64 0 0 1-.657.643 48.39 48.39 0 0 1-4.163-.3c.186 1.613.293 3.25.315 4.907a.656.656 0 0 1-.658.663v0c-.355 0-.676-.186-.959-.401a1.647 1.647 0 0 0-1.003-.349c-1.036 0-1.875 1.007-1.875 2.25s.84 2.25 1.875 2.25c.369 0 .713-.128 1.003-.349.283-.215.604-.401.959-.401v0c.31 0 .555.26.532.57a48.039 48.039 0 0 1-.642 5.056c1.518.19 3.058.309 4.616.354a.64.64 0 0 0 .657-.643v0c0-.355-.186-.676-.401-.959a1.647 1.647 0 0 1-.349-1.003c0-1.035 1.008-1.875 2.25-1.875 1.243 0 2.25.84 2.25 1.875 0 .369-.128.713-.349 1.003-.215.283-.4.604-.4.959v0c0 .333.277.599.61.58a48.1 48.1 0 0 0 5.427-.63 48.05 48.05 0 0 0 .582-4.717.532.532 0 0 0-.533-.57v0c-.355 0-.676.186-.959.401-.29.221-.634.349-1.003.349-1.035 0-1.875-1.007-1.875-2.25s.84-2.25 1.875-2.25c.37 0 .713.128 1.003.349.283.215.604.401.96.401v0a.656.656 0 0 0 .658-.663 48.422 48.422 0 0 0-.37-5.36c-1.886.342-3.81.574-5.766.689a.578.578 0 0 1-.61-.58v0Z" />
                  </svg>
                  
                  Kompilasi Gaji
            </x-nav-link>

             </ul>
           </li>
           <li>
             <div class="text-xs font-semibold leading-6 text-gray-400">Konfigurasi</div>
             <ul role="list" class="-mx-2 mt-2 space-y-1">
               {{-- <li>
                 <!-- Current: "bg-gray-50 text-brands", Default: "text-gray-700 hover:text-brands hover:bg-gray-50" -->
                 <a href="#" class="  group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-gray-700 hover:bg-gray-50 hover:text-brands">
                   <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-gray-200 bg-white text-[0.625rem] font-medium text-gray-400 group-hover:border-bratext-brands group-hover:text-brands">H</span>
                   <span class="truncate">Heroicons</span>
                 </a>
               </li>
               <li>
                 <a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-gray-700 hover:bg-gray-50 hover:text-brands">
                   <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-gray-200 bg-white text-[0.625rem] font-medium text-gray-400 group-hover:border-bratext-brands group-hover:text-brands">T</span>
                   <span class="truncate">Tailwind Labs</span>
                 </a>
               </li>
               <li>
                 <a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-gray-700 hover:bg-gray-50 hover:text-brands">
                   <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-gray-200 bg-white text-[0.625rem] font-medium text-gray-400 group-hover:border-bratext-brands group-hover:text-brands">W</span>
                   <span class="truncate">Workcation</span>
                 </a>
               </li>
             </ul>
           </li> --}}
           <li class="-mx-6 mt-auto">
             <a href="/profile" :active="request()->is('profile')" class="flex items-center gap-x-4 px-6 py-3 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-50">
               <img class="h-8 w-8 rounded-full bg-gray-50" src="https://images.goodkind.id/dct/berkas-silon/calon/487469/pas_foto/1696312669_2411c6fc-845e-4f72-898e-938e847c1945.jpeg" alt="">
               <span class="sr-only">Your profile</span>
               <span aria-hidden="true">Agus Mulyono</span>
             </a>
           </li>
         </ul>
       </nav>
 
       
     </div>
   </div>
 </aside>

 
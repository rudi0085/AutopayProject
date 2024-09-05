<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
      
      <div class="mx-auto max-w-7xl pt-0 lg:flex lg:gap-x-16 lg:px-8">
        <h1 class="sr-only">General Settings</h1>
      
        {{-- <aside class="flex overflow-x-auto border-b border-gray-900/5 py-4 lg:block lg:w-64 lg:flex-none lg:border-0 lg:py-20">
          <nav class="flex-none px-4 sm:px-6 lg:px-0">
            <ul role="list" class="flex gap-x-3 gap-y-1 whitespace-nowrap lg:flex-col">
              <li>
                <!-- Current: "bg-gray-50 text-indigo-600", Default: "text-gray-700 hover:text-indigo-600 hover:bg-gray-50" -->
                <a href="#" class="group flex gap-x-3 rounded-md bg-gray-50 py-2 pl-2 pr-3 text-sm font-semibold leading-6 text-indigo-600">
                  <svg class="h-6 w-6 shrink-0 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                  General
                </a>
              </li>
              <li>
                <a href="#" class="group flex gap-x-3 rounded-md py-2 pl-2 pr-3 text-sm font-semibold leading-6 text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                  <svg class="h-6 w-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33" />
                  </svg>
                  Security
                </a>
              </li>
              <li>
                <a href="#" class="group flex gap-x-3 rounded-md py-2 pl-2 pr-3 text-sm font-semibold leading-6 text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                  <svg class="h-6 w-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                  </svg>
                  Notifications
                </a>
              </li>
              <li>
                <a href="#" class="group flex gap-x-3 rounded-md py-2 pl-2 pr-3 text-sm font-semibold leading-6 text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                  <svg class="h-6 w-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                  </svg>
                  Plan
                </a>
              </li>
              <li>
                <a href="#" class="group flex gap-x-3 rounded-md py-2 pl-2 pr-3 text-sm font-semibold leading-6 text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                  <svg class="h-6 w-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
                  </svg>
                  Billing
                </a>
              </li>
              <li>
                <a href="#" class="group flex gap-x-3 rounded-md py-2 pl-2 pr-3 text-sm font-semibold leading-6 text-gray-700 hover:bg-gray-50 hover:text-indigo-600">
                  <svg class="h-6 w-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                  </svg>
                  Team members
                </a>
              </li>
            </ul>
          </nav>
        </aside> --}}
      
        <main class="px-4 py-16 sm:px-6 lg:flex-auto lg:px-0 lg:py-20">
          <div class="mx-auto max-w-2xl space-y-16 sm:space-y-20 lg:mx-0 lg:max-w-none">
            <div>
              <h2 class="text-base font-semibold leading-7 text-gray-900">Profile</h2>
              <p class="mt-1 text-sm leading-6 text-gray-500">This information will be displayed publicly so be careful what you share.</p>
      
              <dl class="mt-6 space-y-6 divide-y divide-gray-100 border-t border-gray-200 text-sm leading-6">
                <div class="pt-6 sm:flex">
                  <dt class="font-medium text-gray-900 sm:w-64 sm:flex-none sm:pr-6">Full name</dt>
                  <dd class="mt-1 flex justify-between gap-x-6 sm:mt-0 sm:flex-auto">
                    <div class="text-gray-900">Tom Cook</div>
                    <button type="button" class="font-semibold text-indigo-600 hover:text-indigo-500">Update</button>
                  </dd>
                </div>
                <div class="pt-6 sm:flex">
                  <dt class="font-medium text-gray-900 sm:w-64 sm:flex-none sm:pr-6">Email address</dt>
                  <dd class="mt-1 flex justify-between gap-x-6 sm:mt-0 sm:flex-auto">
                    <div class="text-gray-900">tom.cook@example.com</div>
                    <button type="button" class="font-semibold text-indigo-600 hover:text-indigo-500">Update</button>
                  </dd>
                </div>
                <div class="pt-6 sm:flex">
                  <dt class="font-medium text-gray-900 sm:w-64 sm:flex-none sm:pr-6">Title</dt>
                  <dd class="mt-1 flex justify-between gap-x-6 sm:mt-0 sm:flex-auto">
                    <div class="text-gray-900">Human Resources Manager</div>
                    <button type="button" class="font-semibold text-indigo-600 hover:text-indigo-500">Update</button>
                  </dd>
                </div>
              </dl>
            </div>
      
            <div>
              <h2 class="text-base font-semibold leading-7 text-gray-900">Bank accounts</h2>
              <p class="mt-1 text-sm leading-6 text-gray-500">Connect bank accounts to your account.</p>
      
              <ul role="list" class="mt-6 divide-y divide-gray-100 border-t border-gray-200 text-sm leading-6">
                <li class="flex justify-between gap-x-6 py-6">
                  <div class="font-medium text-gray-900">TD Canada Trust</div>
                  <button type="button" class="font-semibold text-indigo-600 hover:text-indigo-500">Update</button>
                </li>
                <li class="flex justify-between gap-x-6 py-6">
                  <div class="font-medium text-gray-900">Royal Bank of Canada</div>
                  <button type="button" class="font-semibold text-indigo-600 hover:text-indigo-500">Update</button>
                </li>
              </ul>
      
              <div class="flex border-t border-gray-100 pt-6">
                <button type="button" class="text-sm font-semibold leading-6 text-indigo-600 hover:text-indigo-500"><span aria-hidden="true">+</span> Add another bank</button>
              </div>
            </div>
      
            <div>
              <h2 class="text-base font-semibold leading-7 text-gray-900">Integrations</h2>
              <p class="mt-1 text-sm leading-6 text-gray-500">Connect applications to your account.</p>
      
              <ul role="list" class="mt-6 divide-y divide-gray-100 border-t border-gray-200 text-sm leading-6">
                <li class="flex justify-between gap-x-6 py-6">
                  <div class="font-medium text-gray-900">QuickBooks</div>
                  <button type="button" class="font-semibold text-indigo-600 hover:text-indigo-500">Update</button>
                </li>
              </ul>
      
              <div class="flex border-t border-gray-100 pt-6">
                <button type="button" class="text-sm font-semibold leading-6 text-indigo-600 hover:text-indigo-500"><span aria-hidden="true">+</span> Add another application</button>
              </div>
            </div>
      
            <div>
              <h2 class="text-base font-semibold leading-7 text-gray-900">Language and dates</h2>
              <p class="mt-1 text-sm leading-6 text-gray-500">Choose what language and date format to use throughout your account.</p>
      
              <dl class="mt-6 space-y-6 divide-y divide-gray-100 border-t border-gray-200 text-sm leading-6">
                <div class="pt-6 sm:flex">
                  <dt class="font-medium text-gray-900 sm:w-64 sm:flex-none sm:pr-6">Language</dt>
                  <dd class="mt-1 flex justify-between gap-x-6 sm:mt-0 sm:flex-auto">
                    <div class="text-gray-900">English</div>
                    <button type="button" class="font-semibold text-indigo-600 hover:text-indigo-500">Update</button>
                  </dd>
                </div>
                <div class="pt-6 sm:flex">
                  <dt class="font-medium text-gray-900 sm:w-64 sm:flex-none sm:pr-6">Date format</dt>
                  <dd class="mt-1 flex justify-between gap-x-6 sm:mt-0 sm:flex-auto">
                    <div class="text-gray-900">DD-MM-YYYY</div>
                    <button type="button" class="font-semibold text-indigo-600 hover:text-indigo-500">Update</button>
                  </dd>
                </div>
                <div class="flex pt-6">
                  <dt class="flex-none pr-6 font-medium text-gray-900 sm:w-64" id="timezone-option-label">Automatic timezone</dt>
                  <dd class="flex flex-auto items-center justify-end">
                    <!-- Enabled: "bg-indigo-600", Not Enabled: "bg-gray-200" -->
                    <button type="button" class="flex w-8 cursor-pointer rounded-full bg-gray-200 p-px ring-1 ring-inset ring-gray-900/5 transition-colors duration-200 ease-in-out focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" role="switch" aria-checked="true" aria-labelledby="timezone-option-label">
                      <!-- Enabled: "translate-x-3.5", Not Enabled: "translate-x-0" -->
                      <span aria-hidden="true" class="h-4 w-4 translate-x-0 transform rounded-full bg-white shadow-sm ring-1 ring-gray-900/5 transition duration-200 ease-in-out"></span>
                    </button>
                  </dd>
                </div>
              </dl>
            </div>
          </div>
        </main>
      </div>
      
    
</x-layout>
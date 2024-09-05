<!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<div class="relative border-b border-gray-200 pb-5 sm:pb-0">
    
    <div class="mt-4">
      <!-- Dropdown menu on small screens -->
      <div class="sm:hidden">
        <label for="current-tab" class="sr-only">Select a tab</label>
        <select id="current-tab" name="current-tab" class="block w-full rounded-md border-0 py-1.5 pl-3 pr-10 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600">
          
          <option selected>Tabel Wilayah</option>
          <option>Tabel Layanan</option>
          
        </select>
      </div>
      <!-- Tabs at small breakpoint and up -->
      <div class="hidden sm:block">
        <nav class="-mb-px flex space-x-8">
          <!-- Current: "border-indigo-500 text-indigo-600", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
         
          <a href="#" class=" whitespace-nowrap border-b-2 border-indigo-500 px-1 pb-4 text-sm font-medium text-indigo-600" aria-current="page">Tabel Wilayah</a>
          <a href="#" class="whitespace-nowrap border-b-2 border-transparent px-1 pb-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Tabel Layanan</a>
        </nav>
      </div>
    </div>
  </div>
  
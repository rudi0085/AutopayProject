
<li>
<a {{ $attributes }} class="{{ $active ? 'bg-gray-50 text-indigo-600' : 'text-gray-700 hover:text-indigo-600 hover:bg-gray-50' }} group flex gap-x-3  g rounded-md  p-2 text-sm font-semibold leading-6"
    aria-current="{{ $active ? 'page' : false }}">
    {{ $slot }}
  </a>
</li>
@props(['active' => false])


<li>
<a {{ $attributes }} class="{{ $active ? 'bg-gray-50 text-brands' : 'text-gray-700 hover:text-brands hover:bg-gray-50' }} group flex gap-x-3  g rounded-md  p-2 text-sm font-semibold leading-6"
    aria-current="{{ $active ? 'page' : false }}">
    {{ $slot }}
  </a>
</li>
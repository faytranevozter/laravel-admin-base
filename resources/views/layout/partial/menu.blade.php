@php
  $menus = [
    ['Dashboard', '/sample?page=dashboard', 'fa-home', Request::query('page') == 'dashboard'],
    ['Forms', '/sample?page=forms', 'fa-clipboard-list', Request::query('page') == 'forms'],
    ['Cards', '/sample?page=cards', 'fa-layer-group', Request::query('page') == 'cards'],
    ['Charts', '/sample?page=charts', 'fa-chart-pie', Request::query('page') == 'charts'],
    ['Buttons', '/sample?page=buttons', 'fa-arrow-pointer', Request::query('page') == 'buttons'],
    ['Modals', '/sample?page=modals', 'fa-window-restore', Request::query('page') == 'modals'],
    ['Tables', '/sample?page=tables', 'fa-table', Request::query('page') == 'tables'],
  ];
@endphp
<a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">
  {{ config('app.name') }}
</a>
<ul class="mt-6">
  @foreach ($menus as $menu)
  <li class="relative px-6 py-3">
    @if ($menu[3])
    <span class="absolute inset-y-0 left-0 w-1 bg-primary-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>
    @endif
    <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{ $menu[3] ? 'text-gray-800 dark:text-gray-100':'' }}" href="{{ url($menu[1]) }}">
      <i class="fas {{ $menu[2] }} w-5 text-center"></i>
      <span class="ml-4">{{ $menu[0] }}</span>
    </a>
  </li>
  @endforeach
</ul>
<div class="px-6 my-6">
  <button
    class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-primary-600 border border-transparent rounded-lg active:bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-4 focus:ring-primary-500/25 dark:focus:ring-gray-300/25">
    Create account
    <span class="ml-2" aria-hidden="true">+</span>
  </button>
</div>
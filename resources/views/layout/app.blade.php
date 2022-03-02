<!DOCTYPE html>
<html :class="{ dark: dark }" x-data="appdata" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ $title ?? config('app.name') }}</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> --}}
  <script src="{{ asset('js/app.js') }}"></script>

  @stack('head')
</head>

<body>
  <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen}">
    @include('layout.partial.sidebar')

    <div class="flex flex-col flex-1">
      @include('layout.partial.topbar')

      <main class="h-full pb-16 overflow-y-auto">
        @yield('content')
      </main>
    </div>
  </div>

  @stack('bottom')
</body>
</html>
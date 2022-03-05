<!DOCTYPE html>
<html x-data="appdata" :class="{ dark: dark }" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ $title ?? config('app.name') }}</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
  <script src="{{ asset('js/app.js') }}" defer></script>

  @stack('head')
</head>

<body>
  <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
    <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
      <div class="flex flex-col overflow-y-auto md:flex-row">
        <div class="h-32 md:h-auto md:w-1/2">
          <img aria-hidden="true" class="object-cover w-full h-full dark:hidden" src="{{ asset('img/login-office.jpeg') }}" alt="Office" />
          <img aria-hidden="true" class="hidden object-cover w-full h-full dark:block" src="{{ asset('img/login-office-dark.jpeg') }}" alt="Office" />
        </div>
        <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
          <div class="w-full">
            <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
              Login
            </h1>
            <form action="{{ route('login.action') }}" method="POST">
              @csrf
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Email</span>
                <input type="text" name="username" class="form-input mt-1 {{ $errors->has('username') ? 'invalid' : '' }}" placeholder="Email" value="{{ old('username') ?? '' }}" />
                <span class="text-xs text-red-600 dark:text-red-400">{{ $errors->first('username') }}</span>
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Password</span>
                <input type="password" name="password" class="form-input mt-1" />
              </label>
  
              <button type="submit" class="btn btn-primary w-full mt-4">
                Log in
              </button>
            </form>

            <p class="mt-4">
              <a class="text-sm font-medium text-primary-600 dark:text-primary-400 hover:underline"
                href="#">
                Forgot your password?
              </a>
            </p>
            <p class="mt-1">
              <a class="text-sm font-medium text-primary-600 dark:text-primary-400 hover:underline"
                href="{{ route('register') }}">
                Create account
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="fixed grid place-items-center w-10 h-10 right-3 bottom-3 border dark:border-gray-700 rounded shadow-sm text-primary-600 dark:text-primary-300 bg-white dark:bg-gray-800">
    <button 
      class="rounded-md focus:outline-none focus:ring-4 focus:ring-primary-500/25 dark:focus:ring-gray-300/25"
      x-data
      @click="toggleDarkMode"
      aria-label="Toggle color mode">
      <template x-if="!dark">
        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
          <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
        </svg>
      </template>
      <template x-if="dark">
        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd"
            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
            clip-rule="evenodd"></path>
        </svg>
      </template>
    </button>
  </div>

</body>

</html>
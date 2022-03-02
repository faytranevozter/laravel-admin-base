<!DOCTYPE html>
<html :class="{ 'dark': dark }" x-data="data()" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - Windmill Dashboard</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <script src="{{ asset('js/init-alpine.js') }}"></script>
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
            <label class="block text-sm">
              <span class="text-gray-700 dark:text-gray-400">Email</span>
              <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-primary-400 focus:outline-none focus:shadow-outline-primary dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Jane Doe" />
            </label>
            <label class="block mt-4 text-sm">
              <span class="text-gray-700 dark:text-gray-400">Password</span>
              <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-primary-400 focus:outline-none focus:shadow-outline-primary dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="***************" type="password" />
            </label>

            <!-- You should use a button here, as the anchor is only used for the example  -->
            <button type="button" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-primary-600 border border-transparent rounded-lg active:bg-primary-600 hover:bg-primary-700 focus:outline-none focus:shadow-outline-primary" href="../index.html">
              Log in
            </button>

            <p class="mt-4">
              <a class="text-sm font-medium text-primary-600 dark:text-primary-400 hover:underline"
                href="./forgot-password.html">
                Forgot your password?
              </a>
            </p>
            <p class="mt-1">
              <a class="text-sm font-medium text-primary-600 dark:text-primary-400 hover:underline"
                href="./create-account.html">
                Create account
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
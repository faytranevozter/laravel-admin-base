@extends('layout.app')
@section('content')
  <div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Forms
    </h2>
    
    @include('sample.cta')

    <!-- General elements -->
    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
      Elements
    </h4>
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
      <label class="block text-sm">
        <span class="text-gray-700 dark:text-gray-400">Name</span>
        <input class="form-input mt-1" placeholder="Jane Doe" />
      </label>

      <div class="mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">
          Account Type
        </span>
        <div class="mt-2">
          <label class="inline-flex items-center text-gray-600 dark:text-gray-400">
            <input type="radio" class="form-radio" name="accountType" value="personal" />
            <span class="ml-2">Personal</span>
          </label>
          <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
            <input type="radio" class="form-radio" name="accountType" value="busines" />
            <span class="ml-2">Business</span>
          </label>
        </div>
      </div>

      <label class="block mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">
          Requested Limit
        </span>
        <select class="form-select mt-1">
          <option>$1,000</option>
          <option>$5,000</option>
          <option>$10,000</option>
          <option>$25,000</option>
        </select>
      </label>

      <label class="block mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">
          Multiselect
        </span>
        <select class="form-multiselect mt-1" multiple>
          <option>Option 1</option>
          <option>Option 2</option>
          <option>Option 3</option>
          <option>Option 4</option>
          <option>Option 5</option>
        </select>
      </label>

      <label class="block mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">Message</span>
        <textarea class="form-textarea mt-1" rows="3" placeholder="Enter some long form content."></textarea>
      </label>

      <div class="flex mt-6 text-sm">
        <label class="flex items-center dark:text-gray-400">
          <input type="checkbox" class="form-checkbox" />
          <span class="ml-2">
            I agree to the
            <span class="underline">privacy policy</span>
          </span>
        </label>
      </div>
    </div>

    <!-- Validation inputs -->
    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
      Validation
    </h4>
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
      <!-- Invalid input -->
      <label class="block text-sm">
        <span class="text-gray-700 dark:text-gray-400">
          Invalid input
        </span>
        <input class="form-input mt-1 invalid" placeholder="Jane Doe" />
        <span class="text-xs text-red-600 dark:text-red-400">
          Your password is too short.
        </span>
      </label>

      <!-- Valid input -->
      <label class="block mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">
          Valid input
        </span>
        <input
          class="form-input mt-1 valid"
          placeholder="Jane Doe" />
        <span class="text-xs text-green-600 dark:text-green-400">
          Your password is strong.
        </span>
      </label>

      <!-- Helper text -->
      <label class="block mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">
          Helper text
        </span>
        <input class="form-input mt-1" placeholder="Jane Doe" />
        <span class="text-xs text-gray-600 dark:text-gray-400">
          Your password must be at least 6 characters long.
        </span>
      </label>
    </div>

    <!-- Inputs with icons -->
    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
      Icons
    </h4>
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
      <label class="block text-sm">
        <span class="text-gray-700 dark:text-gray-400">Icon left</span>
        <!-- focus-within sets the color for the icon when input is focused -->
        <div class="relative text-gray-500 focus-within:text-primary-600 dark:focus-within:text-primary-400">
          <input class="form-input mt-1 pl-10" placeholder="Jane Doe" />
          <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
              stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
              <path
                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
              </path>
            </svg>
          </div>
        </div>
      </label>

      <label class="block mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">Icon right</span>
        <!-- focus-within sets the color for the icon when input is focused -->
        <div class="relative text-gray-500 focus-within:text-primary-600 dark:focus-within:text-primary-400">
          <input class="form-input mt-1 pr-10" placeholder="Jane Doe" />
          <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
              stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
              <path
                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
              </path>
            </svg>
          </div>
        </div>
      </label>
    </div>

    <!-- Inputs with buttons -->
    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
      Buttons
    </h4>
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
      <label class="block text-sm">
        <span class="text-gray-700 dark:text-gray-400">
          Button left
        </span>
        <div class="relative">
          <input class="form-input mt-1 pl-20" placeholder="Jane Doe" />
          <button
            class="absolute inset-y-0 px-4 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-primary-600 border border-transparent rounded-l-md active:bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-4 focus:ring-primary-500/25 dark:focus:ring-gray-300/25">
            Click
          </button>
        </div>
      </label>

      <label class="block mt-4 text-sm">
        <span class="text-gray-700 dark:text-gray-400">
          Button right
        </span>
        <div class="relative text-gray-500 focus-within:text-primary-600">
          <input class="form-input mt-1 pr-20" placeholder="Jane Doe" />
          <button
            class="absolute inset-y-0 right-0 px-4 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-primary-600 border border-transparent rounded-r-md active:bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-4 focus:ring-primary-500/25 dark:focus:ring-gray-300/25">
            Click
          </button>
        </div>
      </label>
    </div>
  </div>
@endsection
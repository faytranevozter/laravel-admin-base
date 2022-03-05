@extends('layout.app')
@section('content')
  <div class="container grid px-6 mx-auto">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Buttons
    </h2>
    
    @include('sample.cta')

    <!-- Button sizes -->
    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
      Sizes
    </h4>
    <div class="flex flex-col flex-wrap mb-4 space-y-4 md:flex-row md:items-end md:space-x-4">
      <!-- Divs are used just to display the examples. Use only the button. -->
      <div>
        <button class="btn btn-xl"> Larger button </button>
      </div>

      <!-- Divs are used just to display the examples. Use only the button. -->
      <div>
        <button class="btn btn-lg"> Large button </button>
      </div>

      <!-- Divs are used just to display the examples. Use only the button. -->
      <div>
        <button class="btn"> Regular </button>
      </div>

      <!-- Divs are used just to display the examples. Use only the button. -->
      <div>
        <!-- For disabled buttons ADD these classes: 
            opacity-50 cursor-not-allowed

            And REMOVE these classes:
            active:bg-primary-600 hover:bg-primary-700 focus:shadow-outline-primary
          -->
        <button class="btn" disabled> Disabled </button>
      </div>

      <!-- Divs are used just to display the examples. Use only the button. -->
      <div>
        <button class="btn btn-sm"> Small </button>
      </div>
    </div>
    <p class="mb-8 text-gray-700 dark:text-gray-400">
      Apply
      <code>w-full</code>
      to any button to create a block level button.
    </p>

    <!-- Buttons colors -->
    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
      Colors
    </h4>
    <div class="flex flex-col flex-wrap mb-8 space-y-4 md:flex-row md:items-end md:space-x-4">
      <div>
        <button class="btn"> Default </button>
      </div>
      <div>
        <button class="btn btn-primary"> Primary </button>
      </div>
      <div>
        <button class="btn btn-red"> Red </button>
      </div>
      <div>
        <button class="btn btn-blue"> Blue </button>
      </div>
      <div>
        <button class="btn btn-green"> Green </button>
      </div>
    </div>

    <p class="mb-8 text-gray-700 dark:text-gray-400">
      You can always add new color variant in <code>resources/css/app.css</code>.
    </p>

    <!-- Buttons with icons -->
    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
      Icons
    </h4>
    <div class="flex flex-col flex-wrap mb-8 space-y-4 md:flex-row md:items-end md:space-x-4">
      <!-- Divs are used just to display the examples. Use only the button. -->
      <div>
        <button class="btn btn-primary flex items-center justify-between">
          <span>Icon right</span>
          <svg class="w-4 h-4 ml-2 -mr-1" fill="currentColor" aria-hidden="true" viewBox="0 0 20 20">
            <path
              d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
              clip-rule="evenodd" fill-rule="evenodd"></path>
          </svg>
        </button>
      </div>

      <!-- Divs are used just to display the examples. Use only the button. -->
      <div>
        <button class="btn btn-primary flex items-center justify-between">
          <svg class="w-4 h-4 mr-2 -ml-1" fill="currentColor" aria-hidden="true" viewBox="0 0 20 20">
            <path
              d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
              clip-rule="evenodd" fill-rule="evenodd"></path>
          </svg>
          <span>Icon left</span>
        </button>
      </div>

      <!-- Divs are used just to display the examples. Use only the button. -->
      <div>
        <button
          class="btn btn-primary px-2 flex items-center justify-between"
          aria-label="Like">
          <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
              clip-rule="evenodd" fill-rule="evenodd"></path>
          </svg>
        </button>
      </div>

      <!-- Divs are used just to display the examples. Use only the button. -->
      <div>
        <button class="btn btn-primary px-2 rounded-full flex items-center justify-between"
          aria-label="Edit">
          <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
            </path>
          </svg>
        </button>
      </div>
    </div>
  </div>
@endsection
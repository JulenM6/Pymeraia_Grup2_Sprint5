<button {{ $attributes->merge(['class' => 'inline-flex items-center px-5 py-3 bg-green-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-500 active:bg-green-500 dark:bg-green-600 dark:hover:bg-green-500 dark:active:bg-green-500 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

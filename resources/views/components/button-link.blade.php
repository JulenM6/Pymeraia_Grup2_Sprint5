<a {{ $attributes->merge(['class' => 'inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-bold text-xs text-white uppercase tracking-widest hover:bg-red-400  active:bg-orange-700 md:bg-orange-600 dark:hover:bg-orange-700 dark:active:bg-orange-700 focus:outline-none focus:active:bg-orange-700 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</a>

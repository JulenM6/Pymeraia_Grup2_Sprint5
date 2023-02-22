<a {{ $attributes->merge(['class' => 'bg-red-700 hover:bg-red-400 active:bg-red-500 dark:hover:bg-red-400 dark:active:bg-red-500   inline-flex items-center px-4 py-2  border border-transparent rounded-md font-bold text-xs text-white uppercase tracking-widest focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</a>

<a {{ $attributes->merge(['class' => 'bg-green-700 hover:bg-green-400 active:bg-green-500 dark:hover:bg-green-400 dark:active:bg-green-500   inline-flex items-center px-4 py-2  border border-transparent rounded-md font-bold text-xs text-white uppercase tracking-widest focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</a>

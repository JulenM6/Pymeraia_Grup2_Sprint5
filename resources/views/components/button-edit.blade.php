<a {{ $attributes->merge(['class' => 'inline-flex items-center px-4 py-2 bg-slate-500 border border-transparent rounded-md font-bold text-xs text-white uppercase tracking-widest hover:bg-slate-400 active:bg-slate-500 dark:hover:bg-slate-400 dark:active:bg-slate-500 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</a>

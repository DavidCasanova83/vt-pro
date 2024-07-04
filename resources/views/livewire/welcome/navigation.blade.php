<nav class="-mx-3 flex flex-1 justify-end text-black p-2 font-bold">
    <a href="{{ url('/') }}" class="rounded-md px-3 py-2 text-black hover:text-primary">
        Home
    </a>
    <a href="{{ url('pages') }}" class="rounded-md px-3 py-2 text-black hover:text-primary">
        All Pages
    </a>
    @auth
        <a href="{{ url('create') }}" class="rounded-md px-3 py-2 text-black hover:text-primary">
            Create
        </a>
        <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-black hover:text-primary ">
            Dashboard
        </a>
    @else
        <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-black  hover:text-primary">
            Log in
        </a>

        {{-- @if (Route::has('register'))
            <a
                href="{{ route('register') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
            >
                Register
            </a>
        @endif --}}
    @endauth
</nav>

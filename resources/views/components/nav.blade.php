<nav class="bg-white px-6 md:px-12 lg:px-24 xl:px-40 py-4 flex items-center justify-between relative">
    <a href="/" class="text-xl">
        <img src="/images/mask2table.png" alt="Mask2Table" width="180">
    </a>

    <!-- Desktop Nav Items -->
    <div class="hidden md:flex items-center bg-zinc-50 border border-zinc-200 rounded-full px-1 py-1 gap-2">
        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
        <x-nav-link href="/accounts" :active="request()->is('accounts')">Accounts</x-nav-link>
        <x-nav-link href="/import" :active="request()->is('import')">Import</x-nav-link>
        <x-nav-link href="/database" :active="request()->is('database')">DataBase</x-nav-link>
        <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
    </div>

    <!-- Dropdown options for actual user -->
    @auth
        <div class="dropdown">
            <div tabindex="0" class="btn btn-ghost btn-circle">

                <button
                    class="hidden md:flex items-center gap-2.5 bg-linear-to-r from-zinc-950 to-zinc-500 text-zinc-50 hover:text-zinc-200 text-sm font-medium pl-5 pr-2 py-2 rounded-full cursor-pointer border-0">
                    {{ Auth::user()->name }}
                    <span class="w-7 h-7 rounded-full bg-white flex items-center justify-center">
                        <span class="text-3 text-black">{{ substr(Auth::user()->name, 0, 1) }}</span>
                    </span>
                </button>
            </div>
            <ul tabindex="-1"
                class="menu menu-sm dropdown-content bg-linear-to-r from-zinc-950 to-zinc-500  text-zinc-50 hover:text-zinc-200 rounded-box z-1 mt-3 p-2 shadow">

                <li>
                    <a href="/edit">Edit Profile</a>
                </li>
                <li>
                    <form method="POST" action="/logout">
                        @csrf
                        <button>Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    @endauth

    @guest
        <button
            class="hidden md:flex items-center gap-2.5 bg-linear-to-r from-zinc-950 to-zinc-500 text-zinc-50 hover:text-zinc-200 text-sm font-medium pl-5 pr-2 py-2 rounded-full cursor-pointer border-0">
            <a href="/login">Login</a>
            <span class="w-7 h-7 rounded-full bg-white flex items-center justify-center">
                <span class="text-3 text-black">B</span>
            </span>
        </button>
    @endguest




</nav>

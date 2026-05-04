<div class="navbar bg-base-100 shadow-sm">

    <!-- left navigation -->
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                </svg>
            </div>
            <ul tabindex="-1" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                <li><a href="/">Home</a></li>
                <li><a>User</a></li>
                <li><a>Import</a></li>
                <li><a>Export</a></li>
                <li><a>About</a></li>
                @auth
                    <li>
                        <form method="POST" action="/logout">
                            @csrf
                            <button>Logout</button>
                        </form>
                    </li>
                @endauth
            </ul>
        </div>
    </div>

    <!-- center navigation -->
    <div class="navbar-center">

        <a href="/" class="text-xl">
            <img src="/images/mask2table.png" alt="Mask2Table" width="300">
        </a>

    </div>

    <!-- right navigation -->
    <div class="navbar-end">
        @auth
            <form method="POST" action="/logout">
                @csrf
                <a href="/register" class="btn">Register</a>
                <button class="btn">Logout</button>
            </form>

            <div class="avatar avatar-placeholder">
                <div class="bg-neutral text-neutral-content w-10 m-2 rounded-full">
                    <span class="text-3xl">V</span>
                </div>
            </div>
        @endauth

        @guest
            <a href="/login" class="btn btn-outlined">Sign In</a>
            <a href="/register" class="btn">Register</a>
        @endguest
    </div>
</div>

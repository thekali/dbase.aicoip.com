<x-layout>
    <h1 class="text-center">Landing page</h1>
    @auth
        <p><a href="/register" class="btn">Register</a></p>
    @endauth

    @guest
        @if (App\Models\User::exists())
            <!-- if user exists load sign in page -->
        @endif
        <!-- if no user exists autoconfig basic admin user -->

    @endguest

</x-layout>

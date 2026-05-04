<x-layout>
    <h1 class="text-center">Landing page</h1>
    @auth
        <h1>Landing page as registered</h1>
        @if (Session::has('message'))
            <p class="alert alert-info">{{ Session::get('message') }}</p>
        @endif
    @endauth

    @guest
        <h1> Landing Page as a Guest </h1>
        @if (Session::has('message'))
            <p class="alert alert-info">{{ Session::get('message') }}</p>
        @endif
    @endguest


</x-layout>

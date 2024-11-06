<x-layout>
    <x-slot:heading>
        Welcome
    </x-slot:heading>
    @auth
    <p class="mt-6">
        <x-button href="/products">Products</x-button>
    </p>
    @endauth
</x-layout>

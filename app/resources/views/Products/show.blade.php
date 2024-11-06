<x-layout>
    <x-slot:heading>
        Product
    </x-slot:heading>
    produkt {{$product}}
    <h2 class="font-bold text-lg">{{ $product->name }}</h2>

    <p>
        Price: {{ $product->price }}
    </p>

    <p class="mt-6">
        <x-button href="/products/{{ $product->id }}/edit">Edit product</x-button>
    </p>
</x-layout>

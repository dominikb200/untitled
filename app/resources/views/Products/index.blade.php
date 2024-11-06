<x-layout>
    <x-slot:heading>
        Product List
    </x-slot:heading>
    @auth
    <p class="mt-6">
        <x-button href="/products/create">Add products</x-button>
    </p>
    @endauth

    <div class="space-y-4">
        @foreach ($products as $product)
            <a href="/products/{{ $product['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                <div class="font-bold text-blue-500 text-sm">{{$product}}</div>

                <div>
                    <strong>{{ $product['name'] }}:</strong> available in stock: {{ $product['amount_in_stock']}}
                </div>
            </a>
        @endforeach

    </div>

</x-layout>

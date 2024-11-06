<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>

    <form method="POST" action="/products">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Create a New Product</h2>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="name">Product Name</x-form-label>

                        <div class="mt-2">
                            <x-form-input name="name" id="name" placeholder="Product Name" />

                            <x-form-error name="name" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="price">Price</x-form-label>

                        <div class="mt-2">
                            <x-form-input name="price" id="price" placeholder="10.99" />

                            <x-form-error name="price" />
                        </div>
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="description">Product description</x-form-label>

                        <div class="mt-2">
                            <x-form-input name="description" id="description" placeholder="Project description" />

                            <x-form-error name="description" />
                        </div>
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="amount">Amount in stock</x-form-label>

                        <div class="mt-2">
                            <x-form-input name="amount in stock" id="amount in stock" placeholder="100" />

                            <x-form-error name="amount" />
                        </div>
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="min">Minimum amount in order</x-form-label>

                        <div class="mt-2">
                            <x-form-input name="min" id="min" placeholder="1" />

                            <x-form-error name="min" />
                        </div>
                    </x-form-field>
                    
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            <x-form-button>Save</x-form-button>
        </div>
    </form>
</x-layout>
<x-layout>
    <x-slot:heading>
        Log In
    </x-slot:heading>
    <form action="/login" method="POST">
        @csrf
        <x-form-field>
            <x-form-label for="email">Email</x-form-label>
            <x-form-input name="email" id="email" type="email" required/>
            <x-form-error name="email"></x-form-error>
        </x-form-field>
        <x-form-field>
            <x-form-label for="password">Password</x-form-label>
            <x-form-input name="password" id="password" type="password" required/>
            <x-form-error name="password"></x-form-error>
        </x-form-field>
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <x-form-button>Login</x-form-button>
        </div>
    </form>


</x-layout>

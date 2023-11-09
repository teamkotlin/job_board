<x-layout>
    <h2 class="text-lg font-medium text-center mb-4">Signin to Continue</h2>
    <x-card class="p-8">
        <form action="{{ route('auth.store') }}" method="POST">
            @csrf

            <label for="email" class="mb-4">E-mail</label>
            <x-text-input name="email" value="" class="mb-8 w-full" type="text" />


            <label for="password" class="mb-4">Password</label>
            <x-text-input name="password" value="" class="mb-4 w-full" type="password" />
            <div class="flex justify-between text-xs text-salte-400 text-center">
                <div class="items-center">
                    <input type="checkbox" class="border rounded-md border-slate-200" />
                    <label for="checkbox" class="pl-2 text-center items-center">Remember</label>
                </div>
                <div><a href="#">Forgot Password?</a></div>
            </div>
            <x-button class="w-full mb-4 mt-8">
                Login
            </x-button>
        </form>

    </x-card>
</x-layout>

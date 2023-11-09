<x-layout>
    <x-card>
        <h1 class="text-center font-medium text-lg text-slate-700">Create Employer Account</h1>
        <form action="{{ route('employer.store') }}" method="POST">
            @csrf
            <div>
                <x-label for="company_name">Company Name</x-label>
                <x-text-input type="text" for="company_name" name="company_name" />
            </div>
            <x-button class="mt-6 mb-2 w-full">Create</x-button>
        </form>
    </x-card>
</x-layout>

<x-layout>
    <x-card>
        <form action="{{ route('my-jobs.store') }}" method="POST">
            @csrf

            <div class="grid grid-cols-2 mb-4 space-x-2">
                <div class="mb-4">
                    <x-label for="title">Job Title</x-label>
                    <x-text-input type="text" name="title" />
                </div>
                <div>
                    <x-label for="location">Job Location</x-label>
                    <x-text-input type="text" name="location" />
                </div>
                <div class="col-span-2 mb-4">
                    <x-label for="salary">Salary</x-label>
                    <x-text-input type="number" name="salary" />
                </div>
                <div class="col-span-2 mb-4">
                    <x-label for="description">Description</x-label>
                    <x-text-input type="text" name="description" />
                </div>
                <div>
                    <div class="mb-1 font-semibold ">Experience</div>
                    <x-radio-group name="experience" :options="\App\Models\Job::$experience" :showAll="false" />
                </div>
                <div>
                    <div class="mb-1 font-semibold">Categories</div>
                    <x-radio-group name="category" :options="\App\Models\Job::$category" :showAll="false" />
                </div>
                <div class="col-span-2 mt-4">
                    <x-button class="w-full">Add</x-button>
                </div>

            </div>
        </form>
    </x-card>
</x-layout>

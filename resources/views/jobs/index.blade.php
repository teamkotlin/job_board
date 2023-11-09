<x-layout>
    <x-card class="mb-4 text-sm">
        <form action="{{ route('jobs.index') }}" method="GET" id="filtering-form">
            <div class="mb-4 grid grid-cols-2 gap-2">
                <div class="">
                    <div class="mb-1 font-semibold">Search</div>
                    <div><x-text-input value="{{ request('search') }}" name="search" placeholder="Search  for any text"
                            form-id="filtering-form"></x-text-input>
                    </div>
                </div>
                <div>
                    <div class="mb-1 font-semibold">Salary</div>
                    <div class="flex space-x-2">
                        <div><x-text-input value="{{ request('min_salary') }}" name="min_salary"
                                placeholder="Min Salary" form-id="filtering-form"></x-text-input>
                        </div>
                        <div><x-text-input value="{{ request('max_salary') }}" name="max_salary"
                                placeholder="Max Salary" form-id="filtering-form"></x-text-input>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="mb-1 font-semibold">Experience</div>
                    <x-radio-group name="experience" :options="\App\Models\Job::$experience" />
                </div>
                <div>
                    <div class="mb-1 font-semibold">Categories</div>
                    <x-radio-group name="category" :options="\App\Models\Job::$category" />
                </div>
            </div>
            <x-button class="w-full">Filter</x-button>
        </form>
    </x-card>
    @foreach ($jobs as $job)
        <x-job-card :$job>
            <x-link-button :href="route('jobs.show', $job)">Show</x-link-button>
        </x-job-card>
    @endforeach
</x-layout>

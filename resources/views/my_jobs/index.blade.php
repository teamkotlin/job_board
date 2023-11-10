<x-layout>
    <x-card>
        <div class="flex justify-between mb-4">
            <div>All Jobs</div>
            <x-link-button :href="route('my-jobs.create')">Add New</x-link-button>
        </div>
        @forelse ($jobs as $job)
            <x-job-card :job=$job></x-job-card>
            @forelse ($job->jobApplications as $application)
                <div class=" font-sans text-sm text-slate-500">
                    <div>{{ $application->user->name }}</div>
                    <div>{{ $application->expected_salary }}</div>
                    <div>{{ $application->created_at->diffForHumans() }}</div>
                </div>

            @empty
                <div class="font-medium text-sm">No applications received yet!</div>
            @endforelse
        @empty
            <div class="rounded-md border border-dashed border-slate-500 p-8">
                <div class="text-center font-medium">No Jobs yet!</div>
                <div class="text-center ">Post your first job <a href="{{ route('my-jobs.create') }}">Here!</a></div>
            </div>
        @endforelse
    </x-card>
</x-layout>

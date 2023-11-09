<x-layout>
    {{-- <x-breadcrumbs class="mb-4" :$links="[Jobs => route('jobs.index'), $job->title => '#']"></x-breadcrumbs> --}}
    <x-job-card :$job>
        <x-button><a href="{{ route('job.application.create', $job) }}">Apply</a></x-button>
        {{-- @can('apply', $job)
            <x-button><a href="{{ route('job.application.create', $job) }}">Apply</a></x-button>
        @else
            <div class="text-center text-sm font-medium text-slate-500">You have already applied to this job.</div>
        @endcan --}}

    </x-job-card>
    <x-card class="mb-4">
        <h2 class="text-lg font-medium">Other {{ $job->employer->company_name }} Jobs</h2>
        @foreach ($job->employer->jobs as $otherJob)
            <div class="text-md flex justify-between mb-4">
                <div>
                    <a href="{{ route('jobs.show', $otherJob) }}">
                        <div class="text-slate-700">{{ $otherJob->title }}</div>
                    </a>
                    <div class="text-xs text-slate-500">{{ $otherJob->created_at->diffForHumans() }}</div>
                </div>
                <div>$ {{ number_format($otherJob->salary) }}</div>
            </div>
        @endforeach
    </x-card>
</x-layout>

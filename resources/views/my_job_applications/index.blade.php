<x-layout>
    @forelse ($applications as $application)
        <x-job-card :job="$application->job">
            <div class="flex justify-between text-sm text-slate-500">
                <div>
                    <div>Applied {{ $application->created_at->diffForHumans() }}</div>
                    <div>Other applicants {{ $application->job->job_applications_count }}</div>
                    <div>Your asking salary ${{ $application->expected_salary }}</div>
                    <div>Average asking salary ${{ $application->job_applications_avg_expected_salary }}</div>
                </div>
                <div>right</div>
            </div>
        </x-job-card>
    @empty
        <div class="rounded-md border border-dashed border-slate-300 p-8">
            <div class="text-center font-medium">No Applications yet</div>
            <div>Go find some jobs <a href="{{ route('jobs.index') }}">Here</a></div>
        </div>
    @endforelse

</x-layout>

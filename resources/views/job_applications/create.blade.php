<x-layout>
    <x-job-card :job="$job"></x-job-card>
    <x-card>
        <h2 class="mb-4 text-lg font-medium">You Job Application</h2>
        <form action="{{ route('job.application.store', $job) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="expected_salary" class="mb-2 block text-slate-900 font-sm  pb-4">Expected Salary</label>
            <x-text-input name="expected_salary" value="" class="mb-4 mt-4 w-full" type="number" />
            <label for="cv" class="mb-2 block text-slate-900 font-sm  mt-4">Upload CV</label>

            <x-text-input type="file" name="cv" />
            <x-button class="w-full mb-4 mt-8">Apply</x-button>
        </form>

    </x-card>
</x-layout>

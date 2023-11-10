<div>
    @if ($showAll)
        <label for="{{ $name }}" class="flex mb-2 items-center mt-2">
            <input type="radio" name="{{ $name }}" value="" @checked(!request('name')) />
            <span class="ml-2">All</span>
        </label>
    @endif

    @foreach ($options as $option)
        <label for="{{ $name }}" class="flex mb-2 items-center">
            <input type="radio" name="{{ $name }}" value="{{ $option }}" @checked($option == request($name)) />
            <span class="ml-2">{{ Str::ucfirst($option) }}</span>
        </label>
    @endforeach
    @error($name)
        <div class="text-sm text-red-500 font-medium">{{ $message }}</div>
    @enderror
</div>

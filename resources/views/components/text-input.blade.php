<div class="relative">
    @if ($formId)
        <button class="absolute top-0 right-0 h-full" type="button"
            onclick="document.getElementById('{{ $name }}').value='';document.getElementById('{{ $formId }}').submit();">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-4 h-4  text-slate-500 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>

        </button>
    @endif


    <input type="{{ $type }}" value="{{ old($name, $value) }}" name="{{ $name }}"
        placeholder="{{ $placeholder }}" id="{{ $name }}" @class([
            'w-full rounded-md border-0 py-1.5 pr-6 px-2.5 text-sm ring-1  placeholder:text-slate-400 focus:ring-2',
            'ring-red-300' => $errors->has($name),
            'ring-slate-300' => !$errors->has($name),
        ]) />


    @error($name)
        <div class="text-sm text-red-500 font-medium">{{ $message }}</div>
    @enderror
</div>

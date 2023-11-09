<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Job Board</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/font-awesome.min.css">
    <script defer src="https://use.fontawesome.com/releases/v6.4.2/js/all.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')


</head>

<body
    class="mx-auto mt-10 max-w-2xl bg-gradient-to-r from-indigo-100 from-10% via-sky-100 via-30% to-emerald-100 to-90% text-stone-700">
    <nav class="text-lg font-medium flex justify-between mb-4">
        <ul>
            <li><a href="{{ route('jobs.index') }}">Home</a></li>
        </ul>
        <ul class="flex space-x-2">

            @auth
                <li><a href="{{ route('my-job-applications.index') }}">{{ auth()->user()->name ?? 'Anonymous' }}</a> </li>
                <li>
                    <form action="{{ route('destroy') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <x-button>Logout</x-button>

                    </form>
                </li>
            @else
                <li><a href="{{ route('auth.create') }}">Login</a></li>
            @endauth

        </ul>
    </nav>
    @if (session('success'))
        <div role="alert"
            class="my-8 rounded-md border-l-4  border-green-300 bg-green-100 p-8 text-green-700 opacity-75">
            <p class="font-bold">Success!</p>
            <p class="text-green-500">{{ session('message') }}</p>
        </div>
    @endif
    @if (session('error'))
        <div role="alert" class="my-8 rounded-md border-l-4  border-red-300 bg-red-100 p-8 text-red-700 opacity-75">
            <p class="font-bold">Success!</p>
            <p>{{ session('error') }}</p>
        </div>
    @endif
    {{ $slot }}
</body>

</html>

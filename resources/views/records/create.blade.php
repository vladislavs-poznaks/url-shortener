<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Url Shortener</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="antialiased">
        <main class="bg-gray-100 dark:bg-gray-800 flex h-screen overflow-hidden relative items-center">
            <div class="m-auto container">
                <div class="px-10 py-5 rounded-lg bg-white shadow-lg space-y-5">
                    <form action="{{ route('records.store') }}" method="post" class="space-y-3">
                        @csrf
                        <label for="url">Url to shorten</label>
                        <input id="url" name="url" value="{{ old('url') }}" class="block mt-1 w-full border rounded-lg py-3 px-3 border-gray-700 focus:border-purple-600 focus:outline-purple-500" autocomplete="off">
                        @error('url')
                            <div class="text-xs text-red-600 mt-1">{{ $errors->first('url') }}</div>
                        @enderror

                        <button class="py-2 px-4 focus:ring-purple-500 focus:ring-offset-purple-200 text-white transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg bg-purple-500 hover:bg-purple-700">
                            Shorten
                        </button>
                    </form>

                    @isset($record)
                        <div class="space-y-2">
                            <div>Long url: {{ $record->url }}</div>
                            <div>Short url: {{ route('records.redirect', ['hash' => $record->hash]) }}</div>
                        </div>
                    @endisset
                </div>
            </div>
        </main>
    </body>
</html>

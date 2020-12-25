<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="turbo-cache-control" content="no-cache">

    <title>Tweezer</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    @turboscripts

    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
</head>

<body class="antialiased">
<div class="min-h-screen bg-gray-900 sm:items-center sm:pt-0 text-white space-x-2">
    <div class="flex w-full max-w-7xl mx-auto">
        <div class="w-2/12 h-screen">
            <x-navbar />
        </div>

        <div class="w-6/12 min-h-screen px-6">
            <div class="relative border-l border-r border-gray-700">
                <div class="absolute w-full p-4 flex items-center border-b border-gray-700 mb-2 bg-gray-900 h-12 z-40">
                    {{ $contentHead }}
                </div>

                <div class="w-full h-screen overflow-y-scroll pt-12">
                    {{ $content }}
                </div>
            </div>
        </div>

        <div class="w-4/12 h-screen">
            <div class="p-2 space-y-4">
                {{ $right }}
            </div>
        </div>
    </div>
</div>

<script>
    function scrollSync() {
        const syncBody = document.querySelector('#sync-body');
        if (!syncBody) return;

        document.body.scrollHeight = syncBody.scrollHeight;
        document.body.onscroll = function (e) {
            console.log(e);
        }
    }

    Turbo.start();
</script>
</body>
</html>

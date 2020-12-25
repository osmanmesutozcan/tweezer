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

    <style>
        body {
            overscroll-behavior: none;
        }
    </style>
</head>

<body class="antialiased" onload="loaded()">

<div x-data x-init="init()" class="h-screen relative overflow-y-hidden sm:items-center sm:pt-0 text-white space-x-2">
    <div class="absolute left-0 top-0 w-full  bg-gray-900">
        <div class="flex h-screen w-full max-w-7xl mx-auto">
            <div class="w-2/12 h-screen">
                <x-navbar />
            </div>

            <div class="w-6/12 min-h-screen px-6">
                <div class="relative min-h-screen border-l border-r border-gray-700">
                    <div class="absolute w-full p-4 flex items-center border-b border-gray-700 mb-2 bg-gray-900 h-12 z-40">
                        {{ $contentHead }}
                    </div>

                    <div id="content" class="w-full pt-12">
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
</div>

<script>
    /**
     * Setup virtual scroll.
     * Also registers a mutation observer to detect when turbo-frame for content is loaded.
     * That way we can init the virtual scroll correctly.
     */
    function setup(el) {
        let disposeScroll = () => ({});

        function scroll() {
            let prevTargetY, targetY = 0, currentY = 0, ease = 1, running = false;
            const sectionHeight = el.getBoundingClientRect().height;

            const date = new Date();

            const callback = function (e) {
                targetY += e.deltaY;

                targetY = Math.max((sectionHeight - window.innerHeight) * -1, targetY);
                targetY = Math.min(0, targetY);


                if (!running) {
                    run();
                }
            }

            const run = function () {
                running = true;
                console.log(date);
                currentY += (targetY - currentY) * ease;
                if (prevTargetY === currentY) {
                    running = false;
                    return;
                }

                prevTargetY = currentY;
                requestAnimationFrame(run);

                const t = 'translateY(' + currentY + 'px) translateZ(0)';
                const s = el.style;

                s["transform"] = t;
                s["webkitTransform"] = t;
                s["mozTransform"] = t;
                s["msTransform"] = t;

            }

            VirtualScroll.on(callback);
            return  () => VirtualScroll.off(callback);
        }

        const observer = new window.MutationObserver(function (mutationsList) {
            for (const mutation of mutationsList) {
                if (mutation.addedNodes.length > 0 && mutation.target.nodeName === 'TURBO-FRAME') {
                    disposeScroll();
                    disposeScroll = scroll(el);
                }
            }
        })

        function observe() {
            const config = {attributes: true, childList: true, subtree: true};
            observer.observe(el, config);
        }

        observe();
        return () => {
            observer.disconnect();
            disposeScroll();
        }
    }

    /**
     * on body loaded.
     * Runs the first time page is opened.
     */
    function loaded() {
        Turbo.start();
    }

    /**
     * Runs each time body content is replaced.
     */
    function init() {
        if (window.__dispose) {
            window.__dispose()
            window.__dispose = null;
        }

        window.__dispose = setup(document.querySelector('#content'));
    }
</script>
</body>
</html>

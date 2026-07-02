<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <meta content="" name="description" />
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @livewireScripts
</head>

<body>

    <!-- Navbar Start -->
    <header id="navbar" class="fixed top-0 inset-x-0 flex items-center z-40 w-full bg-transparent transition-all py-5 border-b border-line backdrop-blur-xl">
        <div class="container">
            <nav class="flex items-center justify-between">
                <a href="{{ url('/') }}" class="font-serif text-lg tracking-tight text-white">
                    Tövisháti András
                </a>

                <ul
                    id="navLinks"
                    class="pointer-events-none fixed top-[57px] left-0 right-0 z-40 flex translate-y-[-8px] flex-col border-b border-white/10 bg-black/95 py-2 opacity-0 backdrop-blur-xl transition-all duration-200 ease-out lg:pointer-events-auto lg:static lg:z-auto lg:flex lg:translate-y-0 lg:flex-row lg:items-center lg:gap-8 lg:border-0 lg:bg-transparent lg:p-0 lg:opacity-100 lg:backdrop-blur-none"
                >
                    <li class="border-b border-white/10 lg:border-0">
                        <a href="{{ url('/#services') }}" class="block px-7 py-4 text-sm text-zinc-400 transition hover:bg-white/5 hover:text-white lg:p-0 lg:hover:bg-transparent">
                            Miben segíthetek
                        </a>
                    </li>

                    <li class="border-b border-white/10 lg:border-0">
                        <a href="{{ url('/#about') }}" class="block px-7 py-4 text-sm text-zinc-400 transition hover:bg-white/5 hover:text-white lg:p-0 lg:hover:bg-transparent">
                            Rólam
                        </a>
                    </li>

                    <li class="border-b border-white/10 lg:border-0">
                        <a href="{{ url('/#hobby') }}" class="block px-7 py-4 text-sm text-zinc-400 transition hover:bg-white/5 hover:text-white lg:p-0 lg:hover:bg-transparent">
                            Projektek
                        </a>
                    </li>

                    <li class="border-b border-white/10 lg:border-0">
                        <a href="{{ url('/#testimonials') }}" class="block px-7 py-4 text-sm text-zinc-400 transition hover:bg-white/5 hover:text-white lg:p-0 lg:hover:bg-transparent">
                            Vélemények
                        </a>
                    </li>

                    <li class="border-b border-white/10 lg:border-0">
                        <a href="{{ url('/#xprojekt') }}" class="block px-7 py-4 text-sm text-zinc-400 transition hover:bg-white/5 hover:text-white lg:p-0 lg:hover:bg-transparent">
                            XProjekt
                        </a>
                    </li>

                    <li class="lg:ml-2">
                        <a
                            href="{{ url('/#contact') }}"
                            class="btn-primary"
                        >
                            Írj nekem
                        </a>
                    </li>
                </ul>

                <button
                    id="navHamburger"
                    aria-label="Menü megnyitása"
                    aria-expanded="false"
                    class="flex h-9 w-9 shrink-0 flex-col justify-center gap-[5px] rounded-lg border border-white/15 p-2 lg:hidden"
                >
                    <span class="block h-px w-full bg-zinc-400 transition-all"></span>
                    <span class="block h-px w-full bg-zinc-400 transition-all"></span>
                    <span class="block h-px w-full bg-zinc-400 transition-all"></span>
                </button>
            </nav>
        </div>
    </header>
    <!-- Navbar End -->

    @yield('content')

    <!-- Footer Section Start -->
    <section class="py-8">
        <div class="container">
            <div class="mt-5 flex flex-col items-center">
                <x-social-icons />
                <a href="{{ route('privacy') }}">Adatkezelés</a>
                <p>© {{ date('Y') }} Tövisháti András · AndrasWeb</p>
            </div>
        </div>
    </section>
    <!-- Footer Section End -->
</body>

</html>
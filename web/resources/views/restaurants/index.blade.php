<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Youco'Done - Find your next favorite meal</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#f77f1d",
                        "background-light": "#f8f7f5",
                        "background-dark": "#23180f",
                        "surface-dark": "#27211b",
                        "text-light": "#181411",
                        "text-secondary-dark": "#bba99b",
                    },
                    fontFamily: {
                        "display": ["Plus Jakarta Sans", "sans-serif"]
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
    <style>
        body {
            font-family: "Plus Jakarta Sans", sans-serif;
        }
    </style>
</head>

<body
    class="relative flex h-auto min-h-screen w-full flex-col bg-background-light dark:bg-background-dark text-text-light dark:text-white group/design-root overflow-x-hidden">
    <!-- TopNavBar -->
    <header class="w-full bg-white/80 dark:bg-[#221610]/80 backdrop-blur-md border-b border-stone-100 dark:border-white/10 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">

        <div class="flex items-center gap-8">
            <a href="{{ url('/') }}" class="flex items-center gap-3 group">
                <div class="w-10 h-10 bg-gradient-to-br from-orange-500 to-amber-500 rounded-xl flex items-center justify-center text-white shadow-lg group-hover:scale-110 transition-transform duration-300">
                    <span class="material-symbols-outlined">restaurant_menu</span>
                </div>
                <span class="text-xl font-black text-slate-800 dark:text-white tracking-tight">Youco'Done</span>
            </a>

            <nav class="hidden md:flex items-center gap-6">
                <a href="{{ route('restaurants.index') }}" class="text-sm font-bold text-slate-600 dark:text-gray-300 hover:text-orange-600 dark:hover:text-orange-400 transition-colors">
                    Restaurants
                </a>
                <a href="#" class="text-sm font-bold text-slate-600 dark:text-gray-300 hover:text-orange-600 dark:hover:text-orange-400 transition-colors">
                    Cuisines
                </a>
            </nav>
        </div>

        <div class="flex items-center gap-4">

            {{-- 🔴 GUEST STATE --}}
            @guest
                <a href="#" class="hidden md:block text-sm font-medium text-slate-500 dark:text-gray-400 hover:text-slate-800 dark:hover:text-white transition-colors mr-2">
                    Become a Partner
                </a>

                <div class="h-6 w-px bg-slate-200 dark:bg-white/10 hidden md:block"></div>

                <a href="{{ route('login') }}" class="text-slate-600 dark:text-gray-300 font-bold hover:text-orange-600 transition-colors">
                    Log In
                </a>

                <a href="{{ route('register') }}" class="bg-gradient-to-r from-orange-500 to-amber-600 hover:from-orange-600 hover:to-amber-700 text-white px-6 py-2.5 rounded-full font-bold shadow-md shadow-orange-500/20 transition-all hover:-translate-y-0.5">
                    Sign Up
                </a>
            @endguest

            {{-- 🟢 AUTH STATE --}}
            @auth
                <div class="relative" x-data="{ open: false }">

                    <button @click="open = !open" @click.outside="open = false" class="flex items-center gap-3 focus:outline-none group">

                        <div class="text-right hidden md:block">
                            <p class="text-sm font-bold text-slate-800 dark:text-white group-hover:text-orange-500 transition-colors">
                                {{ Auth::user()->name }}
                            </p>
                            <p class="text-xs text-slate-500 dark:text-gray-400">Gourmet Member</p>
                        </div>

                        <div class="w-10 h-10 rounded-full bg-orange-100 dark:bg-orange-900/30 text-orange-600 dark:text-orange-400 flex items-center justify-center font-black border-2 border-transparent group-hover:border-orange-500 transition-all ring-2 ring-white dark:ring-[#221610]">
                            {{ substr(Auth::user()->name, 0, 1) }}
                        </div>

                        <span class="material-symbols-outlined text-slate-400 transition-transform duration-300" :class="{'rotate-180': open}">
                            expand_more
                        </span>
                    </button>

                    <div x-show="open"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 scale-95 md:translate-y-2"
                         x-transition:enter-end="opacity-100 scale-100 md:translate-y-0"
                         x-transition:leave="transition ease-in duration-75"
                         x-transition:leave-start="opacity-100 scale-100"
                         x-transition:leave-end="opacity-0 scale-95"
                         class="absolute right-0 mt-3 w-64 bg-white dark:bg-[#2a1c15] rounded-2xl shadow-xl border border-stone-100 dark:border-white/10 overflow-hidden py-2"
                         style="display: none;">

                        <div class="px-4 py-3 border-b border-stone-100 dark:border-white/10 mb-2 bg-slate-50/50 dark:bg-white/5">
                            <p class="text-xs text-slate-500 dark:text-gray-400 uppercase tracking-wider font-bold">Signed in as</p>
                            <p class="text-sm font-bold text-slate-900 dark:text-white truncate">
                                {{ Auth::user()->email }}
                            </p>
                        </div>

                        <a href="#" class="flex items-center gap-3 px-4 py-2.5 text-sm text-slate-700 dark:text-gray-200 hover:bg-orange-50 dark:hover:bg-white/5 hover:text-orange-600 transition-colors">
                            <span class="material-symbols-outlined text-[20px]">person</span>
                            My Profile
                        </a>

                        <a href="#" class="flex items-center gap-3 px-4 py-2.5 text-sm text-slate-700 dark:text-gray-200 hover:bg-orange-50 dark:hover:bg-white/5 hover:text-orange-600 transition-colors">
                            <span class="material-symbols-outlined text-[20px]">calendar_month</span>
                            My Bookings
                            <span class="ml-auto bg-orange-100 text-orange-700 py-0.5 px-2 rounded-full text-xs font-bold">2</span>
                        </a>

                        <a href="#" class="flex items-center gap-3 px-4 py-2.5 text-sm text-slate-700 dark:text-gray-200 hover:bg-orange-50 dark:hover:bg-white/5 hover:text-orange-600 transition-colors">
                            <span class="material-symbols-outlined text-[20px]">favorite</span>
                            Favorites
                        </a>

                        <div class="border-t border-stone-100 dark:border-white/10 my-1"></div>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-3 text-sm text-red-600 hover:bg-red-50 dark:hover:bg-red-900/20 font-bold transition-colors flex items-center gap-2">
                                <span class="material-symbols-outlined text-[20px]">logout</span>
                                Log Out
                            </button>
                        </form>
                    </div>

                </div>
            @endauth

        </div>
    </div>
</header>
    <div class="layout-container flex h-full grow flex-col">
        <div class="flex flex-1 justify-center py-5 px-4 md:px-10 lg:px-40">
            <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                <!-- HeroSection -->
                <div class="@container mb-12">
                    <div class="">
                        <div class="flex min-h-[480px] flex-col gap-6 bg-cover bg-center bg-no-repeat rounded-xl items-center justify-center p-8 shadow-2xl relative overflow-hidden"
                            data-alt="Dark gourmet food spread overhead view"
                            style='background-image: linear-gradient(rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.6) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuCXGz-iA3TvPpwdz4jlCalxukJLeFvfOlH4FmDf7qgzp7we7ZiWRRPQOkTb1iJ9eZL17VeNWVD5ma1o1YjaVsm25ClQv88lSGHubOiqGObowhOT0D3NwOeSb4St2nO7loC-s9etMwGAfKIjTdxCXdGC9oezZr5zzLXJ-CAdKQBDJ2MKxxJSnAtZszCQgJ5zbrXpgX7Hc4jHR9rgzTR_ptFDKDzsInSdU5hhx9xV__WIpgX5R9LKDHp3uw85Dek--B_CJmmdhGjSag");'>
                            <div class="flex flex-col gap-4 text-center max-w-[720px] z-10">
                                <h1
                                    class="text-white text-4xl font-black leading-tight tracking-[-0.033em] md:text-5xl lg:text-6xl drop-shadow-lg">
                                    Find your next favorite meal
                                </h1>
                                <h2
                                    class="text-gray-100 text-base font-medium leading-normal md:text-lg lg:text-xl drop-shadow-md">
                                    Discover and book the best restaurants in town, from cozy bistros to fine dining
                                    experiences.
                                </h2>
                            </div>
                            <label class="flex flex-col min-w-40 h-14 w-full max-w-[580px] md:h-16 z-10 mt-4 shadow-xl">
                                <div
                                    class="flex w-full flex-1 items-stretch rounded-lg h-full bg-white dark:bg-surface-dark overflow-hidden ring-1 ring-gray-200 dark:ring-[#55463a]">
                                    <div
                                        class="text-gray-400 dark:text-text-secondary-dark flex items-center justify-center pl-[15px]">
                                        <span class="material-symbols-outlined">search</span>
                                    </div>
                                    <input
                                        class="flex w-full min-w-0 flex-1 resize-none overflow-hidden text-gray-900 dark:text-white focus:outline-0 focus:ring-0 bg-transparent h-full placeholder:text-gray-400 dark:placeholder:text-text-secondary-dark px-4 text-sm font-normal leading-normal md:text-base"
                                        placeholder="Search by restaurant, cuisine, or location" value="" />
                                    <div class="flex items-center justify-center pr-2">
                                        <button
                                            class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 md:h-12 md:px-6 bg-primary text-[#181411] text-sm font-bold leading-normal tracking-[0.015em] md:text-base hover:bg-orange-600 transition-colors">
                                            <span class="truncate">Find Table</span>
                                        </button>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <!-- SectionHeader -->
                <div class="flex items-center justify-between px-4 pb-6 pt-2">
                    <h2 class="text-gray-900 dark:text-white text-[28px] font-bold leading-tight tracking-[-0.015em]">
                        Featured Restaurants</h2>
                    <a class="text-primary font-bold text-sm hover:underline" href="#">View all</a>
                </div>
                <!-- Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 px-4">
                    <!-- Card 1: Le Petit Bistro -->
                    @foreach ($restaurants as $restau)
                        <div
                            class="flex flex-col items-stretch justify-start rounded-xl overflow-hidden shadow-lg bg-white dark:bg-surface-dark hover:shadow-xl transition-shadow duration-300 ring-1 ring-gray-200 dark:ring-transparent">
                            <a href="{{ route('restaurants.show', $restau->id) }}" class="w-full h-48 bg-center bg-no-repeat bg-cover relative group"
                                data-alt="Cozy french bistro interior warm lighting"
                                style='background-image: url("{{ $restau->photos->first()->path }}");'>
                                <div class="absolute top-3 left-3">
                                    <span
                                        class="px-2 py-1 bg-green-500/90 text-white text-xs font-bold uppercase tracking-wider rounded backdrop-blur-sm">Open</span>
                                </div>
                                <div
                                    class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors duration-300">
                                </div>
                            </a>
                            <div class="flex w-full grow flex-col items-stretch justify-between p-5 gap-4">
                                <div>
                                    <div class="flex justify-between items-start mb-1">
                                        <a href="{{ route('restaurants.show', $restau->id ) }}"
                                            class="text-gray-900 dark:text-white text-xl font-bold leading-tight tracking-[-0.015em]">
                                            {{$restau->name}}</a>
                                        <div
                                            class="flex items-center gap-1 bg-gray-100 dark:bg-[#3a3027] px-1.5 py-0.5 rounded">
                                            <span
                                                class="material-symbols-outlined text-yellow-500 text-[16px] filled">star</span>
                                            <span class="text-xs font-bold dark:text-white text-gray-800">4.8</span>
                                        </div>
                                    </div>
                                    <p
                                        class="text-gray-500 dark:text-text-secondary-dark text-sm font-normal leading-normal">
                                        French • $$$ • 120 reviews</p>
                                </div>
                                <button
                                    class="flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-[#181411] text-sm font-bold leading-normal hover:bg-orange-600 transition-colors">
                                    <span class="truncate">Reserve Now</span>
                                </button>
                            </div>
                        </div>
                    @endforeach
                    {{-- <!-- Card 2: Sushi Zen -->
                    <div
                        class="flex flex-col items-stretch justify-start rounded-xl overflow-hidden shadow-lg bg-white dark:bg-surface-dark hover:shadow-xl transition-shadow duration-300 ring-1 ring-gray-200 dark:ring-transparent">
                        <div class="w-full h-48 bg-center bg-no-repeat bg-cover relative group"
                            data-alt="Platter of fresh sushi rolls"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDeEsUenaa-2wZwtb97-zMHD4uqYLd-dPvvTfIjY0ZSyIqibB_xYoGysBKNWF4LEmOBUJKiRCn8ns5XgwXB6V-G-0uDSgrzXWxVU2uVajMtWtLYArdTZ5mp7mDIOjnBZaJWOVDvxCxi4y-dtS5ob8FMTXAb0z8BoajKBp1NfKQVAXJ41sV4N0GaGB1foUJJhtUuJpTmO-J190Z0H7mAbjMeziimnz9yuDSseyVyhjjqm_8psZLAPM4XtxBpWP-zKk19xlbDMwWitA");'>
                            <div class="absolute top-3 left-3">
                                <span
                                    class="px-2 py-1 bg-green-500/90 text-white text-xs font-bold uppercase tracking-wider rounded backdrop-blur-sm">Open</span>
                            </div>
                            <div
                                class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors duration-300">
                            </div>
                        </div>
                        <div class="flex w-full grow flex-col items-stretch justify-between p-5 gap-4">
                            <div>
                                <div class="flex justify-between items-start mb-1">
                                    <p
                                        class="text-gray-900 dark:text-white text-xl font-bold leading-tight tracking-[-0.015em]">
                                        Sushi Zen</p>
                                    <div
                                        class="flex items-center gap-1 bg-gray-100 dark:bg-[#3a3027] px-1.5 py-0.5 rounded">
                                        <span
                                            class="material-symbols-outlined text-yellow-500 text-[16px] filled">star</span>
                                        <span class="text-xs font-bold dark:text-white text-gray-800">4.5</span>
                                    </div>
                                </div>
                                <p
                                    class="text-gray-500 dark:text-text-secondary-dark text-sm font-normal leading-normal">
                                    Japanese • $$ • 85 reviews</p>
                            </div>
                            <button
                                class="flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-[#181411] text-sm font-bold leading-normal hover:bg-orange-600 transition-colors">
                                <span class="truncate">Reserve Now</span>
                            </button>
                        </div>
                    </div>
                    <!-- Card 3: Burger King (Customized as requested but upscale style) -->
                    <div
                        class="flex flex-col items-stretch justify-start rounded-xl overflow-hidden shadow-lg bg-white dark:bg-surface-dark hover:shadow-xl transition-shadow duration-300 ring-1 ring-gray-200 dark:ring-transparent">
                        <div class="w-full h-48 bg-center bg-no-repeat bg-cover relative group"
                            data-alt="Juicy gourmet burger with fries"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA4YugCHCg-UQ6KRi-FHDq60Y1sn0Hh6Uc2xMFtaYFaBEiNu56sj7G3ofiHEcmkJqWJTsyfJFMhbZNpIedKer3Rp5_BHi_r4LqGLtlkPCmx5QkfJrahJcwzSgR9il2sdOxCPIgVvACyZcLo4fntGXPPYlIh8KU5FHyaugz1CttOHb268djZXqrq8EZ23k4fxBrh76jaKHqo2pAvxk3uCyzYK-Z6UmBshUEtHhKwFsJBTab2HMv797_u0Q-nKREdc6rTxvoV38dzAg");'>
                            <div class="absolute top-3 left-3">
                                <span
                                    class="px-2 py-1 bg-green-500/90 text-white text-xs font-bold uppercase tracking-wider rounded backdrop-blur-sm">Open</span>
                            </div>
                            <div
                                class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors duration-300">
                            </div>
                        </div>
                        <div class="flex w-full grow flex-col items-stretch justify-between p-5 gap-4">
                            <div>
                                <div class="flex justify-between items-start mb-1">
                                    <p
                                        class="text-gray-900 dark:text-white text-xl font-bold leading-tight tracking-[-0.015em]">
                                        Burger King</p>
                                    <div
                                        class="flex items-center gap-1 bg-gray-100 dark:bg-[#3a3027] px-1.5 py-0.5 rounded">
                                        <span
                                            class="material-symbols-outlined text-yellow-500 text-[16px] filled">star</span>
                                        <span class="text-xs font-bold dark:text-white text-gray-800">4.2</span>
                                    </div>
                                </div>
                                <p
                                    class="text-gray-500 dark:text-text-secondary-dark text-sm font-normal leading-normal">
                                    American • $ • 350 reviews</p>
                            </div>
                            <button
                                class="flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-[#181411] text-sm font-bold leading-normal hover:bg-orange-600 transition-colors">
                                <span class="truncate">Reserve Now</span>
                            </button>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <footer
            class="mt-auto border-t border-solid border-[#e6e0db] dark:border-[#3a3027] bg-white dark:bg-surface-dark py-12 px-10">
            <div class="max-w-[960px] mx-auto flex flex-col md:flex-row justify-between items-center gap-6">
                <div class="flex items-center gap-4 dark:text-white text-gray-900">
                    <div class="size-6 flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined !text-[24px]">restaurant_menu</span>
                    </div>
                    <h2 class="text-base font-bold leading-tight">Youco'Done</h2>
                </div>
                <div class="text-gray-500 dark:text-text-secondary-dark text-sm text-center md:text-right">
                    © 2023 Youco'Done. All rights reserved.
                </div>
            </div>
        </footer>
    </div>
</body>

</html>

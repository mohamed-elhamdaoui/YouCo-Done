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
    <header
        class="sticky top-0 z-50 flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#e6e0db] dark:border-b-[#3a3027] bg-background-light/95 dark:bg-background-dark/95 backdrop-blur-sm px-10 py-3">
        <div class="flex items-center gap-4 dark:text-white text-gray-900">
            <div class="size-8 flex items-center justify-center text-primary">
                <span class="material-symbols-outlined !text-[32px]">restaurant_menu</span>
            </div>
            <h2 class="text-lg font-bold leading-tight tracking-[-0.015em] dark:text-white text-gray-900">Youco'Done
            </h2>
        </div>
        <div class="flex flex-1 justify-end gap-8">
            <div class="hidden md:flex items-center gap-9">
                <a class="text-sm font-medium leading-normal dark:text-white text-gray-900 hover:text-primary transition-colors"
                    href="#">Restaurants</a>
                <a class="text-sm font-medium leading-normal dark:text-white text-gray-900 hover:text-primary transition-colors"
                    href="#">Cuisines</a>
                <a class="text-sm font-medium leading-normal dark:text-white text-gray-900 hover:text-primary transition-colors"
                    href="#">Log In</a>
            </div>
            <button
                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-[#181411] text-sm font-bold leading-normal tracking-[0.015em] hover:bg-orange-600 transition-colors">
                <span class="truncate">Sign Up</span>
            </button>
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
                    <div
                        class="flex flex-col items-stretch justify-start rounded-xl overflow-hidden shadow-lg bg-white dark:bg-surface-dark hover:shadow-xl transition-shadow duration-300 ring-1 ring-gray-200 dark:ring-transparent">
                        <div class="w-full h-48 bg-center bg-no-repeat bg-cover relative group"
                            data-alt="Cozy french bistro interior warm lighting"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAi1U-xX6fpTuZ6ghspek7WABSMrmJh5GaPVEHiuH8AKnyLlE0yy3bFXi8t6hyrGXUG44QVe55WQ15cvpdMK53THRL-nymL0WMRQZZJnENyNfgm6yylTJnWlocrjgsrhOGwPCdO4I893DXDNmtsiK5f_ta_Ozth6Vt_h1HrnlAflAE-zGNqrIWfKWT1WOfKfL6Qqc50EfosnKSH8h-2551vZJtp-iBU9LFqdgvXYgedYQPx3KQdFTQRHDf1bF-mls1xRQQw89-RHw");'>
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
                                        Le Petit Bistro</p>
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
                    <!-- Card 2: Sushi Zen -->
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
                    </div>
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

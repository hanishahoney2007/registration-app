<!-- Sidebar -->

<aside id="sidebar" class="fixed lg:static inset-y-0 left-0 z-50
           w-64 bg-slate-950 text-white
           transform -translate-x-full lg:translate-x-0
           transition-transform duration-300">

    <!-- Logo -->

    <div class="h-20 flex items-center px-6
                border-b border-slate-800">

        <div class="flex items-center gap-2">

            <div class="w-9 h-9 rounded-lg bg-blue-600
                        flex items-center justify-center
                        font-bold">

                C

            </div>

            <div>

                <h1 class="text-lg font-bold">
                    Car<span class="text-blue-400">Fixer</span>
                </h1>

                <p class="text-xs text-slate-400">
                    Service Center
                </p>

            </div>

        </div>

    </div>


    <!-- Navigation -->

    <nav class="p-4 space-y-2">

        <!-- Dashboard -->

        <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-4 py-3
                  rounded-lg bg-blue-600 text-white">

            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0h6">
                </path>

            </svg>

            Dashboard

        </a>


        <!-- Service Profile -->

        <a href="#" class="flex items-center gap-3 px-4 py-3
                  rounded-lg text-slate-300
                  hover:bg-slate-800 hover:text-white">

            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2a4 4 0 014-4h4">
                </path>

            </svg>

            Service Profile

        </a>


        <!-- Bookings -->

        <a href="#" class="flex items-center gap-3 px-4 py-3
                  rounded-lg text-slate-300
                  hover:bg-slate-800 hover:text-white">

            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                </path>

            </svg>

            Bookings

        </a>


        <!-- Messages -->

        <a href="#" class="flex items-center gap-3 px-4 py-3
                  rounded-lg text-slate-300
                  hover:bg-slate-800 hover:text-white">

            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 10h.01M12 10h.01M16 10h.01M9 16h6m2 4H7a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v12a2 2 0 01-2 2z">
                </path>

            </svg>

            Messages

        </a>


        <!-- Analytics -->

        <a href="#" class="flex items-center gap-3 px-4 py-3
                  rounded-lg text-slate-300
                  hover:bg-slate-800 hover:text-white">

            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 19v-6a2 2 0 012-2h2a2 2 0 012 2v6m-9 0h12M5 19V7a2 2 0 012-2h10a2 2 0 012 2v12">
                </path>

            </svg>

            Analytics

        </a>


        <!-- Settings -->

        <a href="#" class="flex items-center gap-3 px-4 py-3
                  rounded-lg text-slate-300
                  hover:bg-slate-800 hover:text-white">

            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10.325 4.317a1.724 1.724 0 013.35 0 1.724 1.724 0 001.82 1.035 1.724 1.724 0 012.39 2.39 1.724 1.724 0 001.035 1.82 1.724 1.724 0 010 3.35 1.724 1.724 0 00-1.035 1.82 1.724 1.724 0 01-2.39 2.39 1.724 1.724 0 00-1.82 1.035 1.724 1.724 0 01-3.35 0 1.724 1.724 0 00-1.82-1.035 1.724 1.724 0 01-2.39-2.39 1.724 1.724 0 00-1.035-1.82 1.724 1.724 0 010-3.35 1.724 1.724 0 001.035-1.82 1.724 1.724 0 012.39-2.39 1.724 1.724 0 001.82-1.035z">
                </path>

                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
                </path>

            </svg>

            Settings

        </a>

    </nav>


    <!-- User -->

    <div class="absolute bottom-0 left-0 right-0
                p-4 border-t border-slate-800">

        <div class="flex items-center gap-3">

            <div class="w-10 h-10 rounded-full
                        bg-blue-500
                        flex items-center justify-center
                        font-semibold">

                JD

            </div>

            <div>

                <p class="text-sm font-semibold">
                    John Doe
                </p>

                <p class="text-xs text-slate-400">
                    Service Manager
                </p>

            </div>

        </div>

    </div>

</aside>


<!-- Mobile Overlay -->

<div id="sidebarOverlay" class="fixed inset-0 bg-black/50 z-40 hidden lg:hidden">
</div>
<footer class="border-t border-slate-200 bg-white px-6 py-5">

    <div class="flex flex-col sm:flex-row
                items-center justify-between gap-3">

        <p class="text-sm text-slate-500">

            © {{ date('Y') }}
            {{ config('app.name') }}.
            All rights reserved.

        </p>


        <div class="flex gap-5 text-sm">

            <a href="#" class="text-slate-500 hover:text-blue-600">
                Privacy
            </a>

            <a href="#" class="text-slate-500 hover:text-blue-600">
                Terms
            </a>

            <a href="#" class="text-slate-500 hover:text-blue-600">
                Support
            </a>

        </div>

    </div>

</footer>
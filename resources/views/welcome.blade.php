<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rayaan Systems | Complaint Portal</title>
    <meta name="description"
        content="Contact Rayaan Systems to register your complaints and help us improve our services.">

    <!-- Tailwind CSS CDN: works without npm or Vite -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    brand: '#0866e9',
                    navy: '#102442'
                },
                fontFamily: {
                    sans: ['Inter', 'ui-sans-serif', 'system-ui']
                }
            }
        }
    }
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body class="bg-white text-slate-700 antialiased">

    <!-- Navigation -->
    <header class="sticky top-0 z-50 border-b border-slate-100 bg-white/95 backdrop-blur">
        <nav class="mx-auto flex max-w-7xl items-center justify-between px-5 py-4 lg:px-8">

            <a href="{{ url('/') }}" class="flex items-center gap-3">
                <img src="{{ asset('images/logo.jpeg') }}" alt="Rayaan Systems"
                    class="h-10 w-auto max-w-14 object-contain" onerror="this.style.display='none'">

                <span class="text-xl font-extrabold tracking-tight text-navy">
                    Rayaan <span class="text-brand">Systems</span>
                </span>
            </a>

            <div class="hidden items-center gap-8 text-sm font-medium md:flex">
                <a href="#home" class="text-brand">Home</a>
                <a href="#about" class="transition hover:text-brand">About</a>
                <a href="#services" class="transition hover:text-brand">Services</a>
                <a href="#contact" class="transition hover:text-brand">Contact</a>
            </div>

            <!-- <a href="{{ url('/complaint') }}"
                class="hidden rounded-full bg-brand px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-blue-200 transition hover:bg-blue-700 sm:inline-flex">
                Register Complaint
            </a> -->

            <button id="menuButton" type="button" aria-label="Toggle navigation" aria-expanded="false"
                class="rounded-lg border border-slate-200 p-2 md:hidden">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </nav>

        <div id="mobileMenu" class="hidden border-t border-slate-100 bg-white px-5 py-4 md:hidden">
            <div class="flex flex-col gap-4 text-sm font-medium">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#services">Services</a>
                <a href="#contact">Contact</a>
                <a href="{{ url('/complaint') }}" class="rounded-lg bg-brand px-4 py-3 text-center text-white">
                    Register Your Complaints
                </a>
            </div>
        </div>
    </header>

    <main>
        <!-- Hero section -->
        <section id="home" class="relative isolate overflow-hidden bg-gradient-to-br from-blue-50 via-white to-sky-50">
            <div class="absolute -right-24 -top-24 -z-10 h-80 w-80 rounded-full bg-blue-100/60 blur-3xl"></div>
            <div class="absolute -bottom-32 -left-20 -z-10 h-80 w-80 rounded-full bg-sky-100/70 blur-3xl"></div>

            <div class="mx-auto max-w-5xl px-5 py-20 text-center sm:py-28 lg:py-32">

                <div
                    class="mx-auto mb-7 flex h-20 w-20 items-center justify-center rounded-3xl bg-white shadow-xl shadow-blue-100 ring-1 ring-blue-100">
                    <img src="{{ asset('images/logo.jpeg') }}" alt="Rayaan Systems logo"
                        class="h-14 w-14 object-contain" onerror="this.style.display='none'">

                </div>

                <p class="mb-4 text-sm font-bold uppercase tracking-[0.25em] text-brand">
                    Welcome to Rayaan Systems
                </p>

                <h1 class="text-4xl font-extrabold tracking-tight text-navy sm:text-6xl lg:text-7xl">
                    Rayaan <span class="text-brand">Systems</span>
                </h1>

                <h2 class="mt-5 text-2xl font-semibold text-slate-600 sm:text-3xl">
                    Your Voice Matters.
                </h2>

                <p class="mx-auto mt-6 max-w-2xl text-base leading-8 text-slate-600 sm:text-lg">
                    We are committed to providing you with a better service experience.
                    Share your concerns with us, report issues easily, and help us
                    improve through your valuable feedback.
                </p>

                <div class="mt-9 flex flex-col items-center justify-center gap-4 sm:flex-row">
                    <a href="{{ url('/complaint') }}"
                        class="inline-flex w-full items-center justify-center gap-3 rounded-full bg-brand px-8 py-4 font-semibold text-white shadow-xl shadow-blue-200 transition duration-300 hover:-translate-y-1 hover:bg-blue-700 sm:w-auto">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 5L21 3v18l-11-2M10 5v14M10 5L3 8v8l7 3M6 9v6" />
                        </svg>
                        Register Your Complaints
                        <span aria-hidden="true">→</span>
                    </a>

                    <!-- <a href="#about"
                        class="inline-flex items-center justify-center rounded-full border border-slate-200 bg-white px-8 py-4 font-semibold text-navy transition hover:border-brand hover:text-brand">
                        Learn More
                    </a> -->
                </div>

                <div class="mt-10 flex flex-wrap justify-center gap-x-8 gap-y-3 text-sm text-slate-500">
                    <span>✓ Simple process</span>
                    <span>✓ Easy reporting</span>
                    <span>✓ Customer focused</span>
                </div>
            </div>
        </section>

        <!-- About section -->
        <section id="about" class="px-5 py-20 sm:py-24">
            <div class="mx-auto max-w-3xl text-center">
                <span class="text-sm font-bold uppercase tracking-widest text-brand">
                    About Us
                </span>

                <h2 class="mt-4 text-3xl font-extrabold tracking-tight text-navy sm:text-4xl">
                    We're here to listen and improve
                </h2>

                <p class="mt-5 text-base leading-8 text-slate-600">
                    At Rayaan Systems, we believe that every concern deserves attention.
                    Our complaint registration portal provides a convenient way to share
                    your feedback and report problems. Your input helps us understand
                    your needs and continually improve our services.
                </p>
            </div>
        </section>

        <!-- Four image cards -->
        <section id="services" class="bg-slate-50 px-5 py-20 sm:py-24">
            <div class="mx-auto max-w-7xl">

                <div class="mx-auto mb-12 max-w-2xl text-center">
                    <span class="text-sm font-bold uppercase tracking-widest text-brand">
                        What We Offer
                    </span>

                    <h2 class="mt-4 text-3xl font-extrabold tracking-tight text-navy sm:text-4xl">
                        A better way to be heard
                    </h2>

                    <p class="mt-4 leading-7 text-slate-600">
                        We make sharing your concerns straightforward, convenient,
                        and focused on better service.
                    </p>
                </div>

                <div class="grid gap-7 sm:grid-cols-2 lg:grid-cols-4">

                    <!-- Card 1 -->
                    <article
                        class="group overflow-hidden rounded-2xl border border-slate-100 bg-white shadow-sm transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                        <div class="overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=800&q=80"
                                alt="Modern professional office" loading="lazy"
                                class="h-52 w-full object-cover transition duration-500 group-hover:scale-105">
                        </div>
                        <div class="p-6">
                            <div
                                class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-brand">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.5-1.7M9 20H2v-2a4 4 0 017.5-2M16 11a4 4 0 10-8 0 4 4 0 008 0zm5 0a3 3 0 11-6 0" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-navy">Better Service</h3>
                            <p class="mt-3 text-sm leading-7 text-slate-600">
                                We strive to deliver quality service and address your
                                concerns with care and attention.
                            </p>
                        </div>
                    </article>

                    <!-- Card 2 -->
                    <article
                        class="group overflow-hidden rounded-2xl border border-slate-100 bg-white shadow-sm transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                        <div class="overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1512428559087-560fa5ceab42?auto=format&fit=crop&w=800&q=80"
                                alt="Using a smartphone to access services" loading="lazy"
                                class="h-52 w-full object-cover transition duration-500 group-hover:scale-105">
                        </div>
                        <div class="p-6">
                            <div
                                class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-brand">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-navy">Fast & Easy</h3>
                            <p class="mt-3 text-sm leading-7 text-slate-600">
                                Submit your complaint online through a simple,
                                convenient, and user-friendly process.
                            </p>
                        </div>
                    </article>

                    <!-- Card 3 -->
                    <article
                        class="group overflow-hidden rounded-2xl border border-slate-100 bg-white shadow-sm transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                        <div class="overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=800&q=80"
                                alt="Modern city buildings" loading="lazy"
                                class="h-52 w-full object-cover transition duration-500 group-hover:scale-105">
                        </div>
                        <div class="p-6">
                            <div
                                class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-brand">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 17l6-6 4 4 8-8M15 7h6v6" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-navy">Continuous Improvement</h3>
                            <p class="mt-3 text-sm leading-7 text-slate-600">
                                Your feedback helps us identify problems, understand
                                expectations, and improve our services.
                            </p>
                        </div>
                    </article>

                    <!-- Card 4 -->
                    <article
                        class="group overflow-hidden rounded-2xl border border-slate-100 bg-white shadow-sm transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                        <div class="overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1497366811353-6870744d04b2?auto=format&fit=crop&w=800&q=80"
                                alt="Bright and organized workspace" loading="lazy"
                                class="h-52 w-full object-cover transition duration-500 group-hover:scale-105">
                        </div>
                        <div class="p-6">
                            <div
                                class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-brand">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 22s8-4 8-11V5l-8-3-8 3v6c0 7 8 11 8 11zM9 12l2 2 4-4" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-navy">Trust & Transparency</h3>
                            <p class="mt-3 text-sm leading-7 text-slate-600">
                                We value your feedback and aim to handle every concern
                                responsibly and transparently.
                            </p>
                        </div>
                    </article>

                </div>
            </div>
        </section>

        <!-- Complaint call to action -->
        <section id="contact" class="px-5 py-16 sm:py-20">
            <div
                class="relative mx-auto max-w-6xl overflow-hidden rounded-3xl bg-gradient-to-br from-blue-50 via-sky-50 to-blue-100 px-6 py-12 sm:px-12 sm:py-16">
                <div
                    class="relative flex flex-col items-center justify-between gap-8 text-center md:flex-row md:text-left">
                    <div>
                        <span class="text-sm font-bold uppercase tracking-widest text-brand">
                            We are listening
                        </span>
                        <h2 class="mt-3 text-3xl font-extrabold tracking-tight text-navy sm:text-4xl">
                            Have a complaint?
                        </h2>
                        <p class="mt-4 max-w-xl leading-7 text-slate-600">
                            Your feedback matters to us. Tell us about your concern
                            and help us make your experience better.
                        </p>
                    </div>

                    <a href="{{ url('/complaint') }}"
                        class="inline-flex shrink-0 items-center gap-3 rounded-full bg-brand px-7 py-4 font-semibold text-white shadow-lg shadow-blue-200 transition hover:-translate-y-1 hover:bg-blue-700">
                        Register Your Complaints
                        <span aria-hidden="true">→</span>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="border-t border-slate-100 bg-white">
        <div
            class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-5 px-5 py-8 text-center sm:flex-row sm:text-left lg:px-8">

            <a href="{{ url('/') }}" class="text-lg font-extrabold text-navy">
                Rayaan <span class="text-brand">Systems</span>
            </a>

            <p class="text-sm text-slate-500">
                © {{ date('Y') }} Rayaan Systems. All rights reserved.
            </p>

            <a href="{{ url('/complaint') }}" class="text-sm font-semibold text-brand hover:text-blue-800">
                Register a Complaint →
            </a>
        </div>
    </footer>

    <script>
    const menuButton = document.getElementById('menuButton');
    const mobileMenu = document.getElementById('mobileMenu');

    menuButton.addEventListener('click', function() {
        const isHidden = mobileMenu.classList.toggle('hidden');
        menuButton.setAttribute('aria-expanded', String(!isHidden));
    });

    mobileMenu.querySelectorAll('a').forEach(function(link) {
        link.addEventListener('click', function() {
            mobileMenu.classList.add('hidden');
            menuButton.setAttribute('aria-expanded', 'false');
        });
    });
    </script>

</body>

</html>
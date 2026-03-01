<!DOCTYPE html>
<html lang="en" class="scroll-smooth dark">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Biography Page</title>

    <!-- Quicksand Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        quicksand: ['Quicksand', 'sans-serif']
                    },
                    boxShadow: {
                        soft: '0 10px 30px rgba(0,0,0,0.08)',
                        glow: '0 10px 30px rgba(34, 211, 238, 0.18)'
                    }
                }
            }
        }
    </script>

    <style>
        * {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-tap-highlight-color: transparent;
        }

        html, body {
            overflow-x: hidden;
        }
    </style>

    <script>
        // Default theme: dark
        (function () {
            const savedTheme = localStorage.getItem('theme');

            if (savedTheme === 'light') {
                document.documentElement.classList.remove('dark');
            } else {
                document.documentElement.classList.add('dark');
                if (!savedTheme) {
                    localStorage.setItem('theme', 'dark');
                }
            }
        })();
    </script>
</head>
<body class="font-quicksand select-none bg-slate-100 text-slate-800 transition-colors duration-300 dark:bg-slate-950 dark:text-slate-100">

    <!-- Background Effects -->
    <div class="fixed inset-0 -z-10 overflow-hidden">
        <div class="absolute top-[-140px] left-[-100px] h-80 w-80 rounded-full bg-cyan-400/20 blur-3xl dark:bg-cyan-500/10"></div>
        <div class="absolute bottom-[-140px] right-[-100px] h-80 w-80 rounded-full bg-violet-400/20 blur-3xl dark:bg-violet-500/10"></div>
        <div class="absolute top-1/3 left-1/2 h-72 w-72 -translate-x-1/2 rounded-full bg-fuchsia-300/10 blur-3xl dark:bg-fuchsia-500/5"></div>
    </div>

    <!-- Toast Notification -->
    <div id="toast"
         class="pointer-events-none fixed bottom-5 right-5 z-[999] flex max-w-[90vw] items-center gap-3 rounded-2xl border border-white/20 bg-white/90 px-4 py-3 text-sm font-semibold text-slate-800 opacity-0 shadow-2xl backdrop-blur-xl transition-all duration-300 translate-y-4 dark:border-slate-700 dark:bg-slate-900/90 dark:text-slate-100 sm:max-w-sm">
        <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-gradient-to-br from-cyan-500 to-indigo-500 text-white shadow-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M16.704 5.29a1 1 0 010 1.42l-7.07 7.07a1 1 0 01-1.415 0L3.296 8.857a1 1 0 011.414-1.414l4.216 4.215 6.364-6.364a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>
        </div>
        <p id="toastMessage">Action completed successfully.</p>
    </div>

    <!-- Header -->
    <header class="sticky top-0 z-50 border-b border-white/10 bg-white/70 backdrop-blur-xl dark:border-slate-800 dark:bg-slate-950/75">
        <div class="mx-auto flex max-w-6xl items-center justify-between px-4 py-4 sm:px-6">
            <a href="#" class="text-xl font-bold tracking-tight text-slate-900 sm:text-2xl dark:text-white">
                Bio<span class="text-cyan-500">Graph</span>
            </a>

            <!-- Theme Switch -->
            <label for="themeToggle" class="relative inline-flex cursor-pointer items-center">
                <input type="checkbox" id="themeToggle" class="peer sr-only">

                <div class="relative h-8 w-16 rounded-full bg-slate-300 shadow-inner transition-colors duration-300 peer-checked:bg-cyan-500 dark:bg-slate-700"></div>

                <div class="absolute left-1 flex h-6 w-6 items-center justify-center rounded-full bg-white text-xs shadow-md transition-all duration-300 peer-checked:translate-x-8">
                    <span id="themeIcon">🌙</span>
                </div>
            </label>
        </div>
    </header>

    <main class="mx-auto max-w-6xl px-4 py-8 sm:px-6 sm:py-10">
        <!-- Hero -->
        <section class="grid items-center gap-10 lg:grid-cols-2">
            <div class="order-2 lg:order-1">
                <span class="inline-flex items-center rounded-full border border-cyan-400/30 bg-cyan-500/10 px-4 py-1.5 text-xs font-bold uppercase tracking-[0.2em] text-cyan-600 dark:text-cyan-300 sm:text-sm">
                    Full Stack Developer
                </span>

                <h1 class="mt-5 text-4xl font-bold leading-tight sm:text-5xl lg:text-6xl">
                    Hello, I'm
                    <span class="bg-gradient-to-r from-cyan-400 via-sky-400 to-indigo-400 bg-clip-text text-transparent">
                        Alex Carter
                    </span>
                </h1>

                <p class="mt-5 max-w-xl text-base leading-8 text-slate-600 dark:text-slate-300 sm:text-lg">
                    I build clean, modern, and high-performing digital experiences. My work combines elegant design,
                    user-focused interfaces, and scalable backend solutions.
                </p>

                <div class="mt-8 flex flex-col gap-4 sm:flex-row">
                    <a href="#contact"
                       class="group inline-flex items-center justify-center gap-2 rounded-2xl bg-gradient-to-r from-cyan-500 via-sky-500 to-indigo-500 px-6 py-3.5 text-sm font-bold text-white shadow-glow transition-all duration-300 hover:-translate-y-1 hover:scale-[1.01] hover:shadow-2xl">
                        <span>Let's Connect</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-0.5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L13.586 11H4a1 1 0 110-2h9.586l-3.293-3.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </a>

                    <a href="#about"
                       class="group inline-flex items-center justify-center gap-2 rounded-2xl border border-white/40 bg-white/80 px-6 py-3.5 text-sm font-bold text-slate-700 shadow-soft backdrop-blur-md transition-all duration-300 hover:-translate-y-1 hover:scale-[1.01] hover:bg-white hover:shadow-xl dark:border-slate-700 dark:bg-slate-900/80 dark:text-slate-200 dark:hover:bg-slate-900">
                        <span>Explore More</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform duration-300 group-hover:translate-y-0.5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 14a1 1 0 01-.707-.293l-4-4a1 1 0 111.414-1.414L10 11.586l3.293-3.293a1 1 0 111.414 1.414l-4 4A1 1 0 0110 14z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="order-1 lg:order-2">
                <div class="rounded-3xl border border-white/20 bg-white/70 p-5 shadow-2xl backdrop-blur-xl sm:p-6 dark:border-slate-800 dark:bg-slate-900/70">
                    <div class="flex flex-col items-center gap-5 text-center sm:flex-row sm:text-left">
                        <img
                            src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=500&q=80"
                            alt="Profile Photo"
                            class="h-24 w-24 rounded-2xl object-cover shadow-lg ring-4 ring-white/30 dark:ring-slate-800"
                            draggable="false"
                        >
                        <div>
                            <h2 class="text-2xl font-bold">Alex Carter</h2>
                            <p class="text-slate-600 dark:text-slate-300">London, United Kingdom</p>
                            <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">5+ years of experience</p>
                        </div>
                    </div>

                    <div class="mt-6 grid grid-cols-1 gap-4 sm:grid-cols-3 text-center">
                        <div class="rounded-2xl bg-slate-100 p-4 dark:bg-slate-800">
                            <p class="text-2xl font-bold">30+</p>
                            <p class="text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400">Projects</p>
                        </div>
                        <div class="rounded-2xl bg-slate-100 p-4 dark:bg-slate-800">
                            <p class="text-2xl font-bold">12</p>
                            <p class="text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400">Clients</p>
                        </div>
                        <div class="rounded-2xl bg-slate-100 p-4 dark:bg-slate-800">
                            <p class="text-2xl font-bold">99%</p>
                            <p class="text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400">Satisfaction</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About -->
        <section id="about" class="mt-20 sm:mt-24">
            <div class="mb-8">
                <p class="text-xs font-bold uppercase tracking-[0.3em] text-cyan-600 dark:text-cyan-400 sm:text-sm">About Me</p>
                <h2 class="mt-2 text-2xl font-bold sm:text-3xl">A Short Biography</h2>
            </div>

            <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-soft sm:p-8 dark:border-slate-800 dark:bg-slate-900">
                <p class="text-base leading-8 text-slate-600 dark:text-slate-300 sm:text-lg">
                    My journey in software development started with a passion for building elegant and practical web experiences.
                    On the frontend, I focus on modern UI design, responsiveness, and performance. On the backend,
                    I create reliable and maintainable systems using PHP and database-driven architectures.
                </p>
                <p class="mt-4 text-base leading-8 text-slate-600 dark:text-slate-300 sm:text-lg">
                    I enjoy combining aesthetics with functionality, transforming ideas into polished digital products
                    that are both visually engaging and technically solid.
                </p>
            </div>
        </section>

        <!-- Experience -->
        <section id="experience" class="mt-20 sm:mt-24">
            <div class="mb-8">
                <p class="text-xs font-bold uppercase tracking-[0.3em] text-cyan-600 dark:text-cyan-400 sm:text-sm">Career</p>
                <h2 class="mt-2 text-2xl font-bold sm:text-3xl">Experience</h2>
            </div>

            <div class="grid gap-6 md:grid-cols-2">
                <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-soft transition-all duration-300 hover:-translate-y-1 hover:shadow-xl dark:border-slate-800 dark:bg-slate-900">
                    <p class="text-sm font-bold text-cyan-600 dark:text-cyan-400">2023 - Present</p>
                    <h3 class="mt-2 text-xl font-bold">Senior Web Developer</h3>
                    <p class="mt-3 leading-7 text-slate-600 dark:text-slate-300">
                        Leading modern web projects with a strong focus on performance, scalable architecture, accessibility,
                        and polished user experiences.
                    </p>
                </div>

                <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-soft transition-all duration-300 hover:-translate-y-1 hover:shadow-xl dark:border-slate-800 dark:bg-slate-900">
                    <p class="text-sm font-bold text-cyan-600 dark:text-cyan-400">2020 - 2023</p>
                    <h3 class="mt-2 text-xl font-bold">Frontend Developer</h3>
                    <p class="mt-3 leading-7 text-slate-600 dark:text-slate-300">
                        Built responsive interfaces, optimized UI workflows, and improved user interaction across a wide
                        range of digital products.
                    </p>
                </div>
            </div>
        </section>

        <!-- Skills -->
        <section id="skills" class="mt-20 sm:mt-24">
            <div class="mb-8">
                <p class="text-xs font-bold uppercase tracking-[0.3em] text-cyan-600 dark:text-cyan-400 sm:text-sm">Expertise</p>
                <h2 class="mt-2 text-2xl font-bold sm:text-3xl">Skills</h2>
            </div>

            <div class="flex flex-wrap gap-3">
                <?php
                $skills = ['PHP', 'Tailwind CSS', 'JavaScript', 'MySQL', 'Laravel', 'Responsive Design', 'UI/UX', 'API Integration'];
                foreach ($skills as $skill) {
                    echo '<span class="rounded-2xl border border-white/40 bg-white/80 px-4 py-2.5 text-sm font-bold text-slate-700 shadow-soft backdrop-blur-md transition-all duration-300 hover:-translate-y-1 hover:shadow-lg dark:border-slate-700 dark:bg-slate-900/80 dark:text-slate-200">' . $skill . '</span>';
                }
                ?>
            </div>
        </section>

        <!-- Contact -->
        <section id="contact" class="mt-20 mb-10 sm:mt-24">
            <div class="rounded-3xl border border-slate-200 bg-gradient-to-br from-white to-slate-100 p-6 shadow-soft sm:p-8 dark:border-slate-800 dark:from-slate-900 dark:to-slate-950">
                <p class="text-xs font-bold uppercase tracking-[0.3em] text-cyan-600 dark:text-cyan-400 sm:text-sm">Contact</p>
                <h2 class="mt-2 text-2xl font-bold sm:text-3xl">Let's Work Together</h2>
                <p class="mt-4 max-w-2xl text-slate-600 dark:text-slate-300">
                    Whether you have a project idea, a collaboration opportunity, or just want to say hello,
                    feel free to reach out through any of the options below.
                </p>

                <div class="mt-8 grid gap-4 md:grid-cols-2">
                    <!-- Email -->
                    <div class="flex items-center gap-4 rounded-2xl border border-white/40 bg-white/80 p-4 shadow-soft backdrop-blur-md dark:border-slate-700 dark:bg-slate-900/80">
                        <button
                            type="button"
                            class="copy-btn flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl bg-slate-900 text-white shadow-lg transition-all duration-300 hover:-translate-y-0.5 hover:scale-105 dark:bg-white dark:text-slate-900"
                            data-copy="alexcarter@example.com"
                            data-label="Email"
                            aria-label="Copy email"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M8 2a2 2 0 00-2 2v1H5a2 2 0 00-2 2v7a2 2 0 002 2h7a2 2 0 002-2v-1h1a2 2 0 002-2V7a2 2 0 00-2-2h-1V4a2 2 0 00-2-2H8zm4 3V4H8v1h4zm-6 2h7v7H6V7z" />
                            </svg>
                        </button>

                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-gradient-to-br from-cyan-500 to-indigo-500 text-white shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2.94 5.5A2 2 0 014.78 4h10.44a2 2 0 011.84 1.5L10 9.88 2.94 5.5z" />
                                <path d="M18 8.12l-7.47 4.67a1 1 0 01-1.06 0L2 8.12V14a2 2 0 002 2h12a2 2 0 002-2V8.12z" />
                            </svg>
                        </div>

                        <div class="min-w-0">
                            <p class="text-xs font-bold uppercase tracking-[0.2em] text-slate-500 dark:text-slate-400">Email</p>
                            <p class="truncate text-sm font-bold text-slate-800 sm:text-base dark:text-slate-100">alexcarter@example.com</p>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="flex items-center gap-4 rounded-2xl border border-white/40 bg-white/80 p-4 shadow-soft backdrop-blur-md dark:border-slate-700 dark:bg-slate-900/80">
                        <button
                            type="button"
                            class="copy-btn flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl bg-slate-900 text-white shadow-lg transition-all duration-300 hover:-translate-y-0.5 hover:scale-105 dark:bg-white dark:text-slate-900"
                            data-copy="+44 7700 900123"
                            data-label="Phone number"
                            aria-label="Copy phone number"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M8 2a2 2 0 00-2 2v1H5a2 2 0 00-2 2v7a2 2 0 002 2h7a2 2 0 002-2v-1h1a2 2 0 002-2V7a2 2 0 00-2-2h-1V4a2 2 0 00-2-2H8zm4 3V4H8v1h4zm-6 2h7v7H6V7z" />
                            </svg>
                        </button>

                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-gradient-to-br from-emerald-500 to-cyan-500 text-white shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2 5a2 2 0 012-2h1.28a1 1 0 01.95.68l1.1 3.3a1 1 0 01-.27 1.05L5.8 9.3a11.05 11.05 0 004.9 4.9l1.27-1.26a1 1 0 011.05-.27l3.3 1.1a1 1 0 01.68.95V16a2 2 0 01-2 2h-.5C7.6 18 2 12.4 2 5.5V5z" />
                            </svg>
                        </div>

                        <div class="min-w-0">
                            <p class="text-xs font-bold uppercase tracking-[0.2em] text-slate-500 dark:text-slate-400">Phone</p>
                            <p class="truncate text-sm font-bold text-slate-800 sm:text-base dark:text-slate-100">+44 7700 900123</p>
                        </div>
                    </div>

                    <!-- Location -->
                    <div class="flex items-center gap-4 rounded-2xl border border-white/40 bg-white/80 p-4 shadow-soft backdrop-blur-md dark:border-slate-700 dark:bg-slate-900/80">
                        <button
                            type="button"
                            class="copy-btn flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl bg-slate-900 text-white shadow-lg transition-all duration-300 hover:-translate-y-0.5 hover:scale-105 dark:bg-white dark:text-slate-900"
                            data-copy="London, United Kingdom"
                            data-label="Location"
                            aria-label="Copy location"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M8 2a2 2 0 00-2 2v1H5a2 2 0 00-2 2v7a2 2 0 002 2h7a2 2 0 002-2v-1h1a2 2 0 002-2V7a2 2 0 00-2-2h-1V4a2 2 0 00-2-2H8zm4 3V4H8v1h4zm-6 2h7v7H6V7z" />
                            </svg>
                        </button>

                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-gradient-to-br from-rose-500 to-orange-500 text-white shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.05 8.05a4.95 4.95 0 119.9 0c0 3.19-2.38 6.08-4.2 7.87a1 1 0 01-1.4 0c-1.82-1.79-4.3-4.68-4.3-7.87zM10 10a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            </svg>
                        </div>

                        <div class="min-w-0">
                            <p class="text-xs font-bold uppercase tracking-[0.2em] text-slate-500 dark:text-slate-400">Location</p>
                            <p class="truncate text-sm font-bold text-slate-800 sm:text-base dark:text-slate-100">London, United Kingdom</p>
                        </div>
                    </div>

                    <!-- Website -->
                    <div class="flex items-center gap-4 rounded-2xl border border-white/40 bg-white/80 p-4 shadow-soft backdrop-blur-md dark:border-slate-700 dark:bg-slate-900/80">
                        <button
                            type="button"
                            class="copy-btn flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl bg-slate-900 text-white shadow-lg transition-all duration-300 hover:-translate-y-0.5 hover:scale-105 dark:bg-white dark:text-slate-900"
                            data-copy="www.alexcarter.dev"
                            data-label="Website"
                            aria-label="Copy website"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M8 2a2 2 0 00-2 2v1H5a2 2 0 00-2 2v7a2 2 0 002 2h7a2 2 0 002-2v-1h1a2 2 0 002-2V7a2 2 0 00-2-2h-1V4a2 2 0 00-2-2H8zm4 3V4H8v1h4zm-6 2h7v7H6V7z" />
                            </svg>
                        </button>

                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-gradient-to-br from-violet-500 to-fuchsia-500 text-white shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4.083 9h1.946c.413-1.706 1.262-3.258 2.421-4.5A8.012 8.012 0 004.083 9zm0 2a8.012 8.012 0 004.367 4.5c-1.16-1.242-2.009-2.794-2.421-4.5H4.083zm3.987 0c.463 1.86 1.553 3.462 2.93 4.5 1.377-1.038 2.467-2.64 2.93-4.5H8.07zm5.901-2h1.946a8.012 8.012 0 00-4.367-4.5c1.16 1.242 2.009 2.794 2.421 4.5zM10 4.07C8.623 5.108 7.533 6.71 7.07 8.57h5.86C12.467 6.71 11.377 5.108 10 4.07zm3.971 6.93c-.412 1.706-1.261 3.258-2.421 4.5A8.012 8.012 0 0015.917 11h-1.946z" clip-rule="evenodd" />
                            </svg>
                        </div>

                        <div class="min-w-0">
                            <p class="text-xs font-bold uppercase tracking-[0.2em] text-slate-500 dark:text-slate-400">Website</p>
                            <p class="truncate text-sm font-bold text-slate-800 sm:text-base dark:text-slate-100">www.alexcarter.dev</p>
                        </div>
                    </div>
                </div>

                <div class="mt-8 flex flex-col gap-4 sm:flex-row">
                    <a href="mailto:alexcarter@example.com"
                       class="group inline-flex items-center justify-center gap-2 rounded-2xl bg-gradient-to-r from-cyan-500 via-sky-500 to-indigo-500 px-6 py-3.5 text-sm font-bold text-white shadow-glow transition-all duration-300 hover:-translate-y-1 hover:scale-[1.01] hover:shadow-2xl">
                        <span>Send Email</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-0.5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L13.586 11H4a1 1 0 110-2h9.586l-3.293-3.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </a>

                    <a href="tel:+447700900123"
                       class="group inline-flex items-center justify-center gap-2 rounded-2xl border border-white/40 bg-white/80 px-6 py-3.5 text-sm font-bold text-slate-700 shadow-soft backdrop-blur-md transition-all duration-300 hover:-translate-y-1 hover:scale-[1.01] hover:bg-white hover:shadow-xl dark:border-slate-700 dark:bg-slate-900/80 dark:text-slate-200 dark:hover:bg-slate-900">
                        <span>Call Now</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform duration-300 group-hover:rotate-12" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2 5a2 2 0 012-2h1.28a1 1 0 01.95.68l1.1 3.3a1 1 0 01-.27 1.05L5.8 9.3a11.05 11.05 0 004.9 4.9l1.27-1.26a1 1 0 011.05-.27l3.3 1.1a1 1 0 01.68.95V16a2 2 0 01-2 2h-.5C7.6 18 2 12.4 2 5.5V5z" />
                        </svg>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <script>
        const themeToggle = document.getElementById('themeToggle');
        const html = document.documentElement;
        const themeIcon = document.getElementById('themeIcon');
        const toast = document.getElementById('toast');
        const toastMessage = document.getElementById('toastMessage');
        let toastTimeout;

        function showToast(message) {
            toastMessage.textContent = message;
            toast.classList.remove('opacity-0', 'translate-y-4');
            toast.classList.add('opacity-100', 'translate-y-0');

            clearTimeout(toastTimeout);
            toastTimeout = setTimeout(() => {
                toast.classList.remove('opacity-100', 'translate-y-0');
                toast.classList.add('opacity-0', 'translate-y-4');
            }, 2400);
        }

        function updateToggleUI() {
            const isLight = !html.classList.contains('dark');
            themeToggle.checked = isLight;
            themeIcon.textContent = isLight ? '☀️' : '🌙';
        }

        updateToggleUI();

        themeToggle.addEventListener('change', function () {
            if (this.checked) {
                html.classList.remove('dark');
                localStorage.setItem('theme', 'light');
                showToast('Theme changed successfully. Light mode is now active.');
            } else {
                html.classList.add('dark');
                localStorage.setItem('theme', 'dark');
                showToast('Theme changed successfully. Dark mode is now active.');
            }

            updateToggleUI();
        });

        async function copyToClipboard(text, label) {
            try {
                await navigator.clipboard.writeText(text);
                showToast(label + ' copied successfully.');
            } catch (error) {
                const tempInput = document.createElement('input');
                tempInput.value = text;
                document.body.appendChild(tempInput);
                tempInput.select();
                document.execCommand('copy');
                document.body.removeChild(tempInput);
                showToast(label + ' copied successfully.');
            }
        }

        document.querySelectorAll('.copy-btn').forEach(button => {
            button.addEventListener('click', function () {
                const text = this.getAttribute('data-copy');
                const label = this.getAttribute('data-label');
                copyToClipboard(text, label);
            });
        });

        // Prevent text selection by mouse and keyboard
        document.addEventListener('selectstart', function (e) {
            e.preventDefault();
        });

        document.addEventListener('dragstart', function (e) {
            e.preventDefault();
        });
    </script>
</body>
</html>
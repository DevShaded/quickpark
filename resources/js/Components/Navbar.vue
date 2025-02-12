<script setup>
import { ref } from "vue";
import { Link } from "@inertiajs/vue3";

// Mobile navigation state
const mobileNavOpen = ref(false);

// Menu items array to populate both desktop and mobile links
const menuItems = ref([
    {
        name: "Hjem",
        url: "/",
    },
    {
        name: "Trenger Hjelp?",
        url: "/help",
    },
]);
</script>

<template>
    <div
        class="relative overflow-hidden bg-white dark:bg-gray-900 dark:text-gray-100"
    >
        <section id="page-header" class="relative flex flex-none items-center py-8">
            <div
                class="container mx-auto flex items-center justify-between px-4 lg:px-8 xl:max-w-7xl"
            >
                <div class="flex items-center">
                    <Link
                        href="/"
                        class="group inline-flex items-center gap-2 text-lg font-bold tracking-wide text-gray-900 hover:text-gray-600 dark:text-gray-100 dark:hover:text-gray-300"
                    >
                        <svg
                            class="hi-mini hi-cube-transparent inline-block size-5 text-blue-600 transition group-hover:scale-110 dark:text-blue-400"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            aria-hidden="true"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M9.638 1.093a.75.75 0 01.724 0l2 1.104a.75.75 0 11-.724 1.313L10 2.607l-1.638.903a.75.75 0 11-.724-1.313l2-1.104zM5.403 4.287a.75.75 0 01-.295 1.019l-.805.444.805.444a.75.75 0 01-.724 1.314L3.5 7.02v.73a.75.75 0 01-1.5 0v-2a.75.75 0 01.388-.657l1.996-1.1a.75.75 0 011.019.294zm9.194 0a.75.75 0 011.02-.295l1.995 1.101A.75.75 0 0118 5.75v2a.75.75 0 01-1.5 0v-.73l-.884.488a.75.75 0 11-.724-1.314l.806-.444-.806-.444a.75.75 0 01-.295-1.02zM7.343 8.284a.75.75 0 011.02-.294L10 8.893l1.638-.903a.75.75 0 11.724 1.313l-1.612.89v1.557a.75.75 0 01-1.5 0v-1.557l-1.612-.89a.75.75 0 01-.295-1.019zM2.75 11.5a.75.75 0 01.75.75v1.557l1.608.887a.75.75 0 01-.724 1.314l-1.996-1.101A.75.75 0 012 14.25v-2a.75.75 0 01.75-.75zm14.5 0a.75.75 0 01.75.75v2a.75.75 0 01-.388.657l-1.996 1.1a.75.75 0 11-.724-1.313l1.608-.887V12.25a.75.75 0 01.75-.75zm-7.25 4a.75.75 0 01.75.75v.73l.888-.49a.75.75 0 01.724 1.313l-2 1.104a.75.75 0 01-.724 0l-2-1.104a.75.75 0 11.724-1.313l.888.49v-.73a.75.75 0 01.75-.75z"
                                clip-rule="evenodd"
                            />
                        </svg>
                        <span>QuickPark</span>
                    </Link>
                </div>
                <div class="flex items-center">
                    <nav class="hidden space-x-3 md:space-x-6 lg:block">
                        <Link
                            v-for="item in menuItems"
                            :key="item.name"
                            :href="item.url"
                            class="text-sm font-semibold text-gray-900 hover:text-blue-600 dark:text-gray-100 dark:hover:text-blue-400"
                        >
                            <span>{{ item.name }}</span>
                        </Link>
                    </nav>
                    <div class="lg:hidden">
                        <button
                            @click="mobileNavOpen = true"
                            type="button"
                            class="inline-flex items-center justify-center gap-2 rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm leading-5 font-semibold text-gray-800 hover:border-gray-300 hover:text-gray-900 hover:shadow-xs focus:ring-3 focus:ring-gray-300/25 active:border-gray-200 active:shadow-none dark:border-gray-700 dark:bg-transparent dark:text-gray-300 dark:hover:border-gray-600 dark:hover:text-gray-200 dark:focus:ring-gray-600/40 dark:active:border-gray-700"
                            aria-controls="tkMobileNav"
                        >
                            <svg
                                class="hi-mini hi-bars-3 inline-block size-5"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10zm0 5.25a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75a.75.75 0 01-.75-.75z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <Transition
                enter-active-class="transition ease-out duration-200"
                enter-from-class="opacity-50 translate-x-full"
                enter-to-class="opacity-100 translate-x-0"
                leave-active-class="transition ease-in duration-150"
                leave-from-class="opacity-100 translate-x-0"
                leave-to-class="opacity-50 translate-x-full"
            >
                <nav
                    v-if="mobileNavOpen"
                    id="tkMobileNav"
                    class="fixed top-0 right-0 bottom-0 z-50 w-72 overflow-auto bg-white/95 shadow-lg lg:hidden dark:bg-gray-800/95"
                    tabindex="-1"
                    aria-labelledby="tkMobileNavLabel"
                    aria-modal="true"
                    role="dialog"
                >
                    <div class="flex items-center justify-between p-6">
                        <a
                            id="tkMobileNavLabel"
                            href="#"
                            class="group inline-flex items-center gap-2 text-lg font-bold tracking-wide text-gray-900 hover:text-gray-600 dark:text-gray-100 dark:hover:text-gray-300"
                        >
                            <svg
                                class="hi-mini hi-cube-transparent inline-block size-5 text-blue-600 transition group-hover:scale-110 dark:text-blue-400"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M9.638 1.093a.75.75 0 01.724 0l2 1.104a.75.75 0 11-.724 1.313L10 2.607l-1.638.903a.75.75 0 11-.724-1.313l2-1.104zM5.403 4.287a.75.75 0 01-.295 1.019l-.805.444.805.444a.75.75 0 01-.724 1.314L3.5 7.02v.73a.75.75 0 01-1.5 0v-2a.75.75 0 01.388-.657l1.996-1.1a.75.75 0 011.019.294zm9.194 0a.75.75 0 011.02-.295l1.995 1.101A.75.75 0 0118 5.75v2a.75.75 0 01-1.5 0v-.73l-.884.488a.75.75 0 11-.724-1.314l.806-.444-.806-.444a.75.75 0 01-.295-1.02zM7.343 8.284a.75.75 0 011.02-.294L10 8.893l1.638-.903a.75.75 0 11.724 1.313l-1.612.89v1.557a.75.75 0 01-1.5 0v-1.557l-1.612-.89a.75.75 0 01-.295-1.019zM2.75 11.5a.75.75 0 01.75.75v1.557l1.608.887a.75.75 0 01-.724 1.314l-1.996-1.101A.75.75 0 012 14.25v-2a.75.75 0 01.75-.75zm14.5 0a.75.75 0 01.75.75v2a.75.75 0 01-.388.657l-1.996 1.1a.75.75 0 11-.724-1.313l1.608-.887V12.25a.75.75 0 01.75-.75zm-7.25 4a.75.75 0 01.75.75v.73l.888-.49a.75.75 0 01.724 1.313l-2 1.104a.75.75 0 01-.724 0l-2-1.104a.75.75 0 11.724-1.313l.888.49v-.73a.75.75 0 01.75-.75z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            <span>QuickPark</span>
                        </a>
                        <button
                            @click="mobileNavOpen = false"
                            type="button"
                            class="inline-flex items-center justify-center gap-2 rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm leading-5 font-semibold text-gray-800 hover:border-gray-300 hover:text-gray-900 hover:shadow-xs focus:ring-3 focus:ring-gray-300/25 active:border-gray-200 active:shadow-none dark:border-gray-700 dark:bg-gray-800 dark:text-gray-300 dark:hover:border-gray-600 dark:hover:text-gray-200 dark:focus:ring-gray-600/40 dark:active:border-gray-700"
                        >
                            <svg
                                class="hi-mini hi-x-mark -mx-0.5 inline-block size-5"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z"
                                />
                            </svg>
                        </button>
                    </div>
                    <div class="h-px bg-gray-200/75 dark:bg-gray-700/75"></div>
                    <nav class="flex flex-col gap-2 px-6 py-5">
                        <Link
                            v-for="item in menuItems"
                            :key="item.name"
                            :href="item.url"
                            class="py-1 text-sm font-semibold text-gray-900 hover:text-blue-600 dark:text-gray-100 dark:hover:text-blue-400"
                        >
                            <span>{{ item.name }}</span>
                        </Link>
                    </nav>
                </nav>
            </Transition>
            <Transition
                enter-active-class="transition ease-out duration-200"
                enter-from-class="opacity-0"
                enter-to-class="opacity-100"
                leave-active-class="transition ease-in duration-150"
                leave-from-class="opacity-100"
                leave-to-class="opacity-0"
            >
                <div
                    v-if="mobileNavOpen"
                    @click="mobileNavOpen = false"
                    class="fixed inset-0 z-40 bg-gray-900/20 backdrop-blur-xs will-change-auto lg:hidden dark:bg-gray-900/80"
                ></div>
            </Transition>
        </section>
    </div>
</template>

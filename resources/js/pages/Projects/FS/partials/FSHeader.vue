<template>
    <header
        :class="`fixed left-0 right-0 top-0 z-50 transition-all duration-300 ${
            shouldBeTransparent ? 'bg-transparent' : 'bg-white/60 backdrop-blur-sm shadow-md'
        }`"
    >
        <div
            :class="`py-2 transition-colors duration-300 ${
                shouldBeTransparent ? 'text-white' : 'text-gray-700'
            }`"
        >
            <div
                class="container mx-auto flex items-center justify-between px-4 pb-3 border-b"
                :class="{'border-white/40': shouldBeTransparent, 'border-gray-500/60': !shouldBeTransparent }"
            >
                <div class="flex items-center gap-4">
                    <a
                        href="https://facebook.com"
                        target="_blank"
                        rel="noopener noreferrer"
                        :class="`transition-colors ${
                            shouldBeTransparent
                                ? 'hover:text-red-400'
                                : 'hover:text-red-600'
                        }`"
                    >
                        <Icon name="Facebook" class="h-4 w-4" />
                    </a>
                    <a
                        href="https://instagram.com"
                        target="_blank"
                        rel="noopener noreferrer"
                        :class="`transition-colors ${
                            shouldBeTransparent
                                ? 'hover:text-red-400'
                                : 'hover:text-red-600'
                        }`"
                    >
                        <Icon name="Instagram" class="h-4 w-4" />
                    </a>
                    <a
                        href="https://twitter.com"
                        target="_blank"
                        rel="noopener noreferrer"
                        :class="`transition-colors ${
                            shouldBeTransparent
                                ? 'hover:text-red-400'
                                : 'hover:text-red-600'
                        }`"
                    >
                        <Icon name="Twitter" class="h-4 w-4" />
                    </a>
                </div>
                <div class="flex items-center gap-6 text-sm">
                    <a
                        href="tel:+9607682000"
                        :class="`flex items-center gap-2 transition-colors ${
                            shouldBeTransparent
                                ? 'hover:text-red-400'
                                : 'hover:text-red-600'
                        }`"
                    >
                        <Icon name="Phone" class="h-4 w-4" />
                        <span>+960 768 2000</span>
                    </a>
                    <a
                        href="mailto:info@fuvahmulakuschool.edu.mv"
                        :class="`flex items-center gap-2 transition-colors ${
                            shouldBeTransparent
                                ? 'hover:text-red-400'
                                : 'hover:text-red-600'
                        }`"
                    >
                        <Icon name="Mail" class="h-4 w-4" />
                        <span>info@fuvahmulakuschool.edu.mv</span>
                    </a>
                </div>
            </div>
        </div>

        <nav>
            <div class="container mx-auto px-4">
                <div class="flex h-20 items-center justify-between">
                    <Link :href="fs.home().url" class="flex items-center gap-3">
                        <img
                            :src="logo"
                            alt="Fuvahmulaku School Logo"
                            class="h-16 w-16 object-contain"
                        />
                        <span
                            :class="`transition-colors duration-300 ${
                                shouldBeTransparent
                                    ? 'text-white'
                                    : 'text-gray-900'
                            }`"
                        >
                            Fuvahmulaku School
                        </span>
                    </Link>

                    <ul class="flex items-center gap-8">
                        <li>
                            <Link
                                :href="fs.home().url"
                                :class="`transition-colors ${
                                    shouldBeTransparent
                                        ? 'text-white hover:text-red-400'
                                        : 'text-gray-700 hover:text-red-600'
                                }`"
                            >
                                Home
                            </Link>
                        </li>

                        <li>
                            <Link
                                :href="fs.about.introduction().url"
                                :class="`transition-colors ${
                                    shouldBeTransparent
                                        ? 'text-white hover:text-red-400'
                                        : 'text-gray-700 hover:text-red-600'
                                }`"
                            >
                                About
                            </Link>
                        </li>
                        <li>
                            <Link
                                :href="fs.about.history().url"
                                :class="`transition-colors ${
                                    shouldBeTransparent
                                        ? 'text-white hover:text-red-400'
                                        : 'text-gray-700 hover:text-red-600'
                                }`"
                            >
                                History
                            </Link>
                        </li>
                        <li>
                            <Link
                                :href="fs.news.list().url"
                                :class="`transition-colors ${
                                    shouldBeTransparent
                                        ? 'text-white hover:text-red-400'
                                        : 'text-gray-700 hover:text-red-600'
                                }`"
                            >
                                News
                            </Link>
                        </li>
                        <li>
                            <Link
                                :href="fs.gallery().url"
                                :class="`transition-colors ${
                                    shouldBeTransparent
                                        ? 'text-white hover:text-red-400'
                                        : 'text-gray-700 hover:text-red-600'
                                }`"
                            >
                                Gallery
                            </Link>
                        </li>
                        <li>
                            <Link
                                :href="fs.downloads().url"
                                :class="`transition-colors ${
                                    shouldBeTransparent
                                        ? 'text-white hover:text-red-400'
                                        : 'text-gray-700 hover:text-red-600'
                                }`"
                            >
                                Downloads
                            </Link>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</template>

<script setup lang="ts">
import { computed, onMounted, onUnmounted, ref } from 'vue';
import Icon from '@/components/Icon.vue';
import { Link } from '@inertiajs/vue3';
import fs from '@/routes/fs/index';

const isScrolled = ref<boolean>(false);
const isHomePage = computed(() => window.location.pathname === fs.home().url);

const logo = ref<string>('/images/logo.png');

const handleScroll = () => {
    isScrolled.value = window.scrollY > 50;
};

onMounted(() => {
    window.addEventListener('scroll', handleScroll);
});

onUnmounted(() => {
    window.removeEventListener('scroll', handleScroll);
});

const shouldBeTransparent = computed(() => {
    return isHomePage.value && !isScrolled.value;
});
</script>

<template>
    <footer class="bg-gray-900 text-gray-300">
        <div class="container mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-white text-xl mb-6">Contact Information</h3>
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <Icon name="MapPin" class="w-5 h-5 text-blue-400 mt-1 flex-shrink-0" />
                            <div>
                                <p>Fuvahmulaku School</p>
                                <p>Fuvahmulah City</p>
                                <p>Maldives</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <Icon name="Phone" class="w-5 h-5 text-blue-400 flex-shrink-0" />
                            <a href="tel:+9607682000" class="hover:text-white transition-colors">
                                +960 768 2000
                            </a>
                        </div>
                        <div class="flex items-center gap-3">
                            <Icon name="Mail" class="w-5 h-5 text-blue-400 flex-shrink-0" />
                            <a href="mailto:info@fuvahmulakuschool.edu.mv" class="hover:text-white transition-colors">
                                info@fuvahmulakuschool.edu.mv
                            </a>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="text-white text-xl mb-6">Useful Links</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="space-y-3">
                            <Link href="/" class="block hover:text-white transition-colors">
                                Home
                            </Link>
                            <Link href="/about/introduction" class="block hover:text-white transition-colors">
                                About Us
                            </Link>
                            <Link href="/news" class="block hover:text-white transition-colors">
                                News & Events
                            </Link>
                        </div>
                        <div class="space-y-3">
                            <Link href="/gallery" class="block hover:text-white transition-colors">
                                Gallery
                            </Link>
                            <Link href="/downloads" class="block hover:text-white transition-colors">
                                Downloads
                            </Link>
                            <a href="#" class="block hover:text-white transition-colors">
                                Contact Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-t border-gray-800">
            <div class="container mx-auto px-4 py-6 flex justify-between items-center">
                <p class="text-gray-400 text-sm">
                    © {{ new Date().getFullYear() }} Fuvahmulaku School
                </p>
                <p class="text-gray-400 text-sm">
                    Design & Develop with <span class="text-red-600">&hearts;</span> by <a href="https://wue.mv" target="_blank">Wue</a>
                </p>
            </div>
        </div>
    </footer>
</template>

<script setup lang="ts">
import Icon from '@/components/Icon.vue';
import { Link } from '@inertiajs/vue3';
</script>

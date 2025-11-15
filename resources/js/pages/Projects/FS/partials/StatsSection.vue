<template>
    <section class="py-16 bg-gradient-to-r from-slate-700 to-slate-600">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center text-white">
                    <div class="flex justify-center mb-4">
                        <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                            <Icon name="GraduationCap" class="w-8 h-8" />
                        </div>
                    </div>
                    <div class="text-5xl mb-2">
                        1250
                    </div>
                    <div class="text-blue-100">Students</div>
                </div>

                <div class="text-center text-white">
                    <div class="flex justify-center mb-4">
                        <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                            <Icon name="BookOpen" class="w-8 h-8" />
                        </div>
                    </div>
                    <div class="text-5xl mb-2">
                        85
                    </div>
                    <div class="text-blue-100">Teachers</div>
                </div>

                <div class="text-center text-white">
                    <div class="flex justify-center mb-4">
                        <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                            <Icon name="Users" class="w-8 h-8" />
                        </div>
                    </div>
                    <div class="text-5xl mb-2">
                        42
                    </div>
                    <div class="text-blue-100">Staff Members</div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup lang="ts">
import Icon from '@/components/Icon.vue';
</script>

<template>
    <div class="relative bg-gradient-to-b from-blue-900 via-blue-800 to-blue-700 text-white overflow-hidden pt-32">
        <div class="absolute inset-0 opacity-30">
            <div class="absolute top-0 left-1/4 w-1 h-full bg-gradient-to-b from-white via-transparent to-transparent blur-sm"></div>
            <div class="absolute top-0 left-1/3 w-1 h-full bg-gradient-to-b from-white via-transparent to-transparent blur-sm"
                 :style="{animationDelay: '0.5s'}"
            ></div>
        <div class="absolute top-0 left-1/2 w-2 h-full bg-gradient-to-b from-white via-white/50 to-transparent blur-md"></div>
        <div class="absolute top-0 left-2/3 w-1 h-full bg-gradient-to-b from-white via-transparent to-transparent blur-sm"
             :style="{animationDelay: '1s'}"></div>
        <div class="absolute top-0 left-3/4 w-1 h-full bg-gradient-to-b from-white via-transparent to-transparent blur-sm"
             :style="{animationDelay: '1s'}"></div>
        </div>

        <div class="container mx-auto px-4 py-24 relative z-10">
            <div class="flex flex-col items-center text-center max-w-4xl mx-auto">
                <div class="mb-6">
                    <img src="/images/logo.png" alt="Fuvahmulaku School Logo" class="h-32 w-32 object-contain" />
                </div>

                <h1 class="text-5xl mb-6 text-white">Fuvahmulaku School</h1>

                <div class="max-w-3xl">
                    <p class="text-xl text-blue-100 italic mb-4">
                        "Education is the most powerful weapon which you can use to change the world."
                    </p>
                    <p class="text-blue-200">— Nelson Mandela</p>
                </div>

                <div class="mt-12 flex gap-4">
                    <button class="bg-red-600 hover:bg-red-700 text-white px-8 py-3 rounded-md transition-colors shadow-lg">
                        Apply Now
                    </button>
                    <button class="bg-white/10 hover:bg-white/20 text-white px-8 py-3 rounded-md transition-colors backdrop-blur-sm border border-white/30">
                        Learn More
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
</script>

<template>
    <div class="min-h-screen flex flex-col">
        <FSHeader />
        <main class="flex-grow">
            <slot />
        </main>
        <FSFooter />
    </div>
</template>

<script setup lang="ts">
import FSHeader from './partials/FSHeader.vue';
import FSFooter from './partials/FSFooter.vue';
</script>

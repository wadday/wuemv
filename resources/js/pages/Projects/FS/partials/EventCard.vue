<template>
    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow">
        <img :src="item.image"
             :alt="item.title"
             class="w-full h-48 object-cover" />
        <div class="p-6">
            <span v-if="item.isUpcoming" class="inline-block bg-red-100 text-red-600 px-3 py-1 rounded-full text-sm mb-3">
                Upcoming
            </span>
            <h3 class="text-xl mb-3 text-gray-900">{{ item.title }}</h3>
            <div class="space-y-2 mb-4">
                <div class="flex items-center gap-2 text-gray-600 text-sm">
                    <Icon name="Calendar" class="w-4 h-4" />
                    <span>{{ item.date }}</span>
                </div>
                <div class="flex items-center gap-2 text-gray-600 text-sm">
                    <Icon name="MapPin" class="w-4 h-4" />
                    <span>{{ item.location }}</span>
                </div>
            </div>
            <p class="text-gray-600 mb-4">
                {{ item.description }}
            </p>
            <Link
                :href="events.details(item.id).url"
                class="inline-flex items-center gap-1 text-blue-600 hover:text-blue-700 transition-colors"
            >
                View Details
                <Icon name="ArrowRight" class="w-4 h-4" />
            </Link>
        </div>
    </div>
</template>

<script setup lang="ts">
import { Link } from '@inertiajs/vue3'
import Icon from '@/components/Icon.vue';
import events from '@/routes/fs/events'

interface EventCard {
    id: string;
    title: string;
    date: string;
    location: string;
    description: string;
    image: string;
    isUpcoming?: boolean;
}

defineProps<{
    item: EventCard
}>()
</script>

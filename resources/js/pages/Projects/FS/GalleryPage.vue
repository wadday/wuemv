<template>
    <FSLayout>
        <div class="pt-32 bg-white min-h-screen">
            <div class="relative bg-gradient-to-br from-blue-600 via-blue-700 to-blue-900 text-white py-24 overflow-hidden">
                <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAxMCAwIEwgMCAwIDAgMTAiIGZpbGw9Im5vbmUiIHN0cm9rZT0id2hpdGUiIHN0cm9rZS1vcGFjaXR5PSIwLjA1IiBzdHJva2Utd2lkdGg9IjEiLz48L3BhdHRlcm4+PC9kZWZzPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JpZCkiLz48L3N2Zz4=')] opacity-40"></div>
                <div class="container mx-auto px-4 relative z-10">
                    <div class="max-w-4xl mx-auto text-center">
                    <span class="inline-block px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-sm mb-4">
                      <Icon name="ImageIcon" class="w-4 h-4 inline mr-2" />
                      Photo Gallery
                    </span>
                        <h1 class="text-5xl md:text-6xl mb-6">Gallery</h1>
                        <div class="w-20 h-1 bg-white mx-auto mb-6"></div>
                        <p class="text-xl text-blue-100 leading-relaxed">
                            Explore life at Fuvahmulaku School through photos
                        </p>
                    </div>
                </div>
            </div>

            <section class="py-8 bg-white sticky top-32 z-40 border-b border-gray-200 shadow-sm">
                <div class="container mx-auto px-4">
                    <div class="flex flex-wrap gap-3 justify-center">
                        <button
                            v-for="category in categories"
                            :key="category.id"
                            @click="setSelectedCategory(category.id)"
                        :class="`px-6 py-3 rounded-full transition-all shadow-sm ${
                        selectedCategory === category.id
                        ? 'bg-blue-600 text-white shadow-lg scale-105'
                        : 'bg-white text-gray-700 hover:bg-gray-50 border border-gray-200'
                        }`"
                        >
                        {{ category.name }}
                        </button>
                    </div>
                </div>
            </section>

            <section class="py-20 bg-gradient-to-b from-gray-50 to-white">
                <div class="container mx-auto px-4">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-7xl mx-auto">
                        <div
                            v-for="(item, index) in filteredItems"
                            :key="'item-'+index"
                            class="group relative overflow-hidden rounded-2xl shadow-md hover:shadow-2xl transition-all duration-300 cursor-pointer border border-gray-200 hover:border-blue-300"
                        >
                            <div class="relative h-72 overflow-hidden">
                                <img
                                    :src="item.image"
                                    :alt="item.title"
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                />
                                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                                    <div class="p-6 text-white w-full">
                                        <h3 class="text-xl mb-2">
                                            {{ item.title }}
                                        </h3>
                                        <span class="inline-block px-3 py-1 bg-white/20 backdrop-blur-sm rounded-full text-sm">
                                            {{ categories.find(c => c.id === item.category)?.name }}
                                          </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </FSLayout>
</template>

<script setup lang="ts">
import FSLayout from './FSLayout.vue';
import { computed, ref } from 'vue';
import Icon from '@/components/Icon.vue';

const selectedCategory = ref<string | null>('all');

const categories = [
    { id: 'all', name: 'All' },
    { id: 'events', name: 'Events' },
    { id: 'facilities', name: 'Facilities' },
    { id: 'activities', name: 'Activities' },
];

const galleryItems = [
    {
        image: 'https://images.unsplash.com/photo-1626402570254-3e3d1790e14f?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxzY2hvb2wlMjBidWlsZGluZyUyMGV4dGVyaW9yfGVufDF8fHx8MTc2Mjg4NDU0Mnww&ixlib=rb-4.1.0&q=80&w=1080',
        title: 'School Building',
        category: 'facilities',
    },
    {
        image: 'https://images.unsplash.com/photo-1643216755260-cb0bc30473c8?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxzY2hvb2wlMjBzdHVkZW50cyUyMGNsYXNzcm9vbXxlbnwxfHx8fDE3NjI4OTU2NDN8MA&ixlib=rb-4.1.0&q=80&w=1080',
        title: 'Classroom Learning',
        category: 'activities',
    },
    {
        image: 'https://images.unsplash.com/photo-1575467678971-7cd5c2937dc6?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxzY2llbmNlJTIwZmFpciUyMHN0dWRlbnRzfGVufDF8fHx8MTc2Mjg5NTY0NXww&ixlib=rb-4.1.0&q=80&w=1080',
        title: 'Science Fair',
        category: 'events',
    },
    {
        image: 'https://images.unsplash.com/photo-1632217142144-f96b15d867a7?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxzY2hvb2wlMjBsaWJyYXJ5JTIwYm9va3N8ZW58MXx8fHwxNzYyODIyMTEyfDA&ixlib=rb-4.1.0&q=80&w=1080',
        title: 'Library',
        category: 'facilities',
    },
    {
        image: 'https://images.unsplash.com/photo-1602052577122-f73b9710adba?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxzY2llbmNlJTIwbGFib3JhdG9yeXxlbnwxfHx8fDE3NjI4NTg4MDl8MA&ixlib=rb-4.1.0&q=80&w=1080',
        title: 'Science Laboratory',
        category: 'facilities',
    },
    {
        image: 'https://images.unsplash.com/photo-1595566358869-ddd6f35a964c?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxzY2hvb2wlMjBzcG9ydHMlMjBkYXl8ZW58MXx8fHwxNzYyODQ1OTg2fDA&ixlib=rb-4.1.0&q=80&w=1080',
        title: 'Sports Day',
        category: 'events',
    },
    {
        image: 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxzdHVkZW50cyUyMHN0dWR5aW5nfGVufDF8fHx8MTc2Mjg2NjQyOXww&ixlib=rb-4.1.0&q=80&w=1080',
        title: 'Group Study',
        category: 'activities',
    },
    {
        image: 'https://images.unsplash.com/photo-1623461487986-9400110de28e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxncmFkdWF0aW9uJTIwY2VyZW1vbnl8ZW58MXx8fHwxNzYyODY4NDgxfDA&ixlib=rb-4.1.0&q=80&w=1080',
        title: 'Graduation Ceremony',
        category: 'events',
    },
    {
        image: 'https://images.unsplash.com/photo-1592554860770-e1e0510a5ee8?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxwbGF5Z3JvdW5kJTIwY2hpbGRyZW58ZW58MXx8fHwxNzYyNzkzMDA3fDA&ixlib=rb-4.1.0&q=80&w=1080',
        title: 'Playground Activities',
        category: 'activities',
    },
];

const filteredItems = computed(() => {
    return selectedCategory.value === 'all'
        ? galleryItems
        : galleryItems.filter((item) => item.category === selectedCategory.value);
});


const setSelectedCategory = (categoryId: string) => {
    selectedCategory.value = categoryId;
}
</script>

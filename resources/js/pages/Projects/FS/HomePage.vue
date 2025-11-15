<template>
    <FSLayout>
        <div class="bg-gray-50">
            <HeroSection />
            <section class="py-16 bg-amber-50/30">
                <div class="container mx-auto px-4">
                    <div class="max-w-4xl mx-auto text-center">
                        <h2 class="text-4xl mb-6 text-gray-900">Welcome to Fuvahmulaku School</h2>
                        <p class="text-gray-700 leading-relaxed mb-6">
                            Fuvahmulaku School is committed to providing quality education and nurturing young minds
                            to become responsible citizens of tomorrow. With state-of-the-art facilities and dedicated
                            teachers, we strive to create an environment where students can excel academically,
                            socially, and personally.
                        </p>
                        <p class="text-gray-700 leading-relaxed">
                            Our curriculum is designed to foster critical thinking, creativity, and innovation while
                            maintaining strong values and ethics. We believe in holistic education that prepares students
                            for the challenges of the modern world.
                        </p>
                    </div>
                </div>
            </section>

            <StatsSection />
            <section class="py-20 bg-white">
                <div class="container mx-auto px-4">
                    <div class="text-center mb-12">
                        <span class="inline-block px-4 py-2 bg-blue-100 text-blue-700 rounded-full text-sm mb-4">
                          Latest Updates
                        </span>
                        <h2 class="text-4xl md:text-5xl mb-4 text-gray-900">Recent Events</h2>
                        <div class="w-20 h-1 bg-blue-600 mx-auto mb-6"></div>
                        <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                            Stay updated with the latest happenings at Fuvahmulaku School
                        </p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl mx-auto">
                        <EventCard
                            v-for="(event, index) in recentEvents"
                            :key="'recent-'+index"
                            :item="event"
                         />
                    </div>
                </div>
            </section>

            <section class="py-20 bg-gradient-to-b from-gray-50 to-white">
                <div class="container mx-auto px-4">
                    <div class="text-center mb-12">
                        <span class="inline-block px-4 py-2 bg-red-100 text-red-700 rounded-full text-sm mb-4">
                          Coming Soon
                        </span>
                        <h2 class="text-4xl md:text-5xl mb-4 text-gray-900">Upcoming Events</h2>
                        <div class="w-20 h-1 bg-red-600 mx-auto mb-6"></div>
                        <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                            Mark your calendars for these exciting upcoming events
                        </p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                        <EventCard
                            v-for="(event, index) in upcomingEvents"
                            :key="'upcoming-'+index"
                            :item="event"
                        />
                    </div>
                </div>
            </section>
        </div>
    </FSLayout>
</template>

<script setup lang="ts">
import FSLayout from './FSLayout.vue';
import EventCard from '@/pages/Projects/FS/partials/EventCard.vue';
import HeroSection from '@/pages/Projects/FS/partials/HeroSection.vue';
import StatsSection from '@/pages/Projects/FS/partials/StatsSection.vue';

const recentEvents = [
    {
        id: '4',
        title: "Inter-School Basketball Tournament",
        date: "March 28, 2024",
        location: "School Basketball Court",
        description: "Our basketball team represented Fuvahmulaku School with pride and determination at the recently concluded tournament.",
        image: "https://images.unsplash.com/photo-1546519638-68e109498ffc?w=800"
    },
    {
        id: '1',
        title: "Annual Sports Day 2024",
        date: "March 15, 2024",
        location: "School Grounds",
        description: "A grand success with students participating in various athletic events, showcasing their talents and sportsmanship.",
        image: "https://images.unsplash.com/photo-1551958219-acbc608c6377?w=800"
    },
    {
        id: '2',
        title: "Science Fair Winners Announced",
        date: "March 10, 2024",
        location: "School Auditorium",
        description: "Students showcased innovative projects at the annual science fair across various scientific disciplines.",
        image: "https://images.unsplash.com/photo-1567427017947-545c5f8d16ad?w=800"
    }
];

const upcomingEvents = [
    {
        id: '1',
        title: "Parent-Teacher Meeting",
        date: "April 20, 2024",
        location: "School Auditorium",
        description: "An opportunity for parents to meet with teachers and discuss student progress and development.",
        image: "https://images.unsplash.com/photo-1523580494863-6f3031224c94?w=800",
        isUpcoming: true
    },
    {
        id: '2',
        title: "Cultural Day Celebration",
        date: "April 25, 2024",
        location: "School Grounds",
        description: "A vibrant showcase of Maldivian culture, traditions, and student talents with performances and exhibitions.",
        image: "https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3?w=800",
        isUpcoming: true
    }
];
</script>

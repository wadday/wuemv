<template>
    <FSLayout>
        <div class="pt-32 bg-white min-h-screen">
            <div class="relative bg-gradient-to-br from-blue-600 via-blue-700 to-blue-900 text-white py-24 overflow-hidden">
                <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAxMCAwIEwgMCAwIDAgMTAiIGZpbGw9Im5vbmUiIHN0cm9rZT0id2hpdGUiIHN0cm9rZS1vcGFjaXR5PSIwLjA1IiBzdHJva2Utd2lkdGg9IjEiLz48L3BhdHRlcm4+PC9kZWZzPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JpZCkiLz48L3N2Zz4=')] opacity-40"></div>
                <div class="container mx-auto px-4 relative z-10">
                    <div class="max-w-4xl mx-auto text-center">
                        <span class="inline-block px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-sm mb-4">
                          Our Journey
                        </span>
                        <h1 class="text-5xl md:text-6xl mb-6">Our History</h1>
                        <div class="w-20 h-1 bg-white mx-auto mb-6"></div>
                        <p class="text-xl text-blue-100 leading-relaxed">
                            A journey of educational excellence spanning decades
                        </p>
                    </div>
                </div>
            </div>

            <section class="py-20">
                <div class="container mx-auto px-4">
                    <div class="max-w-5xl mx-auto">
                        <div class="mb-20">
                            <div class="text-center mb-12">
                                <h2 class="text-4xl md:text-5xl mb-6 text-gray-900">
                                    Our Journey
                                </h2>
                                <div class="w-20 h-1 bg-blue-600 mx-auto mb-8"></div>
                            </div>
                            <div class="prose prose-lg max-w-none">
                                <p class="text-gray-700 leading-relaxed mb-6 text-lg">
                                    Fuvahmulaku School has been a cornerstone of
                                    education in Fuvahmulah City for nearly four
                                    decades. What began as a small institution with
                                    a handful of classrooms has grown into one of
                                    the most respected schools in the Maldives.
                                </p>
                                <p class="text-gray-700 leading-relaxed mb-6 text-lg">
                                    Throughout our history, we have remained
                                    committed to our founding principles of academic
                                    excellence, character development, and community
                                    service. Our journey has been marked by
                                    continuous growth, innovation, and adaptation to
                                    meet the evolving needs of our students and
                                    society.
                                </p>
                                <p class="text-gray-700 leading-relaxed text-lg">
                                    Today, we stand proud as a modern educational
                                    institution that honors its rich heritage while
                                    embracing the future. Our alumni have gone on to
                                    make significant contributions in various
                                    fields, both nationally and internationally.
                                </p>
                            </div>
                        </div>

                        <div>
                            <div class="text-center mb-16">
                                <h2 class="text-4xl md:text-5xl mb-6 text-gray-900">
                                    Major Milestones
                                </h2>
                                <div class="w-20 h-1 bg-blue-600 mx-auto mb-6"></div>
                                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                                    Key moments that shaped our school's legacy
                                </p>
                            </div>
                            <div class="relative">
                                <div class="absolute left-8 top-0 bottom-0 w-0.5 bg-gradient-to-b from-blue-200 via-blue-300 to-blue-200 hidden md:block"></div>

                                <div class="space-y-12">
                                    <div
                                        v-for="(milestone, index) in milestones"
                                        :key="index"
                                        class="relative flex gap-6 items-start group"
                                    >
                                        <div class="hidden md:flex w-16 h-16 bg-gradient-to-br from-blue-600 to-blue-700 rounded-2xl items-center justify-center flex-shrink-0 z-10 shadow-lg group-hover:scale-110 transition-transform">
                                            <Icon :name="milestone.icon" class="w-8 h-8 text-white" />
                                        </div>
                                        <div class="flex-1 bg-white p-8 rounded-2xl border border-gray-200 hover:border-blue-300 hover:shadow-xl transition-all">
                                            <div class="flex items-center gap-3 mb-4">
                                                <div class="md:hidden w-12 h-12 bg-gradient-to-br from-blue-600 to-blue-700 rounded-xl flex items-center justify-center shadow-lg">
                                                    <Icon :name="milestone.icon" class="w-6 h-6 text-white" />
                                                </div>
                                                <span class="text-3xl bg-gradient-to-r from-blue-600 to-blue-700 bg-clip-text text-transparent">
                                                    {{ milestone.year }}
                                                </span>
                                            </div>
                                            <h3 class="text-2xl mb-3 text-gray-900">
                                                {{ milestone.title }}
                                            </h3>
                                            <p class="text-gray-600 leading-relaxed text-lg">
                                                {{ milestone.description }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-20 relative bg-gradient-to-br from-blue-50 to-blue-100 p-10 rounded-2xl shadow-lg overflow-hidden">
                            <div class="absolute top-0 right-0 w-40 h-40 bg-blue-600/10 rounded-full -mr-20 -mt-20"></div>
                            <div class="relative z-10">
                                <h3 class="text-3xl mb-6 text-gray-900">
                                    Looking Forward
                                </h3>
                                <p class="text-gray-700 leading-relaxed text-lg">
                                    As we look to the future, Fuvahmulaku School
                                    remains committed to innovation in education,
                                    maintaining our high standards while adapting to
                                    new challenges and opportunities. We continue to
                                    invest in our facilities, faculty development,
                                    and educational programs to ensure that our
                                    students receive the best possible preparation
                                    for their future endeavors. Our vision is to
                                    remain at the forefront of educational
                                    excellence in the Maldives for generations to
                                    come.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </FSLayout>
</template>

<script setup lang="ts">

import Icon from '@/components/Icon.vue';
import FSLayout from './FSLayout.vue';

const milestones = [
    {
        year: "1985",
        title: "School Founded",
        description:
            "Fuvahmulaku School was established to serve the educational needs of the Fuvahmulah community.",
        icon: 'Building',
    },
    {
        year: "1995",
        title: "Expansion & Growth",
        description:
            "New building blocks added to accommodate growing student population. Science and computer labs established.",
        icon: 'TrendingUp',
    },
    {
        year: "2005",
        title: "Modernization",
        description:
            "Introduction of modern teaching methodologies and digital learning resources. Library expanded significantly.",
        icon: 'Users',
    },
    {
        year: "2015",
        title: "Excellence Award",
        description:
            "Received national recognition for academic excellence and outstanding contribution to education.",
        icon: 'Calendar',
    },
    {
        year: "2024",
        title: "Present Day",
        description:
            "Continue to serve over 1,250 students with 85 dedicated teachers and modern facilities.",
        icon: 'Users',
    },
];

</script>

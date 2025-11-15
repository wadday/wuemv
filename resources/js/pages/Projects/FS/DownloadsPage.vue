<template>
    <FSLayout>
        <div class="pt-32 bg-white min-h-screen">
            <div class="relative bg-gradient-to-br from-blue-600 via-blue-700 to-blue-900 text-white py-24 overflow-hidden">
                <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAxMCAwIEwgMCAwIDAgMTAiIGZpbGw9Im5vbmUiIHN0cm9rZT0id2hpdGUiIHN0cm9rZS1vcGFjaXR5PSIwLjA1IiBzdHJva2Utd2lkdGg9IjEiLz48L3BhdHRlcm4+PC9kZWZzPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JpZCkiLz48L3N2Zz4=')] opacity-40"></div>
                <div class="container mx-auto px-4 relative z-10">
                    <div class="max-w-4xl mx-auto text-center">
                    <span class="inline-block px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-sm mb-4">
                      <Icon name="Download" class="w-4 h-4 inline mr-2" />
                      Resources
                    </span>
                        <h1 class="text-5xl md:text-6xl mb-6">Downloads</h1>
                        <div class="w-20 h-1 bg-white mx-auto mb-6"></div>
                        <p class="text-xl text-blue-100 leading-relaxed">
                            Access important documents and resources
                        </p>
                    </div>
                </div>
            </div>

            <section class="py-20">
                <div class="container mx-auto px-4">
                    <div class="max-w-6xl mx-auto space-y-16">
                        <div
                            v-for="(category, categoryIndex) in downloadCategories"
                            :key="categoryIndex">
                            <div class="flex items-center gap-3 mb-8">
                                <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                                    <Icon :name="category.icon" class="w-6 h-6 text-blue-600" />
                                </div>
                                <h2 class="text-3xl md:text-4xl text-gray-900">
                                    {{ category.title }}
                                </h2>
                            </div>
                            <div class="space-y-4">
                                <div
                                    v-for="(item, itemIndex) in category.items"
                                    :key="'item-'+itemIndex"
                                    class="bg-white rounded-xl p-6 border border-gray-200 hover:border-blue-300 hover:shadow-lg transition-all group cursor-pointer"
                                >
                                    <div class="flex items-center justify-between gap-4">
                                        <div class="flex items-center gap-4 flex-1">
                                            <div class="w-14 h-14 bg-blue-50 rounded-xl flex items-center justify-center group-hover:bg-blue-100 transition-colors">
                                                <Icon name="FileText" class="w-7 h-7 text-blue-600" />
                                            </div>
                                            <div class="flex-1">
                                                <h3 class="mb-2 text-gray-900 group-hover:text-blue-600 transition-colors">
                                                    {{ item.name }}
                                                </h3>
                                                <div class="flex flex-wrap items-center gap-4 text-sm text-gray-600">
                                                  <span class="flex items-center gap-1">
                                                    <Icon name="File" class="w-4 h-4" />
                                                    {{ item.type }} • {{ item.size }}
                                                  </span>
                                                    <span class="flex items-center gap-1">
                                                        <Icon name="Calendar" class="w-4 h-4" />
                                                        {{ item.date }}
                                                      </span>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg transition-colors shadow-md hover:shadow-lg">
                                            <Icon name="Download" class="w-5 h-5" />
                                            <span class="hidden sm:inline">Download</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-16 max-w-6xl mx-auto">
                        <div class="relative bg-gradient-to-br from-blue-50 to-blue-100 border border-blue-200 rounded-2xl p-8 overflow-hidden">
                            <div class="absolute top-0 right-0 w-32 h-32 bg-blue-600/10 rounded-full -mr-16 -mt-16"></div>
                            <div class="relative z-10">
                                <h3 class="text-2xl mb-4 text-gray-900">
                                    Need Help?
                                </h3>
                                <p class="text-gray-700 text-lg leading-relaxed">
                                    If you cannot find the document you're looking
                                    for or need assistance with downloads, please
                                    contact our administration office at
                                    <a
                                        href="mailto:info@fuvahmulakuschool.edu.mv"
                                        class="text-blue-600 hover:text-blue-700 hover:underline transition-colors"
                                    >
                                        info@fuvahmulakuschool.edu.mv
                                    </a>
                                    or call us at
                                    <a
                                        href="tel:+9607682000"
                                        class="text-blue-600 hover:text-blue-700 hover:underline transition-colors"
                                    >
                                        +960 768 2000
                                    </a>
                                    .
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
import FSLayout from './FSLayout.vue';
import Icon from '@/components/Icon.vue';

const downloadCategories = [
    {
        title: "Academic Resources",
        icon: 'FileText',
        items: [
            {
                name: "Academic Calendar 2024-2025",
                type: "PDF",
                size: "245 KB",
                date: "Nov 1, 2024",
            },
            {
                name: "Examination Schedule",
                type: "PDF",
                size: "189 KB",
                date: "Oct 28, 2024",
            },
            {
                name: "Syllabus Overview",
                type: "PDF",
                size: "512 KB",
                date: "Oct 15, 2024",
            },
        ],
    },
    {
        title: "Forms & Applications",
        icon: 'File',
        items: [
            {
                name: "Student Admission Form",
                type: "PDF",
                size: "156 KB",
                date: "Nov 5, 2024",
            },
            {
                name: "Leave Application Form",
                type: "PDF",
                size: "98 KB",
                date: "Oct 20, 2024",
            },
            {
                name: "Transfer Certificate Request",
                type: "PDF",
                size: "102 KB",
                date: "Oct 10, 2024",
            },
        ],
    },
    {
        title: "School Policies",
        icon: 'FolderOpen',
        items: [
            {
                name: "School Handbook 2024",
                type: "PDF",
                size: "1.2 MB",
                date: "Sep 15, 2024",
            },
            {
                name: "Code of Conduct",
                type: "PDF",
                size: "234 KB",
                date: "Sep 15, 2024",
            },
            {
                name: "Safety & Security Guidelines",
                type: "PDF",
                size: "445 KB",
                date: "Sep 10, 2024",
            },
        ],
    },
    {
        title: "News & Newsletters",
        icon: 'FileText',
        items: [
            {
                name: "Monthly Newsletter - November 2024",
                type: "PDF",
                size: "678 KB",
                date: "Nov 1, 2024",
            },
            {
                name: "Monthly Newsletter - October 2024",
                type: "PDF",
                size: "621 KB",
                date: "Oct 1, 2024",
            },
            {
                name: "Annual Report 2023-2024",
                type: "PDF",
                size: "2.3 MB",
                date: "Sep 1, 2024",
            },
        ],
    },
];
</script>

<template>
    <FSLayout>
        <div class="min-h-screen bg-gray-50 pt-32 pb-16">
            <div class="container mx-auto px-4 mt-6">
                <Link
                    :href="news.list().url"
                    class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-700 mb-8 transition-colors"
                >
                    <Icon name="ArrowLeft" class="w-4 h-4" />
                    Back to News
                </Link>

                <article class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="relative h-96">
                        <img
                            :src="newsItem.image"
                            :alt="newsItem.title"
                            class="w-full h-full object-cover"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                          <span class="inline-block px-3 py-1 bg-red-600 rounded-full text-sm mb-4">
                            {{ newsItem.category }}
                          </span>
                            <h1 class="mb-4">
                                {{ newsItem.title }}
                            </h1>
                        </div>
                    </div>

                    <div class="px-8 py-4 border-b border-gray-200 flex items-center justify-between">
                        <div class="flex items-center gap-6 text-gray-600">
                            <div class="flex items-center gap-2">
                                <Icon name="Calendar" class="w-4 h-4" />
                                <span>{{ newsItem.date }}</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <Icon name="User" class="w-4 h-4" />
                                <span>
                                    {{ newsItem.author }}
                                </span>
                            </div>
                        </div>
                        <button class="flex items-center gap-2 text-blue-600 hover:text-blue-700 transition-colors">
                            <Icon name="Share2" class="w-4 h-4" />
                            Share
                        </button>
                    </div>

                    <div class="px-8 py-12">
                        <div
                            class="prose prose-lg max-w-none text-gray-600"
                            v-html="newsItem.content"
                        />
                    </div>
                </article>

                <div class="mt-16">
                    <h2 class="mb-8">Related News</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <Link
                            v-for="relatedNews in newsArticles.filter(n => n.id !== news.id).slice(0, 3)"
                            :key="'related-'+relatedNews.id"
                            :href="`/news/${relatedNews.id}`"
                            class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow"
                        >
                            <img
                                :src="relatedNews.image"
                                alt={relatedNews.title}
                                class="w-full h-48 object-cover"
                            />
                            <div class="p-6">
                              <span class="inline-block px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm mb-3">
                                {{ relatedNews.category }}
                              </span>
                                <h3 class="mb-2">
                                    {{ relatedNews.title }}
                                </h3>
                                <p class="text-gray-600 mb-4">
                                    {{ relatedNews.excerpt }}
                                </p>
                                <div class="flex items-center gap-2 text-gray-500 text-sm">
                                    <Icon name="Calendar" class="w-4 h-4" />
                                    <span>
                                        {{ relatedNews.date }}
                                    </span>
                                </div>
                            </div>
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    </FSLayout>
</template>
<script setup lang="ts">
import FSLayout from './FSLayout.vue';
import { Link } from '@inertiajs/vue3';
import { computed } from 'vue';
import Icon from '@/components/Icon.vue';
import news from '@/routes/fs/news'

const newsArticles = [
    {
        id: '1',
        title: 'Annual Sports Day 2024',
        date: 'March 15, 2024',
        category: 'Events',
        author: 'Admin',
        image: 'https://images.unsplash.com/photo-1551958219-acbc608c6377?w=800',
        excerpt: 'Our annual sports day was a grand success with students participating in various athletic events.',
        content: `
        <p>The Fuvahmulaku School Annual Sports Day 2024 was held on March 15th, bringing together students, teachers, and parents for a day filled with excitement, competition, and camaraderie.</p>

        <p>The event featured a wide range of athletic competitions including track and field events, relay races, and team sports. Students from all grade levels participated enthusiastically, showcasing their athletic abilities and sportsmanship.</p>

        <h3>Highlights of the Day</h3>
        <ul>
          <li>100m sprint competitions for all age groups</li>
          <li>Long jump and high jump events</li>
          <li>Relay races that brought out the team spirit</li>
          <li>Football and basketball matches</li>
          <li>Tug of war competition</li>
        </ul>

        <p>The event was graced by the presence of local community leaders and parents who cheered on the participants. The Principal, in her opening speech, emphasized the importance of physical fitness and sporting spirit in overall student development.</p>

        <p>Medals and certificates were awarded to the winners and participants, recognizing their efforts and achievements. The day concluded with a closing ceremony where the overall house championship trophy was presented.</p>

        <p>We would like to thank all the teachers, staff members, and volunteers who worked tirelessly to make this event a success. Special thanks to the parents for their continued support and encouragement.</p>
      `
    },
    {
        id: '2',
        title: 'Science Fair Winners Announced',
        date: 'March 10, 2024',
        category: 'Academic',
        author: 'Science Department',
        image: 'https://images.unsplash.com/photo-1567427017947-545c5f8d16ad?w=800',
        excerpt: 'Students showcased innovative projects at the annual science fair.',
        content: `
        <p>The Annual Science Fair at Fuvahmulaku School concluded successfully with students presenting remarkable scientific projects and innovations.</p>

        <p>Over 50 projects were displayed, covering various scientific disciplines including Physics, Chemistry, Biology, and Environmental Science. The judges were impressed by the creativity and scientific rigor demonstrated by the students.</p>

        <h3>Award Winners</h3>
        <ul>
          <li><strong>First Place:</strong> "Renewable Energy Solutions" by Grade 10 students</li>
          <li><strong>Second Place:</strong> "Water Purification System" by Grade 9 students</li>
          <li><strong>Third Place:</strong> "Robotics and AI" by Grade 11 students</li>
        </ul>

        <p>The fair provided an excellent platform for students to apply their theoretical knowledge to practical problems and develop critical thinking skills.</p>
      `
    },
    {
        id: '3',
        title: 'New Computer Lab Inauguration',
        date: 'March 5, 2024',
        category: 'Infrastructure',
        author: 'Admin',
        image: 'https://images.unsplash.com/photo-1591696205602-2f950c417cb9?w=800',
        excerpt: 'State-of-the-art computer lab opens for students.',
        content: `
        <p>Fuvahmulaku School is proud to announce the inauguration of our new state-of-the-art computer laboratory, equipped with the latest technology to enhance digital learning.</p>

        <p>The new lab features 40 high-performance computers, interactive displays, and high-speed internet connectivity. This facility will significantly improve our IT education and provide students with hands-on experience in modern computing.</p>

        <h3>Features</h3>
        <ul>
          <li>40 modern desktop computers with latest processors</li>
          <li>High-speed fiber optic internet connection</li>
          <li>Interactive smart boards</li>
          <li>Comfortable seating and ergonomic furniture</li>
          <li>Air-conditioned environment</li>
        </ul>

        <p>The lab will be used for computer science classes, coding workshops, and digital skills training programs.</p>
      `
    }
];


const newsItem = computed(() => {
    return newsArticles[0]
})
</script>

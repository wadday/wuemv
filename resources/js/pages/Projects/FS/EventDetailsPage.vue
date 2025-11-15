<template>
    <FSLayout>
        <div class="min-h-screen bg-gray-50 pt-32 pb-16">
            <div class="container mx-auto px-4 mt-5">
                <Link
                    :href="fs.home().url"
                    class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-700 mb-8 transition-colors"
                >
                    <Icon name="ArrowLeft" class="w-4 h-4" />
                    Back to Home
                </Link>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <div class="lg:col-span-2">
                        <article class="bg-white rounded-lg shadow-lg overflow-hidden">
                            <div class="relative h-96">
                                <img
                                    :src="event.image"
                                    :alt="event.title"
                                    class="w-full h-full object-cover"
                                />
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                                <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                                    <div class="flex items-center gap-3 mb-4">
                                        <span class="inline-block px-3 py-1 bg-red-600 rounded-full text-sm">
                                          {{ event.category }}
                                        </span>
                                        <span :class="`inline-block px-3 py-1 rounded-full text-sm ${
                                              event.status === 'upcoming' ? 'bg-green-600' : 'bg-blue-600'
                                        }`">
                                        {{ event.status === 'upcoming' ? 'Upcoming' : 'Recent' }}
                                        </span>
                                    </div>
                                    <h1 class="mb-4">{{ event.title }}</h1>
                                </div>
                            </div>

                            <div class="p-8">
                                <div
                                    class="prose prose-lg max-w-none text-gray-600"
                                    v-html="event.description"
                                />
                            </div>
                        </article>
                    </div>

                    <div class="lg:col-span-1">
                        <div class="bg-white rounded-lg shadow-lg p-6 sticky top-36">
                            <h3 class="mb-6 pb-4 border-b text-gray-600">Event Details</h3>

                            <div class="space-y-4">
                                <div class="flex items-start gap-3">
                                    <Icon name="Calendar" class="w-5 h-5 text-blue-600 mt-1" />
                                    <div>
                                        <div class="text-sm text-gray-500">Date</div>
                                        <div class="text-gray-900 font-medium">{{ event.date }}</div>
                                    </div>
                                </div>

                                <div class="flex items-start gap-3">
                                    <Icon name="Clock" class="w-5 h-5 text-blue-600 mt-1" />
                                    <div>
                                        <div class="text-sm text-gray-500">Time</div>
                                        <div class="text-gray-900 font-medium">{{ event.time }}</div>
                                    </div>
                                </div>

                                <div class="flex items-start gap-3">
                                    <Icon name="MapPin" class="w-5 h-5 text-blue-600 mt-1" />
                                    <div>
                                        <div class="text-sm text-gray-500">Location</div>
                                        <div class="text-gray-900 font-medium">{{ event.location }}</div>
                                    </div>
                                </div>

                                <div class="flex items-start gap-3">
                                    <Icon name="Users" class="w-5 h-5 text-blue-600 mt-1" />
                                    <div>
                                        <div class="text-sm text-gray-500">Expected Attendees</div>
                                        <div class="text-gray-900 font-medium">{{ event.attendees }}</div>
                                    </div>
                                </div>

                                <div class="flex items-start gap-3">
                                    <Icon name="Tag" class="w-5 h-5 text-blue-600 mt-1" />
                                    <div>
                                        <div class="text-sm text-gray-500">Organizer</div>
                                        <div class="text-gray-900 font-medium">
                                            {{ event.organizer }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-8 pt-6 border-t">
                                <h4 class="mb-4 text-gray-600">Contact Information</h4>
                                <a
                                    :href="`mailto:${event.contact}`"
                                    class="text-blue-600 hover:text-blue-700 break-all text-sm"
                                >
                                    {{ event.contact }}
                                </a>
                            </div>

                            <button v-if="event.status === 'upcoming'" class="w-full mt-6 bg-red-600 text-white py-3 rounded-lg hover:bg-red-700 transition-colors">
                                Register Interest
                            </button>

                        </div>
                    </div>
                </div>

                <div class="mt-16">
                    <h2 class="mb-8">Other Events</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <Link
                            v-for="relatedEvent in events.filter(e => e.id !== event.id).slice(0, 3)"
                            :key="relatedEvent.id"
                            href="/"
                            class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow"
                        >
                            <img
                                :src="relatedEvent.image"
                                :alt="relatedEvent.title"
                                class="w-full h-48 object-cover"
                            />
                            <div class="p-6">
                                <div class="flex items-center gap-2 mb-3">
                                    <span class="inline-block px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm">
                                      {{ relatedEvent.category }}
                                    </span>
                                    <span :class="`inline-block px-3 py-1 rounded-full text-sm ${
                                          relatedEvent.status === 'upcoming' ? 'bg-green-100 text-green-600' : 'bg-gray-100 text-gray-600'
                                    }`">
                                        {{ relatedEvent.status === 'upcoming' ? 'Upcoming' : 'Recent' }}
                                    </span>
                                </div>
                                <h3 class="mb-3 text-gray-600 font-medium">{{ relatedEvent.title }}</h3>
                                <div class="space-y-2 text-sm text-gray-600">
                                    <div class="flex items-center gap-2">
                                        <Icon name="Calendar" class="w-4 h-4" />
                                        <span>{{ relatedEvent.date }}</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <Icon name="MapPin" class="w-4 h-4" />
                                        <span>{{ relatedEvent.location }}</span>
                                    </div>
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
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';
import Icon from '@/components/Icon.vue';
import fs from '@/routes/fs'

const events = [
    {
        id: '1',
        title: 'Parent-Teacher Meeting',
        date: 'April 20, 2024',
        time: '2:00 PM - 5:00 PM',
        location: 'School Auditorium',
        category: 'Meeting',
        status: 'upcoming',
        attendees: '200+',
        image: 'https://images.unsplash.com/photo-1523580494863-6f3031224c94?w=800',
        description: `
        <p>We cordially invite all parents and guardians to attend the upcoming Parent-Teacher Meeting scheduled for April 20, 2024.</p>

        <h3>Purpose of the Meeting</h3>
        <p>This meeting provides an excellent opportunity for parents to:</p>
        <ul>
          <li>Discuss their child's academic progress and performance</li>
          <li>Meet with subject teachers individually</li>
          <li>Understand the curriculum and teaching methodologies</li>
          <li>Address any concerns or queries</li>
          <li>Learn about upcoming school activities and events</li>
        </ul>

        <h3>Schedule</h3>
        <p>The meeting will be organized in time slots to ensure each parent gets adequate time with the teachers:</p>
        <ul>
          <li><strong>2:00 PM - 3:00 PM:</strong> Grades 1-4</li>
          <li><strong>3:00 PM - 4:00 PM:</strong> Grades 5-8</li>
          <li><strong>4:00 PM - 5:00 PM:</strong> Grades 9-12</li>
        </ul>

        <h3>Important Information</h3>
        <ul>
          <li>Parents are requested to arrive 10 minutes before their scheduled time</li>
          <li>Progress reports will be distributed during the meeting</li>
          <li>Individual time slots with teachers are limited to 10 minutes</li>
          <li>Refreshments will be provided</li>
        </ul>

        <p>We look forward to your participation in this important event. Your involvement in your child's education is invaluable.</p>
      `,
        organizer: 'School Administration',
        contact: 'admin@fuvahmulakuschool.edu.mv'
    },
    {
        id: '2',
        title: 'Cultural Day Celebration',
        date: 'April 25, 2024',
        time: '9:00 AM - 3:00 PM',
        location: 'School Grounds',
        category: 'Cultural',
        status: 'upcoming',
        attendees: '500+',
        image: 'https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3?w=800',
        description: `
        <p>Join us for our annual Cultural Day Celebration, a vibrant showcase of Maldivian culture, traditions, and student talents!</p>

        <h3>Event Highlights</h3>
        <ul>
          <li>Traditional Maldivian dance performances</li>
          <li>Cultural exhibitions and displays</li>
          <li>Traditional food stalls</li>
          <li>Art and craft demonstrations</li>
          <li>Music performances by student bands</li>
          <li>Fashion show featuring traditional attire</li>
        </ul>

        <h3>Schedule of Events</h3>
        <ul>
          <li><strong>9:00 AM:</strong> Opening Ceremony</li>
          <li><strong>9:30 AM:</strong> Traditional Dance Performances</li>
          <li><strong>11:00 AM:</strong> Cultural Exhibitions Open</li>
          <li><strong>12:00 PM:</strong> Lunch Break (Traditional Food)</li>
          <li><strong>1:00 PM:</strong> Music and Drama Performances</li>
          <li><strong>2:30 PM:</strong> Closing Ceremony and Awards</li>
        </ul>

        <h3>Participation</h3>
        <p>Students from all grades will be participating in various cultural activities. We encourage parents and community members to attend and support our young performers.</p>

        <p>Traditional dress is encouraged for all attendees. Let's celebrate our rich cultural heritage together!</p>
      `,
        organizer: 'Cultural Committee',
        contact: 'events@fuvahmulakuschool.edu.mv'
    },
    {
        id: '3',
        title: 'Science Exhibition',
        date: 'May 5, 2024',
        time: '10:00 AM - 4:00 PM',
        location: 'Science Labs',
        category: 'Academic',
        status: 'upcoming',
        attendees: '300+',
        image: 'https://images.unsplash.com/photo-1532094349884-543bc11b234d?w=800',
        description: `
        <p>Discover the wonders of science at our annual Science Exhibition featuring innovative projects and experiments by our talented students!</p>

        <h3>Exhibition Sections</h3>
        <ul>
          <li><strong>Physics Zone:</strong> Interactive demonstrations of physical phenomena</li>
          <li><strong>Chemistry Corner:</strong> Exciting chemical reactions and experiments</li>
          <li><strong>Biology Hall:</strong> Models and displays of biological systems</li>
          <li><strong>Environmental Science:</strong> Projects on sustainability and conservation</li>
          <li><strong>Technology & Innovation:</strong> Student-built robots and tech projects</li>
        </ul>

        <h3>Special Features</h3>
        <ul>
          <li>Live science demonstrations every hour</li>
          <li>Hands-on experiments for visitors</li>
          <li>Q&A sessions with student presenters</li>
          <li>Virtual reality science experiences</li>
          <li>Guest lecture by renowned scientist</li>
        </ul>

        <h3>Awards</h3>
        <p>Prizes will be awarded for:</p>
        <ul>
          <li>Best Innovation</li>
          <li>Most Creative Presentation</li>
          <li>Environmental Impact Award</li>
          <li>People's Choice Award</li>
        </ul>

        <p>Free entry for all! Bring your family and friends to explore the fascinating world of science.</p>
      `,
        organizer: 'Science Department',
        contact: 'science@fuvahmulakuschool.edu.mv'
    },
    {
        id: '4',
        title: 'Inter-School Basketball Tournament',
        date: 'March 28, 2024',
        time: '8:00 AM - 6:00 PM',
        location: 'School Basketball Court',
        category: 'Sports',
        status: 'recent',
        attendees: '400+',
        image: 'https://images.unsplash.com/photo-1546519638-68e109498ffc?w=800',
        description: `
        <p>Our basketball team represented Fuvahmulaku School with pride and determination at the recently concluded Inter-School Basketball Tournament.</p>

        <h3>Tournament Highlights</h3>
        <p>The tournament brought together 8 schools from across the atoll, competing in various age categories. Our students displayed exceptional sportsmanship and skill throughout the competition.</p>

        <h3>Results</h3>
        <ul>
          <li><strong>Under-14 Category:</strong> Champions! 🏆</li>
          <li><strong>Under-16 Category:</strong> Runners-up 🥈</li>
          <li><strong>Under-19 Category:</strong> Semi-finalists</li>
        </ul>

        <h3>Outstanding Performers</h3>
        <ul>
          <li>Ahmed Ali - Best Player (Under-14)</li>
          <li>Aishath Naseema - Highest Scorer (Under-16)</li>
          <li>Mohamed Hassan - Best Defensive Player</li>
        </ul>

        <p>We are incredibly proud of our basketball team's achievements. Their hard work, dedication, and team spirit were evident in every game they played.</p>

        <p>Special thanks to Coach Ahmed and all the support staff who prepared the team for this tournament. Congratulations to all participants!</p>
      `,
        organizer: 'Sports Department',
        contact: 'sports@fuvahmulakuschool.edu.mv'
    }
];

const event = computed(() => {
    return events[0]
})
</script>

<script setup>
import icon from "../../../../../../public/frontend/assets/logo.png"
import search from "../../../../../../public/frontend/assets/search.png"
import lock from "../../../../../../public/frontend/assets/lock.png"
import play from "../../../../../../public/frontend/assets/play.png"
import natural from "../../../../../../public/frontend/assets/natural.jpg"
import down from "../../../../../../public/frontend/assets/down.png"
import career1 from "../../../../../../public/frontend/assets/career1.png"
import career2 from "../../../../../../public/frontend/assets/career2.png"
import career3 from "../../../../../../public/frontend/assets/career3.png"
import career4 from "../../../../../../public/frontend/assets/career4.png"
import career5 from "../../../../../../public/frontend/assets/career5.png"
import career6 from "../../../../../../public/frontend/assets/career6.png"
import states from "../../../../../../public/frontend/assets/states.png"
import meeting from "../../../../../../public/frontend/assets/meeting.png"
import team from "../../../../../../public/frontend/assets/team.png"
import shape from "../../../../../../public/frontend/assets/shape.png"
import facebook from "../../../../../../public/frontend/assets/facebook.png"
import twitter from "../../../../../../public/frontend/assets/twitter.png"
import github from "../../../../../../public/frontend/assets/github.png"
import dribble from "../../../../../../public/frontend/assets/dribble.png"
import {Head} from "@inertiajs/vue3";

const props = defineProps({
    allData : Object
})

console.log('check_props', props.allData)


</script>

<template>
    <Head title="Welcome" />
    <!--Navigation Start-->
    <nav class="container mx-auto flex gap-4 items-center py-2 flex-col md:flex-row">
        <img :src="icon" alt="Easy IT" class="w-[80px] h-[80px] rounded-full border-2 border-primary" />
        <div class="w-full flex justify-between gap-6 items-center flex-col md:flex-row">
            <div class="flex items-center gap-4 flex-col md:flex-row">
                <p>Home</p>
                <p>Channel</p>
                <p>Supports</p>
                <p>About</p>
                <img :src="search" alt="Search" />
            </div>

            <div class="flex gap-4 items-center">
                <div class="flex items-center gap-2">
                    <img :src="lock" alt="lock" />
                    <span>Login</span>
                </div>
                <button class="bg-primary px-8 py-3 rounded-md text-white">Donate Now</button>
            </div>
        </div>
    </nav>
    <!--Navigation END-->

    <!--Hero Section Start-->
    <section class="container mx-auto px-16 py-20 flex flex-col md:flex-row gap-6 justify-between items-center">
        <div>
            <h1 v-if="props.allData.length > 0" class="text-md sm:text-md md:text-5xl font-bold pb-6">{{ props.allData[0].heading }}</h1>
            <h1 v-else class="text-red-600 text-xl sm:text-xl md:text-7xl font-bold pb-6">Software Not Setup</h1>

            <h2 v-if="props.allData.length > 0" class="text-xl sm:text-xl md:text-7xl font-bold text-secondary pb-6">{{ props.allData[0].title }}</h2>
            <h2 v-else class="text-red-600 text-xl sm:text-xl md:text-7xl font-bold pb-6">Software Not Setup</h2>

            <p v-if="props.allData.length > 0" class="font-bold">{{ props.allData[0].cholak }}</p>
            <p v-else class="text-red-600 font-semibold">Software Not Setup</p>

            <div class="flex gap-6 items-center pt-8">
                <button class="btn-secondary">Get Token</button>
                <div class="flex gap-2 items-center">
                    <span class=font-bold>White paper</span>
                    <img :src="play" alt="play"/>
                </div>
            </div>
        </div>
        <div>
<!--            <img :src="natural" alt="Natural" class="rounded-full border-2 border-primary w-[400px] h-[400px]"/>-->
            <img :src="props.allData.length > 0 ? `/upload/tenant/backend/settings/${props.allData[0].image}` : '/upload/no_image.jpg' " alt="Natural" class="rounded-full border-2 border-primary w-[400px] h-[400px]">
        </div>
    </section>
    <!--Hero Section END-->

    <!--Service Section Start-->
    <section class="bg-[#EEF5FF] p-20">
        <div class="text-center">
            <p class="text-primary font-bold">Service we work for</p>
            <h1 class="pb-8">What care we do for your career</h1>
            <img :src="down" alt="" class="mx-auto"/>
        </div>
        <div class="container mx-auto grid grid-cols-1 gap-y-8 sm:grid-cols-2 md:grid-cols-3 bg-white p-20">

            <div class="text-center flex flex-col gap-4">
                <img :src="career1" alt="" class="mx-auto"/>
                <h1 class="font-bold text-xl">Coding</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <button class="text-primary font-bold">
                    Learn more <span>></span>
                </button>
            </div>

            <div class="text-center flex flex-col gap-4">
                <img :src="career2" alt="" class="mx-auto"/>
                <h1 class="font-bold text-xl">Communication</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <button class="text-primary font-bold">
                    Learn more <span>></span>
                </button>
            </div>

            <div class="text-center flex flex-col gap-4">
                <img :src="career3" alt="" class="mx-auto"/>
                <h1 class="font-bold text-xl">Growth</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <button class="text-primary font-bold">
                    Learn more <span>></span>
                </button>
            </div>

            <div class="text-center flex flex-col gap-4">
                <img :src="career4" alt="" class="mx-auto"/>
                <h1 class="font-bold text-xl">Brain storming</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <button class="text-primary font-bold">
                    Learn more <span>></span>
                </button>
            </div>

            <div class="text-center flex flex-col gap-4">
                <img :src="career5" alt="" class="mx-auto"/>
                <h1 class="font-bold text-xl">collaboration</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <button class="text-primary font-bold">
                    Learn more <span>></span>
                </button>
            </div>

            <div class="text-center flex flex-col gap-4">
                <img :src="career6" alt="" class="mx-auto"/>
                <h1 class="font-bold text-xl">Help for educational</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <button class="text-primary font-bold">
                    Learn more <span>></span>
                </button>
            </div>
        </div>

        <div class="max-w-5xl mx-auto my-6 grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="text-center">
                <h1 class="text-3xl font-bold text-primary">254</h1>
                <p class="text-gray-400">Successful Project</p>
            </div>

            <div class="text-center">
                <h1 class="text-3xl font-bold text-primary">3783</h1>
                <p class="text-gray-400">People Impacted</p>
            </div>

            <div class="text-center">
                <h1 class="text-3xl font-bold text-primary">8M</h1>
                <p class="text-gray-400">Money Donated</p>
            </div>

            <div class="text-center">
                <h1 class="text-3xl font-bold text-primary">60+</h1>
                <p class="text-gray-400">Volunteer Involved</p>
            </div>
        </div>
    </section>
    <!--Service Section END-->

    <!--States Section Start-->
    <section>
        <div class="max-w-5xl mx-auto text-center py-20">
            <h1 class="pb-6 text-3xl">Those states we provide donation</h1>
            <P class="pb-10">We are organizing a program on January 20, 2019 to help the homeless people. Our aim is to provide them a specific place to live.</P>
            <img :src="states" alt="" />
        </div>
        <div></div>
    </section>
    <!--States Section END-->

    <!--Calling Section Start-->
    <section class="container mx-auto py-20 text-center">
        <h1 class="font-bold text-xl pb-6">Introducing video calling support</h1>
        <p class="pb-6">Every email, web page, and social media post makes an impression on your customers. With our software you can be confident it's impression.</p>
        <button class="text-primary font-bold capitalize">
            Explore details <span>></span>
        </button>

        <div class="relative">
            <img :src="meeting" alt="" class="mx-auto" />

            <div class="md:absolute w-full top-40 left-36 md:w-[280px] bg-[#FABF62] p-10 rounded-tl-[20px] rounded-tr-[20px] rounded-bl-[20px] text-white font-bold text-left shadow-lg">
                <p>Hi, I’m Andry. Let me know what can I do for you</p>
            </div>

            <div class="md:absolute w-full bottom-40 right-36 md:w-[280px] bg-white p-10 rounded-tl-[20px] rounded-tr-[20px] rounded-br-[20px] font-bold text-left shadow-lg text-[#FABF62]">
                <p>your personal support assistance</p>
            </div>

        </div>
    </section>
    <!--Calling Section END-->

    <!--Contact Us Section Start-->
    <section class="container mx-auto py-20">
        <div>
            <img :src="team" alt="" class="mx-auto">
            <div class="relative bg-secondary max-w-6xl mx-auto flex flex-col md:flex-row justify-between gap-4 text-white p-16 rounded-lg items-center overflow-hidden">
                <h1 class="text-2xl font-bold text-center md:text-left">Do you have any question? Feel free to contact us</h1>
                <div></div>
                <button class="bg-white text-secondary font-bold rounded-md px-16 py-3 z-10">
                    CONTACT US NOW
                </button>
                <img :src="shape" alt="" class="absolute left-10 md:left-1/2">
            </div>
        </div>
    </section>
    <!--Contact Us Section END-->

    <!--Footer Section Start-->
    <footer class="bg-[#EEF5FF] p-16">
        <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-6">
            <div>
                <div class="flex items-center gap-2 pb-6">
                    <img :src="icon" alt="" class="w-[20px] h-[20px]"/>
                    <h1 v-if="!!props.allData.footer_logo_title" class="font-bold">{{ props.allData.footer_logo_title }}</h1>
                    <p v-else class="text-red-600 font-semibold">Software Not Setup</p>
                </div>
                <div class="flex flex-col gap-2">
                    <p>Terms of use   |   Privacy</p>
                    <p>Copyright by 2019 Redq, Inc</p>
                </div>
            </div>

            <div>
                <div class="pb-6">
                    <h1 class="font-bold">About Us</h1>
                </div>
                <div class="flex flex-col gap-2">
                    <p>Support Center</p>
                    <p>Customer Support</p>
                    <p>About Us</p>
                    <p>Copyright</p>
                </div>
            </div>

            <div>
                <div class="pb-6">
                    <h1 class="font-bold">Our Information</h1>
                </div>
                <div class="flex flex-col gap-2">
                    <p>Return Policy</p>
                    <p>Privacy Policy</p>
                    <p>Terms & Conditions</p>
                    <p>Site Map</p>
                </div>
            </div>

            <div>
                <div class="pb-6">
                    <h1 class="font-bold">My Account</h1>
                </div>
                <div class="flex flex-col gap-2">
                    <p>Press inquiries</p>
                    <p>Social media</p>
                    <p>directories</p>
                    <p>Images & B-roll</p>
                </div>
            </div>

            <div class="flex flex-col gap-2">
                <div class="pb-6">
                    <h1 class="font-bold">Connect</h1>
                </div>
                <div class="flex items-center gap-2">
                    <img :src="facebook" alt="">
                    <p>Facebook</p>
                </div>

                <div class="flex items-center gap-2">
                    <img :src="twitter" alt="">
                    <p>Twitter</p>
                </div>
                <div class="flex items-center gap-2">
                    <img :src="github" alt="">
                    <p>GitHub</p>
                </div>
                <div class="flex items-center gap-2">
                    <img :src="dribble" alt="">
                    <p>Dribble</p>
                </div>
            </div>

        </div>
    </footer>
    <!--Footer Section END-->
</template>

<style scoped>

</style>

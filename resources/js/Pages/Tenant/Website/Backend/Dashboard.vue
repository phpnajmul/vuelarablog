<script setup>
import Sidebar from "@/Pages/Tenant/Website/Backend/Layouts/Sidebar.vue";
import Footer from "@/Pages/Tenant/Website/Backend/Layouts/Footer.vue";
import Header from "@/Pages/Tenant/Website/Backend/Layouts/Header.vue";
import {Head} from "@inertiajs/vue3";


</script>

<template>
    <Head title="Dashboard"/>

    <Header/>
    <div class="container flex justify-between mx-auto gap-2 py-2 items-center">
        <div class="w-1/4 py-1 min-h-screen">
            <div>
                <sidebar/>
            </div>
        </div>

        <div class="w-3/4 min-h-screen pl-2 py-1">
            <h1>Dashboard</h1>

        </div>
    </div>

    <Footer/>
</template>


<style scoped>

</style>

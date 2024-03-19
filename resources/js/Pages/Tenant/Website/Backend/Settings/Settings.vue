<script setup>
import {Head, useForm} from "@inertiajs/vue3";
import Footer from "@/Pages/Tenant/Website/Backend/Layouts/Footer.vue";
import Sidebar from "@/Pages/Tenant/Website/Backend/Layouts/Sidebar.vue";
import Header from "@/Pages/Tenant/Website/Backend/Layouts/Header.vue";
import InputError from "@/Components/InputError.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";

const props = defineProps({
    settings: Object
})

const form = useForm({
    logo: '',
    heading: '',
    title: '',
    cholak: '',
    image: '',
    footer_logo: '',
    footer_logo_title: '',
    facebook: '',
    twitter: '',
    github: '',
    dribble: '',
})

const submit = () => {
    form.post(route('all.setting.store'),{
        onFinish: () => form.reset(),
        // 'logo',
        // 'heading',
        // 'title',
        // 'cholak',
        // 'image',
        // 'footer_logo',
        // 'footer_logo_title',
        // 'facebook',
        // 'twitter',
        // 'github',
        // 'dribble'
    },
        {
            errorBag: 'Software setup successfully!'
        });
};


</script>

<template>
    <Head title="Settings"/>


    <Header/>
    <div class="container flex justify-between mx-auto gap-4 py-2 items-center">
        <div class="w-1/4 min-h-screen">
            <div>
                <sidebar/>
            </div>
        </div>

        <div class="w-3/4 min-h-screen">
            <form @submit.prevent="submit">
                <div class="bg-blue-50 text-xl text-gray-500 p-4 mb-4 rounded-md">
                    <h1>Software Menu<span> > </span>Software Setup</h1>
                </div>

                <div v-if="props.settings.length === 0" class="bg-white shadow-md py-6 px-10 rounded-md">
                    <div class="border-b border-gray-900/10">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Settings Information</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">You can change your website everything.</p>
                        <div class="mt-10 grid grid-cols-1 gap-x-6 sm:grid-cols-6">
                            <div class="sm:col-span-2">
                                <label class="block text-sm font-medium leading-6 text-gray-900">Logo</label>
                                <div class="mt-2">
                                    <input
                                        name="logo"
                                        class="relative name m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                        type="file"
                                        @input="form.logo = $event.target.files[0]" />
                                    <InputError class="mt-2" :message="form.errors.logo" />
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="heading" class="block text-sm font-medium leading-6 text-gray-900">Heading</label>
                                <div class="mt-2">
                                    <input type="text" v-model="form.heading" id="heading" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <InputError class="mt-2" :message="form.errors.heading" />

                                </div>

                            </div>

                            <div class="sm:col-span-2">
                                <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                                <div class="mt-2">
                                    <input type="text" name="title" v-model="form.title" id="title" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <InputError class="mt-2" :message="form.errors.title" />
                                </div>

                            </div>

                            <div class="sm:col-span-2">
                                <label for="cholak" class="block text-sm font-medium leading-6 text-gray-900">Cholak</label>
                                <div class="mt-2">
                                    <input type="text" name="cholak" v-model="form.cholak" id="cholak" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <InputError class="mt-2" :message="form.errors.cholak" />
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="image" class="block text-sm font-medium leading-6 text-gray-900">Display Image</label>
                                <div class="mt-2">
                                    <input
                                        name="image"
                                        class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                        type="file"
                                        @input="form.image = $event.target.files[0]" />
                                    <InputError class="mt-2" :message="form.errors.image" />
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="footer_logo" class="block text-sm font-medium leading-6 text-gray-900">Footer Logo</label>
                                <div class="mt-2">
                                    <input
                                        name="footer_logo"
                                        class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                        type="file"
                                        @input="form.footer_logo = $event.target.files[0]" />
                                    <InputError class="mt-2" :message="form.errors.footer_logo" />
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="footer_logo_title" class="block text-sm font-medium leading-6 text-gray-900">Footer Logo Title</label>
                                <div class="mt-2">
                                    <input type="text" name="footer_logo_title" v-model="form.footer_logo_title" id="footer_logo_title" autocomplete="family-name" class="mb-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <InputError class="mt-2" :message="form.errors.footer_logo_title" />
                                </div>
                            </div>
                        </div>

                        <p class="font-bold text-md">Social Links</p>
                        <div class="sm:col-span-2 flex gap-6">
                            <div class="sm:col-span-2">
                                <label for="facebook" class="block text-sm font-medium leading-6 text-gray-900">Facebook</label>
                                <div class="mt-2">
                                    <input type="text" name="facebook" v-model="form.facebook" id="facebook" class="mb-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="https://www.facebook.com/">
                                    <InputError class="mt-2" :message="form.errors.facebook" />
                                </div>

                            </div>

                            <div class="sm:col-span-2">
                                <label for="twitter" class="block text-sm font-medium leading-6 text-gray-900">Twitter</label>
                                <div class="mt-2">
                                    <input type="text" name="twitter"  v-model="form.twitter" id="twitter" class="mb-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="https://twitter.com/">
                                    <InputError class="mt-2" :message="form.errors.twitter" />
                                </div>

                            </div>

                            <div class="sm:col-span-2">
                                <label for="github" class="block text-sm font-medium leading-6 text-gray-900">GitHub</label>
                                <div class="mt-2">
                                    <input type="text" name="github" v-model="form.github" id="github" class="mb-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="https://github.com/">
                                    <InputError class="mt-2" :message="form.errors.github" />
                                </div>

                            </div>
                            <div class="sm:col-span-2">
                                <label for="dribble" class="block text-sm font-medium leading-6 text-gray-900">Dribble</label>
                                <div class="mt-2">
                                    <input type="text" name="dribble" v-model="form.dribble" id="dribble" class="mb-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="https://dribbble.com/">
                                    <InputError class="mt-2" :message="form.errors.dribble" />
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <PrimaryButton type="submit"  :class="{ 'opacity-25': form.processing }" :disabled="form.processing" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</PrimaryButton>
                    </div>
                </div>
                <span v-else class="rounded-md px-3 py-2 text-sm text-green-500">Already setuped. you can make changes to any, please take a look at the <span class="font-bold">'Update Settings'</span> menu.</span>
            </form>
        </div>
    </div>

    <Footer/>
</template>

<style scoped>

</style>

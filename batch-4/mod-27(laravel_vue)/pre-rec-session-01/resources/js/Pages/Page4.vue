<script setup>
import {Head} from '@inertiajs/vue3';
import Navbar from '@/Components/Navbar.vue';
import { useForm } from '@inertiajs/vue3';
import { usePage } from '@inertiajs/vue3';
const form = useForm({
    first_name: '',
    last_name: '',
    email: '',
    phone: '',
});

const page = usePage();

function formSubmit() {
    form.post('/create-person', {
        preserveScroll: true,
        onSuccess: () => {
            alert(page.props.flash.message);
            alert(page.props.flash.status);
            alert(JSON.stringify(page.props.flash.code));
            form.reset();
        }
    });
    // alert (form.data);
}
</script>

<template>

    <Head>
        <title>Page4 || Practice project</title>
    </Head>

    <div class="container">
        <Navbar />
        <h2>Page4 form submission</h2>

        <div class="row">
            <div class="col-md-12">
                <form class="form" @submit.prevent="formSubmit()">
                    <csrf-token />
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" id="first_name" v-model="form.first_name" class="form-control"
                            placeholder="Enter first name">
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" id="last_name" v-model="form.last_name" class="form-control"
                            placeholder="Enter last name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" v-model="form.email" class="form-control"
                            placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" id="phone" v-model="form.phone" class="form-control"
                            placeholder="Enter your phone">
                    </div>

                    <button type="submit" class="btn btn-success mt-2"> Submit </button>
                </form>
            </div>
        </div>
    </div>
</template>

<style scoped></style>

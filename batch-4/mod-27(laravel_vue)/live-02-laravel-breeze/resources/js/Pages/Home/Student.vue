<script setup>
import { useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    email: '',
    age: 0
});

function submitForm(){
    form.post(route('create.student'));
}
</script>

<template>
    <div class="container mt-6 bg-lime-400 p-10">
        <div class="row">
            <div class="col-8">
                <form action="" @submit.prevent="submitForm()" class="bg-white p-10 rounded-lg shadow-md" method="POST">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input v-model="form.name" type="text" id="name" name="name" class="form-control" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input v-model="form.email" type="email" id="email" name="email" class="form-control" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input v-model="form.age" type="number" id="age" name="age" class="form-control" placeholder="Enter your age">
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
</template>

<style scoped></style>

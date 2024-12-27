<script setup>
import { useForm } from '@inertiajs/vue3';
import Button from 'primevue/button';
import Accordion from 'primevue/accordion';
import AccordionPanel from 'primevue/accordionpanel';
import AccordionHeader from 'primevue/accordionheader';
import AccordionContent from 'primevue/accordioncontent';

const form = useForm({
    name: '',
    email: '',
    age: 0
});

function submitForm() {
    form.post(route('create.student'));
}

//delete student
function deleteStudent(id) {
    if (confirm('Are you sure you want to delete this student?')) {
        form.delete(route('destroy', id));
        console.log('student deleted');
    }

}

</script>

<template>
    <div class="container mt-6 bg-lime-400 p-10">
        <div class="row">
            <div class="col-8">
                <form action="" @submit.prevent="submitForm()" class="bg-white p-10 rounded-lg shadow-md" method="POST">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input v-model="form.name" type="text" id="name" name="name" class="form-control"
                            placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input v-model="form.email" type="email" id="email" name="email" class="form-control"
                            placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input v-model="form.age" type="number" id="age" name="age" class="form-control"
                            placeholder="Enter your age">
                    </div>

                    <Button type="submit" class="btn btn-primary mt-3">Submit</Button>
                </form>

                <Button v-on:click="deleteStudent(2)" icon="pi pi-trash" label="Delete" class="mt-5" />
            </div>
        </div>
    </div>



    <div class="row">
        <div class="card col-12">
            <Accordion :value="['0']" multiple>
                <AccordionPanel value="0">
                    <AccordionHeader>Header I</AccordionHeader>
                    <AccordionContent>
                        <p class="m-0">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia
                            deserunt mollit anim id est laborum.
                        </p>
                    </AccordionContent>
                </AccordionPanel>
                <AccordionPanel value="1">
                    <AccordionHeader>Header II</AccordionHeader>
                    <AccordionContent>
                        <p class="m-0">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto
                            beatae vitae dicta sunt explicabo. Nemo enim
                            ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                            magni
                            dolores eos qui ratione voluptatem sequi nesciunt. Consectetur, adipisci velit, sed quia non
                            numquam eius modi.
                        </p>
                    </AccordionContent>
                </AccordionPanel>
                <AccordionPanel value="2">
                    <AccordionHeader>Header III</AccordionHeader>
                    <AccordionContent>
                        <p class="m-0">
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            voluptatum
                            deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate
                            non
                            provident, similique sunt in culpa
                            qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum
                            facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio
                            cumque nihil impedit quo minus.
                        </p>
                    </AccordionContent>
                </AccordionPanel>
            </Accordion>
        </div>

    </div>
</template>

<style scoped></style>

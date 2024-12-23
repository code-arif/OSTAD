<script setup>
import { reactive } from "vue";

const data = reactive({
  name: '',
  email: '',
  message: '',
  subscribe: false,
  gender: '',
  country: '',
  dob: '',
  age: null,
  satisfaction: 5,
  file: null, // To store the file
});

function handleSubmit() {
  alert('Form Submitted! Check the Form Data section for details.');
  console.log(data.file); // Logs the selected file details
}
</script>

<template>
  <div id="app">
    <h1>Vue.js Two-Way Data Binding Example</h1>

    <form @submit.prevent="handleSubmit">
      <!-- Text Input -->
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" v-model="data.name" placeholder="Enter your name">
      </div>

      <!-- Email Input -->
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" v-model="data.email" placeholder="Enter your email">
      </div>

      <!-- Textarea -->
      <div class="form-group">
        <label for="message">Message</label>
        <textarea id="message" v-model="data.message" rows="4" placeholder="Your message"></textarea>
      </div>

      <!-- File Input -->
      <div class="form-group">
        <label for="file">Upload File</label>
        <input type="file" id="file" @change="(e) => data.file = e.target.files[0]">
      </div>

      <!-- Checkbox -->
      <div class="form-group">
        <label>
          <input type="checkbox" v-model="data.subscribe">
          Subscribe to Newsletter
        </label>
      </div>

      <!-- Radio Buttons -->
      <div class="form-group">
        <label>Gender</label>
        <label><input type="radio" value="Male" v-model="data.gender"> Male</label>
        <label><input type="radio" value="Female" v-model="data.gender"> Female</label>
      </div>

      <!-- Select Dropdown -->
      <div class="form-group">
        <label for="country">Country</label>
        <select id="country" v-model="data.country">
          <option value="">Select a country</option>
          <option value="USA">USA</option>
          <option value="Canada">Canada</option>
          <option value="UK">UK</option>
        </select>
      </div>

      <!-- Date Input -->
      <div class="form-group">
        <label for="dob">Date of Birth</label>
        <input type="date" id="dob" v-model="data.dob">
      </div>

      <!-- Number Input -->
      <div class="form-group">
        <label for="age">Age</label>
        <input type="number" id="age" v-model="data.age">
      </div>

      <!-- Range Slider -->
      <div class="form-group">
        <label for="satisfaction">Satisfaction Level</label>
        <input type="range" id="satisfaction" v-model="data.satisfaction" min="0" max="10">
        <span>{{ data.satisfaction }}</span>
      </div>

      <button type="submit">Submit</button>
    </form>

    <!-- Form Output -->
    <div class="form-output">
      <h2>Form Data</h2>
      <pre>{{ data }}</pre>
    </div>
  </div>
</template>

<style scoped>

.form-group {
  margin-bottom: 15px;
}

label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
}

input, select, textarea {
  width: 100%;
  padding: 8px;
  margin-top: 5px;
}

.form-output {
  margin-top: 20px;
  padding: 15px;
  border: 1px solid #ddd;
  background: #f9f9f9;
}
</style>

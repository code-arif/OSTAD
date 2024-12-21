<script setup>
// defineProps([
//   'heading',
//   'message',
//   'color'
// ]);

//for default value
defineProps({
  heading: {
    type: String,
    default: 'Heading'
  },
  message: {
    type: String,
    default: 'Message'
  },
  color: {
    type: String,
    default: 'teal'
  }
})
</script>
<template>
  <div class="border-t-4 rounded-b py-3 shadow-md mt-5"
       :class="`bg-${color}-100 border-${color}-500 text-${color}-900`" role="alert">
    <div>
      <p class="font-bold pl-5"> {{ heading }} </p>
      <p class="text-sm pl-5"> {{ message }} </p>
    </div>
  </div>
</template>
<style scoped></style>
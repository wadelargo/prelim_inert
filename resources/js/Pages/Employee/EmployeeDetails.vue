<template>
    <div>
      <h1>{{ employee.fname }} {{ employee.lname }}</h1>
      <p>Position: {{ employee.position }}</p>
      <!-- Add more details as needed -->
    </div>
  </template>
  
  <script setup>
  import { defineProps } from 'vue';
  
  const props = defineProps({
    employee: Object
  });
  </script>
  
  <style scoped>
  /* Add styles as needed */
  </style>
  
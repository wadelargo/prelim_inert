<template>
    <div class="bg-white w-full">
      <h1 class="text-4xl my-3 text-center text-primary">Employees</h1>
      <div class="mx-auto max-w-4xl overflow-x-auto">
        <table class="w-full border-collapse border border-gray-200">
          <thead>
            <tr class="bg-gray-100">
              <th class="px-8 py-4 text-lg font-semibold">Last Name</th>
              <th class="px-8 py-4 text-lg font-semibold">First Name</th>
              <th class="px-8 py-4 text-lg font-semibold">Position</th>
              <th class="px-8 py-4 text-lg font-semibold">View</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="employee in employees" :key="employee.id" class="hover:bg-gray-50">
              <td class="border px-8 py-6">{{ employee.lname }}</td>
              <td class="border px-8 py-6">{{ employee.fname }}</td>
              <td class="border px-8 py-6">{{ employee.position }}</td>
              <td class="border px-8 py-6">
              <inertia-link :href="'/employees/' + employee.id" class="text-blue-500 hover:underline">Details</inertia-link>
            </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </template>
  
<script setup>
import { defineProps } from 'vue';
const props = defineProps({
employees: Array
});
</script>

<style scoped>
.text-primary {
color: #3182ce;
}
</style>
  
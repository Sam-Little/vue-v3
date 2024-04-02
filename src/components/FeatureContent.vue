<template>
    <div class="py-12 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center">
          <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Pricing</h2>
          <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
            A plan for every team's size and needs
          </p>
        </div>
  
        <div class="mt-10">
          <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-3 md:gap-x-8 md:gap-y-10">
            <!-- Pricing Card -->
            <div class="relative">
              <dt>
                <p class="text-lg leading-6 font-medium text-gray-900">Basic</p>
              </dt>
              <dd class="mt-2 mb-4 text-base text-gray-500">
                All the basics for starting a new business
              </dd>
              <dd class="text-3xl font-extrabold text-indigo-600">$8/mo</dd>
            </div>
            <!-- Repeat for each pricing card -->
            <!-- ... -->
          </dl>
        </div>
      </div>
    </div>
  </template>
  
  <script lang="ts">
  export default {
    name: 'FeatureContent',
  };
  </script>
  
  <style scoped>
  /* Add any additional styles you need here */
  </style>
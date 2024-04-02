<template>
  <nav class="bg-gray-800 text-white p-4 flex justify-between items-center">
    <div>
      <router-link to="/registration" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Register</router-link>
      <router-link to="/login" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 ml-4 rounded">Login</router-link>

    </div>
    <div class="flex-grow flex justify-center items-center space-x-4">
      <router-link to="/MainContent" class="hover:text-blue-200">Home</router-link>
      <router-link to="/features" class="hover:text-blue-200">Features</router-link>
      <router-link to="/pricing" class="hover:text-blue-200">Pricing</router-link>
    </div>

    <!-- Right Section for Logo -->
    <div>
      <img src="" alt="Your Logo" class="h-8">
    </div>
  </nav>
</template>

<script>
export default {
  name: "NavBar",
  methods: {
    navigateTo(route) {
      this.$router.push(route);
    },
    register() {
      // Implement your registration logic or navigation here
      console.log("Navigate to registration page");
    },
    login() {
      // Implement your login logic or navigation here
      console.log("Navigate to login page");
  },
},
};

</script>

 
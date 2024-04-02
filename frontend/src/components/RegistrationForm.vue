<template>
    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
      <div class="px-8 py-6 mt-4 text-left bg-white shadow-lg">
        <h3 class="text-2xl font-bold text-center">Create an account</h3>
        <form class="mt-4" @submit.prevent = "handleSubmit">
          <div>
            <label class="block" for="email">Email</label>
            <input type="email" placeholder="Email" id="email" name="email"
                   class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
          </div>
          <div class="mt-4">
            <label class="block" for="password">Password</label>
            <input type="password" placeholder="Password" id="password" name="password"
                   class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
          </div>
          <div class="flex items-baseline justify-between">
            <button class="px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900" type = 'submit'>Register</button>
          </div>
        </form>
      </div>
    </div>
  </template>
  
  
  <script>
export default {
  name: 'RegistrationForm',
  methods: {
    handleSubmit(event) {
  event.preventDefault();

  const formData = new FormData(event.target);
  const email = formData.get('email');
  const password = formData.get('password')
  console.log("Email: ", email, "Password: ", password)
  

  console.log('Form data:', formData); // Log the form data object

  fetch("/backend/registration.php", {
    method: 'POST',
    body: formData,
  })
  .then(response => response.json()) // Assuming the server responds with JSON
  .then(data => {
    console.log('Server response:', data); // Log the response from the server
  })
  .catch(error => {
    console.error('Error:', error); // Log any errors during the fetch
  });
}

  },
};
</script>

  
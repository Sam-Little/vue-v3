<template>
    <div class="login-form">
      <h3>Login to Your Account</h3>
      <form @submit.prevent="login">
        <div>
          <label for="email">Email:</label>
          <input type="email" id="email" v-model="credentials.email" required>
        </div>
        <div>
          <label for="password">Password:</label>
          <input type="password" id="password" v-model="credentials.password" required>
        </div>
        <button type="submit">Login</button>
      </form>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        credentials: {
          email: '',
          password: '',
        },
      };
    },
    methods: {
      login() {
        // Here, you would usually make an API call to your backend to authenticate the user.
        // This example just logs the credentials to the console.
        console.log('Login Attempt:', this.credentials);
        
        // Reset the form fields
        this.credentials.email = '';
        this.credentials.password = '';
      },
    },
  };
  </script>
  
  <style scoped>
  .login-form {
    max-width: 400px;
    margin: auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
  }
  
  .login-form h3 {
    text-align: center;
  }
  
  .login-form form {
    display: flex;
    flex-direction: column;
  }
  
  .login-form label {
    margin-bottom: 5px;
  }
  
  .login-form input {
    margin-bottom: 20px;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
  }
  
  .login-form button {
    padding: 10px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  .login-form button:hover {
    background-color: #0056b3;
  }
  </style>
  
  
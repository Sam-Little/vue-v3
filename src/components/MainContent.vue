<template>
    <div class="main-content">
      <video controls>
        <source src="movie.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
  </template>
  
  <script>
  export default {
    name: "MainContent",
  };
  </script>
  
  <style scoped>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #333;
    line-height: 1.6;
    background-color: #f4f4f4;
    padding: 20px;
    margin: 0;
}


.card {
    background: #fff;
    margin-bottom: 20px;
    padding: 20px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    border-radius: 5px;
}

.container {
    width: 100vw;
    margin: 0;
    overflow: hidden;
    padding: 20px 0;
.header {
    background: #333;
    color: #fff;
    padding: 10px 0;
    text-align: center;
}

.code-snippet {
    background: #eaeef3;
    border-left: 5px solid #5b88bd;
    margin: 20px 0;
    padding: 10px;
    font-family: 'Courier New', Courier, monospace;
    color: #333;
}

/* Add responsiveness */
@media (max-width: 700px) {
    .container {
    width: 100vw;
    margin: 0;
    overflow: hidden;
    padding: 20px 0;
}

}} </style>
  
  
<template>
<notifications group="auth"  position="top left" />
<notifications group="app"   position="top left"  />

 <vue3-progress />

    <router-view  :key="$route.path"  />
  </template>

<script>



export default {
  name: "App",
  mounted() {
    this.$progress.finish();


  },
  created() {
    this.$progress.start();

    this.$router.beforeEach((to, from, next) => {
      this.$progress.start();
      next();
    });

    this.$router.afterEach((to, from) => {
      this.$progress.finish();
    });
  },
};
  </script>


  <style scoped>

h1, .h1,
h2, .h2,
h3, .h3,
h4, .h4,
h5, .h5,
h6, .h6,
p,
span {
  font-family: "iransans", sans-serif;
}

  </style>

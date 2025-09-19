<template>
    <div>
      <nav>
        <router-link to="/">ثبت نام</router-link> |
        <router-link to="/login">ورود</router-link>
      </nav>
      <router-view  :key="$route.path"  />
    </div>
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
  nav {
    margin-bottom: 10px;
  }
  </style>

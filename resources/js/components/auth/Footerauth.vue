<template>



<div class="d-flex align-items-center justify-content-center">
							<a :href="`${windowLocation}/`"  class="text-primary">{{$t("Home_page")}}</a>
							<a href="javascript:void(0);" class="text-primary mx-5">{{$t("contact")}}</a>
							<a href="javascript:void(0);" class="text-primary">{{$t("Contact_us")}}</a>
</div>

  </template>

  <script>
  export default {


  computed: {
    windowLocation() {
      return window.location.origin;
    }
  },

  };
  </script>
 
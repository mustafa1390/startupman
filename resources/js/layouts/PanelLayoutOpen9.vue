<template>

    <div class="preload preload-container">
        <div class="middle">
            <div class="bar bar1"></div>
            <div class="bar bar2"></div>
            <div class="bar bar3"></div>
            <div class="bar bar4"></div>
            <div class="bar bar5"></div>
            <div class="bar bar6"></div>
            <div class="bar bar7"></div>
            <div class="bar bar8"></div>
          </div>
    </div>


    <div id="wrapper">
        <div id="page" class="home-6 flex">


        <Sidebar />


            <div class="wrap-content">
        <router-view />
        <Footer />
            </div>

            <div class="btn-canvas active">
                <div class="canvas">
                    <span></span>
                </div>
            </div>

            </div>
            </div>


    <div class="tf-mouse tf-mouse-outer"></div>
    <div class="tf-mouse tf-mouse-inner"></div>

    <div class="progress-wrap active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
        </svg>
    </div>



  </template>



<script>
import Sidebar from '../components/layout/Open9/Sidebar.vue';
import Footer from '../components/layout/Open9/Footer.vue';


export default {
  components: {
    Sidebar,
    Footer,

  },


};
</script>

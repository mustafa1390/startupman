<template>

      <nav>
        <router-link  class="text-primary"   :to="{ name: 'register' }"> {{ $t("signup") }}</router-link> |
         <router-link   class="text-primary"   :to="{ name: 'login' }"> {{ $t("login") }}</router-link>
      </nav>
<div class="authincation d-flex flex-column flex-lg-row flex-column-fluid">


<div class="login-aside text-center d-flex flex-column flex-row-auto">

<div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
<div class="text-center  mb-2 pt-5">
    <div class="language-dropdown" @click="toggleDropdown">
    <button class="btn btn-secondary btn-drp dropdown-toggle " type="button">
      {{ selectedLanguage.label }}
    </button>
    <ul v-if="isOpen" class="dropdown-menu">
      <li
        v-for="(lang, index) in languages"
        :key="index"
        @click="selectLanguage(lang)"
        class="dropdown-item"
      >
      <!-- <router-link    :to="{ name: this.rname , params: { lang: lang.code }   }"> -->
    <a v-if="lang.code=='en'" :href="`${(this.$route.path).replace('/fa', '/en')}`" >
        <span :class="'flag-icon flag-icon-' + lang.code"></span>
        {{ lang.label }}
    </a>
    <a v-if="lang.code=='fa'" :href="`${(this.$route.path).replace('/en', '/fa')}`" >
        <span :class="'flag-icon flag-icon-' + lang.code"></span>
        {{ lang.label }}
    </a>
    <!-- </router-link> -->
      </li>
    </ul>
</div>
</div>



<a   class="text-primary"    href="/" >
      <div class="text-center  mb-2 pt-5 logo">
        <img
        class="logo_l"
          src="/auth-j/auth-temp/logocomplex.png"
          alt=""
        />
      </div>

    </a>





      <h3 class="mb-2 text-white"> {{$t('ArziCo')}}</h3>
      <p class="mb-4">
      {{$t("det_buy_sell_1")}} <br />
      </p>
    </div>
    <div
      class="aside-image position-relative"
      style="background-image: url(/auth-j/images/order-st.png)"
    >
      <img
        class="img1 move-1"
        src="/auth-j/auth-temp/pic.png"
        alt=""
      />
      <img
        class="img2 move-2"
        src="/auth-j/auth-temp/pic4.png"
        alt=""
      />
      <img
        class="img3 move-3"
        src="/auth-j/auth-temp/pic12.png"
        alt=""
      />
    </div>
  </div>

  <div class="container flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">

        <router-view />
        </div>


</div>


</template>


<script>
  import router from '@/router';

export default {
    data() {
    return {
      isOpen: false,
      rname:this.$route.name,
      selectedLanguage: { code: 'en', label: 'Select Language' },
      languages: [
        { code: 'en', label: 'English' },
        { code: 'fa', label: 'Persian' }
      ]
    };
  },
methods: {
getUnits: function() {
document.body.setAttribute('data-primary', 'color_9');
},
toggleDropdown() {
      this.isOpen = !this.isOpen;
    },
    selectLanguage(lang) {
      this.selectedLanguage = lang;
      this.isOpen = false;

    //   if(this.$route.params.lang != lang.code){
    //     this.$router.push({ name: this.$route.name , params: { lang: lang.code } }).then(() => {
    //     window.location.reload();
    //     });
    //   }
    }
},
beforeMount() {
   this.getUnits()
},

}
</script>

<style scoped>
.language-dropdown {
  position: relative!important;
  display: inline-block!important;
}
.dropdown-menu {
  display: block!important;
  position: absolute!important;
  top: 100%!important;
  left: 0!important;
  background-color: white!important;
  border: 1px solid #ccc!important;
  min-width: 120px!important;
  padding: 0!important;
  list-style: none!important;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15)!important;
}
.dropdown-item {
  padding: 8px 12px!important;
  cursor: pointer!important;
  display: flex!important;
  align-items: center!important;
}
.dropdown-item:hover {
  background-color: #f0f0f0!important;
}
.flag-icon {
  margin-right: 8px!important;
  width: 16px!important;
  height: 12px!important;
  display: inline-block!important;
  background-size: cover!important;
}
.flag-icon-en {
  background-image: url('/public/flag/english-flag.png')!important; /* Replace with actual flag images */
}
.flag-icon-fa {
  background-image: url('/public/flag/persian-flag.webp')!important;
}
.btn-drp{
    border: 1px solid #ccc !important;
  min-width: 120px !important;
}
</style>

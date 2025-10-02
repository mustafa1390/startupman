<template>
    <div>
      <div class="hamburger" @click="toggleMenu">
        <div class="bar" :class="{ 'change': isOpen }"></div>
        <div class="bar" :class="{ 'change': isOpen }"></div>
        <div class="bar" :class="{ 'change': isOpen }"></div>
      </div>
      <div class="menu" :class="{ 'active': isOpen }">
        <ul>
            <li><router-link :to="{ name: 'index' }">{{ $t("home") }}</router-link></li>
            <li><router-link :to="{ name: 'about' }">{{ $t("History") }}</router-link></li>
          <li @click="closeMenu">close menue</li>
        </ul>
      </div>
    </div>
  </template>

  <script>
  export default {
    data() {
      return {
        isOpen: false,
      };
    },
    methods: {
      toggleMenu() {
        this.isOpen = !this.isOpen;
      },
      closeMenu() {
        this.isOpen = false;
      },
    },
  };
  </script>

  <style scoped>
  .hamburger {
    cursor: pointer;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    width: 30px;
    height: 30px;
  }

  .bar {
    height: 3px;
    width: 100%;
    background-color: black;
    transition: 0.3s;
  }

  .change:nth-child(1) {
    transform: rotate(45deg) translate(5px, 5px);
  }

  .change:nth-child(2) {
    opacity: 0;
  }

  .change:nth-child(3) {
    transform: rotate(-45deg) translate(5px, -5px);
  }

  .menu {
    display: none;
    flex-direction: column;
    background-color: white;
    position: absolute;
    top: 40px;
    left: 0;
    width: 100%;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.2);
  }

  .menu.active {
    display: flex;
  }

  .menu ul {
    list-style-type: none;
    padding: 0;
  }

  .menu li {
    padding: 15px;
    cursor: pointer;
    transition: background 0.3s;
  }

  .menu li:hover {
    background-color: lightgray;
  }
  </style>

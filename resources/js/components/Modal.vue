<template>
  <transition name="fade">
    <div v-if="show" class="modal-overlay" @click.self="close">
      <div class="modal-content">
        <header class="modal-header">
          <h3>{{ title }}</h3>
          <button class="close-btn" @click="close">&times;</button>
        </header>
        <main class="modal-body">
          <slot></slot>
        </main>
        <footer class="modal-footer">
          <slot name="footer">
            <button class="btn" @click="close">Close</button>
          </slot>
        </footer>
      </div>
    </div>
  </transition>
</template>

<script setup>
import { defineProps, defineEmits } from 'vue'

const props = defineProps({
  modelValue: { type: Boolean, default: false },
  title: { type: String, default: 'Modal Title' }
})

const emit = defineEmits(['update:modelValue'])

const show = computed({
  get: () => props.modelValue,
  set: (val) => emit('update:modelValue', val)
})

function close() {
  show.value = false
}
</script>

<style scoped>
.modal-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.5);
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 999;
}
.modal-content {
  background: #fff;
  padding: 1.5rem;
  border-radius: 8px;
  max-width: 500px;
  width: 90%;
  position: relative;
  box-shadow: 0 5px 15px rgba(0,0,0,0.3);
}
.modal-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.close-btn {
  font-size: 1.5rem;
  border: none;
  background: none;
  cursor: pointer;
}
.fade-enter-active, .fade-leave-active {
  transition: opacity 0.3s;
}
.fade-enter-from, .fade-leave-to {
  opacity: 0;
}
</style>

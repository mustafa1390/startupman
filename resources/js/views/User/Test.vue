<template>
            <modal :type_modal="type_modal"
            /> 
</template>
<script>
import Modal from '@/components/Modal.vue';
export default {
    components: {
        Modal,
    },
   data() {
        return {
            type_modal: 'delete',
        }
    }
}
</script>

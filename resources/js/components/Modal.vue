<template>
  <div>
    <!-- Open Button -->
    <button @click="openModal" class="btn btn-primary" >
      Open Modal
    </button>

    <!-- Modal Overlay -->

    <div
      v-if="showModal"
      class="modal-overlay"
      @click.self="closeModal"
    >



      <div class="modal-content">


            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" @click="closeModal">
                        <span aria-hidden="true">×</span>
                    </button>
                    <div class="modal-body">
                        <div class="image">
                            <img src="assets/images/backgroup-section/popup.png" alt="">
                        </div>
                        <div class="logo-rotate">
                            <img class="" src="assets/images/item-background/item6-img.png" alt="">
                        </div>
                        <h2>Subscribe to our newsletter</h2>
                        <p>Subscribe for our newsletter to stay in the loop</p>
                        <fieldset class="email">
                            <input type="email" class="style-1" id="email" placeholder="Email address*" name="email" tabindex="2" value="" aria-required="true" required="">
                        </fieldset>
                        <a href="" class="tf-button style-1 h50">Subscribe<i class="icon-arrow-up-right2"></i></a>
                    </div>
                </div>
            </div>



      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "ClickOutsideModal",
  data() {
    return {
      showModal: false,
    };
  },
  methods: {
    openModal() {
      this.showModal = true;
    },
    closeModal() {
      this.showModal = false;
    },
    save() {
      alert("Saved!");
      this.closeModal();
    },
  },
      props: ['type_modal' ],

};
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
</style>

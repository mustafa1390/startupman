<template>



    <div  >

                <input
        v-for="(digit, index) in codeArray"
        :key="index"
        type="text"
        v-model="codeArray[index]"
        @input="handleInput(index)"
        @keydown.backspace="handleBackspace(index)"
        maxlength="1"
        class="code-input"
        ref="codeInputs"
    inputmode="numeric"
    pattern="[0-9]*"
      />
              </div>


  </template>

  <script>
  export default {
    props: {
      length: {
        type: Number,
        default: 6,
      },
    },
    data() {
      return {
        codeArray: Array(this.length).fill(""),
      };
    },
    methods: {
      handleInput(index) {
        // Move to the next input field if a digit is entered
        const input = this.codeArray[index];
        if (input && index < this.length - 1) {
          this.$refs.codeInputs[index + 1].focus();
        }
        this.emitCode();
      },
      handleBackspace(index) {
        // Move to the previous input field if backspace is pressed and the field is empty
        if (this.codeArray[index] === "" && index > 0) {
          this.$refs.codeInputs[index - 1].focus();
        }
        this.emitCode();
      },
      emitCode() {
        // Emit the complete code when the user types
        this.$emit("input", this.codeArray.join(""));
      },
    },
  };
  </script>

  <style scoped>
  .verification-code-input {
    display: flex;
    justify-content: space-between;
    gap: 8px;
    direction: ltr!important;
  }

  .code-input {
    width: 40px;
    height: 40px;
    text-align: center;
    font-size: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
  </style>

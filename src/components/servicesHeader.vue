<template>
  <div class="full-width container-headers">
    <div
      class="full-width Inline Flex row justify-evenly main-header container"
    >
      <div class="heder-context col">
        <div class="flex column">
          <h1 class="heder-context__h1">Services</h1>

          <b class="heder-context__b"
            >From campaign planning and consultation to content creation and
            extended social media campaigning, I'm here to help your brand sound
            like you online.</b
          >
          <div class="but">
            <q-btn
              color="black"
              label="First consultation is free"
              size="1.1rem"
              class="edd-but"
            />
          </div>
        </div>
      </div>
      <div class="col image-header">
        <img src="serv.avif" class="image-head" />
      </div>
    </div>
  </div>
</template>
<script>
import { defineComponent } from "vue";
export default defineComponent({
  name: "sercvesessLayout",
  components: {},
});
</script>
<style lang="scss" scoped>
.main-header {
  margin: auto !important;
}
.but {
  padding-top: 15%;
}
.edd-but {
  opacity: 0.8;
  font-size: 1rem !important;
  font-weight: 300 !important;
  padding: 1rem 2rem;
  color: $maincolor !important;
}
.heder-context {
  text-align: start;
  margin: auto;
  margin-top: 10%;
  &__h1 {
    font-family: NavFont;
    font-weight: 300;
    font-size: 5rem;
    color: $fontColor;
  }
  &__b {
    font-weight: 400;
    line-height: 10px;
    overflow-wrap: break-word;
    white-space: break-spaces;
    font-family: NavFont;
    line-height: 1.7rem;
    font-size: 1.3rem;
    color: $fontColor;
    text-transform: capitalize;
  }
}
.container-headers {
  width: 100% !important;
  background-color: $maincolor !important;
}

@media screen and (max-width: 800px) and (min-width: 300px) {
  .main-header {
    flex-direction: column-reverse;
    width: auto;

    .heder-context {
      text-align: center;
      width: 80%;
      padding: 50px;
    }
  }
  .image-head {
    width: 100%;
    height: 100%;
  }
}
</style>

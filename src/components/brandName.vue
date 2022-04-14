<template>
  <section>
    <div class="brands">
      <div class="row container">
        <div class="col"><span class="brands__1">Prands</span></div>
        <div class="col"><span class="brands__2">Prands</span></div>
        <div class="col"><span class="brands__3">Prands</span></div>
        <div class="col"><span class="brands__3">Prands</span></div>
      </div>
    </div>
  </section>
</template>
<script>
import { defineComponent } from "vue";

export default defineComponent({
  name: "HeaderNav",
});
</script>
<style lang="scss" scoped>
.brands {
  padding: 4rem;
  text-align: center;
  background-color: white;
  &__1,
  &__2,
  &__3,
  &__4 {
    margin: auto;
    font-size: 4rem;
  }
  &__1,
  &__3 {
    font-family: NavFont;
    font-weight: normal;
    font-size: 3.5rem;
  }
}
</style>

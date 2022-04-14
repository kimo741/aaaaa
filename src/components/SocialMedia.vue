<template>
<section class="container social">
<div class="row social__row-main">
  <div class="col social__row--main-col">
    <h3>Social Media Management</h3>
    <p>Whether you need help with planning the right kinds of campaigns for your social media accounts or need to establish a general social media strategy in the first place, I'll work closely with you to identify how we can scale your social media activities to a whole new level. </p>
    </div>
</div>
<div class="row">
  <div class="col"><h3>Service</h3>
  <p class="body">
    <P>• Audit of current social media activities</P>
    <P>• Hashtag and strategy research</P>
    <P>• Hashtag and strategy research</P>
    <P>• Content creation (including editing & social media graphics)</P>
    <P>• Publishing content on Instagram & Facebook</P>

  </p>
  </div>
  <div class="col">

<h3>Add ons </h3>
  <p class="body">
    <P>• Daily engagement to grow your account</P>
    <P>• Facebook Group management</P>
    <P>• Blog post writing</P>
    <P>• Newsletter creation</P>
    <P>• Guide/Freebie creation</P>
    <P>• Graphic design</P>

  </p>

  </div>
  </div>
<div class="row">
  <div class="col ">
    <h3>Duration</h3>
    <p>The initial contract is always for 3 months – this way, we can monitor together that we achieve the desired results. After the initial contract period, we continue on a monthly basis.</p>
    </div>
  <div class="col">
    <h3>Pricing</h3>
    <p>On request – the total price depends on your business and needs.</p>
    </div>

</div>
  </section>
</template>
<script>
import { defineComponent } from "vue";
export default defineComponent({
  name: "sercvesessLayout",
  components: {},
});
</script>
<style lang="scss" scoped>
.social{
  color: $fontColor;
  font-family: NavFont;
  &__row-main{
    width: 70%;
    &-col{
      h3{

      }

    }

  }

}
.col,
.row {
  color: $fontColor;
  font-family: NavFont;
}
.col h3{
  font-size: 4rem;
  letter-spacing: 1.3px;
  font-weight: 500;
}
.col p{
  font-size: 1.3rem;
    letter-spacing: 0.3px;
      font-weight: 300;
}
</style>

<template>
<section class="container social">
<div class="row social__row--main">
  <div class="col social__row--main-col">
    <h3 class="main-h">Social Media Management</h3>
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
.social__row--main{
  color: $fontColor;
  font-family: NavFont;

    width: 70%;
    margin:auto;
      h3{

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


@media screen and (max-width: 800px) and (min-width: 300px) {
.social{


&__row-main{
    display: flex;
  flex-direction: column;
    text-align: center;
  margin: auto;

  }
}
.container{
  max-width: none;
  width: 100%;
}
.row{
  flex-direction: column;
  text-align: center;
  padding: 0;
  width: 100%;
}
.col{
  width: 100%;
  padding: 0 3rem;
    box-shadow: 2px 2px 1px $maincolor;

}
.main-h{
  position: relative;
   &::after {
        content: "";
        position: absolute;
        width: 100%;
        height: 3px;
        bottom: -50% ;
        left: 0%;
        background:linear-gradient(to right ,  $maincolor ,#000);
      }
   &::before {
        content: "";
        position: absolute;
        width: 100%;
        height: 3px;
        top: -50% ;
        left: 0%;
        background:linear-gradient(to right , #000 , $maincolor);
      }

}
}
</style>

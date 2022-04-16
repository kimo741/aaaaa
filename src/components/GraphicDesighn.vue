<template>
  <section class="section-graph ">
    <div class="container ">
      <div class="row social-row-1">
        <div class="col">
          <h3 class="main-h">Graphic design</h3>
          <p>It's true that a picture tells more than a thousand words – and on social media platforms like Instagram
            and Facebook, top graphics can make or break your content. In my work, I focus on creating visual assets
            that work cross-functionally across different platforms and communicate your brand in the best way
            possible.</p>
        </div>
      </div>
      <div class="row">
        <div class="col"><h3>Service</h3>
          <p class="body">
          <P>• Social media graphic templates</P>
          <P>• Facebook ads design</P>
          <P>• Facebook covers and headers</P>
          <P>• Instagram story highlight icons</P>
          <P>• Instagram story stickers</P>
          <P>• Product cover</P>

          </p>
        </div>
        <div class="col">

          <h3>Duration </h3>
          <p>
            The initial contract is always for 3 months – this way, we can monitor together that we achieve the desired
            results. After the initial contract period, we continue on a monthly basis.

          </p>

        </div>
      </div>
      <div class="row">
        <div class="col">
          <h3>Pricing</h3>
          <p>On request – the total price depends on your business and needs.</p>
        </div>
        <div class="col but">
          <div class="but">
            <q-btn
              class="edd-but"
              color="black"
              label="VIEW MORE"
              size="1.3rem"
            />
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
<script>
import {defineComponent} from "vue";

export default defineComponent({
  name: "sercvesessLayout",
  components: {},
});
</script>
<style lang="scss" scoped>
.section-graph {
  background-color: $maincolor;
}

.social-row-1 {
  width: 50%;
  text-align: center !important;
  margin: auto;
}

.col,
.row {
  color: $fontColor;
  font-family: NavFont;
}

.col h3 {
  font-size: 4rem;
  letter-spacing: 1.3px;
  font-weight: 500;
}

.col p {
  font-size: 1.3rem;
  letter-spacing: 0.3px;
  font-weight: 300;

}


.edd-but {
  text-align: center;
  margin: auto;
  opacity: 0.8;
  font-size: 1rem !important;
  font-weight: 300 !important;
  padding: 1rem 2rem;
  color: $maincolor !important;
}

@media screen and (max-width: 800px) and (min-width: 300px) {
    .but {
    margin: auto !important;
    background: $maincolor;
    transform:none !important;
    padding: 5rem 0 !important;
        .edd-but {
      color: #000 !important;
      text-shadow: 1px 1px  1px rgba(0, 0, 0, 0.63);
      border: 1px solid #ddd;
      font-weight: bolder;
      font-size: 1.3rem !important;
      transform: translateX(-50%);
    }



    }
  .social {


    &__row-main {
      display: flex;
      flex-direction: column;
      text-align: center;
      margin: auto;

    }
  }
  .container {
    max-width: none;
    width: 100%;
  }
  .row {
    flex-direction: column;
    text-align: center;
    padding: 0;
    width: 100%;
  }
  .col {
    width: 100%;
    padding: 0 3rem;
    box-shadow: 2px 2px 1px $sucColor;

  }

  .main-h {
    position: relative;

    &::after {
      content: "";
      position: absolute;
      width: 100%;
      height: 3px;
      bottom: -50%;
      left: 0%;
      background: linear-gradient(to right, $maincolor, #000);
    }

    &::before {
      content: "";
      position: absolute;
      width: 100%;
      height: 3px;
      top: -50%;
      left: 0%;
      background: linear-gradient(to right, #000, $maincolor);
    }
  }
}
  .but {
    margin: auto;
    background: $maincolor;
       transform: translateX(20%);

    .edd-but {
      position: absolute;
      width: 12rem !important;
      height: 5rem;
      margin: auto;
      background-color: transparent !important;
      color: #000 !important;
      text-shadow: 1px 1px  1px rgba(0, 0, 0, 0.63);
      border: 1px solid #ddd;
      font-weight: bolder;
      font-size: 1.3rem !important;
      &:hover{
        transition: all 0.4s ease-in-out;
        background: #000 !important;
        color: $maincolor !important;

      }
    }
  }
</style>

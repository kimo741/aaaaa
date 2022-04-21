<template>
  <section id="services" class="services">
    <div class="container content-between">
      <h2 class="services-header">
        {{ $t("services.services") }}
      </h2>
      <div class="row justify-center border-rad items-center">
        <!------------------sevice one ------------------->
        <div class="col-6 justify-center text-center">
          <h2>
            {{ $t("services.slogen") }}
          </h2>
          <p>
            <q-icon
              name="fa-solid fa-camera-retro"
              color="green"
              size="1rem"
            /><b>{{ $t("services.panning.title") }}</b>
            <br />
            <q-icon
              name="fa-solid fa-camera-retro"
              color="green"
              size="1rem"
            /><b>{{ $t("services.panning.marketing") }}</b>
            <br />
            <q-icon
              name="fa-solid fa-camera-retro"
              color="green"
              size="1rem"
            /><b>{{ $t("services.panning.communication") }}</b>
            <br />
            <q-icon
              name="fa-solid fa-camera-retro"
              color="green"
              size="1rem"
            /><b>{{ $t("services.panning.trade_mark") }}</b>
          </p>
        </div>

        <!------------------sevice tow ------------------->
        <div class="col-6 justify-center text-center m-b">
          <h2>{{ $t("services.design.title") }}</h2>
          <p>
            <q-icon name="fa-brands fa-black-tie" color="green" size="1rem" /><b
              >{{ $t("services.content_writing.title") }}</b
            >
            <br />
            <q-icon name="fa-brands fa-black-tie" color="green" size="1rem" /><b
              >{{ $t("services.content_writing.slogen") }}</b
            >
            <br />
            <q-icon name="fa-brands fa-black-tie" color="green" size="1rem" /><b
              >{{ $t("services.content_writing.profile") }}</b
            >
            <br />
            <q-icon name="fa-brands fa-black-tie" color="green" size="1rem" /><b
              >{{ $t("services.content_writing.website") }}</b
            >
            <br />
            <q-icon name="fa-brands fa-black-tie" color="green" size="1rem" /><b
              >{{ $t("services.content_writing.presentations") }}</b
            >
            <br />
            <q-icon name="fa-brands fa-black-tie" color="green" size="1rem" /><b
              >{{ $t("services.content_writing.marketing") }}</b
            >
          </p>
        </div>
      </div>
      <!------------------sevice three ------------------->
      <div class="row stify-center border-rad items-center">
        <div class="col-6 justify-center text-center">
          <h2>{{ $t("services.video.title") }}</h2>
          <p>
            <q-icon name="fa-solid fa-marker" color="green" size="1rem" /><b>{{
              $t("services.video.title")
            }}</b>
            <br />
            <q-icon name="fa-solid fa-marker" color="green" size="1rem" /><b>{{
              $t("services.video.product")
            }}</b>
            <br />
            <q-icon name="fa-solid fa-marker" color="green" size="1rem" /><b>{{
              $t("services.video.offices")
            }}</b>
            <br />
            <q-icon name="fa-solid fa-marker" color="green" size="1rem" /><b>{{
              $t("services.video.employees")
            }}</b>
            <br />
            <q-icon name="fa-solid fa-marker" color="green" size="1rem" /><b>{{
              $t("services.video.event")
            }}</b>
            <br />
            <q-icon name="fa-solid fa-marker" color="green" size="1rem" /><b>{{
              $t("services.video.workshop")
            }}</b>
            <br />
            <q-icon name="fa-solid fa-marker" color="green" size="1rem" /><b>{{
              $t("services.video.participations")
            }}</b>
            <br />
          </p>
        </div>
        <!------------------sevice four ------------------->

        <div class="col-6 justify-center text-center m-b">
          <h2>{{ $t("services.services") }}</h2>
          <span>{{ $t("services.slogen") }}</span>
          <p>
            <q-icon name="fa-solid fa-fill" color="green" size="1rem" /><b>{{
              $t("panning.title")
            }}</b>
            <br />
            <q-icon name="fa-solid fa-fill" color="green" size="1rem" /><b>{{
              $t("panning.marketing")
            }}</b>
            <br />
            <q-icon name="fa-solid fa-fill" color="green" size="1rem" /><b>{{
              $t("panning.communication")
            }}</b>
            <br />
            <q-icon name="fa-solid fa-fill" color="green" size="1rem" /><b>{{
              $t("panning.trade_mark")
            }}</b>
          </p>
        </div>
      </div>
    </div>
  </section>
</template>
<script>
import { defineComponent } from "vue";

export default defineComponent({
  name: "section-1",
  components: {},
});
</script>
<style lang="scss" scoped>
.services-header {
  text-align: center;
  font-weight: 800;
  font-family: "Cairo", sans-serif;
  font-size: 3.5rem;
  line-height: 0;
  color: $primary;
  position: relative;
  height: 50px;
  &::after {
    content: "";
    position: absolute;
    bottom: -20%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 40%;
    height: 4px;
    background-color: $accent;
    border-radius: 80px;
  }
}
// .col-6 {
//   min-height: 50vh;
// }
// h2 {
//   font-size: 2rem;
//   font-weight: 700;
// }
// p {
//   font-size: 1rem;
// }
// .services {
// width: 100%;
//   height: 100vh;
//   width: 100%;
//   background-image: url(/nat-4.jpg);
//   background-position: center;
//   background-size: cover;
//   overflow: hidden;
// }
// .border-rad {
// font-size: 0.5rem;
// align-items: center;
// color: $primary;
// margin: auto;
// text-align: center;

// .col-6 {
//   width: 50%;
//   height: 80% !important;
//   background-color: aqua;
//   margin: auto !important;
// width: 40% !important;
// height: 35vh !important;
// margin: auto;
// }
// }

// .right-butt {
//   justify-content: end !important;

//   display: flex;
//   flex-direction: column;
//   align-items: flex-end !important;
//   text-align: right !important;
//   padding-right: 50px;
// }
// .left-butt {
//   justify-content: end !important;
//   align-items: flex-start !important;
//   text-align: left !important;
//   padding-left: 50px;
//   h2 {
//     font-size: 2rem;
//     font-weight: 700 !important;
//     display: block;
//     width: 30%;
//   }

//   display: flex;
//   flex-direction: column;
//   align-items: center;
// }

// .right-top {
//   display: flex;
//   justify-content: start !important;
//   align-items: flex-end !important;
//   text-align: right !important;
//   flex-direction: column;
//   padding-right: 40px;
//   line-height: 1.3rem;
// }
// .left-top {
//   justify-content: start !important;
//   align-items: flex-start !important;
//   display: flex;
//   flex-direction: column;
//   align-items: left;
//   padding-left: 40px;
// }
// .right-butt,
// .left-top,
// .right-top,
// .left-butt {
//   padding-bottom: 49px;
//   background: #f9f5f2bd;
//   max-width: 100%;
//   line-height: 1.3rem;
//   h2 {
//     font-size: 1.5rem;
//     font-weight: bolder !important;
//     display: block;
//     width: 30%;
//     line-height: 2.2rem;
//     position: relative;
//     // &::after {
//     //   content: "";
//     //   position: absolute;
//     //   bottom: -20%;
//     //   left: 50%;
//     //   width: 50%;
//     //   height: 3px;
//     //   background-color: #000;
//     // }
//   }
// }
// .left-top,
// .left-butt {
//   h2 {
//     &::after {
//       content: "";
//       position: absolute;
//       bottom: -20%;
//       right: 50%;
//       width: 50%;
//       height: 3px;
//       background-color: $secondary;
//     }
//   }
// }
// .right-top,
// .right-butt {
//   h2 {
//     &::after {
//       content: "";
//       position: absolute;
//       bottom: -20%;
//       left: 50%;
//       width: 50%;
//       height: 3px;
//       background-color: $secondary;
//     }
//   }
// }

// @media screen and (max-width: 950px) and (min-width: 300px) {
//   .services {
//     display: flex;
//     flex-direction: column;
//     height: 100% !important;
//     width: 100% !important;
//     position: relative;

//     .border-rad {
//       width: auto;
//       height: auto;
//       font-size: 1rem;
//       align-items: center;
//       clip-path: ellipse(26% 50% at 50% 50%);
//       position: absolute;
//       top: 50%;
//       left: 50%;
//       transform: translate(-50%, -50%);
//       color: $primary;
//     }
//     .col-6 {
//       display: flex !important;
//       flex-direction: column !important;
//       max-width: 100%;
//     }
//   }
// }
.services {
  padding: 7rem 0;
  background-image: url(/serv.jpg);
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  .col-6 {
    width: 40%;
    height: 400px !important;
    margin: auto;
    font-size: 1.2rem;
    background-image: url(/slider/2.jpg);
    opacity: 0.7;
    margin: 1rem 1rem;
    color: $primary;
    text-align: left;
    padding-left: 2rem;
    h2 {
      font-size: 1.7rem;
      font-weight: 700;
      position: relative;
      line-height: 2.1rem;
      &::after {
        content: "";
        position: absolute;
        bottom: -30%;
        left: 0;
        width: 30%;
        height: 4px;
        background-color: $accent;
        border-radius: 80px;
      }
    }
    p b {
      font-size: 1.1rem;
      line-height: 2.1rem;
    }
    &:hover {
      transition: all 0.6s ease-in-out;
      opacity: 0.9;
      transform: translate(0, -5px);
      box-shadow: 1px 1px 2px $secondary;
    }
  }
}
@media screen and (max-width: 950px) and (min-width: 300px) {
  .row {
    display: flex;
    flex-direction: column;
    .col-6 {
      width: 90%;
      max-width: 2rem auto;
      border-radius: 1px;
      height: auto !important;
      box-shadow: 2px 2px 3px 3px #000;
      padding: 1rem;
    }
  }
}
</style>

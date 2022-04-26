<template>
  <div class="linee"></div>
  <section id="package" class="sc">
    <div class="container">
      <h2 class="package-header">{{ $t("packages.title") }}</h2>
      <div class="row text-center justify-around">
        <!------------------package-1-------------------->
        <div class="col-xl-4 -xol-lg-6 lt-lg-col-12 card-1 row items-center">
          <div class="card-1__header text-center">
            <!-- <span>
              <q-icon
                name="fa-solid fa-circle-dollar"
                color="white"
                size="1rem" />

                </span> -->
            <span> {{ $t("packages.package_1.price") }}ريال </span>
            <h2>{{ $t("packages.package_1.title") }}</h2>
          </div>
          <div class="card-1__body">
            <p>
              <q-icon
                name="fa-solid fa-circle-check"
                color="green"
                size="1rem"
              /><b>{{ $t("packages.package_1.item1") }}</b> <br />
              <q-icon
                name="fa-solid fa-circle-check"
                color="green"
                size="1rem"
              /><b>{{ $t("packages.package_1.item2") }}</b> <br />
              <q-icon
                name="fa-solid fa-circle-check"
                color="green"
                size="1rem"
              /><b>{{ $t("packages.package_1.item3") }}</b> <br />
              <q-icon
                name="fa-solid fa-circle-check"
                color="green"
                size="1rem"
              /><b>{{ $t("packages.package_1.item4") }}</b> <br />
              <q-icon
                name="fa-solid fa-circle-check"
                color="green"
                size="1rem"
              /><b>{{ $t("packages.package_1.item5") }}</b> <br />
              <q-icon
                name="fa-solid fa-circle-check"
                color="green"
                size="1rem"
              /><b>{{ $t("packages.package_1.item6") }}</b> <br />
              <q-icon
                name="fa-solid fa-circle-check"
                color="green"
                size="1rem"
              /><b>{{ $t("packages.package_1.item7") }}</b> <br />
            </p>
          </div>
          <q-btn
            push
            color="white"
            text-color="primary"
            :label="
              this.checkLogin
                ? $t('packages.package_1.button[0]')
                : $t('packages.package_1.button[1]')
            "
            class="q-mx-* but-1"
            size="1rem"
            @click="getPackage('1')"
          />
        </div>
        <!------------------package-2-------------------->
        <div class="col-xl-4 -xol-lg-6 lt-lg-col-12 card-2 items-center">
          <div class="card-2__header">
            <span> {{ $t("packages.package_1.price") }}ريال </span>
            <h2>{{ $t("packages.package_2.title") }}</h2>
          </div>
          <div class="card-2__body">
            <p>
              <q-icon
                name="fa-solid fa-circle-check"
                color="green"
                size="1rem"
              />
              <b> {{ $t("packages.package_2.item1") }}</b>
              <br />
              <q-icon
                name="fa-solid fa-circle-check"
                color="green"
                size="1rem"
              />
              <b> {{ $t("packages.package_2.item2") }}</b>
              <br />
              <q-icon
                name="fa-solid fa-circle-check"
                color="green"
                size="1rem"
              />
              <b> {{ $t("packages.package_2.item3") }}</b>
              <br />
              <q-icon
                name="fa-solid fa-circle-check"
                color="green"
                size="1rem"
              />
              <b> {{ $t("packages.package_2.item4") }}</b>
              <br />
              <q-icon
                name="fa-solid fa-circle-check"
                color="green"
                size="1rem"
              />
              <b> {{ $t("packages.package_2.item5") }}</b>
              <br />
              <q-icon
                name="fa-solid fa-circle-check"
                color="green"
                size="1rem"
              />
              <b> {{ $t("packages.package_2.item6") }}</b>
              <br />
              <q-icon
                name="fa-solid fa-circle-check"
                color="green"
                size="1rem"
              />
              <b> {{ $t("packages.package_2.item7") }}</b>
              <br />
              <q-icon
                name="fa-solid fa-circle-check"
                color="green"
                size="1rem"
              />
              <b> {{ $t("packages.package_2.item8") }}</b>
            </p>
          </div>
          <q-btn
            push
            color="white"
            text-color="primary"
            :label="
              this.checkLogin
                ? $t('packages.package_2.button[0]')
                : $t('packages.package_2.button[1]')
            "
            size="1rem"
            class="q-mt-lg but-2"
            @click="getPackage('2')"
          />
        </div>
        <!-- /////////////////////////////////////////---------------->

        <!------------------package-3-------------------->
      </div>
    </div>
  </section>
</template>
<script>
import { Cookies, useQuasar } from "quasar";
import { defineComponent } from "vue";
export default defineComponent({
  name: "PackaCerd",
  components: {},
  methods: {
    getPackage(packageNum) {
      // window.open("website domain")
      Cookies.set("packageNumber", packageNum, { expires: "1d" });
    },
  },
  computed: {
    checkLogin() {
      return this.$store.state.setting.logedin;
    },
  },
});
</script>

<style lang="scss" scoped>
.linee {
  background-color: $accent;
  opacity: 0.8;
  width: 100%;
  height: 5px;
  position: sticky !important;
  top: 0 !important;
  z-index: 1111111;
}
.package-header {
  text-align: center;
  text-transform: capitalize;
  font-size: 4rem;
  padding-bottom: 10px;
  font-weight: 500;
  margin-top: 20px;
  position: relative;
  &::after {
    content: "";
    position: absolute;
    bottom: -20%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 30%;
    height: 4px;
    background-color: $accent;
    border-radius: 80px;
  }
}
.packages-con {
}
.sc {
  background-image: url(/packages.png);
  padding: 5rem 0;
  transition: all 0.4s ease-in-out;

  .card-1,
  .card-2 {
    background-color: #fff;
    opacity: 0.6;
    position: relative;
    height: auto;
    padding: 2rem;
    text-align: center;
    transition: all 0.4s ease-in-out;
    width: 30%;
    border: none !important;
    outline: none;
    box-shadow: 1px 1px 5px 2px #ddd;
    border: 1px solid #777 !important;
    border-radius: 20px;
    &__header {
      margin: auto !important;
      width: 90% !important;
      span {
        font-size: 2rem;
        padding: 0 2rem;
        font-weight: normal;
        letter-spacing: 5px;
        color: $primary;
      }
      h2 {
        font-size: 2rem;
        font-weight: 700;
        display: block;
        width: 100%;
        height: 100%;
        color: $primary;
        letter-spacing: 0.2rem;
      }
    }

    &__body {
      transition: all 0.4s ease-in-out;
      padding: 10px;
      background-color: rgba(255, 255, 255, 0.925);
      text-align: center;
      line-height: 2rem !important;
      font-size: 3rem;
      margin: auto;
      width: 100%;
      color: $primary;

      p {
        font-size: 1rem !important;
        text-align: left !important;
        b {
          margin-left: 0.6rem;
        }
      }
      span {
        font-size: 10px;
      }
    }
    &::before {
      content: "";
      position: absolute;
      background-color: #fff;
      width: 15%;
      height: 5px;
      top: 15px;
      left: 50%;
      transform: translate(-50%, -50%);
    }
    &::after {
      content: "";
      position: absolute;
      background-color: #fff;
      width: 15%;
      height: 5px;
      bottom: 10px;
      left: 50%;
      transform: translate(-50%, -50%);
    }
    &:hover {
      transition: all 0.6s ease-in-out;
      h2 {
        color: #00609c !important;
      }
      .card-1__body,
      .card-2__body {
        transform: translateY(-20px);
      }
      .but-1,
      .but-2 {
        background: $primary !important;
        color: #fff !important;
        font-weight: 700 !important;
      }
      span {
        border: 1px solid #00609c;
        border-radius: 10px;
      }
    }
  }
}
.glossy {
  width: 100% !important;
  height: 100% !important;
}
.but-1 {
  margin: auto !important;
}
// .flip-card {
//   background-color: transparent;
//   width: 25rem;
//   height: 40rem;
//   perspective: 1000px;
//   font-style: italic;
//   h1 {
//     font-family: NavFont;
//     color: rgb(34, 34, 34);
//     font-size: 4rem;
//   }
// }

// /* This container is needed to position the front and back side */
// .flip-card-inner {
//   position: relative;
//   margin: auto;
//   width: 90%;
//   height: 90%;
//   padding: 3rem;
//   text-align: center;
//   transition: transform 0.8s;
//   transform-style: preserve-3d;
//   text-align: center;
//   padding: 0;
// }

// /* Do an horizontal flip when you move the mouse over the flip box container */
// .flip-card:hover .flip-card-inner {
//   transform: rotateY(180deg);
// }

// /* Position the front and back side */
// .flip-card-front,
// .flip-card-back {
//   position: absolute;
//   width: 100%;
//   height: 100%;
//   -webkit-backface-visibility: hidden; /* Safari */
//   backface-visibility: hidden;
// }

// /* Style the front side (fallback if image is missing) */
// .flip-card-front {
//   margin: auto;
//   padding: 0;
//   width: 100%;
//   height: 100%;
//   background-color: $sucColor;
//   color: black;
//   border-radius: 20px;
//   border: 1px solid #ddd;
//   padding: 0;
//   .show-details {
//     display: none;
//   }
//   h1 {
//     position: relative;
//     &::after {
//       content: "";
//       position: absolute;
//       width: 100%;
//       height: 3px;
//       bottom: -10%;
//       left: 0%;
//       background: linear-gradient(to right, $maincolor, #000);
//     }
//     &::before {
//       content: "";
//       position: absolute;
//       width: 100%;
//       height: 3px;
//       top: -10%;
//       left: 0%;
//       background: linear-gradient(to right, #000, $maincolor);
//     }
//   }
// }

// /* Style the back side */
// .flip-card-back {
//   background-color: $maincolor;
//   color: #000;
//   transform: rotateY(180deg);
//   border-radius: 20px;
//   margin: auto;
//   .body {
//     font-size: 1.3rem;
//     font-weight: 400;
//     text-align: left;
//     margin: auto;
//     margin: 10% 6% 0 !important;
//     p {
//       position: relative;
//       line-height: 2rem;

//       &::after {
//         content: "";
//         position: absolute;
//         width: 100%;
//         height: 1px;
//         top: 120%;
//         right: 0%;
//         background-color: #ddd;
//       }
//     }
//   }
// }
// .sc {
//   width: 100%;
//   margin: 5rem auto;
// }

// .row {
//   justify-content: space-around !important;
// }
// .div-but {
//   text-align: center;
//   margin-top: 50px;
//   display: flex;
//   justify-content: center;
//   .edd-but {
//     background-color: $maincolor !important;
//     color: rgb(31, 31, 31) !important;
//     width: 50% !important;
//     height: 60px !important;
//     border-radius: 15px;
//     font-weight: bolder;
//     &:hover {
//       transition: all 0.4s ease-in-out;
//       border: 1px solid #000;
//       background-color: $sucColor !important;
//       color: #000;
//     }
//   }
// }
// .package-header {
//   text-align: center;
//   margin: auto;
//   position: relative;
//   width: 10%;

//   &::after {
//     content: "";
//     position: absolute;
//     width: 100%;
//     height: 3px;
//     bottom: -10%;
//     left: 0%;
//     background: linear-gradient(to right, $maincolor, #000);
//   }
// }
// @media screen and (max-width: 800px) and (min-width: 300px) {
//   .flip-card-front {
//     h1 {
//       position: relative;
//       font-size: 2rem;
//       &::after {
//         content: "";
//         position: absolute;
//         width: 100%;
//         height: 3px;
//         bottom: -10%;
//         left: 0;
//         background: linear-gradient(to right, rgba(0, 0, 0, 0.722), $sucColor);
//       }
//     }
//     .show-details {
//       display: block;
//       margin: 0 auto 1rem;
//       width: 60%;
//       height: 10%;
//       border-radius: 15px;
//       font-weight: bold;
//       background-color: #cb8a49;
//       border: none;
//       color: $sucColor;
//       font-family: NavFont;
//       font-size: 1.6rem;
//       border: 1px solid rgba(0, 0, 0, 0.66);
//       animation: leaves 0.8s ease-in-out infinite;
//       text-shadow: 1px 1px 1px #000;
//     }
//   }
//   .flip-card-back {
//   }
// }

// @keyframes leaves {
//   0% {
//     transform: scale(1);
//     -webkit-transform: scale(1);
//   }
//   100% {
//     transform: scale(1.05);
//     -webkit-transform: scale(1.05);
//   }
// }

@media screen and (max-width: 800px) and (min-width: 300px) {
  .row {
    display: flex;
    flex-direction: column;
    .card-1,
    .card-2 {
      width: 80%;
      height: auto;
      margin: 1rem auto;
      &:hover {
        transition: all 0.6s ease-in-out;
        background-color: #fff;
        color: #fff;
        h2 {
          color: #fff !important;
        }
        .card-1__body,
        .card-2__body {
          transform: none;
          box-shadow: none;
        }
        .but-1,
        .but-2 {
          background: #fff !important;
          color: $primary !important;
          font-weight: 700 !important;
        }
        span {
          background: linear-gradient(to right, #fab338, #e9e1d4);
          color: #fff;
        }
      }
    }
  }
  .but-1 {
    margin-top: 1rem !important;
    width: 100%;
    height: 3rem;
    font-size: 1.1rem;
    font-weight: bolder;
  }
  .but-2 {
    width: 100%;
    height: 3rem;
    font-size: 1.1rem;
    font-weight: bolder;
  }
  .package-header {
    font-size: 3.5rem;
    padding-bottom: 5px;
    font-weight: 500;
    position: relative;
    &::after {
      width: 50%;
    }
  }
}
</style>

<template>
  <section class="sc">
    <div class="container">
      <div class="row text-center justify-around">
        <!------------------package-1-------------------->
        <div class="col-xl-6 -xol-lg-6 lt-lg-col-12">
          <h2>{{ $t("packages.package_1.title") }}</h2>
          <p>
            <b>{{ $t("packages.package_1.item1") }}</b>
            <b>{{ $t("packages.package_1.item2") }}</b>
            <b>{{ $t("packages.package_1.item3") }}</b>
            <b>{{ $t("packages.package_1.item4") }}</b>
            <b>{{ $t("packages.package_1.item5") }}</b>
            <b>{{ $t("packages.package_1.item6") }}</b>
            <b>{{ $t("packages.package_1.item7") }}</b>
          </p>
          <span>{{ $t("packages.package_1.price") }}</span>
        </div>
        <!------------------package-2-------------------->
        <div class="col-xl-6 -xol-lg-6 lt-lg-col-12">
          <h2>{{ $t("packages.package_2.title") }}</h2>
          <p>
            <b>{{ $t("packages.package_2.item1") }}</b>
            <b>{{ $t("packages.package_2.item2") }}</b>
            <b>{{ $t("packages.package_2.item3") }}</b>
            <b>{{ $t("packages.package_2.item4") }}</b>
            <b>{{ $t("packages.package_2.item5") }}</b>
            <b>{{ $t("packages.package_2.item6") }}</b>
            <b>{{ $t("packages.package_2.item7") }}</b>
            <b>{{ $t("packages.package_2.item8") }}</b>
          </p>
          <span>{{ $t("packages.package_2.price") }}</span>
        </div>
        <!------------------package-3-------------------->
      </div>
    </div>
  </section>
</template>
<script>
import { defineComponent } from "vue";
export default defineComponent({
  name: "PackaCerd",
  components: {},
});
</script>

<style lang="scss" scoped>
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
</style>

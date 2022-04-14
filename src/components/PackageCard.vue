
 <template>
  <section class="section-tours" id="section-tours">
                <div class="u-center-text u-margin-bottom-big">
                    <h2 class="heading-secondary">
                        Most popular tours
                    </h2>
                </div>

                <div class="row">
                    <div class="col-1-of-3">
                       <div class="card">
                           <div class="card__side card__side--front">
                                <div class="card__picture card__picture--1">
                                    &nbsp;
                                </div>
                                <h4 class="card__heading">
                                    <span class="card__heading-span card__heading-span--1">The Sea Explorer</span>
                                </h4>
                                <div class="card__details">
                                    <ul>
                                        <li>3 day tours</li>
                                        <li>Up to 30 people</li>
                                        <li>2 tour guides</li>
                                        <li>Sleep in cozy hotels</li>
                                        <li>Difficulty: easy</li>
                                    </ul>
                                </div>
                           </div>
                           <div class="card__side card__side--back card__side--back-1">
                                <div class="card__cta">
                                    <div class="card__price-box">
                                        <p class="card__price-only">Only</p>
                                        <p class="card__price-value">$297</p>
                                    </div>
                                    <a href="#popup" class="btn btn--white">Book now!</a>
                                </div>
                            </div>
                       </div>
                    </div>


                    <div class="col-1-of-3">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture--2">
                                    &nbsp;
                                </div>
                                <h4 class="card__heading">
                                    <span class="card__heading-span card__heading-span--2">The Forest Hiker</span>
                                </h4>
                                <div class="card__details">
                                    <ul>
                                        <li>7 day tours</li>
                                        <li>Up to 40 people</li>
                                        <li>6 tour guides</li>
                                        <li>Sleep in provided tents</li>
                                        <li>Difficulty: medium</li>
                                    </ul>
                                </div>

                            </div>
                            <div class="card__side card__side--back card__side--back-2">
                                <div class="card__cta">
                                    <div class="card__price-box">
                                        <p class="card__price-only">Only</p>
                                        <p class="card__price-value">$497</p>
                                    </div>
                                    <a href="#popup" class="btn btn--white">Book now!</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-1-of-3">
                        <div class="card">
                            <div class="card__side card__side--front">
                                <div class="card__picture card__picture--3">
                                    &nbsp;
                                </div>
                                <h4 class="card__heading">
                                    <span class="card__heading-span card__heading-span--3">The Snow Adventurer</span>
                                </h4>
                                <div class="card__details">
                                    <ul>
                                        <li>5 day tours</li>
                                        <li>Up to 15 people</li>
                                        <li>3 tour guides</li>
                                        <li>Sleep in provided tents</li>
                                        <li>Difficulty: hard</li>
                                    </ul>
                                </div>

                            </div>
                            <div class="card__side card__side--back card__side--back-3">
                                <div class="card__cta">
                                    <div class="card__price-box">
                                        <p class="card__price-only">Only</p>
                                        <p class="card__price-value">$897</p>
                                    </div>
                                    <a href="#popup" class="btn btn--white">Book now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="u-center-text u-margin-top-huge">
                    <a href="#" class="btn btn--green">Discover all tours</a>
                </div>
            </section>
            </template>
            <script>
import { defineComponent } from "vue";
export default defineComponent({
  name: "package",
  components: {},
});
</script>


 <style lang="scss" scoped>
 $color-primary: #55c57a;
 $color-primary-light: #7ed56f;
 $color-primary-dark: #28b485;

 $color-secondary-light: #ffb900;
 $color-secondary-dark: #ff7730;

 $color-tertiary-light: #2998ff;
 $color-tertiary-dark: #5643fa;

 $color-grey-light-1: #f7f7f7;
 $color-grey-light-2: #eee;

 $color-grey-dark: #777;
 $color-grey-dark-2: #999;
 $color-grey-dark-3: #333;

 $color-white: #fff;
 $color-black: #000;


 // FONT
 $default-font-size: 1.6rem;


 // GRID
 $grid-width: 114rem;
 $gutter-vertical: 8rem;
 $gutter-vertical-small: 6rem;
 $gutter-horizontal: 6rem;
 .row {
   max-width: $grid-width;
   margin: 0 auto;

   &:not(:last-child) {
     margin-bottom: $gutter-vertical;

   }



   [class^="col-"] {
     float: left;

     &:not(:last-child) {
       margin-right: $gutter-horizontal;


     }


   }

   .col-1-of-2 {
     width: calc((100% - #{$gutter-horizontal}) / 2);

   }

   .col-1-of-3 {
     width: calc((100% - 2 * #{$gutter-horizontal}) / 3);
   }

   .col-2-of-3 {
     width: calc(2 * ((100% - 2 * #{$gutter-horizontal}) / 3) + #{$gutter-horizontal});
   }

   .col-1-of-4 {
     width: calc((100% - 3 * #{$gutter-horizontal}) / 4);
   }

   .col-2-of-4 {
     width: calc(2 * ((100% - 3 * #{$gutter-horizontal}) / 4) + #{$gutter-horizontal});
   }

   .col-3-of-4 {
     width: calc(3 * ((100% - 3 * #{$gutter-horizontal}) / 4) + 2 * #{$gutter-horizontal});
   }

 }
 .section-tours {
   background-color: $color-grey-light-1;
   padding: 25rem 0 15rem 0;
   margin-top: -10rem;


 }

 .section-stories {
   position: relative;
   padding: 15rem 0;


 }

 .section-book {
   padding: 15rem 0;
   background-image: linear-gradient(to right bottom, $color-primary-light, $color-primary-dark);


 }
 .card {

   // FUNCTIONALITY
   perspective: 150rem;
   -moz-perspective: 150rem;
   position: relative;
   height: 52rem;

   &__side {
     height: 52rem;
     transition: all .8s ease;
     position: absolute;
     top: 0;
     left: 0;
     width: 100%;
     -webkit-backface-visibility: hidden;
     backface-visibility: hidden;
     border-radius: 3px;
     overflow: hidden;
     box-shadow: 0 1.5rem 4rem rgba($color-black, .15);

     &--front {
       background-color: $color-white;
     }

     &--back {
       transform: rotateY(180deg);

       &-1 {
         background-image: linear-gradient(to right bottom, $color-secondary-light, $color-secondary-dark);
       }

       &-2 {
         background-image: linear-gradient(to right bottom, $color-primary-light, $color-primary-dark);
       }

       &-3 {
         background-image: linear-gradient(to right bottom, $color-tertiary-light, $color-tertiary-dark);
       }
     }
   }


   &:hover &__side--front {
     transform: rotateY(-180deg);
   }

   &:hover &__side--back {
     transform: rotateY(0);
   }


   // FRONT SIDE STYLING
   &__picture {
     background-size: cover;
     height: 23rem;
     background-blend-mode: screen;
     -webkit-clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
     clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
     border-top-left-radius: 3px;
     border-top-right-radius: 3px;

     &--1 {
       background-image: linear-gradient(to right bottom, $color-secondary-light, $color-secondary-dark),
       url("https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=764,h=624,fit=scale-down/dovilelxpfw/img-mnllKKGWbPub6RLL.jpg");
     }

     &--2 {
       background-image: linear-gradient(to right bottom, $color-primary-light, $color-primary-dark),
       url("https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=764,h=624,fit=scale-down/dovilelxpfw/img-mnllKKGWbPub6RLL.jpg");
     }

     &--3 {
       background-image: linear-gradient(to right bottom, $color-tertiary-light, $color-tertiary-dark),
       url("https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=764,h=624,fit=scale-down/dovilelxpfw/img-mnllKKGWbPub6RLL.jpg");
     }
   }

   &__heading {
     font-size: 2.8rem;
     font-weight: 300;
     text-transform: uppercase;
     text-align: right;
     color: $color-white;
     position: absolute;
     top: 12rem;
     right: 2rem;
     width: 75%;

   }

   &__heading-span {
     padding: 1rem 1.5rem;
     -webkit-box-decoration-break: clone;
     box-decoration-break: clone;

     &--1 {
       background-image: linear-gradient(to right bottom,
         rgba($color-secondary-light, .85),
         rgba($color-secondary-dark, .85));
     }

     &--2 {
       background-image: linear-gradient(to right bottom,
         rgba($color-primary-light, .85),
         rgba($color-primary-dark, .85));
     }

     &--3 {
       background-image: linear-gradient(to right bottom,
         rgba($color-tertiary-light, .85),
         rgba($color-tertiary-dark, .85));
     }
   }

   &__details {
     padding: 3rem;

     ul {
       list-style: none;
       width: 80%;
       margin: 0 auto;

       li {
         text-align: center;
         font-size: 1.5rem;
         padding: 1rem;

         &:not(:last-child) {
           border-bottom: 1px solid $color-grey-light-2;
         }
       }
     }
   }

   // FRONT SIDE STYLING
   &__cta {
     position: absolute;
     top: 50%;
     left: 50%;
     transform: translate(-50%, -50%);
     width: 90%;
     text-align: center;
   }

   &__price-box {
     text-align: center;
     color: $color-white;
     margin-bottom: 8rem;
   }

   &__price-only {
     font-size: 1.4rem;
     text-transform: uppercase;
   }

   &__price-value {
     font-size: 6rem;
     font-weight: 100;
   }





   //@include respond(tab-port) {
   @media only screen and (max-width: 56.25em),
   only screen and (hover: none) {

     height: auto;
     border-radius: 3px;
     background-color: $color-white;
     box-shadow: 0 1.5rem 4rem rgba($color-black, .15);

     &__side {
       height: auto;
       position: relative;
       box-shadow: none;

       &--back {
         transform: rotateY(0);
         clip-path: polygon(0 15%, 100% 0, 100% 100%, 0% 100%);
       }
     }

     &:hover &__side--front {
       transform: rotateY(0);
     }


     &__details {
       padding: 1rem 3rem;
     }

     // FRONT SIDE STYLING
     &__cta {
       position: relative;
       top: 0%;
       left: 0;
       transform: translate(0);
       width: 100%;
       padding: 7rem 4rem 4rem 4rem;
     }

     &__price-box {
       margin-bottom: 3rem;
     }

     &__price-value {
       font-size: 4rem;
     }
   }

 }
 </style>

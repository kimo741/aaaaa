<template>
  <div class="about-section overflow-hidden">
      <img class="chip _L" src="/c-1-2.png" />
      <img class="chip _R" src="/c-1.png" />
    <div class=" container">
      <div class="text-h2 text-primary text-center caption" >
        {{ $t('services.partners.body') }}
      </div>
      <div class="row justify-center about q-my-xl">

        <div  class="col-12 col-md-6 row q-pa-none">
          <div  class="col-12 q-pa-md q-pl-none">
            <q-card :style="'background: url(about/1.jpg)'" class="about-card _V">
              <div class="absolute-bottom q-ma-md card-info text-primary">
                <img src="slider/2.jpg" class="bg_image" />
                <div class="text-h4 title">{{ this.$t('about.vision') }}<span class="underline bg-accent"></span></div>
                <div class="text-h6 body">{{ this.$t('about.vision_body') }}</div>
              </div>
            </q-card>
          </div>
          <div class="col-12  q-pa-md q-pl-none">
            <q-card :style="'background: url(about/2.jpg)'" class="about-card _V">
              <div class="absolute-bottom q-ma-md card-info text-primary">
                <img src="slider/2.jpg" class="bg_image" />
                <div class="text-h4 title">{{ this.$t('about.mission') }}<span class="underline bg-accent"></span></div>
                <div class="text-h6 body">{{ this.$t('about.mission_body') }}</div>
              </div>
            </q-card>
          </div>
        </div>

        <div :style="!$q.screen.lt.md ? 'width: calc(100% / 2)' : ''" class="col-12 col-md-6 q-pa-md">
          <q-card :style="'background: url(about/3.jpg)'" class="about-card _H">
            <div class="absolute-bottom q-ma-md card-info text-primary">
              <img src="slider/2.jpg" class="bg_image" />

              <div class="text-h4 title">
                {{ this.$t('about.ourValue') }}
                <span class="underline bg-accent"></span>
              </div>
              <q-list>
                <q-item>
                  <q-item-section>
                    <q-item-label class="text-h4 list-title">{{ this.$t('about.support') }}</q-item-label>
                    <q-item-label class="text-h6 body" lines="2">{{ this.$t('about.support_body') }}</q-item-label>
                  </q-item-section>
                </q-item>
                <q-item>
                  <q-item-section>
                    <q-item-label class="text-h4 list-title">{{ this.$t('about.passion') }}</q-item-label>
                    <q-item-label class="text-h6 body" lines="2">{{ this.$t('about.passion_body') }}</q-item-label>
                  </q-item-section>
                </q-item>
                <q-item>
                  <q-item-section>
                    <q-item-label class="text-h4 list-title">{{ this.$t('about.dedication') }}</q-item-label>
                    <q-item-label class="text-h6 body" lines="2">{{ this.$t('about.dedication_body') }}</q-item-label>
                  </q-item-section>
                </q-item>
                <q-item>
                  <q-item-section>
                    <q-item-label class="text-h4 list-title">{{ this.$t('about.Sincerity') }}</q-item-label>
                    <q-item-label class="text-h6 body" lines="2">{{ this.$t('about.Sincerity_body') }}</q-item-label>
                  </q-item-section>
                </q-item>
              </q-list>

            </div>
          </q-card>
        </div>
      </div>
    </div>
  </div>
</template>

<script>

export default {
  data() {
    return {
      aboutUs: [
        {
          img: 'about/2.jpg',
          title: this.$t('about.vision'),
          value: this.$t('about.vision_body')
        },
        {
          img: 'about/3.jpg',
          title: this.$t('about.mission'),
          value: this.$t('about.mission_body')
        },
      ]
    }
  }
}
</script>


<style lang="scss" scoped>
.about-section {
  .chip {
    position: absolute;
    transform: rotate(110deg);
    direction: ltr;
  }
  ._L {
    left: -15em !important;
    width: 21em;
  }
  ._R {
    width: 32em;
    left: -15em;
  }
}
.container {
  zoom: 78%;
  .caption {
    margin: 3em 0 2em 0;
    line-height: 1.5;
  }
  .about {
    ._V {
      min-height: 50vh !important;
    }
    ._H {
      min-height: calc(100vh + 32px);
    }
    .about-card {
      background-size: cover !important;
      background-position: center !important;

      .card-info {
        background-color: rgba(255, 255, 255, 0.9019607843137255);
        padding: 30px;
        margin: 30px;
        z-index: 0;
        .title {
          z-index: 1;
          font-size: 40px;
          font-weight: 700;

          .underline {
            width: 7%;
            height: 3px;
            background: #313131;
            display: inherit;
            margin: 20px 0;
          }
        }

        .list-title {
          font-size: 1.4rem;
          font-weight: 600;
        }

        .body {
          line-height: 2.9rem !important;
          font-weight: 300
        }
      }
      .card-info .bg_image {
        z-index: -1;
        display: block;
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        opacity: 0.4;
        background-repeat: no-repeat;
        background-position: 50% 0;
        background-size: cover;
      }
    }
  }
}
</style>

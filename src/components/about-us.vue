<template>
  <div class=" container">
    <div class="row justify-center about q-my-xl">
      <div class="col-12  q-pa-md" :style="!$q.screen.lt.md ? 'width: calc(100% / 1)' : ''">
        <q-card class="about-card" :style="'background: url(about/1.jpg)'">
            <div class="absolute-bottom q-ma-md card-info text-primary">
              <div class="text-h4 title">{{ this.$t('about.vision') }}<span class="underline bg-accent"></span></div>
              <div class="text-h6 body">{{ this.$t('about.vision_body') }}</div>
            </div>
        </q-card>
      </div>
      <div class="col-12 col-sm-6  col-md-4 col-lg-3 q-pa-md" :style="!$q.screen.lt.md ? 'width: calc(100% / 2)' : ''">
        <q-card class="about-card" :style="'background: url(about/2.jpg)'">
            <div class="absolute-bottom q-ma-md card-info text-primary">
              <div class="text-h4 title">{{ this.$t('about.mission') }}<span class="underline bg-accent"></span></div>
              <div class="text-h6 body">{{ this.$t('about.mission_body') }}</div>
            </div>
        </q-card>
      </div>
      <div class="col-12 col-sm-6  col-md-4 col-lg-3 q-pa-md" :style="!$q.screen.lt.md ? 'width: calc(100% / 2)' : ''">
        <q-card class="about-card" :style="'background: url(about/3.jpg)'">
          <div class="absolute-bottom q-ma-md card-info text-primary">
            <div class="text-h4 title">{{ this.$t('about.ourValue') }}<span class="underline bg-accent"></span></div>
            <div class="text-h6 body">{{ this.$t('about.mission_body') }}</div>
            <q-list>
              <q-item>
                <q-item-section>
                  <q-item-label>{{ this.$t('about.ourValue') }}</q-item-label>
                  <q-item-label  lines="2">Secondary line text. Lorem ipsum dolor sit amet, consectetur adipiscit elit.</q-item-label>
                </q-item-section>
              </q-item>
            </q-list>
          </div>
        </q-card>
      </div>
    </div>
  </div>
</template>

<script>
import { useQuasar } from 'quasar'
import { computed } from 'vue'

export default {
  data () {
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


<style lang="scss">
.about {
  .about-card {
    min-height: 65vh;
    background-size: cover !important;
    background-position: center !important;
    .card-info {
      background-color: rgba(255, 255, 255, 0.9019607843137255);
      padding: 20px;
      .title {
        font-size: 40px;
        font-weight: 700;
        .underline{
          width: 7%;
          height: 3px;
          background: #313131;
          display: inherit;
          margin: 20px 0;
        }
      }
      .body {
        line-height: 2.9rem !important;
        font-weight: 300
      }
    }
  }
}
</style>

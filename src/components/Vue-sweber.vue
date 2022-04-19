<template>
  <div class="partners flex flex-center wrap items-center">
    <div class="q-pa-md" v-for="i in 11" :key="i">
      <q-img width="80px" :src="'/partners/'+ i +'.png'" />
    </div>
  </div>

</template>
<script>
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from "swiper/vue";

// Import Swiper styles
import "swiper/css";

import "swiper/css/pagination";

// import required modules
import { Pagination } from "swiper";

export default {
  components: {
    // Swiper,
    // SwiperSlide,
  },
  setup() {
    return {
      modules: [Pagination],
    };
  },
};
</script>

<style lang="scss">
.partners {
  padding: 40px 0;
  background-color: #fff;
}
</style>

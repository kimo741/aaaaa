<template>
  <q-header class="" style="position: sticky; background-color: #fdb813">
    <transition
      appear
      enter-active-class="animated fadeIn"
      leave-active-class="animated fadeOut"
    >
      <q-toolbar class="flex justify-between">
        <q-btn
          flat
          round
          dense
          icon="menu"
          @click="$store.dispatch('updateDrawer', !$store.state.setting.drawer)"
        />

        <div>
          <LogoImg src="logo.png" width="100" v-show="1" />
        </div>
      </q-toolbar>
    </transition>
  </q-header>
</template>

<script>
import LogoImg from "components/Layout/LogoImg";
import { ref, watch } from "vue";
import { useQuasar } from "quasar";

export default {
  components: {
    LogoImg,
  },
  data() {
    return {
    };
  },
};
</script>
<style lang="scss" scoped>
.fit {
  display: block;
  position: fixed;
  padding: 0 !important;
}
.link-social {
  .chil {
    margin: auto 15px;
    color: black;
  }
}
@media screen and (max-width: 800px) and (min-width: 200px) {
  .nav {
    display: none !important;
    opacity: 0;
  }
  .lang {
    position: fixed;
    top: 50%;
    left: 0%;
    transform: translate(-30%, 50%) rotate(90deg);
    opacity: 0.9;
    z-index: 5555;
    width: 6rem !important;
    &:hover {
      transition: all 0.4s ease-in-out;
      width: 250px !important;
      transform: translate(-40%, 50%) rotate(90deg);
      opacity: 1;
    }
  }
}
</style>

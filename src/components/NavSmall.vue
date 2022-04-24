<template>
  <q-header reveal elevated>
    <q-toolbar>
      <q-btn flat round dense icon="menu" @click="drawerLeft = !drawerLeft" />
    </q-toolbar>
  </q-header>

  <q-drawer
    v-model="drawerLeft"
    :width="150"
    :breakpoint="700"
    behavior="desktop"
    bordered
    class="bg-grey-3"
  >
    <q-scroll-area class="fit">
      <div>1</div>
      <div>1</div>
      <div>1</div>
      <div>1</div>
    </q-scroll-area>
  </q-drawer>
</template>

<script>
import { useQuasar } from "quasar";
import { ref } from "vue";

export default {
  setup() {
    const $q = useQuasar();

    return {
      drawerLeft: ref($q.screen.width > 700),
      drawerRight: ref($q.screen.width > 500),
    };
  },
};
</script>
<style lang="scss" scoped>
.fit {
  background: black;
  position: fixed !important;
  z-index: 1111111111111;
}
</style>

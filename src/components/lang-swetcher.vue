<template>
  <q-select
    v-model="locale"
    :options="localeOptions"
    filled
    use-input
    input-debounce="0"
    label="Simple filter"
    @filter="filterFn"
    style="width: 250px"
    bg-color="#551a8b"
    behavior="dialog"
    rounded
    class="lang-swetch"
  />
  <!-- &lt;!&ndash;&ndash;&gt; &lt;!&ndash; {{ locale }}&ndash;&gt;
  {{ $t("nativeName") }} -->
</template>

<script>
import { ref, watch } from "vue";
import { useI18n } from "vue-i18n";

export default {
  setup() {
    const { locale } = useI18n({ useScope: "global" });
    return {
      locale,
      localeOptions: [
        { value: "en-US", label: "English" },
        { value: "ar", label: "العربيه" },
      ],
    };
  },
  // watch: {
  //   lang(lang) {
  //     // dynamic import, so loading on demand only
  //     import(`quasar-framework/i18n/${lang}`).then((lang) => {
  //       this.$q.i18n.set(lang.default);
  //     });
  //   },
  // },
};
</script>

<style scoped>
.lang-swetch {
  height: 3rem !important;
  width: 200px !important;
  background-color: #fff5f5 !important;
  border-radius: 25px 25px 0 0;
  text-align: center !important;
  color: #000 !important;
}
</style>

<template>
  <q-select
    v-model="lang"
    :options="langOptions"
    label="Quasar Language"
    dense
    borderless
    emit-value
    map-options
    options-dense
    style="min-width: 150px"
  />

  {{ $q.lang.getLocale() }}
</template>

<script>
import { useQuasar } from 'quasar'
import languages from 'quasar/lang/index.json'
import { ref, watch } from 'vue'

const appLanguages = languages.filter(lang =>
  [ 'ar', 'en-US' ].includes(lang.isoName)
)

const langOptions = appLanguages.map(lang => ({
  label: lang.nativeName, value: lang.isoName
}))

export default {
  setup () {
    const $q = useQuasar()
    const lang = ref($q.lang.isoName)

    watch(lang, val => {
      // dynamic import, so loading on demand only
      $i18n.locale = lang
      import(
        /* webpackInclude: /(de|en-US)\.js$/ */
      'quasar/lang/' + val
        ).then(lang => {
          console.log(lang)
      })
    })

    return {
      lang,
      langOptions
    }
  }
}
</script>

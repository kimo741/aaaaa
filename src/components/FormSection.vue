<template>
  <section class="section-form">
    <div class="container">
      <h2>Get our Brochure</h2>
      <div class="row">
        <div class="col flex justify-center">
          <div class="q-pa-md" style="max-width: 60%">
            <q-form
              @submit="onSubmit"
              @reset="onReset"
              class="q-gutter-md header-form"
            >
              <q-input
                filled
                v-model="name"
                label="Your name *"
                color="white"
                class="inputs"
                lazy-rules
                label-color="white"
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
              />
              <q-input
                v-model="email"
                label="Your Email *"
                filled
                class="inputs"
                type="email"
                hint="Email"
                loading="true"
                label-color="white"
                outlined="false"
              />
              <q-input
                filled
                type="Phone number"
                v-model="number"
                label="Phone number *"
                color="white"
                class="inputs"
                lazy-rules
                label-color="white"
                :rules="[
                  (val) =>
                    (val !== null && val !== '') ||
                    'Please type your phone number ',
                  (val) =>
                    (val > 0 && val < 20) || 'Please type a real phone number',
                ]"
              />
              <q-input
                clearable
                filled
                v-model="text"
                class="inputs"
                label="Message *"
                label-color="white"
              />

              <div>
                <q-btn
                  label="Submit"
                  type="submit"
                  color="red-7"
                  class="full-width form__but-sub"

                />
<!--                <q-btn-->
<!--                  label="Reset"-->
<!--                  type="reset"-->
<!--                  color="white"-->
<!--                  flat-->
<!--                  class="q-ml-sm form__but-res"-->
<!--                  rounded-->
<!--                />-->
              </div>
            </q-form>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import { useQuasar } from "quasar";
import { defineComponent, ref } from "vue";

export default defineComponent({
  setup() {
    const $q = useQuasar();

    const name = ref(null);
    const age = ref(null);
    const number = ref(null);
    const text = ref(null);
    const accept = ref(true);

    return {
      name,
      age,
      text,
      number,

      onSubmit() {
        $q.notify({
          color: "green-4",
          textColor: "white",
          icon: "cloud_done",
          message: "Submitted",
        });
      },

      onReset() {
        name.value = null;
        age.value = null;
        text.value = null;
        accept.value = false;
      },
    };
  },
});
</script>
<style lang="scss" scoped>
.section-form {
  h2 {
    color: #fff;
    font-weight: 700;
    position: relative;
    padding: 2rem 0;
    &::after {
      content: "";
      position: absolute;
      bottom: -40%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 5rem;
      height: 5px;
      background-color: #3ff2c6;
    }
  }
  //height: 75vh;
  background-color: #00609c;
  text-align: center !important;
  .q-pa-md {
    width: 80%;
    .header-form {
      margin: auto !important;
      width: 100%;
      color: #fff !important;
    }
  }
}
.form__but-sub {
  //width: 8rem !important;
  height: 3rem !important;
  background-color: #fff;
  font-size: 1rem;
  margin: 0 2rem;
}
.form__but-res {
  width: 8rem !important;
  height: 3rem !important;
  background-color: #fff;
  color: red !important;
  font-size: 1rem;
  margin: 0 2rem;
}
.inputs {
  background-color: #2175a9;
}
</style>

<template>
  <section id="contact" class="section-form">
    <div class="container">
      <h2>
        التواصل
        <div class="social-div flex justify-center q-mt-xl q-mb-xl">
          <q-item style="width: 3em">
            <q-item-section side>
              <q-icon
                name="lab la-instagram"
                size="0.7em"
                color="white"
                class="icon"
              />
            </q-item-section>
            <q-item-section dir="ltr" class="text-white text-subtitle1">
              @LaDune
            </q-item-section>
          </q-item>
          <q-item style="width: 3em">
            <q-item-section side>
              <q-icon name="lab la-twitter" size="0.7em" color="white" />
            </q-item-section>
            <q-item-section dir="ltr" class="text-white text-subtitle1">
              @LaDune
            </q-item-section>
          </q-item>
        </div>
      </h2>
      <div class="row">
        <div class="col flex justify-center">
          <div class="q-pa-md form-containe" style="max-width: 100%">
            <q-form
              @submit="onSubmit"
              @reset="onReset"
              class="q-gutter-md header-form"
            >
              <q-input
                filled
                v-model="name"
                placeholder="الاسم *"
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
                placeholder="الموضوع*"
                filled
                class="inputs"
                type="email"
                loading="true"
                label-color="white"
                outlined="false"
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
              />
              <q-input
                filled
                type="Phone number"
                v-model="number"
                placeholder="البريد الكتروني *"
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
                class="inputs auto"
                type="textarea"
                placeholder="أخبرني ازي اقدر اساعدك"
                label-color="white"
              />

              <div>
                <q-btn
                  label="أرسال"
                  type="submit"
                  rounded
                  color="white"
                  text-color="primary"
                  class="full-width text-capitalize form__but-sub shadow-0 q-my-lg"
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
  background: linear-gradient(to top, #00609c, #0c7ea5);
  h2 {
    color: #fff;
    font-weight: 700;
    position: relative;
    padding: 2rem 0;
    margin-bottom: 0px;
    padding-bottom: 0;
    &::after {
      content: "";
      position: absolute;
      bottom: -19%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 35%;
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
  width: 16rem !important;
  height: 4rem !important;
  font-size: 1.5rem;
  //margin: 0 2rem;
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

.q-field__native {
  color: #fff !important;
  font-size: 1.5rem !important;
  text-align: center;
}

::-webkit-input-placeholder {
  text-align: center;
}

:-moz-placeholder {
  /* Firefox 18- */
  text-align: center;
}

::-moz-placeholder {
  /* Firefox 19+ */
  text-align: center;
}

:-ms-input-placeholder {
  text-align: center;
}
@media screen and (max-width: 900px) and (min-width: 300px) {
  .section-form {
    h2 {
      font-size: 2.5rem;
    }
    .social-div {
    }
  }
}
.inputs {
  width: 100% !important;
  margin: 16px auto !important;
  background-color: #0399e3;
  font-size: 1.2rem !important;
  height: 4rem;
}
.q-textarea {
  height: auto !important;
}
.q-pa-md {
  width: 100%;
  margin: auto !important;
  padding: 0;
}
.form-containe {
  width: 100%;
}
.q-pa-md {
  width: 95% !important;
}
</style>

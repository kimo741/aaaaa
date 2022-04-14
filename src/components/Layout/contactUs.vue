<template>
  <section class="contact-us">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2>Leave me a message</h2>
          <div class="q-pa-md" style="max-width: 400px">
            <q-form @submit="onSubmit" @reset="onReset" class="q-gutter-md">
              <q-input
                filled
                v-model="form.name"
                label="Your Name"
                hint="Name and surname"
                lazy-rules
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
              />
              <q-input
                filled
                v-model="form.email"
                label="Your Email"
                hint="as adam@somthing.com"
                lazy-rules
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
              />
              <q-input
                filled
                v-model="form.message"
                label="Message"
                hint="explane"
                lazy-rules
                :rules="[
                  (val) => (val && val.length > 0) || 'Please type something',
                ]"
              />

              <div>
                <q-btn label="Submit" type="submit" color="primary" />
                <q-btn
                  label="Reset"
                  type="reset"
                  color="primary"
                  flat
                  class="q-ml-sm"
                />
              </div>
            </q-form>
          </div>
        </div>
        <div class="col">
          <div class="col image-header">
            <img src="wa.jpeg" class="image-head" />
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
<script>
import { defineComponent } from "vue";
export default defineComponent({
  name: "HomePresentation",
  components: {},
  data() {
    return {
      form: {
        name: "",
        email: "",
        message: "",
      },
    };
  },
  methods: {
    onSubmit() {
      axios
        .post("/user", {
          form: this.form,
        })
        .then(function (res) {
          console.log(res);
        })
        .catch(function (err) {
          console.log(err);
        });
    },
  },
});
</script>

<style lang="scss" scoped>
.contact-us {
  margin-top: 2rem;
  h2 {
    color: $fontColor;
    font-family: NavFont;
  }
}
.image-head {
  height: 100%;
  width: 100%;
}
</style>

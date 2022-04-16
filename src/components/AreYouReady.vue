<template>
  <section class="aur">
    <div class="container ready-section">
      <div class="row ready-row-1">
        <div class="col">
          <div class="ready-contact">
            <h2>Are you ready to...</h2>
            <p>
              Whether you need help with planning the right kinds of campaigns
              for your social media accounts or need to establish a general
              social media strategy in the first place, I'll work closely with
              you to identify how we can scale your social media activities to a
              whole new level.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="ready-contact">
            <h3>Create content that's visually pleasing?</h3>
            <p class="">
              It's not enough to just create an account and post something. Your
              content needs to represents your brand and showcase your mission
              and values. And you want to do it in a way that stops the user in
              their tracks – with beautiful content.
            </p>
          </div>
        </div>
        <div class="col">
          <div class="ready-contact">
            <h3>Grow your brand and turn your audience into paying clients?</h3>
            <p class="body">
              Selling online is different from traditional sales channels. But
              most of all, you need to gain your audience's trust if you want
              them to part with their dollar.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="ready-contact">
            <h3>Get hold of your dream clients online?</h3>
            <p>
              Everybody is online, so why shouldn't you try to reach out to
              them? With a bigger reach than ever before, the world really is
              your oyster when it comes to selling online.
            </p>
          </div>
        </div>
        <div class="col">
          <div class="ready-contact">
            <h3>
              Invest in your brand and take your business to the next level?
            </h3>
            <p>
              Social media marketing is much more than simply posting about an
              upcoming sale. With the right approach, you can exponentially grow
              your bottom line.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
<script>
import { defineComponent } from "vue";
export default defineComponent({
  name: "AreYouREady",
  components: {},
});
</script>
<style lang="scss" scoped>
.ready-section {
  padding: 5rem 0;
}
.ready-row-1 {
  width: 50%;
  margin: auto;
  text-align: center;
}
.col,
.row {
  color: $fontColor;
  font-family: NavFont;
}
h3 {
  font-size: 2.1rem;
  line-height: normal;
}
.ready-contact {
  margin: auto;
  width: 70% !important;
  p {
    font-weight: 400;
    line-height: 10px;
    overflow-wrap: break-word;
    white-space: break-spaces;
    font-family: NavFont;
    line-height: 1.7rem;
    font-size: 1.1rem;
  }
}
.aur {
  background-color: $sucColor;
}
@media screen and (max-width: 800px) and (min-width: 300px) {
  .ready-section {
    display: flex;
    flex-direction: column;
  }
  .row {
    flex-direction: column;
    width: 100%;
    height: 100%;
    text-align: left;
    .col {
      position: relative;
      margin: 2rem 0;

      &::after {
        content: "";
        position: absolute;
        width: 100%;
        height: 3px;
        bottom: -5%;
        right: 0%;
        background: linear-gradient(to left, $maincolor, #ddd);
      }
    }
  }
  h2 {
    font-size: 2.5rem;
  }
}
</style>

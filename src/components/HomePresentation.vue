<template>
  <div>
    <section class="section-pres">
      <div class="pres container">
        <div class="pres__content text-center">
          <h2>من نحن</h2>
          <p>
            لدون - كعملائھ مشروع ناUVW يسSى للارتقاء بالمشاريع الناشئة مثلھ من
            الناحية التسويقية.
          </p>
          <p>
            <strong>لدون</strong> <br />
            كعملائة مشروع ناشئ يسعى للارتقاءبالمشاريع الناشئة مثله من الناحية
            التسويقيه
          </p>
          <p>
            <strong>رؤيتنا</strong> <br />
            هي ان نكون الذراع الأيمن والخيار الأقرب للمشاريع الصغيره
          </p>
          <p>
            <strong>مهمتنا</strong> <br />
            نشرثقافة التسويق الكريم والمعطاء لإيماننا بأنھ أحد أهم سبل نجاح
            المشاريع وتطويرها ونموها من الفكرة إuى العمل وإuى شركات تشغيلية ذات
            رأس مال مستقل وقوة بشرية داعمة للمجتمع الخاص والمصلحة العامة.
          </p>
        </div>
      </div>
    </section>
  </div>
</template>
<script>
import { defineComponent } from "vue";
export default defineComponent({
  name: "HomePresentation",
  components: {},
});
</script>
<style lang="scss">
.section-pres {
  background-color: $sucColor;
  margin: 6rem 0;
}
.pres {
  &__content {
    width: 50%;
    margin: auto;
    text-align: right;
    font-family: NavFont;
    color: $fontColor;
    h2 {
      position: relative;
      font-size: 4rem;
      letter-spacing: 3px;
      font-weight: 500;
      padding: 0;
      &::after {
        content: "";
        position: absolute;
        width: 100%;
        height: 3px;
        top: 120%;
        right: 0%;
        background: linear-gradient(to right, $maincolor, #999);
      }
    }
    p {
      font-size: 1.4rem;
      line-height: 2rem;
      font-weight: 200;
      padding-bottom: 1rem;
      line-height: 3rem;

      strong {
        position: relative;
        font-size: 2rem;
        &::after {
          content: "";
          position: absolute;
          width: 100%;
          height: 3px;
          top: 120%;
          right: 0%;
          background: linear-gradient(to right, $maincolor, #999);
        }
      }
    }
  }
}
@media screen and (max-width: 800px) and (min-width: 300px) {
  .container {
    width: 100% !important;
    max-width: 100% !important;
  }
  .pres__content {
    text-align: right !important;
    h2 {
      position: relative;
    }
    p {
      line-height: 3rem;
    }
  }
}
</style>

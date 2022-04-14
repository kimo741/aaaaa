<template>
  <div class="container-header full-width main-header">
    <div class="container">
      <div class="full-width Inline Flex row justify-evenly">
        <div class="heder-context col">
          <div class="flex column">
            <h1 class="heder-context__h1">Hello, so good to see you!</h1>

            <b class="heder-context__b"
              >Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure
              obcaecati nobis porro placeat voluptatibus necessitatibus debitis
              eligendi, architecto rerum quos magni, a excepturi iusto error
              perspiciatis accusamus rem facere quisquam.</b
            >
            <div class="but">
              <q-btn
                color="black"
                label="contact me"
                size="1.1rem"
                class="edd-but"
              />
            </div>
          </div>
        </div>
        <div class="col image-header">
          <q-img src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=764,h=624,fit=scale-down/dovilelxpfw/img-mnllKKGWbPub6RLL.jpg" class="image-head" />
        </div>
      </div>
    </div>
  </div>
</template>
<style lang="scss">
.container-header {
  // height: 100vh;
  position: relative;
}
.main-logo {
  font-size: 3rem;
  font-weight: 800;
}
.nav-ul {
  display: flex;
  justify-content: center;
  align-content: center;
  list-style: none;
  font-size: 1rem;
  li {
    padding: 1rem;
    a {
      color: $fontColor;
      font-family: NavFont;
      position: relative;
      margin-left: 3rem;
      font-weight: bold;
      font-size: 1.1rem;
      letter-spacing: 3px;
      text-decoration: none;

      &::after {
        content: "";
        position: absolute;
        width: 0;
        height: 3px;
        top: 120%;
        left: -10%;
        background-color: $fontColor;
      }

      &:hover {
        &::after {
          transition: all 0.4s ease-in-out;
          width: 120%;
        }
      }
    }
  }
}
.heder-context {
  padding-left: 10%;
  padding-right: 10%;
  height: 100%;
  overflow: hidden;

  &__h1 {
    font-family: NavFont;
    font-weight: 300;
    font-size: 5rem;
    color: $fontColor;
  }
  &__b {
    font-family: NavFont;
    font-weight: 200;
    font-size: 1.1rem;
  }
}
.image-header {
  width: 70% !important;
  height: 100%;
}
.image-head {
}
.pading-cont {
  width: 50%;
}
.main-header {
  background-color: #fff5f5;
  height: 100%;
}
.but {
  padding-top: 15%;
}
.edd-but {
  opacity: 0.8;
  font-size: 1rem !important;
  font-weight: 300 !important;
  padding: 1rem 2rem;
}
.image-head {
  width: 100%;
  height: 100%;
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
}
</style>

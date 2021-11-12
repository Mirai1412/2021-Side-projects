<template>
  <div id="buttompage">

    <img src="@/views/imges/sk/q4.png" class="bti1">
        <img src="@/views/imges/sk/q2.png" class="bti2">
    <div class="buttomul">
      <ul>
        <li>이용약관</li>
        <li>고객센터</li>
        <li>문의하기</li>
        <li>개인정보처리방침</li>
      </ul>
    </div>

    <div class="buttomt">
      <div class="buttomt2">
      <h1>© 2021 Laravel Personal Project.</h1>
      <p>A cup of warm coffee in your heart</p>
      </div>
    </div>

  </div>

</template>

<script>

export default {
  name: 'buttom',

}
</script>

<style lang="scss">
#buttompage{
  width: 100%;
  color: white;
  height: 100px;
  margin: 0 auto;
  border-top:3px solid black;
  margin-top: 50px;
  position: relative;
  padding-top: 50px;
}

.buttomt{
  background-color: black;
  display: flex;
  height: 73px;
  justify-content: center;
  font-family: 'Nanum Pen Script', cursive;
  font-size: 1.5rem;
  padding-top: 26px;
  .buttomt2{
      h1{
        font-size: 1.0em;
        margin: 0;
      }
      p{
        font-size: 0.7em;
        text-align: center;
        margin: 0;
      }
  }
}
.buttomul{
  height:  50px;
  color: black;
  font-family: 'Nanum Pen Script', cursive;
  font-size: 1.5rem;
  width: 100%;
  display: flex;
  justify-content: center;
  position: absolute;
  top: 0;
  ul{
    margin: 0;
    list-style: none;
    padding: 0;
  }
  li{
    display: inline-block;
    margin: 0 20px;
    height: 49px;
    line-height: 49px;
      &:hover{
      border-bottom: 5px solid red;
    }
  }
}
.bti1{
  width: 500px;
  position: absolute;
  top: -370px;
  z-index: 1;
}
.bti2{
  width: 350px;
  position: absolute;
  top: -327px;
  z-index: 1;
  right: 0;
}


</style>

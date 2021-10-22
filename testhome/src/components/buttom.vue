<template>
  <div id="buttompage">
    <div class="linki">
      <ul>
        <li>Facebook</li>
        <li>Instargram</li>
        <li>Twitter</li>
      </ul>
    </div>

    <div class="address"> 
      <p>Youngjin College of Computer Information
        <br>
        Email : kkas0807@naver.com
        <br>
        Tel : 010-9115-2813
      </p>
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
  background-color: black;
  color: white;
  height: 100px;
  margin: 0 auto;
  border-top:3px solid black;
  margin-top: 50px;
  position: relative;
}
.buttomt{
  padding-top: 10px;
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  .buttomt2{
      h1{
        font-size: 1.0em;
      }
      p{
        font-size: 0.7em;
        text-align: center;
      }
  }

}
.linki{
  font-family: 'Nanum Pen Script', cursive;
  position: absolute;
  top: 1rem;
  right: 1rem;
  ul{
    display: flex;
    list-style: none;
    padding: 0;
  }
  li{
    display: inline;
    margin: 0 10px;
    font-size: 1.5em;
  }
  li:hover{
        color: yellow;
  }

}
.address{
  position: absolute;
  top: 1.1rem;
  left: 1rem;
  font-family: 'Nanum Pen Script', cursive;
  font-size: 1.2rem;
  p{
    margin: 0;
  }
  h1{
    margin: 0;
  }
}
</style>

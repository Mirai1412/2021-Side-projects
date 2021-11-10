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
      <p>
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
  display: flex;
  justify-content: center;
  // font-family: 'Nanum Pen Script', cursive;
  // font-size: 1.5rem;
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

.address{
  font-family: 'Nanum Pen Script', cursive;
  font-size: 1.5rem;
  position: absolute;
  top: 1.3rem;
  left: 1.5rem;
  p{
    margin: 0;
  }
  h1{
    margin: 0;
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
        color: red;
  }

}

</style>

<template>
  <div id="buttompage">
    <div class="linki">
      <ul>
        <li>Facebook</li>
        <li>Instargram</li>
        <li>Twitter</li>
      </ul>
    </div>
    <div class="buttomt"> 
      <h1>© 2021Laravel Personal project.</h1>
      <p>A cup of warm coffee in your heart</p>
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
  width: 90%;
  height: 160px;
  margin: 0 auto;
  border-top:3px solid rgb(209, 209, 209);
  margin-top: 50px;
}
.buttomt{
  width: 100%;
  h1{
    display: flex;
    justify-content: center;
    font-size: 20px;
  }
  p{
    display: flex;
    justify-content: center;
    font-size: 10px;
  }
}
.linki{
  width: 100%;
  ul{
    display: flex;
    justify-content: center;
    list-style: none;
    padding: 0;
  }
  li{
    display: inline;
    margin: 0 20px;
  }
  li:hover{
        color: brown;
  }

}
</style>

<template>
  <div id="buttompage">

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




</style>

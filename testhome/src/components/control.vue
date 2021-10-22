<template>
    <div class="control">

    <ul class="controlul" >
        <li> <a href="#headerpage">
            <div class="up">
                <div class="up1">
                </div>
                <div class="up2">
                </div>
            </div>
            </a>
        </li>
        <li><a href="#buttompage">
            <div class="down">
                <div class="down1">
                </div>
                <div class="down2">
                </div>    
            </div>
            </a>
        </li>
    </ul>
    <input type="checkbox" class="controlbar" id="controlbarid">


    </div>
</template>
<script>
export default {
    name:'control'
}
</script>
<style lang="scss">
.control{
    position: fixed;
    bottom: 80px;
    right: 10px;
    .down{
        margin: 10px;
        width: 3rem;
        height: 3rem;
        border-radius: 100%;
        background-color: black;
        position: relative;

        .down1{
            top: 25px;
            right: 7.5px;
            position: absolute;
            width: 20px;
            height: 5px;
            background-color: white;
            transform:rotate(-40deg)
        }
        .down2{
            top: 25px;
            left: 7px;
            position: absolute;
            width: 20px;
            height: 5px;
            background-color: white;
            transform:rotate(40deg)
        }
    }
    .up{
        margin: 10px;
        width: 3rem;
        height: 3rem;
        border-radius: 100%;
        background-color: black;
        position: relative;

        .up1{
            top: 20px;
            right: 7.5px;
            position: absolute;
            width: 20px;
            height: 5px;
            background-color: white;
            transform:rotate(40deg)
        }
        .up2{
            top: 20px;
            left: 7px;
            position: absolute;
            width: 20px;
            height: 5px;
            background-color: white;
            transform:rotate(-40deg)
        }
    }
    ul{
        li{
            list-style: none;
        }
    }



    .controlul{
        // display: none;
    }
    .controlbar{
        &:checked ~.controlul{
            display: block;
        }

    }

}
</style>

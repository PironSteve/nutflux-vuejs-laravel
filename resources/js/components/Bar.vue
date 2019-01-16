<template>
    <div class="navbar">
        <img class="logo" src="../../../resources/images/nutflux.png" alt="">
        <p>NUTFLUX</p>
    </div>
</template>

<script>
    export default {
    }

</script>

<style scoped>
.navbar{
    background-color: rgba(0,0,0,1);
    position:fixed;
    top:0;
    width:100vw;
    padding-right: 100px;
    padding-left: 3%;
}

.navbar a {
    color: white;
}

.logo {
    width: 75px;
}

p{
    font-size: 30px;
    color:white;
}
</style>

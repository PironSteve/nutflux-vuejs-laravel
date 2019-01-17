<template>
    <div class="navbar">
        <div class="topmenu">
            <img class="logo" src="../../../resources/images/nutflux.png" alt="">
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }

</script>

<style scoped>
body{
    margin: 0;
    padding: 0;
}
.navbar {
    background-color: #000;
    border-radius: 0;
    overflow: hidden;
    padding: 5px;
}
.topmenu {
    margin: 0;
    width: 100%;
}
</style>

<template>
    <div class="navbar">
        <div class="topmenu">
            <img class="logo" src="..//../../resources/images/nutflux.png" alt="">
            <button type="button" class="btn btn-info btn-md"><a href=""><span class="glyphicon glyphicon-film"></span> Films</a></button>
            <button type="button" class="btn btn-info btn-md"><a href=""><span class="glyphicon glyphicon-th-list"></span> Listes</a></button>
            <button type="button" class="btn btn-info btn-md"><a href=""><span class="glyphicon glyphicon-user"></span> Profil</a></button>
            <input  type="search" name="search-bar" id="search" placeholder="Recherche">
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
.navbar a {
    color: white;
}
.btn {
    background-color: #B02E05;
    border: none;
    margin-left: 15px;
    margin-right: 15px;
}
.btn:hover {
    background-color: #f84309;
}
.logo {
    height: 75px;
    margin-right: 30px;
}
#search {
    margin-right: 20px;
    margin-top: 23px;
    float: right;
    background-color: #B02E05;
    color: #fff;
    padding-left: 10px;
    border-radius: 25px;
}
#search:hover {
    background-color: #f84309;
}
::placeholder {
    color: #fff;
    opacity: 1;
}

</style>

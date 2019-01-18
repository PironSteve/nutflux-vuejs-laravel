<template>
    <div class="dropdown">
        <div class="topmenu">
            <router-link to="./login"><img class="logo" src="../../../resources/images/nutflux.png" alt=""></router-link>
            <router-link to="/catalogue"><button type="button" class="btn btn-info btn-lg"><a href=""><span class="glyphicon glyphicon-film"></span> Films</a></button></router-link>
            <button type="button" class="btn btn-lg dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><a href=""><span class="glyphicon glyphicon-th-list"></span> Listes</a></button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <router-link to="/favorite"><button class="dropdown-item" type="button" onmouseover="this.style.background='white'" onmouseout="this.style.background='#B02E05'">Favoris</button></router-link>
                    <router-link to="/seen"><button class="dropdown-item" type="button" onmouseover="this.style.background='white'" onmouseout="this.style.background='#B02E05'">Déjà vu</button></router-link>
                    <router-link to="/towatch"><button class="dropdown-item" type="button" onmouseover="this.style.background='white'" onmouseout="this.style.background='#B02E05'">A regarder</button></router-link>
            </div>
            <router-link to="/editprofile"><button type="button" class="btn btn-info btn-lg"><a href=""><span class="glyphicon glyphicon-user"></span> Profil</a></button></router-link>   
            <form action="">
                <input type="search">
                <i class="fa fa-search"></i>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
    }
</script>

<style scoped>
.dropdown-menu.show {
    display: flex;
}

body{
    margin: 0;
    padding: 0;
}
.dropdown {
    background-color: #000;
    border-radius: 0;
    overflow: hidden;
    padding: 5px;
    height: 130px;
    position: sticky;
    top:0px;
    z-index:9998;
    border-bottom: 1px solid #B02E05;
}
.dropdown a {
    color: white;
}
.btn {
    background-color: #B02E05;
    border: none;
    margin-left: 15px;
    margin-right: 15px;
}
.btn:hover, .btn:focus {
    background-color: #fcbaa5;
}
.logo {
    height: 100px;
    margin-right: 30px;
}
.topmenu{
    margin: 0;
    width: 100%;
}
form{
    position: relative;
    top: -40px;
    left: 90%;
    transform: translate(-50%,-50%);
    transition: all 1s;
    width: 50px;
    height: 50px;
    background: #B02E05;
    box-sizing: border-box;
    border-radius: 25px;
    border: 4px solid #fff;
    padding: 5px;
}
input{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;;
    height: 42.5px;
    line-height: 30px;
    outline: 0;
    border: 0;
    display: none;
    font-size: 1em;
    border-radius: 20px;
    padding: 0 20px;
    color: #f84309;
}
.fa{
    box-sizing: border-box;
    padding: 14px;
    width: 42.5px;
    height: 42.5px;
    position: absolute;
    top: 0;
    right: 0;
    border-radius: 50%;
    color: #fff;
    text-align: center;
    font-size: 1.2em;
    transition: all 1s;
}
form:hover{
    width: 200px;
    cursor: pointer;
}
form:hover input{
    display: block;
}
form:hover .fa{
    background: #f84309;
    color: white;
}
::placeholder {
    color: #fff;
    opacity: 1;
}
.dropdown-menu{
    background-color: #B02E05;
}
.dropdown-item:hover{
    background-color: #f84309;
}
.dropdown-item{
    color: #fff;
}
</style>

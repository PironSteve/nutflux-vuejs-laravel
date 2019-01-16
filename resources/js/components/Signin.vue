<template>
    <div class="signin">
        <p class="connect">S'enregistrer</p>
        <input type="text" placeholder="Pseudo"><br>
        <input type="text" placeholder="Email"><br>
        <input type="text" placeholder="Mot de passe"><br>
        <input type="text" placeholder="Mot de passe"><br>
        <button type="submit">GO</button><br>
        <a href="#" class="log">Se connecter?</a>
    </div>
</template>

<script>
export default{
    data(){
        return{

        }
    }
}
</script>

<style scoped>
    .signin{
        width:500px;
        height:500px;
        background-color:#B02E05;
        border-radius: 50%;
        padding-top: 4%;
        text-align: center;
        border: 4px solid #FCBAA5;
        display:none;
    }

    .active{
        /* position:absolute;
        top:20%;
        left:15%; */
        border: 4px solid #FCBAA5;
        z-index:2;
    }

    .non-active{
        /* position:absolute;
        top:20%;
        left:30%; */
        padding-top: 40px;
        width: 475px;
        height: 475px;
        filter: blur(2px);
        z-index:1;
    }

    .connect{
        margin-bottom: 38px;
        color:white;
    }

    p{
        font-size: 40px;
        font-family: 'Allerta Stencil', sans-serif;
    }

    input{
        width:300px;
        height: 40px;
        margin-bottom: 17px;
        padding-left: 10px;
        background: rgba(252, 186, 165, 0.68);
        color:white;
        border-radius: 20px;
        border:none;
        font-family: 'Abel', sans-serif;
        font-size: 22px;
    }

    input::placeholder{
        color:white;
        font-weight: bold;
    }

    button{
        width:100px;
        height: 60px;
        border-radius: 20px;
        color:white;
        font-weight: bold;
        background-color:#B02E05;
        border: 2px solid rgb(252, 186, 165);
    }

    button:hover{
        background-color:rgba(252, 186, 165, 0.68);
    }

    .log{
        color:#FCBAA5;
        text-decoration: none;
    }

    .log:hover{
        font-weight: bold;
    }
</style>

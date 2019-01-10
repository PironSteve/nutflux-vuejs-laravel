<template>
    <div class="login">
        <p class="connect">Connexion</p>
        <input type="text" placeholder="Email"><br>
        <input type="text" placeholder="Mot de passe"><br>
        <button type="submit">GO</button><br><br>
        <a href="#" class="register">S'inscrire?</a>
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
    .login{
        width:500px;
        height:500px;
        background-color:#B02E05;
        border-radius: 50%;
        padding-top: 5%;
        text-align: center;
        border: 4px solid #FCBAA5;
    }

    .connect{
        margin-bottom: 75px;
        color:white;
    }

    p{
        font-family: 'Allerta Stencil', sans-serif;
        font-size: 40px;
    }

    input{
        width:300px;
        height: 40px;
        margin-bottom: 20px;
        padding-left:10px;
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
        background-color:#B02E05;
        font-weight: bold;
        border: 2px solid rgb(252, 186, 165);
    }

    button:hover{
        background-color:rgba(252, 186, 165, 0.68);
    }

    .register{
        color:#FCBAA5;
        text-decoration: none;
    }

    .register:hover{
        font-weight: bold;
    }
</style>
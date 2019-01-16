<template>
    <div class="main">
    <bar></bar>
    <div class="box">
        <div class="login">
            <p class="connect">Connexion</p>
            <input type="text" placeholder="Email"><br>
            <input type="text" placeholder="Mot de passe"><br>
            <router-link to="/choose"><button type="submit">GO</button></router-link><br><br>
            <a href="#" class="register">S'inscrire?</a>
        </div>
            <div class="signin">
            <p class="connect2">S'enregistrer</p>
            <input type="text" placeholder="Pseudo"><br>
            <input type="text" placeholder="Email"><br>
            <input type="text" placeholder="Mot de passe"><br>
            <input type="text" placeholder="Mot de passe"><br>
            <router-link to="/choose"><button type="submit">GO</button></router-link><br>
            <a href="#" class="log">Se connecter?</a>
        </div>
    </div>
    <foot></foot>
    </div>
</template>

<script>
export default{
    data(){
        return{
            
        }
    },
    mounted(){
        const login = document.querySelector('.login');
        const signin = document.querySelector('.signin');
        const boxUser = document.querySelector('.boxuser');

        document.querySelector('.register').addEventListener("click", ()=>{
            login.style.display="none";
            signin.style.display="block";
        })

        document.querySelector('.log').addEventListener("click", ()=>{
            login.style.display="block";
            signin.style.display="none";
        })
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

    .connect{
        margin-bottom: 75px;
        color:white;
    }

    .connect2{
        margin-bottom: 38px;
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

    .log{
        color:#FCBAA5;
        text-decoration: none;
    }

    .log:hover{
        font-weight: bold;
    }


.box{
    width: 100%;
    height: 100%;
    display:flex;
    justify-content: center;
    align-items: center;
}

.main{
    width: 100vw;
    height: 100vh;
    background-image: url(http://visagesetcouleurs.be/BeCode/denise-jans-559588-unsplash.jpg);
    background-position: center;

}

</style>
<template>

  <div class = "container">

  <div class = "backgroundprofile">

    <navbar></navbar>
        <form id = "form1">

            <img src="../../../resources/images/user.png" alt = "default avatar" class = "defaultavatar">
            <p>
              Avatar
            </p>

            <div class = "ellipseprofile">


            <h2> Profil </h2>


                <input placeholder="Pseudo" >
                <input class="mdp" placeholder="Mot de passe " >
            </div>

            <button type = "submit" form = "form1" value = "Submit">
              GO
            </button>

        </form>


        <p class="slogan">
          Quand tout te casse les <span class="noix">noix</span>, </br> connecte toi et détends toi.
        </p>

  </div>
        <foot></foot>
  </div>


</template>



<script>

export default {
  //mounted est créé lorsque le composant View l'est. console point log permet d'afficher dans la console.
    mounted() {
        console.log('Component mounted.')
    },


    data(){
      return {


        }
      }
  }



</script>


<style scoped>

.container{
  margin:0px;
  padding:0px;
  width:100vw;
}


.backgroundprofile{
  background-color: #000000;
  width: 100vw;
  height: 100vh;
}

.logo {


position: absolute;
width: 200px;
height: 200px;
left: 0px;
top: 0px;


}

img {

 position: absolute;
 width: 200px;
 height: 200px;
 left: 314px;
 top: 175px;

}

p{

  position: absolute;
  width: 140.63px;
  height: 56.37px;
  left: 370px;
  top: 370px;

  font-family: Allerta Stencil,sans-serif;
  font-style: normal;
  font-weight: normal;
  line-height: normal;
  font-size: 26px;
  text-align: justify;

  color: #FCBAA5;


}

h2 {

  font-family: 'Allerta Stencil', sans-serif;
  position: absolute;
  width: 360px;
  height: 72px;
  left: 150px;
  top: 20px;
  font-style: normal;
  font-weight: normal;
  line-height: normal;
  font-size: 48px;
  text-align: justify;

  color: white;
}

input {

position: absolute;
width: 322px;
height: 45px;
left: 70px;
top: 150px;

background: rgba(252, 186, 165, 0.78);
border-radius: 10px;
border : none;
font-family: Abel,sans-serif;
font-size: 25px;
}

.email{

  margin-top: 60px;
}

.ellipseprofile{
  position: absolute;
  width: 450px;
  height: 450px;
  left: 600px;
  top: 160px;

  background: #B02E05;
  border: 3px solid #FCBAA5;
  border-radius : 50%;
  box-sizing: border-box;
  box-shadow: 0px 4px 60px rgba(0, 0, 0, 0.55);

}

.slogan {
position: absolute;
width: 412px;
height: 67px;
left: 47px;
top: 550px;

font-family: Allerta Stencil;
font-style: normal;
font-weight: normal;
line-height: normal;
font-size: 20px;
text-align: justify;

color: #FCBAA5;
}

.noix {

font-family: Allura;
font-style: normal;
font-weight: normal;
line-height: normal;
font-size: 36px;
text-align: justify;
}

.mdp{

    margin-top: 120px;

}

.mdpconf{

    margin-top: 180px;


}

button {

  position: absolute;
  width: 129px;
  height: 60px;
  left: 350px;
  top: 450px;

  background: #B02E05;
  border: 2px solid #FCBAA5;
  box-sizing: border-box;
  border-radius: 20px;
  font-family: Allerta Stencil, sans-serif;
  font-size: 36px;
  text-align: center;
}
button:hover{
    background: #FCBAA5;
}
</style>

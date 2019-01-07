<template>
<div>
<button @click="show = !show">Afficher</button>
<transition name="bounce">
<div id="anim" class="bg-danger" v-if="show">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris facilisis enim libero, at lacinia diam fermentum id. Pellentesque habitant morbi tristique senectus et netus.
<img src="http://img.over-blog-kiwi.com/1/04/43/04/20180904/ob_1aabf0_jurassic-park-sans-effets-speciaux.jpg" alt="jurasic" /><br/>
</div>
</transition>
</div>
</template>

<script>

export default{
data(){
return{
show: false
}
}
}

</script>

<style scoped>
#anim{
position:fixed;
top:30%;
left:30;
text-align: center;
height:500px;
width:200px;
}
img{
width:100px;
}
.bounce-enter-active {
animation: bounce-in .5s;
}
.bounce-leave-active {
animation: bounce-in .5s reverse;
}

@keyframes bounce-in {
0% {
transform: scale(0);
}
50% {
transform: scale(1.5);
}
100% {
transform: scale(1);
}
}

</style>

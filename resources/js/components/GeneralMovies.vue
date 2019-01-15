<template>
    <carousel :dots="true" :nav="false" items="5">
        <img class="generalmovie" src="https://images-na.ssl-images-amazon.com/images/I/71M6KGXcWFL._SY445_.jpg">
        <img class="generalmovie" src="http://fr.web.img2.acsta.net/c_215_290/medias/nmedia/18/83/93/95/19803697.jpg">
        <img class="generalmovie" src="https://static.fnac-static.com/multimedia/FR/images_produits/FR/Fnac.com/ZoomPE/2/9/2/3344428001292/tsp20130830115303/Maman-j-ai-rate-l-avion-.jpg">
        <img class="generalmovie" src="http://cdn.franceloisirs.com/35955-66765-thickbox/nos-etoiles-contraires-dvd.jpg">
        <img class="generalmovie" src="http://fr.web.img3.acsta.net/c_215_290/medias/nmedia/18/35/84/55/18611268.jpg">
        <img class="generalmovie" src="https://images-na.ssl-images-amazon.com/images/I/71M6KGXcWFL._SY445_.jpg">
        <img class="generalmovie" src="http://fr.web.img2.acsta.net/c_215_290/medias/nmedia/18/83/93/95/19803697.jpg">
        <img class="generalmovie" src="https://static.fnac-static.com/multimedia/FR/images_produits/FR/Fnac.com/ZoomPE/2/9/2/3344428001292/tsp20130830115303/Maman-j-ai-rate-l-avion-.jpg">
        <img class="generalmovie" src="http://cdn.franceloisirs.com/35955-66765-thickbox/nos-etoiles-contraires-dvd.jpg">
        <img class="generalmovie" src="http://fr.web.img3.acsta.net/c_215_290/medias/nmedia/18/35/84/55/18611268.jpg">
    </carousel>
</template>

<script>
import carousel from 'vue-owl-carousel'

export default {
    components: { carousel },
}

$( ".owl-prev").html('<i class="fa fa-chevron-left"></i>');
$( ".owl-next").html('<i class="fa fa-chevron-right"></i>');
</script>

<style>
body{
    background-color: black;
}
.generalmovie{
    padding-right: 10px;
}
</style>

<template>
    <div class="movie-general">
        <h3>GENERAL MOVIES</h3>
        <carousel class="carousel"  :dots="true" :nav="false" :loop="true" :autoplay="true" :autoplayHoverPause="true" items="6">
        <button type="button" data-toggle="modal" data-target="#infos">
            <img data-toggle="modal" class="generalmovie" src="https://images-na.ssl-images-amazon.com/images/I/71M6KGXcWFL._SY445_.jpg">
        </button>
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
    <div class="modal" id="infos">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Plus d'informations</h4>
          </div>
          <div class="modal-body">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/h5cyXhEbIso" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="modal-footer">
            <em>Informations sous réserve</em>
          </div>
        </div>
      </div>
    </div>
    </div>
</template>

<script>
import carousel from 'vue-owl-carousel'

export default {
    components: { carousel }
}
</script>

<style>
body{
    background-color: black;
}
.generalmovie{
    border: 3px solid #B02E05 ;
    border-radius: 5px;
    max-width: 300px;
    height: 250px;
}
.movie-general h3{
    color: #f84309;
    font-weight: bold;
    margin-left: 35px;
}
.carousel{
    margin-left: 30px;
    max-height: 300px;
}
.owl-carousel .owl-item img {
    width: 85%;
}
</style>

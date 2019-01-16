<template>
    <footer>
        <div class="copyright">
            <p>Made with <i class="fas fa-heart"></i> by <span>NutFlux</span> team </p>
        </div>
        <div class="footer-logo">
            <ul class="social-network social-circle">
                <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
            </ul>
        </div>
    </footer>    
</template>

<script>

export default{
    data(){
        return{
               
        }
    }
}
</script>

<style>
    footer{
        width: 100vw;
        height: 45px;
        background-color: rgba(0,0,0,1);
        color:white;
        position:fixed;
        bottom:0px;
        padding-top: 6px;
        overflow: hidden;
    }

    footer .footer-logo{
        width:50%;
        display:grid;
        grid-template-columns: 60% 40%;
    }

    .footer-logo > ul{
        grid-column:2;
    }

    footer .copyright{
        width:50%;
        float:left;
        padding-left: 3%;
        font-size: 18px;
    }

    footer .copyright i{
        color:#B02E05;
    }

    ul.social-network {
        list-style: none;
        display: inline;
        margin-left: 0 !important;
        padding: 0;
    }

    ul.social-network li {
        display: inline;
        margin: 0 5px;
    }


/* footer social icons */

.social-network a.icoRss:hover {
  background-color: #F56505;
}

.social-network a.icoFacebook:hover {
  background-color: #3B5998;
}

.social-network a.icoTwitter:hover {
  background-color: #33ccff;
}

.social-network a.icoGoogle:hover {
  background-color: #BD3518;
}

.social-network a.icoVimeo:hover {
  background-color: #0590B8;
}

.social-network a.icoLinkedin:hover {
  background-color: #007bb7;
}

.social-network a.icoRss:hover i,
.social-network a.icoFacebook:hover i,
.social-network a.icoTwitter:hover i,
.social-network a.icoGoogle:hover i,
.social-network a.icoVimeo:hover i,
.social-network a.icoLinkedin:hover i {
  color: #fff;
}

a.socialIcon:hover,
.socialHoverClass {
  color: #44BCDD;
}

.social-circle li a {
  display: inline-block;
  position: relative;
  margin: 0 auto 0 auto;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  text-align: center;
  width: 40px;
  height: 40px;
  font-size: 20px;
}

.social-circle li i {
  margin: 0;
  line-height: 40px;
  text-align: center;
}

.social-circle li a:hover i,
.triggeredHover {
  -moz-transform: rotate(360deg);
  -webkit-transform: rotate(360deg);
  -ms--transform: rotate(360deg);
  transform: rotate(360deg);
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -o-transition: all 0.2s;
  -ms-transition: all 0.2s;
  transition: all 0.2s;
}

.social-circle i {
  color: #fff;
  -webkit-transition: all 0.8s;
  -moz-transition: all 0.8s;
  -o-transition: all 0.8s;
  -ms-transition: all 0.8s;
  transition: all 0.8s;
}

a {
  background-color: #D3D3D3;
}

span{
    font-weight: bold;
}
</style>
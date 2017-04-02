
    
	<div id="margtop">
	
	
	
<div class="wrapper2 col4">
  <div class="container2">
    <div class="content2">
	
   
  <!--=========== BEGIN SLIDER SECTION ================-->
   <div id="margtopslide">
    <section id="sliderArea ">
      <!-- Start slider wrapper -->      
      <div class="top-slider imgl">
      <?php if($aBanner){
        foreach ($aBanner as $o){
          ?>
        <!-- Start First slide -->
          <div class="top-slide-inner">
            <div class="slider-img">
              <img src="<?=base_url('assets/uploads/banner/')?>/<?=$o->imagem?>" alt="">
            </div>
          </div>
        <?
            }
          }
        ?>
        <!-- End First slide -->

       
      </div><!-- /top-slider -->
    </section>
  </div>
    <!--=========== END SLIDER SECTION ================-->
	  
	  <div class="wrapper2 col4">
  <div id="latest">
    <ul>
	  <?php if($aNoticias){
	  	$i=0;
	  	foreach ($aNoticias as $o){
	  		$i++;
        $conteudo = substr($o->conteudo,0,10);
        $urlImg = 'http://localhost/sitecasa/index.php/portal/noticias';
        $urlImg .= '/' . $o->alias;
	  		?>
      <li <?= ($i % 3 == 0)? 'class="last"':'' ?>>
        <h2><?=$o->titulo ?></h2>
        <p class="imgl">
        <a href="<?=$urlImg?>">
        <img src="<?=base_url('assets/uploads/postagem') . '/' .  $o->img_destaque?>" alt="#" width="259" height="200">
        </a>
        </p>
        <p><br><br>
          <a href="<?=$urlImg?>">Leia Mais »</a>
         </p>
      </li>
	  		
	  		<?php 
	  	}
	  }
	  	
	  	?>
	  
    </ul>
    <br class="clear">
  </div>
</div>
      
<p></p>

    </div>
	
    <!--##################################################################################################################- -->
    
    <div class="column">      
      <div class="sponsors">
        <h2>Parceiros</h2>
        <div class="b_125">
          <ul>
            <li><a href="http://www3.iskcon.com.br/" target="_blank"><img src="<?=base_url('site/')?>/images/iskcon_brasil.jpg" alt=""></a></li>
            <li><a href="http://vedabase.com/pt-br/bg/introduction" target="_blank"><img src="<?=base_url('site/')?>/images/vedabase.jpg" alt=""></a></li>
            <li><a href="http://voltaaosupremo.com/" target="_blank"><img src="<?=base_url('site/')?>/images/volta_ao_supremo.jpg" alt=""></a></li>
            <li><a href="http://www.bbt.org.br/bbtorg/" target="_blank"><img src="<?=base_url('site/')?>/images/bbt.jpg" alt=""></a></li>
            <li><a href="http://giridhari.com.br/" target="_blank"><img src="<?=base_url('site/')?>/images/giridhari.jpg" alt=""></a></li><br>
            <!--- <li class="last"><a href="#"><img src="images/demo/125x125.gif" alt="" /></a></li>-->
          </ul>
          <div class="clear"></div>
        </div>
      </div>
      
      <div class="sponsors">
        <h2>Colaboradores</h2>
        <div class="b_125">
          <ul>
        
        <li><a href="http://www.restaurantegovinda.com.br/" target="_blank"><img src="<?=base_url('site/')?>/images/govinda.jpg" alt=""></a></li>
        <li><a href="http://www.espacovidabelem.com.br/" target="_blank"><img src="<?=base_url('site/')?>/images/espaco_vida.jpg" alt=""></a></li>
        <li><a href="http://lotusproweb.com.br/" target="_blank"><img src="<?=base_url('site/')?>/images/lotus_web.jpg" alt=""></a></li>
            
           
        <div class="clear"></div>
        </ul></div>
      </div>
      
    </div>
    <br class="clear">
  </div>
</div>
    </div>
    <!--=========== Start Footer SECTION ================-->
    <footer id="footer">
      <!-- Start Footer Top -->
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="single-footer-widget">
                <div class="section-heading">
                <h2>Quem somos</h2>
                <div class="line"></div>
              </div>           
   <p>A CASA DO AUTISTA é o nome fantasia da Associação de Pais e Amigos de Autistas do Pará, que nasceu do
								sentimento de angústia de alguns pais de autistas inconformados com a escassa oferta de atendimento
								qualificado a seus filhos no estado do Pará, com o fechamento de uma das principais referências...<br>
								</p><center><a href="http://www.casadoautista.com.br/quemsomos.html">Leia Mais</a></center><p></p>              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="single-footer-widget">
                <div class="section-heading">
                <h2>Terapias</h2>
                <div class="line"></div>
              </div>
              <ul class="footer-service">
                <li><a href="http://www.casadoautista.com.br/psicologia.html"><span class="fa fa-check"></span>Psicologia</a></li>
                <li><a href="http://www.casadoautista.com.br/terapiaocupacional.html"><span class="fa fa-check"></span>Terapia Ocupacional</a></li>
                <li><a href="http://www.casadoautista.com.br/fonoaudiologia.html"><span class="fa fa-check"></span>Fonoaudiologia</a></li>
                <li><a href="http://www.casadoautista.com.br/nutricao.html"><span class="fa fa-check"></span>Nutrição</a></li>
                <li><a href="http://www.casadoautista.com.br/psicopedagogia.html"><span class="fa fa-check"></span>Psicopedagogia</a></li>
                <li><a href="http://www.casadoautista.com.br/musicoterapia.html"><span class="fa fa-check"></span>Musicoterapia</a></li>
              </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="single-footer-widget">
                <div class="section-heading">
                <h2>Tags</h2>
                <div class="line"></div>
              </div>
                <ul class="tag-nav">
                  <li><a href="http://www.casadoautista.com.br/autismo.html">Autismo</a></li>
                  <li><a href="http://www.casadoautista.com.br/abordagens.html">Abordagens</a></li>
                  <li><a href="http://www.casadoautista.com.br/escalas.html">Escalas</a></li>
                  <li><a href="http://www.casadoautista.com.br/adote.html">Doe</a></li>
                  <li><a href="http://www.casadoautista.com.br/gallery.html">Fotos</a></li>
<!--                   <li><a href="index.html">Artigos</a></li>
 -->                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="single-footer-widget">
                <div class="section-heading">
                <h2>Contato</h2>
                <div class="line"></div>
              </div>
              <address class="contact-info">
               <p><span class="fa fa-home"></span>Rua Esperanto, 270, Marambaia - Belém/PA - Brasil</p>
<!--                 <p><span class="fa fa-phone"></span>   (91)3256-7225 </p>-->
				<p><span class="fa fa-phone"></span>   (91)98800-2002/<br><span></span><span></span>   (91) 99212-2536/<br><span></span><span></span>   (91) 98217-5218 -<br>     <span></span><span>
				</span><span></span>   Marcelo Santos da Silva:<br><span></span><span></span>   Presidente</p>
                <p><span class="fa fa-envelope"></span>contato@casadoautista.com.br</p>
              </address>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Start Footer Middle -->
      <div class="footer-middle">
        <div class="container">
          <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="footer-copyright">
			                <p>©2015 <a href="http://www.casadoautista.com.br/index.html" target="_blank">Casa do Autista</a> • Design por <a href="http://lotusproweb.com.br/" target="_blank">Lótus Projetos Web </a></p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="footer-social">              
                <a href="https://www.facebook.com/casadoautista/" target="_blank"><span class="fa fa-facebook"></span></a>
                <a href="http://www.casadoautista.com.br/home2.html#"><span class="fa fa-twitter"></span></a>
                <a href="http://www.casadoautista.com.br/home2.html#"><span class="fa fa-google-plus"></span></a>
                <a href="http://www.casadoautista.com.br/home2.html#"><span class="fa fa-linkedin"></span></a>     
            </div>
          </div>
        </div>
        </div>
      </div>
      <!-- Start Footer Bottom -->
      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
<!--                <p>Design  <a rel="nofollow" href="http://lotusproweb.com.br/" target="_blank">Lotus Projetos Web</a></p>
 -->             </div>
          </div>
        </div>
      </div>
    </footer>
    <!--=========== End Footer SECTION ================-->

    <!-- jQuery Library  -->
    <script src="<?= base_url('site/')?>/js/jquery.js"></script>    
    <!-- Bootstrap default js -->
    <script src="<?= base_url('site/')?>/js/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="<?= base_url('site/')?>/js/slick.min.js"></script>    
    <script type="text/javascript" src="<?= base_url('site/')?>/js/modernizr.custom.79639.js"></script>      
    <!-- counter -->
    <script src="<?= base_url('site/')?>/js/waypoints.min.js"></script>
    <script src="<?= base_url('site/')?>/js/jquery.counterup.min.js"></script>
    <!-- Doctors hover effect -->
    <script src="<?= base_url('site/')?>/js/snap.svg-min.js"></script>
    <script src="<?= base_url('site/')?>/js/hovers.js"></script>
    <!-- Photo Swipe Gallery Slider -->
    <script src='<?= base_url('site/')?>/js/photoswipe.min.js'></script>
    <script src='<?= base_url('site/')?>/js/photoswipe-ui-default.min.js'></script>    
    <script src="<?= base_url('site/')?>/js/photoswipe-gallery.js"></script>

    <!-- Custom JS -->
    <script src="<?= base_url('site/')?>/js/custom.js"></script>
     
  </body>
</html>
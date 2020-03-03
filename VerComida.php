<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-escale=1">
    <link rel="stylesheet" type="text/css" href="swiper.min.css">
    <link rel="stylesheet" type="text/css" href="estilos.css">
   
    <title>Menú</title>
</head>
<body>
    <div class="swiper-container">
    	<div class="swiper-wrapper">
    		<div class="swiper-slide">
    			<div class="imgBx">
    				<img src="https://images.unsplash.com/photo-1526743891018-fc876a01332c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80">
    			</div>
    			<div class="details">
    				<h3>Lomo Ahumado<br><span>Con una cubierta de Salsa de naranja</span></h3>
    			</div>
    		</div>
    		<div class="swiper-slide">
    			<div class="imgBx">
    				<img src="https://images.unsplash.com/photo-1544025162-d76694265947?ixlib=rb-1.2.1&auto=format&fit=crop&w=1049&q=80">
    			</div>
    			<div class="details">
    				<h3>Filete Rojo<br><span>Asado al sarten</span></h3>
    			</div>
    		</div>
    		<div class="swiper-slide">
    			<div class="imgBx">
    				<img src="https://images.unsplash.com/photo-1513134979696-1664819cc84e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1049&q=80">
    			</div>
    			<div class="details">
    				<h3>Rollos de carne<br><span>Relleno de Alcaparras</span></h3>
    			</div>
    		</div>
    	</div>
    	<div class="swiper-pagination"></div>
    </div>
    <script type="text/javascript" src="swiper.m ini.css"></script>
    <script>
    	var swiper = new swiper('.swiper-container', {
    		effect: 'coverflow',
    		grabCursor: true,
    		centeredSlides: true;
    		slidesPerView: auto;
    		coverflowEffect: {
    			rotate: 50,
    			stretch: 0,
    			depth: 100,
    			midifier: 1,
    			slideShadows: true,
    		},
    		pagination: {
    			el: '.swiper-pagination',
    		},
    	});
    </script>
</body>
</html>
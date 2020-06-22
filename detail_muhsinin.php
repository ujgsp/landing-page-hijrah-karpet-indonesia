<?php  
include 'templates/header.php';
include 'templates/banner_konten.php';
?>
	<!--single-page-->
	<div class="single-page main-grid-border">
		<div class="container">
			<ol class="breadcrumb" style="margin-bottom: 5px;">
				<li><a href="index.php">Home</a></li>
				<li><a href="categories.html#parentVerticalTab4">Kategori</a></li>
				<!-- <li class="active"><a href="mobiles.html">Mobiles</a></li> -->
				<li class="active">Karpet Roll Muhsinin</li>
			</ol>
			<div class="product-desc">
				<div class="col-md-7 product-view">
					<h2>Karpet Roll Muhsinin - Warna Hijau </h2>
					<!-- <p> <i class="glyphicon glyphicon-map-marker"></i><a href="#">state</a>, <a href="#">city</a>| Added at 06:55 pm, Ad ID: 987654321</p> -->
					
					<div class="flexslider">
						<ul class="slides" id="slides_1">
							<li data-thumb="img/produk/muhsinin/1.jpeg">
								<img src="img/produk/muhsinin/1.jpeg" style="width: 70%; border-radius: 10px;" />
							</li>
							<li data-thumb="img/produk/muhsinin/2.jpeg">
								<img src="img/produk/muhsinin/2.jpeg" style="width: 70%; border-radius: 10px;" />
							</li>
							<!-- <li data-thumb="img/produk/raudah/3.jpeg">
								<img src="img/produk/raudah/3.jpeg" style="width: 70%; border-radius: 10px;" />
							</li> -->
							<!-- <li data-thumb="produk/raudah/3.jpeg">
								<img src="produk/raudah/3.jpeg" style="width: 50%; border-radius: 10px;"/>
							</li> -->
						</ul>
					</div>
					<!-- FlexSlider -->
					  <script defer src="js/jquery.flexslider.js"></script>
					<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

						<script>
					// Can also be used with $(document).ready()
					$(window).load(function() {
					  $('.flexslider').flexslider({
						animation: "slide",
						controlNav: "thumbnails"
					  });
					});
					</script>
					<!-- //FlexSlider -->
					<div class="product-details">
						<h4>Nama Produk : <a href="#">Karpet Roll Muhsinin</a></h4>
						<h4>Harga: <strong>Rp. 525.000 / m</strong></h4>
						<p><strong>Ukuran </strong>: Lebar 120 cm, panjang 30 m</p>
						<p><strong>Bahan </strong>: Polypropylene heatset, bahan lembut dan tipis</p>
						<p><strong>Ketebalan </strong>: 13 mm</p>
						<p><strong>Warna </strong>: Warna Hijau</p>
						<!-- <p><strong>Keterangan Lainnya</strong> : Cocok untuk OUTDOOR</p> -->
					
					</div>
				</div>
				<div class="col-md-5 product-details-grid">
					<div class="item-price" style="border-radius: 20px;">
						<div class="product-price">
							<p class="p-price">Harga</p>
							<h3 class="rate" style="font-size: 20px">Rp. 525.000 / m</h3>
							<!-- <h4>Rp. 141.750 / m</h4> -->
							<div class="clearfix"></div>
						</div>
						<div class="condition">
							<p class="p-price">Kondisi</p>
							<h4>Baru</h4>
							<div class="clearfix"></div>
						</div>
						<div class="itemtype">
							<p class="p-price">Ketebalan</p>
							<h4>13 mm</h4>
							<div class="clearfix"></div>
						</div>

					</div>
					<?php  
					include 'templates/sidebar_detail.php';
					?>
				</div>
			<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--//single-page-->
	<!--footer section start-->		
<?php  
include 'templates/footer.php';
// include 'templates/banner_2.php';
?>
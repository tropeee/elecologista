<!DOCTYPE html>
<html class="side-header-hamburguer-sidebar side-header-above side-header-hamburguer-sidebar-narrow-bar side-header-hide">
<head>
	@include('partials.header')
</head>
<body>

@include('partials.sidebar')
@include('partials.navbar')

<div role="main" class="main">

	<div class="slider-container rev_slider_wrapper" style="height: 100vh;">
		<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1170, 'gridheight': 700, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'navigation' : {'arrows': { 'enable': true, 'style': 'arrows-style-1 arrows-primary' }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
			<ul>
				<li class="slide-overlay slide-overlay-gradient slide-overlay-gradient-animated slide-overlay-level-8" data-transition="fade">
					<img src="{{ ('img/banner1.jpg') }}"
						 alt=""
						 data-bgposition="center center"
						 data-bgfit="cover"
						 data-bgrepeat="no-repeat"
						 class="rev-slidebg">

					<div class="tp-caption text-color-light font-weight-normal"
						 data-frames='[{"delay":700,"speed":1000,"frame":"0","from":"opacity:0;y:-50%;","to":"opacity:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
						 data-x="center"
						 data-y="center" data-voffset="['-100','-100','-100','-160']"
						 data-fontsize="['20','20','20','40']"
						 data-lineheight="['25','25','25','45']">PERIÓDICO OFICIAL</div>

					<div class="tp-caption bg-color-light"
						 data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.4;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
						 data-x="center"
						 data-y="center" data-voffset="['-65','-65','-65','-98']"
						 data-width="['362','362','362','575']"
						 data-height="8"></div>

					<div class="tp-caption bg-color-light"
						 data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"opacity:0;x:50%;","to":"opacity:0.4;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
						 data-x="center"
						 data-y="center" data-voffset="['65','65','65','98']"
						 data-width="['362','362','362','575']"
						 data-height="8"></div>

					<div class="tp-caption bg-color-light"
						 data-frames='[{"delay":1850,"speed":1000,"frame":"0","from":"opacity:0;y:-50%;","to":"opacity:0.4;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
						 data-x="center" data-hoffset="['-185','-185','-185','-284']"
						 data-y="center"
						 data-width="8"
						 data-height="['138','138','138','190']"></div>

					<div class="tp-caption bg-color-light"
						 data-frames='[{"delay":1850,"speed":1000,"frame":"0","from":"opacity:0;y:50%;","to":"opacity:0.4;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
						 data-x="center" data-hoffset="['185','185','185','284']"
						 data-y="center"
						 data-width="8"
						 data-height="['138','138','138','190']"></div>

					<h4 class="tp-caption font-weight-extra-bold text-color-light"
						data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
						data-x="center"
						data-y="center"
						data-fontsize="['55','55','55','85']"
						data-lineheight="['105','105','105','155']">¡EL ECOLOGISTA!
					</h4>

					<div class="tp-caption font-weight-light text-color-light ws-normal text-center"
						 data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2300,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
						 data-x="center"
						 data-y="center" data-voffset="['110','110','110','200']"
						 data-width="['325','325','325','550']"
						 data-fontsize="['18','18','18','40']"
						 data-lineheight="['26','26','26','45']">Del Partido Verde del Estado de México</div>

				</li>
			</ul>
		</div>
	</div>

	<section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0 appear-animation" data-appear-animation="fadeIn">
		<div class="row justify-content-center fea-x">
		<div class="container my-3">
			<div class="post-image">
				<div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
					<div class="row mx-0">
						<div class="col-6 col-md-4 p-0">
							<a href="{{ asset('img/portadas/por1.jpg') }}">
								<span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
									<span class="thumb-info-wrapper">
										<img src="{{ asset('img/portadas/por1.jpg') }}" class="img-fluid" alt="">
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
										</span>
									</span>
								</span>
							</a>
						</div>
						<div class="col-6 col-md-4 p-0">
							<a href="{{ asset('img/portadas/por2.jpg') }}">
								<span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
									<span class="thumb-info-wrapper">
										<img src="{{ asset('img/portadas/por2.jpg') }}" class="img-fluid" alt="">
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
										</span>
									</span>
								</span>
							</a>
						</div>
						<div class="col-6 col-md-4 p-0">
							<a href="{{ asset('img/portadas/por3.png') }}">
								<span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
									<span class="thumb-info-wrapper">
										<img src="{{ asset('img/portadas/por3.png') }}" class="img-fluid" alt="">
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
										</span>
									</span>
								</span>
							</a>
						</div>
						<div class="col-6 col-md-4 p-0">
							<a href="{{ asset('img/portadas/por4.png') }}">
								<span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
								<span class="thumb-info-wrapper">
								<img src="{{ asset('img/portadas/por4.png') }}" class="img-fluid" alt="">
								<span class="thumb-info-action">
								<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
								</span>
								</span>
								</span>
							</a>
						</div>
						<div class="col-6 col-md-4 p-0">
							<a href="{{ asset('img/portadas/por5.jpg') }}">
								<span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
								<span class="thumb-info-wrapper">
									<img src="{{ asset('img/portadas/por5.jpg') }}" class="img-fluid" alt="">
								<span class="thumb-info-action">
								<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
								</span>
								</span>
								</span>
							</a>
						</div>
						<div class="col-6 col-md-4 p-0">
							<a href="{{ asset('img/portadas/por6.jpg') }}">
								<span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
									<span class="thumb-info-wrapper">
										<img src="{{ asset('img/portadas/por6.jpg') }}" class="img-fluid" alt="">
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
										</span>
									</span>
								</span>
							</a>
						</div>
						<div class="col-6 col-md-4 p-0">
							<a href="{{ asset('img/portadas/por7.jpg') }}">
								<span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
									<span class="thumb-info-wrapper">
										<img src="{{ asset('img/portadas/por7.jpg') }}" class="img-fluid" alt="">
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
										</span>
									</span>
								</span>
							</a>
						</div>
						<div class="col-6 col-md-4 p-0">
							<a href="{{ asset('img/portadas/por8.jpg') }}">
								<span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
									<span class="thumb-info-wrapper">
										<img src="{{ asset('img/portadas/por8.jpg') }}" class="img-fluid" alt="">
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
										</span>
									</span>
								</span>
							</a>
						</div>
						<div class="col-6 col-md-4 p-0">
							<a href="{{ asset('img/portadas/por9.jpg') }}">
								<span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
									<span class="thumb-info-wrapper">
										<img src="{{ asset('img/portadas/por9.jpg') }}" class="img-fluid" alt="">
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
										</span>
									</span>
								</span>
							</a>
						</div>
						<div class="col-6 col-md-4 p-0">
							<a href="{{ asset('img/portadas/por10.jpg') }}">
								<span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
									<span class="thumb-info-wrapper">
										<img src="{{ asset('img/portadas/por10.jpg') }}" class="img-fluid" alt="">
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
										</span>
									</span>
								</span>
							</a>
						</div>
						<div class="col-6 col-md-4 p-0">
							<a href="{{ asset('img/portadas/por11.jpg') }}">
								<span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
									<span class="thumb-info-wrapper">
										<img src="{{ asset('img/portadas/por11.jpg') }}" class="img-fluid" alt="">
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
										</span>
									</span>
								</span>
							</a>
						</div>
						<div class="col-6 col-md-4 p-0">
							<a href="{{ asset('img/portadas/por12.jpg') }}">
								<span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
									<span class="thumb-info-wrapper">
										<img src="{{ asset('img/portadas/por12.jpg') }}" class="img-fluid" alt="">
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
										</span>
									</span>
								</span>
							</a>
						</div>
						<div class="col-6 col-md-4 p-0">
							<a href="{{ asset('img/portadas/por13.jpg') }}">
								<span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
									<span class="thumb-info-wrapper">
										<img src="{{ asset('img/portadas/por13.jpg') }}" class="img-fluid" alt="">
										<span class="thumb-info-action">
											<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
										</span>
									</span>
								</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>


		</div>
	</section>


	{{--<div class="container">--}}
	{{--<div class="row align-items-center text-center text-md-left py-5 my-5">--}}
	{{--<div class="col-lg-7 mb-5 mb-lg-0">--}}
	{{--<h2 class="font-weight-bold text-6 line-height-1 ls-0 mb-4">About Our Clients</h2>--}}
	{{--<p class="text-4">There are so many styles you can combine that is possible to create almost any kind of layout based on Porto Template.</p>--}}
	{{--<p class="mb-4 pr-md-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo.</p>--}}
	{{--<a href="#" class="btn btn-dark font-weight-semibold rounded-0 text-2 btn-px-5 btn-py-2">LEARN MORE</a>--}}
	{{--</div>--}}
	{{--<div class="col-lg-5 text-center">--}}
	{{--<div class="row justify-content-center">--}}
	{{--<div class="col-9 col-md-4 px-0 mb-4 mb-md-0">--}}
	{{--<img class="img-fluid hover-effect-3" src="img/logos/logo-1.png" alt="">--}}
	{{--</div>--}}
	{{--<div class="col-9 col-md-4 px-0 mb-4 mb-md-0">--}}
	{{--<img class="img-fluid hover-effect-3" src="img/logos/logo-4.png" alt="">--}}
	{{--</div>--}}
	{{--<div class="col-9 col-md-4 px-0 mb-4 mb-md-0">--}}
	{{--<img class="img-fluid hover-effect-3" src="img/logos/logo-3.png" alt="">--}}
	{{--</div>--}}
	{{--</div>--}}
	{{--<div class="row justify-content-center py-md-3 my-md-4">--}}
	{{--<div class="col-9 col-md-4 px-0 mb-4 mb-md-0">--}}
	{{--<img class="img-fluid hover-effect-3" src="img/logos/logo-5.png" alt="">--}}
	{{--</div>--}}
	{{--<div class="col-9 col-md-4 px-0 mb-4 mb-md-0">--}}
	{{--<img class="img-fluid hover-effect-3" src="img/logos/logo-6.png" alt="">--}}
	{{--</div>--}}
	{{--<div class="col-9 col-md-4 px-0 mb-4 mb-md-0">--}}
	{{--<img class="img-fluid hover-effect-3" src="img/logos/logo-7.png" alt="">--}}
	{{--</div>--}}
	{{--</div>--}}
	{{--<div class="row justify-content-center">--}}
	{{--<div class="col-9 col-md-4 px-0">--}}
	{{--<img class="img-fluid hover-effect-3" src="img/logos/logo-2.png" alt="">--}}
	{{--</div>--}}
	{{--</div>--}}
	{{--</div>--}}
	{{--</div>--}}
	{{--</div>--}}
	<hr class="my-0">
	<div class="row" style="background: #0a0a0a;">
		<div class="container">
			<div class="row justify-content-center py-5 my-5">
				<div class="col-lg-8 text-center">
					<h2 class="text-8 line-height-4 text-lg-12 text-xs-11 line-height-lg-1 font-weight-semibold ls-0 mt-5" style="color: white;">¡Envíanos tu artículo!</h2>
					{{--<p class="text-4 font-weight-normal px-3 mb-5">Porto Admin Integration - 100% Fully Responsive - Retina Ready - Google Fonts - Super Fast Top-Level Support - Customizable - RTL Support - SEO Friendly</p>--}}
					<a href="/post/convocatoria" target="_blank" class="btn btn-primary px-5 py-3 font-weight-semibold text-color-light mt-3 mb-5" >LEER CONVOCATORIA <i class="fas fa-arrow-right ml-2"></i></a>

				</div>
			</div>
		</div>
	</div>
	<hr class="my-0">
	<div class="container py-4 my-5">
	<div class="row text-center mb-5">
		@foreach($posts as $post)
			<div class="col-md-3 text-center">
				@if($post->id!=6)
				<a href="/post/{{ $post->slug }}" class="nav-link font-weight-semibold text-2">
					<!--<img src="{{ Voyager::image( $post->image ) }}" style="width:100%">-->
					<img src="{{$post->image}}" style="width:100%">
					<span >{{ $post->title }}</span>
				</a>
				@endif
			</div>
		@endforeach
	</div>
	</div>
	<hr class="my-0">
	<div class="container py-4 my-5">
		<div class="row text-center mb-5">
			<div class="col-md-10 mx-md-auto">
				<h1 class="word-rotator-title font-weight-bold text-8 mb-3 appear-animation" data-appear-animation="fadeInUpShorter">
					CONSEJO EDITORIAL
				</h1>
				<p class="lead text-4 font-weight-normal appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
					{{--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo. vamus suscipit molestie vestibulum.--}}
				</p>
			</div>
		</div>
		<div class="row justify-content-center counters counters-lg">
			<div class="col-md-3 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="500">
				<div class="box-content">
					<img src="{{ asset('img/pepe.jpg') }}" alt="..." class="img-thumbnail img-fluid">
					<strong class="text-color-dark font-weight-extra-bold text-5 text-md text-center">José Couttolenc Buentello</strong>
				</div>
			</div>
			<div class="col-md-4 col-lg-3 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
				<div class="box-content">
					<img src="{{ asset('img/IanKarla.jpeg') }}" class="img-thumbnail img-fluid">
					<strong class="text-color-dark font-weight-extra-bold text-5 text-md text-center">Ian Karla Schleske de Ariño

					</strong>
				</div>
			</div>
			<div class="col-md-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500">
				<div class="box-content">
					<img src="{{ asset('img/paco.jpg') }}" alt="..." class="img-thumbnail img-fluid">
					<strong class="text-color-dark font-weight-extra-bold text-5 text-md text-center">Francisco Serrano González </strong>
				</div>
			</div>
		</div>
	</div>
	<hr class="my-0">
	<div class="container">
		<div class="row py-4 my-5">
			<div class="col appear-animation" data-appear-animation="fadeInUpShorter">

				<div class="owl-carousel owl-theme nav-bottom rounded-nav mb-0" data-plugin-options="{'items': 1, 'loop': false, 'autoHeight': true}">
					<div>
						<div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark mb-0">
							<div class="testimonial-author">
								<img src="{{ asset('img/logoec1.png') }}" class="img-fluid rounded-circle" alt="">
							</div>
							<blockquote>
								<p class="text-color-dark text-5 line-height-5 mb-0">Si realmente amas la naturaleza, encontrarás la belleza en todas partes.</p>
							</blockquote>
							<div class="testimonial-author">
								<p><strong class="font-weight-extra-bold text-2">- Vincent Van Gogh</strong></p>
							</div>
						</div>
					</div>
					<div>
						<div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark mb-0">
							<div class="testimonial-author">
								<img src="{{ asset('img/logoec1.png') }}" class="img-fluid rounded-circle" alt="">
							</div>
							<blockquote>
								<p class="text-color-dark text-5 line-height-5 mb-0">La naturaleza hace grandes obras sin esperar recompensa alguna</p>
							</blockquote>
							<div class="testimonial-author">
								<p><strong class="font-weight-extra-bold text-2">- Alexandr I. Herzen</strong></p>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0 appear-animation" data-appear-animation="fadeIn">
		<div class="container my-3">
			<div class="row">
				<div class="col text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
					<h2 class="font-weight-bold line-height-1 mb-3">EL ECOLOGISTA</h2>
					<p class="text-4 mb-5">Últimas portadas publicadas</p>
				</div>
			</div>
			<div class="row justify-content-center pb-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
				<div class="col-sm-12 col-md-8 col-lg-6">
					<div class="card border-0 caz">
						<div class="card-body p-5">
							<div data-configid="34492481/66821303" class="issuuembed"></div>
						</div>
					</div>
				</div>
				<div class="col-sm-9 col-md-8 col-lg-6">
					<div class="card border-0 caz">
						<div class="card-body p-5">
							{{--<div data-configid="34492481/66821303" style="width:110%; height:500px;" class="issuuembed"></div>--}}
							<div data-configid="34492481/66821465"  class="issuuembed"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-center pb-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
				<div class="col-sm-9 col-md-8 col-lg-6">
					<div class="card border-0 caz">
						<div class="card-body p-5">
							<div data-configid="34492481/66821511"  class="issuuembed"></div>
						</div>
					</div>
				</div>
				<div class="col-sm-9 col-md-8 col-lg-6">
					<div class="card border-0 caz">
						<div class="card-body p-5">
							<div data-configid="34492481/66821525"  class="issuuembed"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-center pb-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
				<div class="col-sm-9 col-md-8 col-lg-6">
					<div class="card border-0 caz">
						<div class="card-body p-5">
							<div data-configid="34492481/68257768" class="issuuembed"></div>
						</div>
					</div>
				</div>
				<div class="col-sm-9 col-md-8 col-lg-6">
					<div class="card border-0 caz">
						<div class="card-body p-5">
							<div data-url="https://issuu.com/elecologista/docs/el_ecologista_n.6" class="issuuembed"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-center pb-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
				<div class="col-sm-9 col-md-8 col-lg-6">
					<div class="card border-0 caz">
						<div class="card-body p-5">
							<div data-url="https://issuu.com/elecologista/docs/elecologista7" class="issuuembed"></div>
						</div>
					</div>
				</div>
				<div class="col-sm-9 col-md-8 col-lg-6">
					<div class="card border-0 caz">
						<div class="card-body p-5">
							<div data-url="https://issuu.com/elecologista/docs/el_ecologista8" class="issuuembed"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-center pb-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
				<div class="col-sm-9 col-md-8 col-lg-6">
					<div class="card border-0 caz">
						<div class="card-body p-5">
							<div data-url="https://issuu.com/elecologista/docs/el_ecologista__mayo_2020" class="issuuembed"></div>
						</div>
					</div>
				</div>
				<div class="col-sm-9 col-md-8 col-lg-6">
					<div class="card border-0 caz">
						<div class="card-body p-5">
							<div data-url="https://issuu.com/elecologista/docs/el_ecologista_no_10" class="issuuembed"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-center pb-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
				<div class="col-sm-9 col-md-8 col-lg-6">
					<div class="card border-0 caz">
						<div class="card-body p-5">
							<div data-url="https://issuu.com/elecologista/docs/el_20ecologista_2011" class="issuuembed"></div>
						</div>
					</div>
				</div>
				<div class="col-sm-9 col-md-8 col-lg-6">
					<div class="card border-0 caz">
						<div class="card-body p-5">
							<div data-url="https://issuu.com/elecologista/docs/10-12-2020_ecologista_12" class="issuuembed"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-center pb-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
				<div class="col-sm-9 col-md-8 col-lg-6">
					<div class="card border-0 caz">
						<div class="card-body p-5">
							<div data-url="https://issuu.com/elecologista/docs/01_ecologista_2021_digital" class="issuuembed"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>


	@include('partials.footer')
</div>

<!-- Vendor -->
@include('partials.includeJs')
</body>
</html>


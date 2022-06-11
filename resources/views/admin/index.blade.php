@include('admin.layout.header')
<body>
    <!--*******************
        Preloader start
    ********************-->
	@include('admin.layout.preloader')
    <!--*******************
        Preloader end
    ********************-->
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <!--**********************************
            Nav header start
        ***********************************-->
        @include('admin.layout.navbar')
        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('admin.layout.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12 col-xxl-12">
						<div class="row">
							<div class="col-xl-4 col-xxl-6 col-lg-4 col-sm-6">
								<div class="card">
									<div class="card-body">
										<div class="d-flex align-items-end">
											<div>
												<p class="fs-14 mb-1">Articles</p>
												<span class="fs-35 text-black font-w600">{{$TotalArticles}}</span>
											</div>
										</div>
									</div>
								</div>
							</div>
                            <div class="col-xl-4 col-xxl-6 col-lg-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-end">
                                            <div>
                                                <p class="fs-14 mb-1">Categories</p>
                                                <span class="fs-35 text-black font-w600">{{$TotalCategories}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-xxl-6 col-lg-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-end">
                                            <div>
                                                <p class="fs-14 mb-1">Clubs</p>
                                                <span class="fs-35 text-black font-w600">{{$TotalClubs}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->
    <!--**********************************
        Scripts
    ***********************************-->
	@include('admin.layout.scripts')

	<script>
		function carouselReview(){
			/*  event-bx one function by = owl.carousel.js */
			jQuery('.event-bx').owlCarousel({
				loop:true,
				margin:30,
				nav:true,
				center:true,
				autoplaySpeed: 3000,
				navSpeed: 3000,
				paginationSpeed: 3000,
				slideSpeed: 3000,
				smartSpeed: 3000,
				autoplay: false,
				navText: ['<i class="fa fa-caret-left" aria-hidden="true"></i>', '<i class="fa fa-caret-right" aria-hidden="true"></i>'],
				dots:true,
				responsive:{
					0:{
						items:1
					},
					720:{
						items:2
					},

					1150:{
						items:3
					},

					1200:{
						items:2
					},
					1749:{
						items:3
					}
				}
			})
		}
		jQuery(window).on('load',function(){
			setTimeout(function(){
				carouselReview();
			}, 1000);
		});
	</script>
</body>
</html>

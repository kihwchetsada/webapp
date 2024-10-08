@extends('layout.frontend.master')

@section('content')

<!--======================================
=            Featured Article            =
=======================================-->
<section class="section featured-article">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<article class="featured">
					<!-- Image -->
					<div class="image">
						<a href="blog-single.html"><img class="img-fluid" src="asset/frontend/images/feature/featured-article.jpg" alt="featured-article"></a>
					</div>
					<!-- written-content -->
					<div class="content">
						<!-- Post Title -->
						<h2><a href="blog-single.html">Introducing New IOS App</a></h2>
						<!-- Tags -->
						<ul class="list-inline post-tag">
							<li class="list-inline-item">
								<img class="img-fluid" src="asset/frontend/images/testimonial/feature-testimonial-thumb.jpg" alt="author-thumb">
							</li>
							<li class="list-inline-item">
								<a href="#">Thomas Johnson</a>
							</li>
							<li class="list-inline-item">
								August 8, 2017
							</li>
						</ul>
						<!-- Post Body -->
						<p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed,convallis at tellus. Vivamus suscipit tortor eget felis porttitor volutpat.Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent sapien massa, convallis</p>
						<a class="btn btn-main-sm" href="blog-single.html">Read more</a>
					</div>
				</article>
			</div>
		</div>
	</div>
</section>

<!--====  End of Featured Article  ====-->
<section class="post-grid section pt-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6">
				
			</div>
			<div class="col-lg-4 col-md-6">
			
			</div>
			<div class="col-lg-4 col-md-6">
				
			</div>
			<div class="col-lg-4 col-md-6">
				
			</div>
			<div class="col-lg-4 col-md-6">
			
			</div>
			<div class="col-lg-4 col-md-6">
				
			</div>
			<div class="col-12">
			</div>
			<div class="col-lg-4 col-md-6">
				
			</div>
			<div class="col-lg-4 col-md-6">
				
			</div>
			<div class="col-lg-4 col-md-6">
				
			</div>
			<div class="col-12">
				<!-- Pagination -->
				<nav class="pagination-nav">
				  <ul class="pagination">
				    <li class="page-item active"><a class="page-link" href="#">1</a></li>
				    <li class="page-item"><a class="page-link" href="#">2</a></li>
				    <li class="page-item"><a class="page-link" href="#">3</a></li>
				    <li class="page-item">
				      <a class="page-link" href="#" aria-label="Next">
				        <span aria-hidden="true"><i class="ti-angle-right"></i></span>
				        <span class="sr-only">Next</span>
				      </a>
				    </li>
				  </ul>
				</nav>
			</div>
		</div>
	</div>
</section>

@endsection

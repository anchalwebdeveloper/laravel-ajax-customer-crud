
@extends('frontend.layouts.main')

@section('main-container')
    	<!-- Page title -->
    	<div class="page-title parallax parallax1">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<div class="page-title-heading">
    						<h1 class="title">Blog List</h1>
    					</div><!-- /.page-title-heading -->
    					<div class="breadcrumbs">
    						<ul>
    							<li><a href="index.html">Home</a></li>
    							<li><a href="blog-grid.html">Blog</a></li>
    						</ul>
    					</div><!-- /.breadcrumbs -->
    				</div><!-- /.col-md-12 -->
    			</div><!-- /.row -->
    		</div><!-- /.container -->
    	</div><!-- /.page-title -->

    	<!-- Blog posts -->
    	<section class="blog-posts grid-posts">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<div class="post-wrap margin-bottom-26">
                            <div class="grid three">
                               
                                <article class="post clearfix">
                                    <div class="featured-post">
                                        <img src="{{url('frontend/images/blog/11.jpg')}}" alt="image">
                                    </div>
                                    <div class="content-post">
                                        <div class="title-post">
                                            <h2><a href="blog-detail.html">Grenfell Remembered, Six Months On</a></h2>
                                        </div><!-- /.title-post -->
                                        <div class="entry-post">
                                            <p>MARKING exactly six months since the devastating blaze at Grenfell Tower, in which 71 people died and hundreds more lost...</p>
                                            <div class="more-link">
                                                <a href="blog-detail.html">Read More</a>
                                            </div>
                                        </div>
                                    </div><!-- /.content-post -->
                                </article><!-- /.post -->

                                <article class="post clearfix">
                                    <div class="featured-post">
                                        <img src="{{url('frontend/images/blog/12.jpg')}}" alt="image">
                                    </div>
                                    <div class="content-post">
                                        <div class="title-post">
                                            <h2><a href="blog-detail.html">The Design Museum Honours...</a></h2>
                                        </div><!-- /.title-post -->
                                        <div class="entry-post">
                                            <p>When the Tunisian-born couturier Azzedine Alaïa passed away in Paris on November 18, tributes began pouring in...</p>
                                            <div class="more-link">
                                                <a href="blog-detail.html">Read More</a>
                                            </div>
                                        </div>
                                    </div><!-- /.content-post -->
                                </article><!-- /.post -->

                                <article class="post clearfix">
                                    <div class="featured-post">
                                        <img src="{{url('frontend/images/blog/13.jpg')}}" alt="image">
                                    </div>
                                    <div class="content-post">
                                        <div class="title-post">
                                            <h2><a href="blog-detail.html">Is Adriana Lima Hanging Up Her Wings?</a></h2>
                                        </div><!-- /.title-post -->
                                        <div class="entry-post">
                                            <p>It is a long established fact that a reader will be dis- tracted by the readable content of a page when looking at its layout...</p>
                                            <div class="more-link">
                                                <a href="blog-detail.html">Read More</a>
                                            </div>
                                        </div>
                                    </div><!-- /.content-post -->
                                </article><!-- /.post -->

                                <article class="post clearfix">
                                    <div class="featured-post margin-bottom-14">
                                        <img src="{{url('frontend/images/blog/14.jpg')}}" alt="image">
                                    </div>
                                    <div class="content-post">
                                        <div class="title-post">
                                            <h2><a href="blog-detail.html">Looking For A New Statement Piece?</a></h2>
                                        </div><!-- /.title-post -->
                                        <div class="entry-post">
                                            <p>There’s nothing more personal in anyone’s wardrobe than their jewellery. It tells a story beyond the possi- bilities of most clothes...</p>
                                            <div class="more-link">
                                                <a href="blog-detail.html">Read More</a>
                                            </div>
                                        </div>
                                    </div><!-- /.content-post -->
                                </article><!-- /.post -->

                                <article class="post clearfix">
                                    <div class="featured-post margin-bottom-14">
                                        <img src="{{url('frontend/images/blog/15.jpg')}}" alt="image">
                                    </div>
                                    <div class="content-post">
                                        <div class="title-post">
                                            <h2><a href="blog-detail.html">Anya Hindmarch Changes Strategy</a></h2>
                                        </div><!-- /.title-post -->
                                        <div class="entry-post">
                                            <p>ANYA HINDMARCH’s shows are a highlight on the London Fashion Week schedule - a visual feast that has seen the designer's team...</p>
                                            <div class="more-link">
                                                <a href="blog-detail.html">Read More</a>
                                            </div>
                                        </div>
                                    </div><!-- /.content-post -->
                                </article><!-- /.post -->

                                <article class="post clearfix">
                                    <div class="featured-post margin-bottom-14">
                                        <img src="{{url('frontend/images/blog/16.jpg')}}" alt="image">
                                    </div>
                                    <div class="content-post">
                                        <div class="title-post">
                                            <h2><a href="blog-detail.html">This Week In Pictures - 11/12/2018</a></h2>
                                        </div><!-- /.title-post -->
                                        <div class="entry-post">
                                            <p>Democrat Doug Jones defeats Roy Moore to win a US senate seat for Alabama. The unexpected victory has made Jones the first...</p>
                                            <div class="more-link">
                                                <a href="blog-detail.html">Read More</a>
                                            </div>
                                        </div>
                                    </div><!-- /.content-post -->
                                </article><!-- /.post -->

                                <article class="post clearfix">
                                    <div class="featured-post">
                                        <img src="{{url('frontend/images/blog/17.jpg')}}" alt="image">
                                    </div>
                                    <div class="content-post">
                                        <div class="title-post">
                                            <h2><a href="blog-detail.html">Five Festive Obsessions That Make...</a></h2>
                                        </div><!-- /.title-post -->
                                        <div class="entry-post">
                                            <p>‘Tis the season of merriment, as the December calendar swells with soirées, parties and gatherings galore. The ingredients of each family...</p>
                                            <div class="more-link">
                                                <a href="blog-detail.html">Read More</a>
                                            </div>
                                        </div>
                                    </div><!-- /.content-post -->
                                </article><!-- /.post -->

                                <article class="post clearfix">
                                    <div class="featured-post">
                                        <img src="{{url('frontend/images/blog/18.jpg')}}" alt="image">
                                    </div>
                                    <div class="content-post">
                                        <div class="title-post">
                                            <h2><a href="blog-detail.html">The Sustainable New Denim Line</a></h2>
                                        </div><!-- /.title-post -->
                                        <div class="entry-post">
                                            <p>There is a new era of sustainability in fashion. No longer is such a word exclusively associated with hand-hewn hemp or hessian sacking,..</p>
                                            <div class="more-link">
                                                <a href="blog-detail.html">Read More</a>
                                            </div>
                                        </div>
                                    </div><!-- /.content-post -->
                                </article><!-- /.post -->

                                <article class="post clearfix">
                                    <div class="featured-post">
                                        <img src="{{url('frontend/images/blog/19.jpg')}}" alt="image">
                                    </div>
                                    <div class="content-post">
                                        <div class="title-post">
                                            <h2><a href="blog-detail.html">How Saint Laurent’s Crystal Boots...</a></h2>
                                        </div><!-- /.title-post -->
                                        <div class="entry-post">
                                            <p>BEYONCÉ might have been out of the spotlight since releasing her sixth studio album, Lemonade, and nursing twins Rumi and Sir...</p>
                                            <div class="more-link">
                                                <a href="blog-detail.html">Read More</a>
                                            </div>
                                        </div>
                                    </div><!-- /.content-post -->
                                </article><!-- /.post -->

                            </div><!-- /.grid -->
    					</div><!-- /.post-wrap -->
    					<div class="blog-pagination text-center clearfix">
    						<ul class="flat-pagination">
    							<li class="prev">
    								<a href="#"><i class="fa fa-angle-left"></i></a>
    							</li>
    							<li><a href="#">1</a></li>
    							<li class="active"><a href="#" title="">2</a></li>
    							<li><a href="#">3</a></li>
    							<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
    						</ul><!-- /.flat-pagination -->
    					</div><!-- /.blog-pagination -->
    				</div><!-- /.col-md-12 -->
    			</div><!-- /.row -->
    		</div><!-- /.container -->
    	</section><!-- /.blog posts -->
        @endsection
	

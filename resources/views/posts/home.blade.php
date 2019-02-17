<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title -->
    <title>SOLAPP</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!--Owlcarousel CSS -->
    <link rel="stylesheet" href="/css/owl.carousel.min.css" />
    <!--Responsive Menu  CSS -->
    <link rel="stylesheet" href="/css/responsive-menu.css" />
    <!-- Font awesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="/css/animate.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,600i,700" rel="stylesheet">
</head>

<body class="home-dark">
    <!-- ======================== START HEADER AREA HERE ====================================== -->
    <header class="themeix-header clearfix mb-5">
        <div class="themeix-header-navigation">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div class="themeix-logo">
                            <a class="themeix-brand" href="#">Okandeji</a>
                        </div>
                    </div>
                    <div class="col-md-10">

                        <div id="themeix-menu">
                            <ul>
                                <li class="active has-sub"><a href="#" target="_blank"> Home</a>
								</li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Service</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ======================== END HEADER AREA HERE ================================= -->
    <!-- ================= START HERO AREA HERE ================================= -->

    <!-- ================= END HERO AREA HERE ================================= -->
    <!-- =================== START MAIN CONTENT AREA HERE ========================-->
    <main class="main-content-area section-padding clearfix wow fadeIn" data-wow-duration="2s">
        <div class="blog-wrapper">
            <div class="container">
                @if(count($posts)>0)
                  @foreach($posts as $post)
                <div class="post-wrapper">
                    <div class="col-lg-12 mx-auto">
                        <div class="row">
                            <div class="row d-md-flex wow fadeIn mb-50" data-wow-duration="2s">
                                <div class="col-lg-6">
                                    <div class="post-thumb">
                                        <img src="/storage/cover_images/{{$post->cover_image}}" alt="" /></a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="post-details">
                                        <div class="post-meta d-flex">
                                            <p><i class="fa fa-tag"></i><a href="#">{{$post->title}}</a></p>
                                            {{--  <div class="border-line"></div>  --}}
                                        </div>
                                        <div class="title">
                                            <h2><a href="/posts/{{$post->id}}">{{$post->header}}</a></h2></div>
                                        <div class="post-centent">
                                            <p>{{$post->paragraph}} </p>
                                        </div>
                                        <div class="post-author d-lg-flex justify-content-between ">
                                            <div class="author-details  d-flex align-items-center">
                                                <div class="author"><img src="https://demo.themeix.com/html/axobiz/assets/images/author2.png" alt="" />
                                                </div>
                                                <div class="author-des">
                                                    <p><a href="#">{{$post->user->name}}</a><span>{{$post->created_at}}</span></p>
                                                </div>
                                            </div>
                                            <div class="btn-more"><a href="/posts/{{$post->id}}">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
                    {{$posts->links()}}
                @else
                <p>No posts found</p>
                @endif
                {{--  <div class="row">
                    <div class="col-lg-12">
                        <div class="post-pagi-text d-flex justify-content-between">
                            <p><a href="dark-index.html#">PREVIOUS</a></p>
                            <p> 1 / 2</p>
                            <p><a href="dark-index.html#">NEWER</a></p>
                        </div>
                    </div>
                </div>  --}}
            </div>
        </div>
    </main>

    <!-- ======================== END MAIN CONTENT AREA HERE ========================-->
    <!-- ============== START FOOTER AREA HERE ===================================== -->
    <!-- ==================== START FOOTER AREA ===================================== -->
    <footer>
        <div class="footer-area clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="footer-widget">
                                    <div class="widget-title">
                                        <h3>About Us</h3>
                                    </div>
                                    <div class="widget-details">
                                        <p>Dorem ipsamet ons adipiscing elit.consectetur adipiscing elit duis vehicula </p>
                                        <div class="social-icon">
                                            <ul class="d-flex">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="offset-lg-1 col-lg-5 col-sm-6">
                                <div class="footer-widget">
                                    <div class="widget-title">
                                        <h3>Useful Link
                                      </h3>
                                    </div>
                                    <div class="widget-details">
                                        <div class="widget-link">
                                            <ul>
                                                <li><a href="#">Our category</a></li>
                                                <li><a href="#">Contact Us</a></li>
                                                <li><a href="#">About Us</a></li>
                                                <li><a href="#">Style Guids</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="footer-widget">
                                    <div class="widget-title">
                                        <h3>Tags Cloud
                                      </h3>
                                    </div>
                                    <div class="widget-details">
                                        <div class="tags">
                                            <ul>
                                                <li><a href="#">Travel</a></li>
                                                <li><a href="#">Clean</a></li>
                                                <li><a href="#">Web</a></li>
                                                <li><a href="#">Design</a></li>
                                                <li><a href="#">Html</a></li>
                                                <li><a href="#">Video</a></li>
                                                <li><a href="#">History</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6  col-sm-6">
                                <div class="footer-widget subscribe">
                                    <div class="widget-title">
                                        <h3>Subscribe Us</h3>
                                    </div>
                                    <div class="widget-details">
                                        <form action="dark-index.html#">
                                            <input type="email" placeholder="Your Email" />
                                            <button type="submit" class="buttonfx curtainup">Subscribe Now</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="footer-bottom text-center">
                            <p>Copyright &copy <a href="#">Okandeji</a> 2019</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ==================== END FOOTER AREA HERE ===================================== -->
    <!-- ==================== PRELOADER HERE ===================================== -->
    <div class="preloader" id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ==================== PRELOADER END ===================================== -->
    <!-- ====================ALL JS FILE HERE===================================== -->
    <!-- jQuery -->
    <script src="/js/jquery-3.3.1.min.js"></script>
    <!-- easing efect JS -->
    <script src="/js/easing.js"></script>
    <!-- owlcarousel  JS -->
    <script src="/js/owl.carousel.min.js"></script>
    <!-- Responsive menu JS -->
    <script src="/js/responsive-menu.js"></script>
    <!-- Bootstrap JS -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- waypoints JS -->
    <script src="/js/jquery.waypoints.min.js"></script>
    <!-- menu JS -->
    <script src="/js/menumaker.min.js"></script>
    <!-- wow JS -->
    <script src="/js/wow.min.js"></script>
    <!-- main  JS -->
    <script src="/js/main.js"></script>
{{--  <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="0fb3e5b5-1038-45e7-a153-173d144eee90";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>  --}}
</body>

</html>

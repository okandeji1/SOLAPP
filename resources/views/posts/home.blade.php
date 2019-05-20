<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{{config('app.name', 'SOLAPP')}}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <meta name="keywords" content="blog, business, entertainment, news, sport, wedding">
    <meta name="author" content="Okandeji">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/slick.css">
    <link rel="stylesheet" href="/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="/assets/css/custom_bootstrap.css">
    <link rel="stylesheet" href="/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/assets/css/elegant.css">
    <link rel="stylesheet" href="/assets/css/plyr.css">
    <link rel="stylesheet" href="/assets/css/aos.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="/assets/css/themify-icons.css">
    <link rel="shortcut icon" href="/assets/images/shortcut_logo.png">
  </head>
  <body>
    <div id="main">
      <header>
        <div class="header-wrapper">
          <div class="container">
            <div class="header-menu">
              <div class="row no-gutters align-items-center justify-content-center">
                <div class="col-4 col-md-2"><a class="logo" href="/"><img src="/assets/images/logo.png" alt="logo"></a></div>
                <div class="col-8 col-md-8">
                  <div class="mobile-menu"><a href="#" id="showMenu"><i class="fas fa-bars"></i></a></div>
                  <nav class="navigation">
                    <ul>
                      <li class="nav-item"><a class="pisen-nav-link active" href="/">Home</a><i class="submenu-opener fas fa-plus"></i>
                      </li>
                      <li class="nav-item"><a class="pisen-nav-link" href="/services">Services</a><i class="submenu-opener fas fa-plus"></i>
                      </li>
                      <li class="nav-item"><a class="pisen-nav-link" href="/about">About us</a></li>
                      <li class="nav-item"><a class="pisen-nav-link" href="#">Contact</a></li>
                    </ul>
                  </nav>
                </div>
                <div class="col-0 col-xl-2">
                  <div class="menu-function">
                    <div id="search"><a class="search-btn" href="#"><i class="fas fa-search"></i></a></div>
                    <div class="social-contact"><a href="#/"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-instagram"></i></a><a href="#"><i class="fab fa-twitter"></i></a><a href="#"><i class="fab fa-dribbble"></i></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header><!--End header-->
      @if(count($posts) > 0)
      <section class="posts blog-news">
        <div class="container">
          <div class="blog-news_bundle">
            <div class="row no-gutters">
                @foreach($posts as $post)
              <div class="col-12 col-lg-6">
                <div class="post-classic-tib big-post" style="background-image: url('assets/images/blog_news/news-bundle-big.png')">
                  <div class="post-detail">
                    <div class="post-credit">
                      <div class="post-tag"><a href="#">tech</a></div>
                    </div><a class="post-title title" href="/posts/{{$post->id}}">{{$post->title}}</a>
                    <div class="post-credit">
                      <div class="author">
                        <h5 class="author-name">{{$post->user->name}}</h5>
                      </div>
                    </div>
                  </div>
                  <div class="post-overlay"></div>
                </div>
              </div>
              @endforeach
              <div class="col-12 col-lg-6">
                <div class="row no-gutters">
                  <div class="col-12 col-sm-6 col-lg-6">
                    <div class="post-classic-tib mini-post" style="background-image: url('assets/images/blog_news/news-bundle-mini-1.png')">
                      <div class="post-detail">
                        <div class="post-credit">
                          <div class="post-tag"><a href="index.html">tech</a></div>
                        </div><a class="post-title title" href="blog_detail.html">How Our App Gets You Speaking A Language </a>
                        <div class="post-credit">
                          <div class="author">
                            <h5 class="author-name">Lucas Norman</h5>
                          </div>
                        </div>
                      </div>
                      <div class="post-overlay"></div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-6">
                    <div class="post-classic-tib mini-post" style="background-image: url('assets/images/blog_news/news-bundle-mini-2.png')">
                      <div class="post-detail">
                        <div class="post-credit">
                          <div class="post-tag"><a href="index.html">tech</a></div>
                        </div><a class="post-title title" href="blog_detail.html">Ecotourism in Thailand: 5 Beautiful Destinations</a>
                        <div class="post-credit">
                          <div class="author">
                            <h5 class="author-name">Lucas Norman</h5>
                          </div>
                        </div>
                      </div>
                      <div class="post-overlay"></div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="post-classic-tib mini-post" style="background-image: url('assets/images/blog_news/news-bundle-mini-3.png')">
                      <div class="post-detail">
                        <div class="post-credit">
                          <div class="post-tag"><a href="index.html">tech</a></div>
                        </div><a class="post-title title" href="blog_detail.html">This $99 Drone Is The Most Incredible </a>
                        <div class="post-credit">
                          <div class="author">
                            <h5 class="author-name">Lucas Norman</h5>
                          </div>
                        </div>
                      </div>
                      <div class="post-overlay"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="blog-news_bundle hot-news-bundle">
            <h1 class="bundle-title">Hot News</h1>
            <div class="row">
              <div class="col-12 col-lg-6">
                <div class="post-block post-classic">
                  <div class="post-img"><img src="assets/images/blog_news/hot-new-big.png" alt="post image"></div>
                  <div class="post-detail"><a class="post-title regular" href="blog_detail.html">North Dakota Learns From Norway</a>
                    <div class="post-credit">
                      <div class="author"><a class="author-avatar" href="#"><img src="assets/images/avatar/avatar-1.png" alt="auhtor"></a>
                        <h5 class="author-name">Lucas Norman</h5>
                      </div>
                      <h5 class="upload-day">February 17, 2019</h5>
                      <div class="post-tag"><a href="index.html">pet</a></div>
                    </div>
                    <p class="post-describe">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation... </p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-6">
                <div class="row">
                  <div class="col-12 col-md-6 col-lg-12">
                    <div class="post-mini_block"><img src="assets/images/blog_news/hot-mini-post-1.png" alt="post image">
                      <div class="post-detail">
                        <div class="post-credit">
                          <div class="post-tag"><a href="index.html">pet</a></div>
                        </div><a class="post-title title-small" href="blog_detail.html">U.S. Interventions in Latin America, in Photos</a>
                        <div class="post-credit">
                          <div class="author">
                            <h5 class="author-name">Lucas Norman</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-12">
                    <div class="post-mini_block"><img src="assets/images/blog_news/hot-mini-post-2.png" alt="post image">
                      <div class="post-detail">
                        <div class="post-credit">
                          <div class="post-tag"><a href="index.html">pet</a></div>
                        </div><a class="post-title title-small" href="blog_detail.html">‘Survival Math’ Opens Some Personal Wounds but Leaves Others Hidden</a>
                        <div class="post-credit">
                          <div class="author">
                            <h5 class="author-name">Lucas Norman</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-12">
                    <div class="post-mini_block"><img src="assets/images/blog_news/hot-mini-post-3.png" alt="post image">
                      <div class="post-detail">
                        <div class="post-credit">
                          <div class="post-tag"><a href="index.html">pet</a></div>
                        </div><a class="post-title title-small" href="blog_detail.html">How to View Breast Cancer Survival Rates</a>
                        <div class="post-credit">
                          <div class="author">
                            <h5 class="author-name">Lucas Norman</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="blog-news_bundle video-bundle">
            <h1 class="bundle-title">Featured Videos</h1>
            <div class="row">
              <div class="col-12">
                <div class="post-block post-video-text-in_block">
                  <div class="post-text-in">
                    <div class="post-video">
                      <video id="player" poster="assets/images/homepage1/post-6.png" playsinline="" controls="">
                        <source src="assets/images/audio+video/video.mp4" type="video/mp4">
                        <track kind="captions" label="English captions" src="" srclang="en" default="">
                      </video>
                    </div>
                    <div class="post-detail">
                      <div class="post-credit">
                        <div class="post-tag"><a href="index.html">tech</a></div>
                      </div><a class="post-title title" href="blog_detail.html">10 Things Amazon Echo Can Do That Apple’s Siri Can’t</a>
                      <div class="post-credit">
                        <div class="author">
                          <h5 class="author-name">Lucas Norman</h5>
                        </div>
                      </div>
                    </div>
                    <div class="post-overlay"></div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                <div class="post-block post-with-video">
                  <div class="post-video">
                    <video id="player2" poster="assets/images/blog_news/video-1.png" playsinline="" controls="">
                      <source src="assets/images/audio+video/video.mp4" type="video/mp4">
                      <track kind="captions" label="English captions" src="" srclang="en" default="">
                    </video>
                  </div>
                  <div class="post-detail">
                    <div class="post-credit">
                      <div class="post-tag"><a href="index.html">tech</a></div>
                    </div><a class="post-title small" href="blog_detail.html">Tiger Woods Withdraws From Arnold </a>
                    <div class="post-credit">
                      <div class="author">
                        <h5 class="author-name">Lucas Norman</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                <div class="post-block post-with-video">
                  <div class="post-video">
                    <video id="player3" poster="assets/images/blog_news/video-4.png" playsinline="" controls="">
                      <source src="assets/images/audio+video/video.mp4" type="video/mp4">
                      <track kind="captions" label="English captions" src="" srclang="en" default="">
                    </video>
                  </div>
                  <div class="post-detail">
                    <div class="post-credit">
                      <div class="post-tag"><a href="index.html">tech</a></div>
                    </div><a class="post-title small" href="blog_detail.html">After a Flurry of Deals, Zack Greinke </a>
                    <div class="post-credit">
                      <div class="author">
                        <h5 class="author-name">Lucas Norman</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                <div class="post-block post-with-video">
                  <div class="post-video">
                    <video id="player4" poster="assets/images/blog_news/video-2.png" playsinline="" controls="">
                      <source src="assets/images/audio+video/video.mp4" type="video/mp4">
                      <track kind="captions" label="English captions" src="" srclang="en" default="">
                    </video>
                  </div>
                  <div class="post-detail">
                    <div class="post-credit">
                      <div class="post-tag"><a href="index.html">tech</a></div>
                    </div><a class="post-title small" href="blog_detail.html">Ajax Stuns Real Madrid, Ending Its </a>
                    <div class="post-credit">
                      <div class="author">
                        <h5 class="author-name">Lucas Norman</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                <div class="post-block post-with-video">
                  <div class="post-video">
                    <video id="player5" poster="assets/images/blog_news/video-3.png" playsinline="" controls="">
                      <source src="assets/images/audio+video/video.mp4" type="video/mp4">
                      <track kind="captions" label="English captions" src="" srclang="en" default="">
                    </video>
                  </div>
                  <div class="post-detail">
                    <div class="post-credit">
                      <div class="post-tag"><a href="index.html">tech</a></div>
                    </div><a class="post-title small" href="blog_detail.html">Ajax Stuns Real Madrid, Ending Its Reign </a>
                    <div class="post-credit">
                      <div class="author">
                        <h5 class="author-name">Lucas Norman</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="blog-news_bundle lastest-post-bundle">
            <h1 class="bundle-title">Latest Posts</h1>
            <div class="row">
              <div class="col-12 col-md-6">
                <div class="post-block post-classic">
                  <div class="post-img"><img src="assets/images/blog_news/lastest-news-1.png" alt="post image"></div>
                  <div class="post-detail"><a class="post-title regular" href="blog_detail.html">Tiger Woods Withdraws From Arnold </a>
                    <div class="post-credit">
                      <div class="author"><a class="author-avatar" href="#"><img src="assets/images/avatar/avatar-1.png" alt="auhtor"></a>
                        <h5 class="author-name">Lucas Norman</h5>
                      </div>
                      <h5 class="upload-day">February 17, 2019</h5>
                      <div class="post-tag"><a href="index.html">tech</a></div>
                    </div>
                    <p class="post-describe">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="post-block post-classic">
                  <div class="post-img"><img src="assets/images/blog_news/lastest-news-2.png" alt="post image"></div>
                  <div class="post-detail"><a class="post-title regular" href="blog_detail.html">North Dakota Learns From Norway</a>
                    <div class="post-credit">
                      <div class="author"><a class="author-avatar" href="#"><img src="assets/images/avatar/avatar-2.png" alt="auhtor"></a>
                        <h5 class="author-name">Lucas Norman</h5>
                      </div>
                      <h5 class="upload-day">February 17, 2019</h5>
                      <div class="post-tag"><a href="index.html">tech</a></div>
                    </div>
                    <p class="post-describe">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-3">
                <div class="post-block post-classic mini-post-classic">
                  <div class="post-img"><img src="assets/images/homepage2/post-1.png" alt="post image"></div>
                  <div class="post-detail">
                    <div class="post-credit">
                      <div class="post-tag"><a href="index.html">tech</a></div>
                    </div><a class="post-title small" href="blog_detail.html">Ajax Stuns Real Madrid, Ending Its </a>
                    <div class="post-credit">
                      <div class="author">
                        <h5 class="author-name">Lucas Norman</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-3">
                <div class="post-block post-classic mini-post-classic">
                  <div class="post-img"><img src="assets/images/homepage2/post-2.png" alt="post image"></div>
                  <div class="post-detail">
                    <div class="post-credit">
                      <div class="post-tag"><a href="index.html">tech</a></div>
                    </div><a class="post-title small" href="blog_detail.html">Ajax Stuns Real Madrid, Ending Its </a>
                    <div class="post-credit">
                      <div class="author">
                        <h5 class="author-name">Lucas Norman</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-3">
                <div class="post-block post-classic mini-post-classic">
                  <div class="post-img"><img src="assets/images/homepage2/post-3.png" alt="post image"></div>
                  <div class="post-detail">
                    <div class="post-credit">
                      <div class="post-tag"><a href="index.html">tech</a></div>
                    </div><a class="post-title small" href="blog_detail.html">Ajax Stuns Real Madrid, Ending Its </a>
                    <div class="post-credit">
                      <div class="author">
                        <h5 class="author-name">Lucas Norman</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-3">
                <div class="post-block post-classic mini-post-classic">
                  <div class="post-img"><img src="assets/images/homepage2/post-4.png" alt="post image"></div>
                  <div class="post-detail">
                    <div class="post-credit">
                      <div class="post-tag"><a href="index.html">tech</a></div>
                    </div><a class="post-title small" href="blog_detail.html">Ajax Stuns Real Madrid, Ending Its </a>
                    <div class="post-credit">
                      <div class="author">
                        <h5 class="author-name">Lucas Norman</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="blog-news_bundle recent-view-bundle">
            <h1 class="bundle-title">Recent view</h1>
            <div class="row">
              <div class="col-12 col-sm-6 col-lg-4">
                <div class="post-mini_block"><img src="assets/images/blog_news/recent-view-1.png" alt="post image">
                  <div class="post-detail">
                    <div class="post-credit">
                      <div class="post-tag"><a href="index.html">pet</a></div>
                    </div><a class="post-title title-small" href="blog_detail.html">Yankees’ Luis Severino Scratched, Raising Day</a>
                    <div class="post-credit">
                      <div class="author">
                        <h5 class="author-name">Lucas Norman</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-lg-4">
                <div class="post-mini_block"><img src="assets/images/blog_news/recent-view-2.png" alt="post image">
                  <div class="post-detail">
                    <div class="post-credit">
                      <div class="post-tag"><a href="index.html">pet</a></div>
                    </div><a class="post-title title-small" href="blog_detail.html">Yankees’ Luis Severino Scratched, Raising Day</a>
                    <div class="post-credit">
                      <div class="author">
                        <h5 class="author-name">Lucas Norman</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-lg-4">
                <div class="post-mini_block"><img src="assets/images/blog_news/recent-view-3.png" alt="post image">
                  <div class="post-detail">
                    <div class="post-credit">
                      <div class="post-tag"><a href="index.html">pet</a></div>
                    </div><a class="post-title title-small" href="blog_detail.html">Yankees’ Luis Severino Scratched, Raising Day</a>
                    <div class="post-credit">
                      <div class="author">
                        <h5 class="author-name">Lucas Norman</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-lg-4">
                <div class="post-mini_block"><img src="assets/images/blog_news/recent-view-4.png" alt="post image">
                  <div class="post-detail">
                    <div class="post-credit">
                      <div class="post-tag"><a href="index.html">pet</a></div>
                    </div><a class="post-title title-small" href="blog_detail.html">Yankees’ Luis Severino Scratched, Raising Day</a>
                    <div class="post-credit">
                      <div class="author">
                        <h5 class="author-name">Lucas Norman</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-lg-4">
                <div class="post-mini_block"><img src="assets/images/blog_news/recent-view-5.png" alt="post image">
                  <div class="post-detail">
                    <div class="post-credit">
                      <div class="post-tag"><a href="index.html">pet</a></div>
                    </div><a class="post-title title-small" href="blog_detail.html">Yankees’ Luis Severino Scratched, Raising Day</a>
                    <div class="post-credit">
                      <div class="author">
                        <h5 class="author-name">Lucas Norman</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-lg-4">
                <div class="post-mini_block"><img src="assets/images/blog_news/recent-view-6.png" alt="post image">
                  <div class="post-detail">
                    <div class="post-credit">
                      <div class="post-tag"><a href="index.html">pet</a></div>
                    </div><a class="post-title title-small" href="blog_detail.html">Yankees’ Luis Severino Scratched, Raising Day</a>
                    <div class="post-credit">
                      <div class="author">
                        <h5 class="author-name">Lucas Norman</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-lg-4">
                <div class="post-mini_block"><img src="assets/images/blog_news/recent-view-7.png" alt="post image">
                  <div class="post-detail">
                    <div class="post-credit">
                      <div class="post-tag"><a href="index.html">pet</a></div>
                    </div><a class="post-title title-small" href="blog_detail.html">Yankees’ Luis Severino Scratched, Raising Day</a>
                    <div class="post-credit">
                      <div class="author">
                        <h5 class="author-name">Lucas Norman</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-lg-4">
                <div class="post-mini_block"><img src="assets/images/blog_news/recent-view-8.png" alt="post image">
                  <div class="post-detail">
                    <div class="post-credit">
                      <div class="post-tag"><a href="index.html">pet</a></div>
                    </div><a class="post-title title-small" href="blog_detail.html">Yankees’ Luis Severino Scratched, Raising Day</a>
                    <div class="post-credit">
                      <div class="author">
                        <h5 class="author-name">Lucas Norman</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-lg-4">
                <div class="post-mini_block"><img src="assets/images/blog_news/recent-view-9.png" alt="post image">
                  <div class="post-detail">
                    <div class="post-credit">
                      <div class="post-tag"><a href="index.html">pet</a></div>
                    </div><a class="post-title title-small" href="blog_detail.html">Yankees’ Luis Severino Scratched, Raising Day</a>
                    <div class="post-credit">
                      <div class="author">
                        <h5 class="author-name">Lucas Norman</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><!--End news-->
      <section class="instagram">
        <div class="container">
          <div class="instagram-posts"><a class="instagram-img_block" href="https://www.instagram.com/"><img src="assets/images/instagram/1.png" alt="instagram post">
              <div class="instagram-post_block"><i class="fab fa-instagram"></i>
                <p>Pisen_Instagram</p>
              </div></a><a class="instagram-img_block" href="https://www.instagram.com/"><img src="assets/images/instagram/2.png" alt="instagram post">
              <div class="instagram-post_block"><i class="fab fa-instagram"></i>
                <p>Pisen_Instagram</p>
              </div></a><a class="instagram-img_block" href="https://www.instagram.com/"><img src="assets/images/instagram/3.png" alt="instagram post">
              <div class="instagram-post_block"><i class="fab fa-instagram"></i>
                <p>Pisen_Instagram</p>
              </div></a><a class="instagram-img_block" href="https://www.instagram.com/"><img src="assets/images/instagram/4.png" alt="instagram post">
              <div class="instagram-post_block"><i class="fab fa-instagram"></i>
                <p>Pisen_Instagram</p>
              </div></a><a class="instagram-img_block" href="https://www.instagram.com/"><img src="assets/images/instagram/5.png" alt="instagram post">
              <div class="instagram-post_block"><i class="fab fa-instagram"></i>
                <p>Pisen_Instagram</p>
              </div></a><a class="instagram-img_block" href="https://www.instagram.com/"><img src="assets/images/instagram/3.png" alt="instagram post">
              <div class="instagram-post_block"><i class="fab fa-instagram"></i>
                <p>Pisen_Instagram</p>
              </div></a><a class="instagram-img_block" href="https://www.instagram.com/"><img src="assets/images/instagram/2.png" alt="instagram post">
              <div class="instagram-post_block"><i class="fab fa-instagram"></i>
                <p>Pisen_Instagram</p>
              </div></a></div>
        </div>
      </section><!--End instagram-->
      @else
       <p>No posts found</p>
    @endif
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4">
                  <div class="footer-contact">
                    <div class="social-contact"><a class="icon-btn" href="#"><i class="fab fa-facebook-f"></i></a><a class="icon-btn" href="#"><i class="fab fa-instagram"></i></a><a class="icon-btn" href="#"><i class="fab fa-twitter"></i></a><a class="icon-btn" href="#"><i class="fab fa-dribbble"></i></a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <p class="copyright">Copyright ©2019 Okandeji</p>
            </div>
          </div>
        </div>
      </footer><!--End footer-->
      <script src="/assets/js/jquery-3.4.0.min.js"></script>
      <script src="/assets/js/jquery-ui.min.js"></script>
      <script src="/assets/js/slick.min.js"></script>
      <script src="/assets/js/plyr.min.js"></script>
      <script src="/assets/js/aos.js"></script>
      <script src="/assets/js/jquery.scrollUp.min.js"></script>
      <script src="/assets/js/masonry.pkgd.min.js"></script>
      <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
      <script src="/assets/js/numscroller-1.0.js"></script>
      <script src="/assets/js/jquery.countdown.min.js"></script>
      <script src="/assets/js/main.js"></script>
    </div>
  </body>
</html>

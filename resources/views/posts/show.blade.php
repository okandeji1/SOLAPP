@extends('layout.app')
@section('content')
      <section class="blog-detail">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
              <div class="post-block">
                <h1 class="blog-detail-title">{{$post->header}}</h1>
                <div class="blog-credit">
                  <div class="blog-credit_wrapper">
                    <h5>{{$post->user->name}}</h5>
                    <p>{{$post->created_at}}</p>
                  </div>
                </div><img class="blog-cover img-fluid" src="/img/posts/{{$post->cover_image}}" alt="blog image">
                <p class="blog-pragraph"> <span>P</span>{{$post->body}}</p>
                <div class="row">
                  <div class="col-12 col-sm-6"><img class="img-fluid" src="assets/images/homepage2/post-1.png" alt="post image"></div>
                  <div class="col-12 col-sm-6"><img class="img-fluid" src="assets/images/homepage2/post-2.png" alt="post image"></div>
                </div>
                <h3 class="post-title">You Can Buy For Less Than A College Degree</h3>
                <p class="blog-pragraph">Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum bore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com</p>
              </div>
              <div class="post-footer">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="post-tags"><a href="index.html">Camera</a><a href="index.html">PHOTOGRAHY</a><a href="index.html">TIPS</a></div>
                  </div>
                  <div class="col-sm-6 text-sm-right">
                    <div class="post-share">
                      <p>Share: </p>
                      <div class="socials"><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a><a href="https://dribbble.com/"><i class="fab fa-dribbble"></i></a></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="another-posts"><a class="arrow-control arrow-prev" href="blog_detail.html"><i class="arrow_left"></i></a><a class="arrow-control arrow-next" href="blog_detail.html"><i class="arrow_right"></i></a>
                <div class="row no-gutters">
                  <div class="col-12 col-md-6"><a href=""></a>
                    <div class="another-post_block prev-post">
                      <div class="post-mini-img text-left"><a href="blog_detail.html"><img src="assets/images/blog_detail/post-mini-img-1.png" alt="post image"></a></div>
                      <div class="post-title">
                        <p>Previous post</p><a href="blog_detail.html">The Personality Trait That Makes People Happier</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="another-post_block text-right next-post">
                      <div class="post-title">
                        <p>Next post</p><a href="blog_detail.html">The Personality Trait That Makes People Happier</a>
                      </div>
                      <div class="post-mini-img text-right"><a href="blog_detail.html"><img src="assets/images/blog_detail/post-mini-img-2.png" alt="post image"></a></div>
                    </div>
                  </div>
                </div>
              </div>
              <h1>Display Comments</h1>
              <div class="post-author-detail">
                  {{-- Comment Block --}}
                @include('partials._comment_replies', ['comments' => $post->comments, 'post_id' => $post->id])
                <div class="row no-gutters align-items-center">
                    @foreach($post->comments as $comment)
                  <div class="col-sm-7 col-md-9">
                    <div class="author-info">
                      <h5>{{$comment->name}}</h5>
                      <p>{{$comment->body}}</p>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
              <div class="post-comment">
                <h2>Leave a comment</h2>
                <form action="{{ route('comment.add') }}" method="POST">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <input class="input-form trans-bg" name="name" type="text" placeholder="Name" required>
                    </div>
                    <div class="form-group col-md-6">
                      <input class="input-form trans-bg" name="email" type="email" placeholder="Email" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <textarea class="textarea-form trans-bg" id="messages" name="comment_body" cols="30" rows="6" placeholder="Your Comment"></textarea>
                  </div>
                  <button class="normal-btn">Add Comment</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section><!--End posts-->
@endsection


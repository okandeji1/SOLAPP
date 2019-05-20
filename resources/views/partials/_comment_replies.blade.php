@foreach($comments as $comment)
    <div class="display-comment">
        <strong>{{ $comment->name }}</strong>
        <p>{{ $comment->body }}</p>
        <a href="" id="reply"></a>
        <form method="post" action="{{ route('reply.add') }}">
            @csrf
            <div class="form-group">
                <textarea type="text" name="comment_body"></textarea>
            </div>
            <div class="form-group">
                <input type="text" name="name" required placeholder="Input your name">
            </div>
            <div class="form-group">
                <input type="email" name="email" required placeholder="Input your Email">
            </div>
            <div class="form-group">
                <input type="hidden" name="post_id" value="{{ $post_id }}" />
            </div>
            <div class="form-group">
                <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-warning" value="Reply" />
            </div>
        </form>
        @include('partials._comment_replies', ['comments' => $comment->replies])
    </div>
@endforeach

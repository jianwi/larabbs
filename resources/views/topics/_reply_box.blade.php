@include('shared._error')
<div class="reply-box">
  <form action="{{ route('replies.store') }}" method="post">
    {{ csrf_field() }}
    <input type="text" name="topic_id" value="{{ $topic->id }}" hidden id="">
    <div class="form-group">
      <textarea name="content" id="" class="form-control" placeholder="分享你的见解"  rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary btn-sm">
      <span class="fa fa-share mr-1"></span>
      回复
    </button>
  </form>
</div>
<hr>

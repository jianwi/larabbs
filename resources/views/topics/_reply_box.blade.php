<form action="{{ route('replies.store') }}" method="post">
  {{ csrf_field() }}
  {{ method_field('patch') }}
</form>

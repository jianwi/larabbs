@if(count($errors) > 0)
  <div class="alert alert-danger">
    <div class="mt-2">
      <b>有错误发生</b>
    </div>
    <ul class="my-2">
      @foreach($errors->all() as $error)
        <li>
          <span class="fa fa-remove-format"></span>
          {{ $error }}
        </li>
      @endforeach
    </ul>
  </div>
@endif

@extends('admin.layout.master')

@section('content')
     <form action="{{ route('admin.content') }}" method="post">
     {{ csrf_field() }}
     <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Content Name:</strong>
              <input type="text" name="name" class="form-control" id="name" placeholder="Name">
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Detail:</strong>
              <textarea class="form-control" id="article-ckeditor"></textarea>
          </div>
      </div>
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>


    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>


  CKEDITOR.replace('article-ckeditor', {
     filebrowserBrowseUrl : '/browser/browse.php',
        filebrowserImageBrowseUrl : '/browser/browse.php?type=Images',
        filebrowserUploadUrl : '/uploader/upload.php',
        filebrowserImageUploadUrl : '/uploader/upload.php?type=Images'
});


</script>
@endsection


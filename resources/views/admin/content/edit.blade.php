@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header">
                    <h4>
                        <center>Edit Content</center>
                    </h4>
                    <form action="{{ route('admin.UpdateContent',$Content->id) }}" method="POST">
                        {{ csrf_field() }}
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Content Name:</strong>
                                <input type="text" name="title" class="form-control" value="{{ $Content->title }}" placeholder="Title " required>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Date:</strong>
                                <input class="form-control" type="date"  value="{{ $Content->date }}" name="date" id="entry-dateFrom">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Content Description:</strong>
                                <textarea class="form-control" name="description">{{ $Content->description }}</textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Content:</strong>
                                <textarea class="form-control" name="content" id="ckeditor">{{ $Content->content }}</textarea>
                            </div>                        
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ url('/vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('ckeditor', {

        });
    </script>
@endsection


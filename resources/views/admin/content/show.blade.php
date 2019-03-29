@extends('admin.layout.master')

@section('content')
 <div class="row">
      <div class="col-xs-12">
        <div class="box box-info">
         <div class="box-header">
          <h4>
           <center>View Content</center>
          </h4>
          <table class="table table-bordered" id="DataTable">
           <thead>
           <tr>
            <td>Date</td>
            <td>Content Title</td>
            <td>Action</td>
           </tr>
           </thead>
           <tbody>
           @foreach($Contents as $Content)
            <tr>
             <td>{{ date("d-m-Y", strtotime($Content->date)) }}</td>
             <td>{{ $Content->title }}</td>
             <td>
              <form  method="POST" enctype="multipart/form-data" action="{{ route('admin.DeleteContent',$Content->id) }}">
               {{ csrf_field() }}
               <input type="hidden" name="_method" value="DELETE">
               <a href="{{ route('admin.EditContent',$Content->id) }}" class="btn btn-info btn-sm">Edit</a>
               <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
              </form>
             </td>
            </tr>
           @endforeach

           </tbody>
          </table>
         </div>
        </div>
      </div>
 </div>
@endsection

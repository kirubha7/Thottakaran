@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header">
                    <h4>
                        <center>Profile</center>
                    </h4>
                    <form class="form-horizontal" method="post" action="{{ route('admin.updateProfile') }}">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="form-group">
                                <div class="col-sm-4">
                                    <label>Enter Current Password</label>
                                    <input class="form-control" name="oldPassword" type="password"  required="">
                                </div>
                                <div class="col-sm-4">
                                    <label>Enter New Password&nbsp</label>
                                    <input class="form-control" name="password" type="password" required=""><br>
                                </div>
                                <div class="col-sm-4">
                                    <label>Re-enter New Password</label>
                                    <input class="form-control" name="password_confirmation" type="password" required=""><br>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer" align="center">
                            <button type="submit" class="btn btn-info">Change Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
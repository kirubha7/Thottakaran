<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome</title>
    @include('admin.layout.header')
</head>
<body class="hold-transition skin-black-light sidebar-mini">
<div class="wrapper">
    <!-- header -->
@include('admin.layout.user')
    <!-- sidebar -->
    @include('admin.layout.sidebar')
    <!-- Content -->
    <div class="content-wrapper">
        <section class="content">
            @yield('content')
        </section>
    </div>
    <!-- footer -->
    @include('admin.layout.footer')
</body>
@yield('script')
</html>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
    @include('admin.blocks.head')
</head>
<body>
<section id="container">
<!-- start-header -->
@include('admin.blocks.header')
<!--header end-->
<!--sidebar start-->
@include('admin.blocks.sidebar')
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        @yield('content')
    </section>
 <!-- footer -->
    @include('admin.blocks.footer')
  <!-- / footer -->
</section>
<!--main content end-->
</section>
@include('admin.blocks.foot')
</body>
</html>

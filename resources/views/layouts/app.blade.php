<!DOCTYPE html>
<html>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />
 
<!-- Include Date Range Picker -->
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
<head>
    @include('include.library-top')
    @yield('library-top')
</head>
    <body>
    <section class="body">
            @include('include.header')

            <div class="inner-wrapper">
                @include('include.left_sidebar')
                <section role="main" class="content-body">

                    <header class="page-header">
                        <h2>{{isset($title)?$title:''}}</h2>
                    </header>

                    @yield('content')
                    {{--Dibawah ini sample isi content--}}
                    {{--<!-- start: page -->
                    <div class="row">
                        <div class="col-md-6 col-lg-12 col-xl-6">
                            <section class="panel">
                                <div class="panel-body">
                                    <div class="row">

                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <!-- end: page -->--}}
            <br><br><br><br><br><br><br><br>
            <br><br><br><br><br><br>
            

                    @include('include.footer')

                </section>
            </div>

            @yield('library-bottom')
            @include('include.library-bottom')
    </section>  
    </body>
</html>
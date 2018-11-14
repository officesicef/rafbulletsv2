<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,800" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono%7CArvo:400%7CRoboto:300,400,500,700%7CCookie"
          rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('dist/vendor/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/circle.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/vendor/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/vendor/hamburgers.min.css') }}">



    <link rel="stylesheet" href="{{ asset('dist/css/simplify.min.css') }}">

    @yield('style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <!--Favicon-->
    <link rel="shortcut icon" href="{{{ asset('img/favicons/favicon.ico') }}}" type="image/x-icon" />
    <!--Favicon-->

    <title>@yield('title')</title>
</head>
<body>

<div class="full-page">

    @include('theme.partials.sidebar')

    <div class="page" >

        @include('theme.partials.topbar')

        @yield('iframe_survey')

        <div class="page-content">

            @if( is_array(session('message')) && isset(session('message')['class']) && isset(session('message')['text']) )
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-{{ session('message')['class'] }} alert-dismissible fade show text-center alert-dashboard" style="margin-top:-10px;" role="alert">
                                {{ session('message')['text'] }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @yield('content')

        </div>

    </div>
</div>

<script src="{{ asset('dist/vendor/jquery.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="{{ asset('dist/vendor/popper.min.js') }}"></script>
<script src="{{ asset('dist/vendor/bootstrap.min.js') }}"></script>
{{--<script src="{{ asset('dist/vendor/perfect-scrollbar.min.js') }}"></script>--}}{{--Does not need--}}



<script src="{{ asset('dist/vendor/hammer.min.js') }}"></script>
{{--<script src="{{ asset('dist/vendor/jquery-ui/jquery-ui.min.js') }}"></script>--}}{{--Does not need--}}
<script src="{{ asset('dist/js/sidebar.min.js') }}"></script>
<script src="{{ asset('dist/js/collapsible-nav.min.js') }}"></script>
<script src="{{ asset('dist/vendor/color/color.min.js') }}"></script>
<script src="{{ asset('dist/js/colors.min.js') }}"></script>
<script src="{{ asset('dist/js/settings.min.js') }}"></script>
{{--<script src="{{ asset('dist/js/card.min.js') }}"></script>--}}{{--Does not need--}}
<script src="{{ asset('dist/js/simplify.min.js') }}"></script>


@yield('script')

</body>
</html>

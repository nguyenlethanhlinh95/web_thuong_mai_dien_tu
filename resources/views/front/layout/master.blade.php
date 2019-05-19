@include('front.layout.partials.header')
{{--@if(Route::current()->getName() == 'home' || Route::current()->getName() =='shop')--}}
    {{--@include('front.layout.partials.slide_front_page')--}}
{{--@endif--}}

{{--<section>--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--@include('front.layout.partials.sidebar')--}}
            {{--<div class="col-sm-9 padding-right">--}}
                {{--@yield('content')--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}

@yield('content')

@include('front.layout.partials.footer')
@extends ('auth_client.layouts.base')

        @section('script')
            @include ('script')
        @endsection

        @section('header_logo')
            @include ('client.parts.base.header_logo')
        @endsection
        @section('header_menu')
            @include ('auth_client.parts.base.header_menu_client')
        @endsection

        @section('content')
            @yield('top_part')
            <div class="inner">
                <div class="main">
                    <section id="content">
                        <div class="indent">
                            <div class="wrapper">
                                @yield('left_colomn')
                                @yield('right_colomn')
                            </div>
                        </div>
                    </section>
                    <div class="block"></div>
                </div>
            </div>
        @endsection

        @section('footer')
            @include ('client.parts.base.footer')
        @endsection

        @section('app_scripts')

            <script type="text/javascript"> Cufon.now(); </script>
            <script type="text/javascript">
                $(window).load(function() {
                    $('.slider')._TMS({
                        duration:1000,
                        easing:'easeOutQuart',
                        preset:'simpleFade',
                        slideshow:10000,
                        banners:'fade',
                        pauseOnHover:true,
                        waitBannerAnimation:false,
                        pagination:'.pags'
                    });
                });
            </script>

        @endsection






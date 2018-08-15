<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    @yield('script')

</head>

    <body>
        <div id="bgSlider"></div>
        <div class="bg_spinner"></div>
        <div class="extra">
            @yield('header_logo')

            @yield('search_panel')

            @yield('header_menu')

            @yield('content')
        </div>
            @yield('footer')

        @yield('app_scripts')


    </body>
</html>
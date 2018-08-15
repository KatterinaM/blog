@extends ('auth_client.layouts.main')


                @section('left_colomn')
                    @include($page)
                @endsection

                @section('right_colomn')
                    @include($widgets)
                @endsection







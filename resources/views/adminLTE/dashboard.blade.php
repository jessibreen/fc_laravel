@extends('adminLTE/admin_template')

@section('content')
    <div class='row'>
        <div class='col-md-6'>
            <!-- Box -->
            @component('adminLTE.components.box')

                @slot('title')
                    Some pie chart, yo!
                @endslot

                @include('adminLTE.components.pie_chart')

                @slot('footer')
                    Some footer content, yo
                @endslot

            @endcomponent
        </div><!-- /.col -->
        <div class='col-md-6'>
            @component('adminLTE.components.box')

            @slot('title')
            Some Totally other box
            @endslot

            @include('adminLTE.components.pie_chart')

            @slot('footer')
            Some other footer content
            @endslot

            @endcomponent
        </div><!-- /.col -->

    </div><!-- /.row -->
@endsection
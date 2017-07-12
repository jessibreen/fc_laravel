<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">{{$title}}</h3>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="box-body">
        {{$slot}}

    </div><!-- /.box-body -->
    <div class="box-footer">
        {{$footer}}
        {{--<form action='#'>--}}
            {{--<input type='text' placeholder='New task' class='form-control input-sm' />--}}
        {{--</form>--}}
    </div><!-- /.box-footer-->
</div><!-- /.box -->
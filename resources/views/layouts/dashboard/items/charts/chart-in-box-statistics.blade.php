<!-- widget-user -->
<div id="{{ $id }}" class="box box-widget widget-user-2 {{ $class }} {{ $bdrColor }}">
    <!-- Add the bg color to the header using any of the bg-* classes -->
    <div class="widget-user-header {{ $color }}">
        <div style="width: 65px;height: auto;float: left;">
            <i class="{{ $icon }}"></i>
        </div>
        <!-- /.widget-user-image -->
        <h3 class="widget-user-username"><b>{{ $data1 }}</b> {{ $title }}</h3>
        <h5 class="widget-user-desc"><b>{{ $description }}</b></h5>
    </div>
    <div class="box-body">
        {!! $chartjs->container() !!}
    </div>
    <!-- /.box-body -->
    <div class="box-footer no-padding">
        <ul class="nav nav-stacked">
            @foreach($values as $key => $data)
                <li><a href="#">{{ $valuesLabel[$key] }} <span class="pull-right badge {{ $valueLabelColor[$key] }}">{{ $data }}</span></a></li>
            @endforeach
        </ul>
    </div>
</div>
<!-- /.widget-user -->
@section('chartjs')
    @parent
    {!! $chartjs->script() !!}
@endsection

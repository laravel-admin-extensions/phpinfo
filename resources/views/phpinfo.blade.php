<div class="row">

    <div class="col-md-offset-2 col-md-8">
        @foreach($info as $name => $section)

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">{!! $name !!}</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table table-striped">
                        <tbody>

                        @foreach ($section as $key => $val)
                            @if (is_a($val, 'Illuminate\Support\Collection'))
                                <tr>
                                    <td>{!! $key !!}</td>
                                    <td class="phpinfo-v">{!! $val[0] !!}</td>
                                    <td>{!! $val[1] !!}</td>
                                </tr>
                            @elseif(is_array($val))
                                <tr>
                                    <td>{!! $key !!}</td>
                                    <td class="phpinfo-v">{!! $val[0] !!}</td>
                                    <td>{!! $val[1] !!}</td>
                                </tr>
                            @elseif(is_string($key))
                                <tr>
                                    <td>{!! $key !!}</td>
                                    <td class="phpinfo-v">{!! $val !!}</td>
                                    <td></td>
                                </tr>
                            @else
                                <tr>
                                    <td>{!! $val !!}</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        @endforeach
    </div>

</div>

<style>
    .phpinfo-v {
        overflow-x: auto;
        word-wrap: break-word;
        word-break: break-all;
    }
</style>

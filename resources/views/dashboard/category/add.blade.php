@extends('dashboard.master')
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Category</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    {!! Form::open(['class' => 'form-horizontal category-form','url' => $route,'method' => 'post']) !!}
                    <div class="box-body">
                        <div class="form-group">
                            <div class="col-sm-2">
                                <label for="name">Category Name</label>
                            </div>
                            <div class="col-sm-10">
                                {!! Form::text('name','',['class' => 'form-control','id' => 'name','placeholder' => 'Category Name']) !!}
                                @if($errors->has('name'))
                                    <div style="color:red">
                                        <p>{{ $errors->first('name') }}</p>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-2">
                                <label for="category">Pricing Type</label>
                            </div>
                            <div class="col-sm-10">
                                <select name="pricing_type" class="form-control">
                                    <option value="">Select option</option>
                                    <option value="price">Fixed Price Based</option>
                                    <option value="percentage">Percentage Based</option>
                                </select>
                                @if($errors->has('pricing_type'))
                                    <div style="color:red">
                                        <p>{{ $errors->first('pricing_type') }}</p>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-2">
                                <label for="pricing_value">Pricing Value</label>
                            </div>
                            <div class="col-sm-10">
                                {!! Form::text('pricing_value','',['class' => 'form-control','id' => 'pricing_value','placeholder' => 'Pricing Value']) !!}
                                @if($errors->has('pricing_value'))
                                    <div style="color:red">
                                        <p>{{ $errors->first('pricing_value') }}</p>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-2">
                                <label for="type">Type</label>
                            </div>
                            <div class="col-sm-10">
                                <select name="type" class="form-control" >
                                    <option value="">Please select a default value</option>
                                    <option value="0">Decreasing</option>
                                    <option value="1">Increasing</option>
                                </select>
                                @if($errors->has('type'))
                                    <div style="color:red">
                                        <p>{{ $errors->first('type') }}</p>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-2">
                                <label for="timely_changeable">Should fluctuate with time?</label>
                            </div>
                            <div class="col-sm-10">
                                <select name="timely_changeable" id="timely_changeable" class="form-control">
                                    <option value="">Please select a value</option>
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                                @if($errors->has('timely_changeable'))
                                    <div style="color:red">
                                        <p>{{ $errors->first('timely_changeable') }}</p>
                                    </div>
                                @endif
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    {!! Form::close() !!}
                </div>

            </div>

        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection

@push('scripts')
<script type="application/javascript">
    $('#timely_changeable').on('change', function () {
        if ($(this).val() == 1) {
            var html = '<div class="times-wrapper form-group">' +
                '<div class="col-sm-2">' +
                '<label for="times_value">Times (like 2,3,4)</label>' +
                '</div>' +
                '<div class="col-sm-10">' +
                '<input type="text" name="times_value" placeholder="E.g 2" id="times_value" class="form-control">' +
                '</div>' +
                '</div>' +
                '<div class="times-wrapper form-group">' +
                '<div class="col-sm-2">' +
                '<label for="times_duration">Flucation duration (in minutes)</label>' +
                '</div>' +
                '<div class="col-sm-10">' +
                '<input type="text" name="times_duration" placeholder="E.g 10" id="times_duration" class="form-control">' +
                '</div>' +
                '</div>'
            $('.category-form .box-body').append(html);
        } else {
            $('.times-wrapper').remove();
        }
    });
</script>
@endpush

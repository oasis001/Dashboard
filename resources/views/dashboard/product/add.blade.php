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
                        <h3 class="box-title">Add Product</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label for="name">Product Name</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" id="name"
                                           placeholder="Product Name">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label for="category">Category</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" id="name"
                                           placeholder="Product Name">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label for="max_price">Highest Price</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="max_price" id="max_price"
                                           placeholder="Product's Highest Price">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label for="min_price">Lowest Price</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="min_price" id="min_price"
                                           placeholder="Product's Highest Price">
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection

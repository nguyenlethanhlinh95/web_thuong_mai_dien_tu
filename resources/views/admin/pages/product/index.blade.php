@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">List product</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    DataTables Advanced Tables
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Product Id</th>
                                <th>Product Name</th>
                                <th>Product Code</th>
                                <th>Product Price</th>
                                <th>Category Id</th>
                                <th>On Sale</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php $count =1;?>
                                @foreach($products as $product)
                                <tr class="odd gradeX">
                                    <td style="width:50px; border: 1px solid #333;">
                                        <img class="card-img-top img-fluid" src="{{url('assets/images/product',$product->image)}}" width="50px" alt="Card image cap">
                                    </td>
                                    <td style="width:50px;">{{$product->id}} </td>
                                    <td style="width:50px;">{{$product->pro_name}} </td>
                                    <td style="width:50px;">{{$product->pro_code}} </td>
                                    <td style="width:50px;">{{$product->pro_price}} </td>
                                    <td style="width:50px;">{{$product->category_id}}</td>
                                    <td></td>
                                    <td></td>

                                    {!! Form::open(['method'=>'DELETE', 'action'=> ['ProductsController@destroy', $product->id]]) !!}
                                    <td>{!! Form::submit('Delete Product', ['class'=>'btn btn-danger col-sm-6']) !!}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
        </div>
    </div>
@endsection
@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Create Product</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Create form product
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            {!! Form::open(['route' => 'product.store', 'method' => 'post', 'files' => true]) !!}
                                <div class="form-group">
                                    {{ Form::label('Proname', 'Name') }}
                                    {{ Form::text('pro_name', null, array('class' => 'form-control','required'=>'','minlength'=>'5')) }}
                                </div>

                            <div class="form-group">
                                {{ Form::label('Code', 'Code') }}
                                {{ Form::text('pro_code', null, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('stock', 'stock') }}
                                {{ Form::text('stock', null, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('price', 'Price') }}
                                {{ Form::text('pro_price', null, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('Description', 'Description') }}
                                {{ Form::text('pro_info', null, array('class' => 'form-control')) }}
                            </div>

                            {{--<div class="form-group">--}}
                                {{--{{ Form::label('category_id', 'Categories') }}--}}
                                {{--{{ Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder'=>'SelectCategory']) }}--}}
                            {{--</div>--}}

                            <div class="form-group">
                                {{ Form::label('image', 'Image') }}
                                {{ Form::file('image',array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('Sale Price', 'Sale Price') }}
                                {{ Form::text('spl_price', null, array('class' => 'form-control')) }}
                            </div>

                            {{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
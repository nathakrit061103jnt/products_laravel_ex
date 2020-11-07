@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
             <strong>เเก้ไขไม่สำเร็จ!</strong> กรุณาตรวจสอบความถูกต้อง<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text"  value="{{ $product->name }}" name="name" class="form-control"  required autofocus placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="number" class="form-control"   required  value="{{ $product->price }}" name="price" placeholder="Price"></input>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Count:</strong>
                <input type="number" class="form-control"   required  value="{{ $product->count }}" name="count" placeholder="Count"></input>
            </div>
        </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>warehouseID:</strong>
                <input type="text" required  value="{{ $product->warehouseID }}" name="warehouseID" class="form-control"  placeholder="warehouseID">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ManufacturerID:</strong>
                <input type="text" class="form-control"   required  value="{{ $product->manufacturerID }}" name="manufacturerID" placeholder="manufacturerID"></input>
            </div>
        </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">เเก้ไขไม่สำเร็จ</button>
            </div>
        </div>

    </form>
@endsection

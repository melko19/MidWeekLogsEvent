@extends('base')
<img src="/images/dashboard1.jpg"  alt="">
@section('content')
    <div class="row">
        <div class="col-md-12 margin-tb">
            <div class="pull-left">
                <br><h2>Edit Items</h2><br>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="col-md-8 offset-2">
    <form action="{{ route('items.update',$item->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row" id="tables">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $item->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea class="form-control" style="height:70px" name="description" placeholder="Description">{{ $item->description }}</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price:</strong>
                    <input type="number" name="price" value="{{ $item->price }}" class="form-control" placeholder="Price">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Quantity:</strong>
                    <input type="number" name="quantity" value="{{ $item->quantity }}" class="form-control" placeholder="Quantity">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 text-right">
            <br>
            <div class="pull-left">
                <a class="btn btn-primary float-start" href="{{ route('items.index') }}"> Back</a>
                <button type="submit" class="btn btn-success float-end">Submit</button>
            </div>

        </div>
   
    </form>
    </div>
@endsection
<style>
    #tables{
        position:relative;
    }
    img{
        position:fixed;
    }
    form{
        margin-top:10rem;
    }
</style>
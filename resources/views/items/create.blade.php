@extends('base')
<img src="/images/dashboard1.jpg"  alt="">
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Item</h2>
        </div>
    </div>
</div>
 
@if ($errors->any())

@endif
   
<div class="container ">
    <form action="{{ route('items.store') }}" method="POST">
        @csrf
    
        <div class="row" id="forms">
                <div class="col-md-8 offset-2">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Description:</strong>
                            <textarea class="form-control" style="height:70px" name="description" placeholder="Description"></textarea>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Price:</strong>
                            <input type="number" name="price" class="form-control" placeholder="Price">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Quantity:</strong>
                            <input type="number" name="quantity" class="form-control" placeholder="Quantity">
                        </div>
                    </div>

                    <div class=" mt-2 text-left">
                            <a class="btn btn-primary" href="{{ route('items.index') }}"> Back</a>
                            <button type="submit" class="btn btn-success float-end">Submit</button>
                    </div>
                </div>
        </div>
    
    </form>
</div>
@endsection
<style>
    #forms{
        position:relative;
    }
    img{
        position:fixed;
    }
    form{
        margin-top:10rem;
    }
</style>
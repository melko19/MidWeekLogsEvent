
@extends('base')
<img src="/images/dashboard1.jpg"  alt="">
@section('content')
<div style="margin-top:15rem;">
    <div class="col-md-10 offset-1">
        <div class="row">
            <div class="container" id="tables">
                <table class="table table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th width="280px">Price</th>
                        <th width="280px">Quantity</th>
                        <th></th>
                    </tr>
                    @foreach ($items as $item)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>
                            <form action="{{ route('items.destroy',$item->id) }}" method="POST">

                                <a class="btn btn-primary" href="{{ route('items.edit',$item->id) }}">Edit</a>

                                @csrf
                                @method('DELETE')
                
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </table>
                    <div>
                        <a class="btn btn-success float-end" href="{{ route('items.create') }}"> Create New Item</a>
                    </div>
            </div>
            {!! $items->links() !!}
        </div><br>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
</div>
      
@endsection
<style>
    #tables{
        position:relative;
    }
    img{
        position:fixed;
    }
</style>
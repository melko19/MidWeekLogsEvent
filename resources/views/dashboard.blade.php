@extends('base')
<img src="/images/dashboard1.jpg"  alt="">

<div class="container" id="contents">
        <div class="row">
            <div class="col-md-12 offset-2">
                <table class="table table-borderless text-white ">
                <thead>
                <h1>User Inventory</h1>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    </tr>
                </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>Otto</td>
                        <td>Otto</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>Otto</td>
                        
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td>Larry the Bird</td>
                        <td>@twitter</td>
                        <td>Otto</td>
                        <td>Otto</td>
                        </tr>
                        <tr>
                        <th scope="row">4</th>
                        <td>Larry the Bird</td>
                        <td>@twitter</td>
                        <td>Otto</td>
                        <td>Otto</td>
                        </tr>
                        <tr>
                        <th scope="row">5</th>
                        <td>Larry the Bird</td>
                        <td>@twitter</td>
                        <td>Otto</td>
                        <td>Otto</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
@section('content')

@endsection

<style>
    h1{
        margin-left:25rem;
    }
    #contents{
        position:fixed;
        margin-top:15rem;

    }
    img{
        width:100%;
        height:100%;
        background-position:cover;
	    background-repeat: no-repeat;
        position:fixed;
    }

</style>
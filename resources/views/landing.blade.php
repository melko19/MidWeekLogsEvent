@extends('base')
<img src="/images/homes1.jpg" alt="">
@section('content')
    <div class="col-md-8 offset-md-2 info fixed-top ">
        <h1 class="text-center">Koro Company</h1>
            <p class="text-center">
                Everything starts in a way of living with your own decision  
            </p>
            <a href="#" class="btn btn-md text-center">OHAYOO SENSIE</a>
    </div>
<style>
    img{
        width:100%;
        height: 100vh;
        background-position: top;
	    background-repeat: no-repeat;
    }   
    .info{
        margin-top:25%;
        
        transform: translateY(-15%);
    }
    .info h1{
        font-size: 2.5em;
        font-weight: 1000;
        color: #f5fffd;
        letter-spacing: 2px;
    }
    .info p{
        font-size: 1.5em;
        font-weight: 200;
        color: #e7fdff;
        letter-spacing: 2px;
    }
    .info a{
        margin-left:50%;
        transform: translateX(-50%);
        color: #fff;
        background: grey;
        padding:6px 12px; 
        font-size: 1em;
        font-weight: 100;
    }
    .info a:hover{
        background: #e91e63;
    }
</style>
@stop
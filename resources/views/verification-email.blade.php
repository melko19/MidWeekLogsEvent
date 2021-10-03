<div class="container">

<h1>IPT Systems</h1>
<p>
    Welcome {{$user->name}}!
</p>
<hr>
<p>
    You've receive this email as a result of your-registration to our website.
    Please Click on the verification link to verify your account.
</p>

<p>
    <a href="{{url('/verification/' . $user->id . "/" . $user->remember_token)}}">
        Click here to verify
    </a>
</p>
</div>
<style>
    h1{
        font-weight: 1000;
    }
</style>
@extends('layouts.app')

@section('title', 'Reedy River Riot')

@section('content')
<div class="bg">
    <div class="container">
        <div class="text-center text-white py-5">
            <h1 class="display-1 text-uppercase landing-header font-weight-bold">Let's Riot</h1>
            
            <div class="py-5">
                <a href="http://mp.gg/umubn" class="text-uppercase btn btn-green btn-lg">Join the Riot</a>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row text-center py-5">
        <div class="col-md-6">
            <h3 class="h3-responsive font-weight-bolder p-3">We exist to support the Greenville Triumph SC without restraint</h3>

            <h3 class="h3-responsive font-weight-bolder p-3">We exist to bring an unforgettable atmosphere to every single match</h3>
            
            <h3 class="h3-responsive font-weight-bolder p-3">We exist to make a difference in the Upstate of SC on and off the pitch</h3>
        </div>
        <div class="col-md-6">
            <img src="images/riot.png" class="landing-img">
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('title', 'Reedy River Riot - Join the Riot')

@section('head_styles')
    <link href="{{ asset('css/join.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container py-4">
        <div class="text-center">
           
            <p>We’re so excited that you’re interested in joining the Reedy River Riot! Click the button below and create your Member Planet account. Once you are signed up you’ll be able to choose how you’d like to support the Greenville Triumph! All proceeds go towards member perks, game-day equipment, tifos, and tailgates. Are you ready to Riot? </p>
            <a class="btn btn-lg btn-green text-uppercase" href="http://mp.gg/umubn" target="_blank">Join the Riot</a>
        </div>
        <div class="card-deck pt-5 d-flex flex-wrap">
            @foreach ($membershipTypes as $type)
                <div class="card mb-4">
                    <div class="view overlay">
                        <img class="card-img-top" src="{{ asset('images/riot-march-'.$type['id'].'.jpg') }}" alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <div class="card-body text-center">
                        <h3 class="card-title membership-title">{{ $type['name'] }}</h4>
                        <p class="card-text">{{ $type['description'] }}</p>
                        <p>${{ $type['price'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="font-size-small font-italic">*The Reedy River Riot has ZERO tolerance for violence, the use of derogatory language, bigotry, and any form of hate speech. Parents must understand that children may be exposed to adult language, alcohol, and views may be obstructed at times.</div>
    </div>
@endsection
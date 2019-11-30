@extends('layouts.app')

@section('title', 'Reedy River Riot - About Us')

@section('head_styles')
    <link href="{{ asset('css/about.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <h2 class="text-upper font-weight-bold text-center py-3">About Us</h2>
        <div class="row mx-auto">
            <div class="col-md-6">
                    <p>The Reedy River Riot began in earnest when members of our leadership began discussing strategies to create a professional soccer team in Greenville. A social media blitz of #usl2gvl and a Change.Org petition in June 2017 began this process. The petition to “Bring Professional Soccer to Greenville” garnered over 900 signatures and caught the eye of the USL leadership and the local prospective ownership group. Our dream was fulfilled in March 2018 with the announcement that Greenville had been chosen as a founding member of the USL D3.</p>
                    
                    <p>Throughout the conception and build out of the team, the initial membership of the Reedy River Riot began meeting to discuss our vision for a supporters group. Our leadership consists of a group of soccer fanatics based in and around Greenville who have served together in leadership positions within numerous soccer supporter groups in the past. We draw on these experiences to begin the story of the Riot.</p>
                    
                    <p>We exist to support the Greenville Triumph SC! We look forward to sharing the passion for the Beautiful Game with any and all who love this sport and this city. Of course, you don’t have to be a member to sit with us, all are welcome! We invite y’all to Join the Riot!</p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/reedy_river_riot.jfif') }}" alt="Riot Flag" class="about-img-flag">
            </div>
        </div>
        <h3 class="h3-responsive font-weight-bold my-2 text-upper text-center">Meet the Board</h3>
        <div class="row py-3">
            @foreach($users as $user)
                <div class="col-md-4 col-lg-3">
                    <h5 class="text-upper font-weight-bold mb-0">{{ $user['name'] }}</h5>
                    <span class="font-italic mb-1">{{ $user['title'] }}</span>
                </div>
            @endforeach
        </div>
    </div>
@endsection
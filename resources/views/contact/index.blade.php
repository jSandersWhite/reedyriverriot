@extends('layouts.app')

@section('title', 'Reedy River Riot - Contact Us')

@section('head_styles')
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
@endsection

@section('bottom-scripts')
    <script src="{{ asset('js/contact.js') }}"></script>
@endsection

@section('content')
<div class="container">
    @if(Session::has('success'))
    <p class="alert alert-success">{{ Session::get('success') }}</p>
    @endif
    @if(Session::has('errors'))
    <p class="alert alert-warning">{{ Session::get('errors') }}</p>
    @endif

    <div class="text-center">
        <a href="" class="btn btn-default btn-green mb-4 text-white text-uppercase" data-toggle="modal" data-target="#modalRegisterForm">
            Sign Up For Our Newsletter
        </a>
    </div>
    
    <div class="card w-responsive m-auto">
        <div class="card-header text-center">
            <h2 class="dday-header text-uppercase card-title">Contact Us</h2>
            <h5 class="card-text">Do you have ideas? Questions? Concerns? We would love to hear from you!</h5>
        </div>
        <div class="card-body">        
        {{ Form::open(array('action' => 'ContactController@submitContact', 'id' => 'contactForm')) }}
        <div class="row mx-3">
            <div class="col px-0">
                {{ Form::label('first_name') }} *
                {{ Form::text('first_name', null, ['class' => 'form-control validate w-75']) }}
            </div>
            <div class="col px-0">
                {{ Form::label('last_name') }} *
                {{ Form::text('last_name', null, ['class' => 'form-control validate w-75']) }}
            </div>
        </div>
        <div class="mx-3">
            {{ Form::label('email') }} *
            {{ Form::email('email', null, ['class' => 'form-control validate']) }}
        </div>
        <div class="mx-3">
            {{ Form::label('subject') }} *
            {{ Form::text('subject', null, ['class' => 'form-control validate']) }}
        </div>
        <div class="mx-3">
            {{ Form::label('message') }} *
            {{ Form::textArea('message', null, ['class' => 'form-control validate']) }}
        </div>
        <div class="d-flex justify-content-center">
            {{ Form::submit('Submit', ['class' => 'btn btn-green', 'id' => 'contactBtn']) }}
        </div>
        {{ Form::close() }}
    </div>
</div>

<div class="modal fade" id="modalRegisterForm" tabidex="-1" role="dialog" aria-labelledby="signupFormLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Sign Up For Our Newsletter</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fa fa-times"></i></span>
                </button>
            </div>

            <div class="modal-body mx-3">
                    <div class="alert alert-danger print-error-msg" style="display:none">
                            <ul></ul>
                        </div>
                {{ Form::open(array('action' => 'ContactController@newsletterSignup', 'id' => 'newsletterForm')) }}
                <div class="row">
                    <div class="col">
                        {{ Form::label('first_name') }} *
                        {{ Form::text('first_name', null, ['class' => 'form-control validate']) }}             
                    </div>
                    <div class="col">
                        {{ Form::label('last_name') }} *
                        {{ Form::text('last_name', null, ['class' => 'form-control validate']) }}
                    </div>
                </div>
                <div class="my-1">
                    {{ Form::label('email') }} *
                    {{ Form::email('email', null, ['class' => 'form-control validate']) }}
                </div>

                <div class="modal-footer d-flex justify-content-center">
                    {{ Form::submit('Submit', ['class' => 'btn btn-green', 'id' => 'newsletterBtn']) }}
                </div>
                
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>

@endsection
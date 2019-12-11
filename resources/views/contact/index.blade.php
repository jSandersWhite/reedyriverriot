@extends('layouts.app')

@section('title', 'Reedy River Riot - Contact Us')

@section('head_styles')
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="text-center">
        <a href="" class="btn btn-default btn-green mb-4 text-white text-uppercase" data-toggle="modal" data-target="#modalRegisterForm">
            Sign Up For Our Newsletter
        </a>
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
                {{ Form::open(array('action' => 'ContactController@newsletterSignup')) }}
                <div class="md-form mb-5">
                    <div class="row">
                        <div class="col">
                            <label data-error="wrong" data-success="right" for="first_name">First Name</label>
                            {{ Form::text('first_name', null, ['class' => 'form-control validate']) }}             
                        </div>
                        <div class="col">
                            {{ Form::label('last_name') }}
                            {{ Form::text('last_name', null, ['class' => 'form-control validate']) }}
                        </div>
                    </div>
                </div>
                <div class="md-form mb-5">
                    {{ Form::label('email') }}
                    {{ Form::email('email', null, ['class' => 'form-control validate']) }}
                </div>

                <div class="modal-footer d-flex justify-content-center">
                    {{ Form::submit('Submit', ['class' => 'btn btn-green']) }}
                </div>
                
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>

@endsection
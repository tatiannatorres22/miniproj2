@extends('layouts.app')
@section('content')


    <h1>Contact Form</h1>

    <p class="lead">Please feel free to fill out the contact form below to learn more.</p>

    <form id="contact-form" method="post" action="{{route('contact.store')}}" role="form">

        {{ csrf_field() }}


        <div class="form-group">
            <label for="name">Name *</label>
            <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *">

        </div>


        <div class="form-group">
            <label for="email">Email *</label>
            <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *">
            <div class="help-block with-errors"></div>
        </div>

        <div class="form-group">
            <label for="message">Message *</label>
            <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4"></textarea>
        </div>


        <input type="submit" class="btn btn-success btn-send" value="Send message">

    </form>
@endsection
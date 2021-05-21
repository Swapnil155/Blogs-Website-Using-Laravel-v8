@extends('front.layout.layout')
@section('page_title','Contact Us')
@section('header_name','Contact Me')
@section('header_subname','Have questions? I have answers.')
@section('header_img',asset('front_asset/img/contact-bg.jpg'))
@section('container')

<p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
        <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
        <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
        <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
        <form method="POST" action="{{url('/contact/submit_query')}}">
        @csrf
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Name</label>
              <input name="name" type="text" class="form-control" placeholder="Name" id="name" required>
                <p class="help-block text-danger">
                    @error('name')
                        <ul role="alert" style="color:red"><li>{{$message}}</li></ul>
                    @enderror
                </p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Email Address</label>
              <input name="email" type="email" class="form-control" placeholder="Email Address" id="email"  required>
              <p class="help-block text-danger">
                    @error('email')
                        <ul role="alert" style="color:red"><li>{{$message}}</li></ul>
                    @enderror
                </p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Phone Number</label>
              <input name="mobile" type="tel" class="form-control" placeholder="Phone Number" id="phone"  required>
              <p class="help-block text-danger">
                    @error('mobile')
                        <ul role="alert" style="color:red" ><li>{{$message}}</li></ul>
                    @enderror
                </p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Message</label>
              <textarea name="message" rows="5" class="form-control" placeholder="Message" id="message" required ></textarea>
              <p class="help-block text-danger">
                    @error('message')
                        <ul role="alert" style="color:red"><li>{{$message}}</li></ul>
                    @enderror
                </p>
            </div>
          </div>
          <br>
          <div id="success">@if (session('msg'))
            <script> alert("{{session('msg')}}")</script>
          @endif</div>
          <button name="Send" class="btn btn-primary" >send</button>
    </form> 

@endsection
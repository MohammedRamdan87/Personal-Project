@extends('personal.layout')
@section('title','Contact Page')
@section('body','d-flex flex-column')
@section('content')
            <!-- Page content-->
            <section class="py-5">
                <div class="container px-5">
                    <!-- Contact form-->
                    <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                        <div class="text-center mb-5">
                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                            <h1 class="fw-bolder">Get in touch</h1>
                            <p class="lead fw-normal text-muted mb-0">Let's work together!</p>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <!-- Name input-->
                                {{-- Global Errors --}}
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
                                <form id="contactForm"  method="POST" action="{{ route('forms.contact') }}" enctype="multipart/form-data">
                                    @csrf


                                    @if(Session::get('success'))
                                    <div class="alert alert-success">
                                        {{session::get('success')}}
                                    </div>
                            @endif




                                    <div class="form-floating mb-3">
                                        <input class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name') }}" id="name" name="name" type="text" placeholder="Enter your name..."/>
                                        <label for="name">Full name</label>
                                        <div class="invalid-feedback">
                                            @error('name')   {{ $message }}
                                        @enderror
                                    </div>
                                    </div>
                                    <!-- Email address input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control @error('email') is-invalid @enderror"
                                        value="{{ old('email') }}" id="email" name="email" type="email" placeholder="name@example.com" />
                                        <label for="email">Email address</label>
                                        <div class="invalid-feedback">
                                            @error('email')   {{ $message }}
                                            @enderror</div>
                                    </div>
                                    <!-- Phone number input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control @error('phone') is-invalid @enderror"
                                        value="{{ old('phone') }}"  id="phone" name="phone" type="tel" placeholder="(123) 456-7890"/>
                                        <label for="phone">Phone number</label>
                                        <div class="invalid-feedback">
                                            @error('phone')   {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- Message input-->
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" type="text" placeholder="Enter your message here..." style="height: 10rem" >{{ old('message') }}</textarea>
                                        <label for="message">Message</label>
                                        <div class="invalid-feedback">
                                            @error('message')   {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3 form-label">
                                        <label for="file">File:</label>
                                        <input type="file" name="file" id="file" class="form-control @error('file') is-invalid @enderror" />
                                        <div class="invalid-feedback">
                                            @error('file')   {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-grid"><button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @endsection

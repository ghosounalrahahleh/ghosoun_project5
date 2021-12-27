@extends('publicSite.layout.master')

@section('title','User-Profile')
@section('content')


<section class="ftco-section ">
    <div class="container mt-5">
        <div class="row justify-content-center mb-5 pb-2 ">
            <div class="container ">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-8">
                        <div class="about-text go-to">
                            <h3 class="dark-color">Welcome: {{ Auth::user()->name }}</h3>
                            <h6 class="theme-color lead">Enjoy your experience at Afdalcomp</h6>
                            <p>The website is the portal to what ever you would like to browse from any company</p>
                            <div class="row about-list">
                                <div class="col-md-6">
                                    <div class="media">
                                        <label>E-mail:</label>
                                        
                                    </div>
                                    <div class="media">
                                        <label>Phone:</label>
                                        
                                    </div>
                                    
                                    <div class="media">
                                        <label>Address:</label>
                                        
                                    </div>
                                    <div class="media">
                                        <label>Work@:</label>
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="media">
                                        
                                        <label>{{ Auth::user()->email }}</label>
                                    </div>

                                    <div class="media">
                                        
                                        <label>077-885-3321</label>
                                    </div>
                                    <div class="media">
                                        
                                        <label>Jordan, HKJ</label>
                                    </div>
                                    <div class="media">
                                       
                                        <label>Orange</label>
                                    </div>
                                        <a href= "{{ route("users.edit",Auth::user()->id) }}" ><button type="button" class="btn btn-primary w-75">Edit</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="about-avatar">
                          
                            <img class="rounded-circle mt-5 w-75" src="{{asset( Auth::user()->image ) }}" title="" alt="User picture">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
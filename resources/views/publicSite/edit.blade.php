@extends('publicSite.layout.master')

@section('title','Edit')
@section('content')


<section class="ftco-section ">
    <div class="container mt-5 border"style="text-align: center;">
        <div class="row mb-5 pb-2 ">
            <div class="container ">
                <div class="row align-items-center flex-row-reverse ">
                    <div class="col-lg-8" >
                        <div class="about-text go-to">
                            <h3 class="dark-color">Edit</h3>
                            <form action="{{route('users.update',Auth::user()->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                           
                            <div class="row about-list" style="justify-content:center" >

                                    <div class="col-md-12"><label class="labels">My Name</label><input type="text"
                                        class="form-control" placeholder="Name" value="{{ Auth::user()->name }}"
                                        name="name">
                                    </div>
                                <div class="col-md-12"><label class="labels">My Email</label><input type="email"
                                        class="form-control" value="{{ Auth::user()->email }}" placeholder="Email"
                                        name="email"></div>
                               
                                    <div class="col-md-12"><label class="labels">My Password</label><input
                                        type="password" class="form-control" placeholder="Password"
                                        value="{{ Auth::user()->password }}" name="password">
                                    </div>
                                <div class="col-md-12"><label class="labels">Upload image</label><input type="file"
                                        class="form-control" placeholder="Image" value="" type="file" name="image">
                                </div>
                            </div>
                                <div class="mt-5 text-center"><button class="btn btn-primary profile-button"
                                    type="submit">Save Profile</button></div>
                                    </div>
                                </div>    
                                    <div class="col-lg-4">
                                    <div class="about-avatar">
                                    <div class="d-flex space-around p-3 py-5"><img class=" mt-5" style="width:200px; border-radius:10%;" src="{{asset( Auth::user()->image ) }}"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                    </div>
        </div>
    </div>
</section>

@endsection





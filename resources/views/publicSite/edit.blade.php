@extends('publicSite.layout.master')

@section('title','Edit')
@section('content')

<section class="ftco-section ">
    <div class="container ">
        <div class="row justify-content-center mb-5 pb-2 ">
            <form action="{{route('users.update',Auth::user()->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="container rounded bg-white mt-5 mb-5">
                    <div class="row">
                        <div class="col-md-2 border-right">

                        </div>
                        <div class="col-md-8 border-right">
                            <div class="p-3 py-5">
                                <div class="d-flex justify-content-center align-items-center mb-3">
                                    <h4 class="text-right">Edit Profile</h4>
                                </div>
                                <div class="d-flex justify-content-center align-items-center mb-3">
                                    <div class="d-flex space-around p-3 py-5"><img class="rounded-circle mt-5 w-75"
                                            src="{{asset( Auth::user()->image ) }}"></div>
                                </div>

                                <div class="row mt-2">

                                    <div class="col-md-12"><label class="labels">My Name</label><input type="text"
                                            class="form-control" placeholder="Name" value="{{ Auth::user()->name }}"
                                            name="name"></div>
                                    <div class="col-md-12"><label class="labels">My Email</label><input type="email"
                                            class="form-control" value="{{ Auth::user()->email }}" placeholder="Email"
                                            name="email"></div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12"><label class="labels">My Password</label><input
                                            type="password" class="form-control" placeholder="Password"
                                            value="{{ Auth::user()->password }}" name="password"></div>
                                    <div class="col-md-12"><label class="labels">Upload image</label><input type="file"
                                            class="form-control" placeholder="Image" value="" type="file" name="image">
                                    </div>
                                </div>

                                <div class="mt-5 text-center"><button class="btn btn-primary profile-button"
                                        type="submit">Save Profile</button></div>
                            </div>
                        </div>

                    </div>
                </div>
        </div>
    </div>
    </form>
    </div>
    </div>
    </div>

    @endsection
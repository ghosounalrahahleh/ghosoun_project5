@extends('publicSite.layout.master')

@section('title','Companies')
@section('content')

{{-- internal css style part --}}
<style>
  .page_link>a:hover {
    font-weight:900;
  }

  body {
    overflow-x: hidden
  }

  .container-fluid {
    background-image: linear-gradient(to right, #7B1FA2, #E91E63)
  }

  .sm-text {
    font-size: 10px;
    letter-spacing: 1px
  }

  .sm-text-1 {
    font-size: 14px
  }

  .green-tab {
    background-color: #00C853;
    color: #fff;
    border-radius: 5px;
    padding: 5px 3px 5px 3px
  }

  .btn-red {
    background-color: #E64A19;
    color: #fff;
    border-radius: 20px;
    border: none;
    outline: none
  }

  .btn-red:hover {
    background-color: #BF360C
  }

  .btn-red:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0
  }

  .round-icon {
    font-size: 40px;
    padding-bottom: 10px
  }

  .fa-circle {
    font-size: 10px;
    color: #EEEEEF
  }

  .green-dot {
    color: #4CAF50
  }

  .red-dot {
    color: #E64A19
  }

  .yellow-dot {
    color: #FFD54F
  }

  .grey-text {
    color: #BDBDBD
  }

  .green-text {
    color: #4CAF50
  }

  .block {
    border-right: 1px solid #F5EEEE;
    border-top: 1px solid #F5EEEE;
    border-bottom: 1px solid #F5EEEE
  }

  .profile-pic img {
    border-radius: 50%
  }

  .rating-dot {
    letter-spacing: 5px
  }

  .via {
    border-radius: 20px;
    height: 28px
  }
  }
</style>

{{-- Company name and desc + breedcrumbs section --}}
<section class="ftco-section bg-light">
  <div class="banner_inner d-flex align-items-center">
    <div class="container">
      <div class="page_link mb-sm-5 mb-md-5">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('allCategories') }}">/ Companies</a>
        <a href={{ route('company',$singleOwners->id) }}>
          / {{ $singleOwners->company_name }}</a>
      </div>
      <div class="row">
        <div class="col-5">
          <img width="90%" height="400px" src="{{asset($singleOwners->logo)}}" class="" alt="Company-logo">
        </div>
        <div class="col-7">
          <div class="banner_content d-md-flex justify-content-between align-items-center">
            <div class="mb-sm-5 mb-md-5">
              <h2>{{ $singleOwners->company_name }} Company</h2>
              <p>{{ $singleOwners->desc}}</p>
              <p><strong>Avg. reveiws</strong></p>
            </div>

          </div>
          {{-- Form section --}}
          <div class="d-flex row">
            <form action="{{ route('companyReview',$singleOwners->id) }}" method="post" class=" ms-5">
              @csrf
              <fieldset>
                <div class="mb-3 col-12">
                  <label for="disabledSelect" class="form-label col-3 "
                    style="max-width: fit-content; padding:0;">Choose
                    Review: </label>
                  <select id="disabledSelect" class="form-select col-3 text-black" style="width:150px "
                    name="rate-select">
                    Choose review
                    <option value="1" active>1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                  <button type="submit" class="btn btn-primary col-3">Add</button>
                </div>

              </fieldset>
            </form>
          </div>
        </div>

      </div>

      {{-- End Form --}}
    </div>

  </div>

  {{-- End Company name and desc + breedcrumbs section --}}


</section>

@endsection
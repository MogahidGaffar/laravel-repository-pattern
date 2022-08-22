@extends('users.layout')
@section('content')


<br>
<h2> Create New User </h2> <hr>
<br>

<form action="{{ route('users.createOne') }}" method="post">
  @csrf
  <div class="row">
    <div class="col-md-6">
    <div class="form-group">
      <label for="name"> @lang('words.Name')</label>
      <input type="text" class="form-control" id="name"  name="name">
    </div>
  </div>
      <div class="col-md-6">
    <div class="form-group">
        <label for="address"> @lang('words.Address')</label>
        <input type="text" class="form-control" id="address" name="address">
      </div>
    </div>
  </div>
      <div class="row">
        <div class="col-md-6">
      <div class="form-group">
        <label for="phone"> @lang('words.Phone')</label>
        <input type="text" class="form-control" id="phone" name="phone" >
      </div>
    </div>

        <div class="col-md-6">
      <div class="form-group">
        <label for="email"> @lang('words.Email')</label>
        <input type="text" class="form-control" id="email" name="email" >
      </div>
      </div>
    </div>

    <button type="submit" class="btn btn-primary">@lang('words.save')&nbsp; <i class="fa fa-save    " aria-hidden="true"></i>   </button>
  </form>

@endsection
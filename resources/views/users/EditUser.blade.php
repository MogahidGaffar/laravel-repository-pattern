@extends('users.layout')
@section('content')
<br><br><br>

<form action="{{ route('users.UpdateOne',$user->id) }}" method="post">
  @csrf
  <div class="row">
    <div class="col-md-6">
    <div class="form-group">
        <label for="name"> @lang('words.Name')</label>
        <input type="text" class="form-control" id="name"  name="name" value="{{ $user->name }}">
      </div>
    </div>
      <div class="col-md-6">
   
      <div class="form-group">
          <label for="address"> @lang('words.Address')</label>
          <input type="text" class="form-control" id="address" name="address" value="{{ $user->address }}">
        </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">

      <div class="form-group">
        <label for="phone"> @lang('words.Phone')</label>
        <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}" >
      </div>
    </div>

      <div class="col-md-6">
      
      <div class="form-group">
        <label for="email"> @lang('words.Email')</label>
        <input type="text" class="form-control" id="email" name="email"  value="{{ $user->email }}">
      </div>
    </div>
    </div>

    <button type="submit" class="btn btn-primary">@lang('words.update')</button>
  </form>

@endsection
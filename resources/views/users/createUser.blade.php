@extends('users.layout')
@section('content')

<form action="{{ route('users.createOne') }}" method="post">
  @csrf
    <div class="form-group">
      <label for="name"> @lang('words.Name')</label>
      <input type="text" class="form-control" id="name"  name="name">
    </div>
 
    <div class="form-group">
        <label for="address"> @lang('words.Address')</label>
        <input type="text" class="form-control" id="address" name="address">
      </div>

      <div class="form-group">
        <label for="phone"> @lang('words.Phone')</label>
        <input type="text" class="form-control" id="phone" name="phone" >
      </div>

      
      <div class="form-group">
        <label for="email"> @lang('words.Email')</label>
        <input type="text" class="form-control" id="email" name="email" >
      </div>

    <button type="submit" class="btn btn-primary">@lang('words.save')</button>
  </form>

@endsection
@extends('users.layout')
@section('content')

<form action="{{ route('users.createOne') }}" method="post">
    <div class="form-group">
      <label for="name"> @lang('words.Name')</label>
      <input type="text" class="form-control" id="name" >
    </div>
 
    <div class="form-group">
        <label for="name"> @lang('words.Address')</label>
        <input type="text" class="form-control" id="name" name="address">
      </div>

      <div class="form-group">
        <label for="name"> @lang('words.Phone')</label>
        <input type="text" class="form-control" id="name" name="phone" >
      </div>

    <button type="submit" class="btn btn-primary">@lang('words.save')</button>
  </form>

@endsection
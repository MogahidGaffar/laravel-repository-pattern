@extends('users.layout')
@section('content')


<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">@lang('words.name')</th>
        <th scope="col">@lang('words.address')</th>
        <th scope="col">@lang('words.phone')</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($users as  $index=>$user)
        <th scope="row">{{ $index+=1 }}</th>
        <td>{{ $user->name }}</td>
        <td>{{ $user->address }}</td>
        <td>{{ $user->phone }}</td>
            <td>
                <form action="{{ route('users.RemoveOne') }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-outline-danger" type="submit">@lang('words.remove')</button>
                </form>
            </td>
            <td>
                <a href="{{route('users.getEditpage',$user->id)}}" class="btn btn-outline-primary">@lang('words.edit') </a>
            </td>
        @endforeach
        </tbody>
        <tfoot>
            <tr>
                <a href="{{ route('users.getCreatepage') }}" class="btn btn-outline-primary"></a>
            </tr>
        </tfoot>
  </table>


@endsection

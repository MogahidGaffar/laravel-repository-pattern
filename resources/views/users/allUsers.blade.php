@extends('users.layout')
@section('content')

<br><br><br>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col"> @lang('words.Name')</th>
        <th scope="col">@lang('words.Address')</th>
        <th scope="col">@lang('words.Phone')</th>
        <th scope="col">@lang('words.Email')</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as  $index=>$user)
      <tr>
        <th scope="row">{{ $index+=1 }}</th>
        <td>{{ $user->name }}</td>
        <td>{{ $user->address }}</td>
        <td>{{ $user->phone }}</td>
        <td>{{ $user->email }}</td>
            <td>
                <form action="{{ route('users.RemoveOne',$user->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-outline-danger" type="submit">@lang('words.remove')</button>
                </form>
            </td>
            <td>
                <a href="{{route('users.getEditpage',$user->id)}}" class="btn btn-outline-primary">@lang('words.edit') </a>
            </td>
      </tr>
        @endforeach
        </tbody>
        <tfoot>
            <tr>
              <th>
                <a href="{{ route('users.getCreatepage') }}" class="btn btn-outline-primary">Create</a>
              </th>
              </tr>
        </tfoot>
  </table>


@endsection

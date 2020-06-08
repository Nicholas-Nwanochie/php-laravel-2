@extends('includes.master')

@section('content')

@include('includes.validate')


@if($errors->any())
<ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
@endif


<form method="POST" action="{{route('createuser')}}">
    @csrf
    <input placeholder="fname" type="text" name="fname" value="{{old('fname')}}"><br />
    <input placeholder="lname" type="text" name="lname" value="{{old('lname')}}"><br />
    <input placeholder="email" type="text" name="email" value="{{old('email')}}"><br />
    <input placeholder="password" type="password" name="password" value="{{old('password')}}"><br />
    <textarea name="notes"></textarea><br />

    <button type="submit">enter</button>
</form>

@endsection

@section('scripts')
<script>


</script>


@endsection

@extends('includes.master')

@section('content')

{{$users->fname}}

{{$users->lname}}



<form method="POST" action="">
    @csrf
    <input placeholder="fname" type="text" name="fname" value="{{$users->fname}}" required><br />
    <input placeholder="lname" type="text" name="lname" value="{{$users->lname}}" required><br />
    <input placeholder="email" type="text" name="email" value="{{$users->email}}" required><br />
    <input placeholder="password" type="password" name="password" value="{{$users->password}}" required><br />
    <textarea name="notes"></textarea><br />

    <button type="submit">save changes</button>
</form>


@endsection

@section('scripts')
<script>


</script>


@endsection

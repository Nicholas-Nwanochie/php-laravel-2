@extends('includes.master')

@section('content')


<table style="width: 600px; text-align:left">


        <thead>

            <tr>
                <th>first name</th>
                <th>last name</th>
            </tr>
        </thead>
         <tbody>
             @foreach($users as $user)
        <tr>
            <td>
                {{$user->fname}}
            </td>

            <td>
                {{$user->lname}}
            </td>


        </tr>
        @endforeach
    </tbody>

</table>

{{$users->links()}}
@endsection

@section('scripts')
<script>


</script>


@endsection

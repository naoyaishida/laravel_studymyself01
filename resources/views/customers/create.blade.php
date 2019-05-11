@extends('layout')
@section('title','Edit detail')
@section('content')


<div class="row">
    <div class="col-12">
    <h1>Edit Detail for</h1>
    </div>
</div>

<div class="row">
    <div class="col-12">
        {{-- しょうもない書き方ミスしてた --}}
    <form action="{{route('customers1')}}" method="post">

   @include('customers.form')

    <button type="submit" class="btn btn-primary">save customer</button>

</form>
    </div>
</div>


@endsection



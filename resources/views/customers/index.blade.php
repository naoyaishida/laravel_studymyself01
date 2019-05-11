@extends('layout')
@section('title','Customer List')
@section('content')


<div class="row">
    <div class="col-12">
            <h1>Customer List</h1>
            {{-- めっちゃ簡単なミスしていた --}}
            <p><a href="/customers/create">Add New Customer</a></p>
    </div>
</div>

@foreach ($customers as $customer)
<div class="row">
    <div class="col-2">
        {{$customer->id}}
    </div>
<div class="col-4">
    {{-- IDへ飛ばすやり方、アンカータグの中にはアクション入れない、ルートないで --}}
    <a href="{{route('customers.show',['id'=>$customer->id])}}">{{$customer->name}}</a>
</div>
<div class="col-4">{{$customer->company->name}}</div>
<div class="col-2">{{$customer->active}}</div>
</div>
@endforeach



@endsection



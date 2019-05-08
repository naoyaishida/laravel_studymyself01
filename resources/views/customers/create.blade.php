@extends('layout')
@section('title','Add New Customer')
@section('content')


<div class="row">
    <div class="col-12">
            <h1>Add New Customer</h1>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <form action="customers" method="post">

    <div class="form-group" pb-2 >
        <label for="name">Name</label>
        <input type="text" name="name"  value="{{old('name')}}" class="form-control">
        <div>{{$errors->first('name')}}</div>
    </div>

    <div class="form-group" >
        <label for="email">Email</label>
    <input type="email" name="email" value="{{old('email')}}" class="form-control">
        <div>{{$errors->first('email')}}</div>
    </div>

    <div class="form-group">
            <label for="active">Satus</label>
        <select name="active" id="active" class="form-control">
            <option value="" disabled>Select Customer Status</option>
            <option value="1">Active</option>
            <option value="0">Inactive</option>
        </select>
    </div>

     <div class="form-group">
            <label for="company">Satus</label>
        <select name="company_id" id="company" class="form-control">
            @foreach ($companies as $company)
            {{-- valueにID番号を入れて引っ張ってくる --}}
        <option value="{{$company->id}}"  >{{$company->name}}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">add customer</button>
    @csrf
</form>
    </div>
</div>


@endsection



@extends('layout')
@section('title','Customer List')
@section('content')


<div class="row">
    <div class="col-12">
            <h1>Customer</h1>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <form action="{{route('cusutomers1')}}" method="POST">

    <div class="form-group" pb-2 >
        <label for="name">Name</label>
        <input type="text" name="name"  value="{{old('name')}}" class="form-control">
        <div>{{$errors->first('name')}}</div>
    </div>

    <div class="form-group" >
        <label for="email">Email</label>
    <input type="text" name="email" value="{{old('email')}}" class="form-control">
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
            <label for="active">Company</label>
        <select name="company_id" id="company_id" class="form-control">
            @foreach ($companies as $company)
        <option value="{{$company->id}}">{{$company->name}}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">add customer</button>
    @csrf
</form>
    </div>
</div>


<div class="row">
    <div class="col-6">
        <h3>Active Customer</h3>
        <ul>
    @foreach ($activeCustomers as $activeCustomers)
        <li>{{$activeCustomers->name}},{{$activeCustomers->email}}</li>
    @endforeach

</ul>
    </div>
    <div class="col-6">
            <h3>Inactive Customer</h3>

            <ul>
        @foreach ($inactiveCustomers as $inactiveCustomers)
            <li>{{$inactiveCustomers->name}},{{$inactiveCustomers->email}}</li>
        @endforeach

    </ul>
        </div>
</div>



@endsection



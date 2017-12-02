@extends('layout')
@section('content')

<br>
<div class="row" style="margin: 0 40px;">
    <div class="col-sm-6 col-sm-offset-3">
        <h3>Shipping Info</h3>
        <br>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('checkout.store') }}">
            {{ csrf_field() }}
            <label>Name</label> 
            <input type="text" name="name" class="form-control" required>
            <br>
            <label>Phone No</label> 
            <input type="number" name="phone" class="form-control" required>
            <br>
            <label>Address</label> 
            <textarea class="form-control" name="address" rows="5" cols="30" required>
            </textarea>
            <br>
            <label>Delivery Type</label>
             <select name="deltype" class="form-control">
                <option value="pickup">Pickup</option>
                <option value="home delivery">Home Delivery</option>
            </select>
            <br>
            <button class="btn btn-success" type="submit">Place the Order</button>
        </form>
    </div>
</div>

@endsection
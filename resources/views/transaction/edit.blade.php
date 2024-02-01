
@extends('layouts.app')
  

  
@section('contents')
    <h1 class="mb-0">Edit Transaction</h1>
    <hr />
    <form action="{{ route('transaction.update', $transaction->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Brand</label>
                <input type="text" name="brand" class="form-control" placeholder="Brand" value="{{ $transaction->brand }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Model</label>
                <input type="text" name="model" class="form-control" placeholder="Price" value="{{ $transaction->model }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Year</label>
                <input type="number" name="year" class="form-control" placeholder="Year" value="{{ $transaction->year }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Color</label>
                <input type="text" name="color" class="form-control" placeholder="Color" value="{{ $transaction->color }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Price</label>
                <input type="number" name="price" class="form-control" placeholder="Price" value="{{ $transaction->price }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Quantity</label>
                <input type="number" name="quantity" class="form-control" placeholder="Quantity" value="{{ $transaction->quantity }}" >
            </div>
            <div class="col">
            <label class="form-label">Type

            
            </label>
            <select type="text" name="transaction_type" class="form-control" placeholder="Type">
                <option value="Receive">Receive</option>
                <option value="Release">Release</option>
            </select>
            </div>
            <div class="col mb-3">
                <label class="form-label">Date</label>
                <input type="date" name="transaction_date" class="form-control" placeholder="Date" value="{{ $transaction->transaction_date }}" >
            </div>
        </div>
        
        <div class="row-auto">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
                <a class="btn btn-primary"  href="{{ route('transaction') }}">Cancel</a>
            </div>
        </div>
    </form>
@endsection
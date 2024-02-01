@extends('layouts.app')
  
  
@section('contents')
    <h1 class="mb-0">Details of Transaction</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Brand</label>
            <input type="text" name="brand" class="form-control" placeholder="Brand" value="{{ $transaction->brand }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Model</label>
            <input type="text" name="model" class="form-control" placeholder="Model" value="{{ $transaction->model }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Year</label>
            <input type="number" name="year" class="form-control" placeholder="Year" value="{{ $transaction->year }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Color</label>
            <input type="text" name="color" class="form-control" placeholder="Color" value="{{ $transaction->color }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Price</label>
            <input type="number" name="price" class="form-control" placeholder="Price" value="{{ $transaction->price }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Quantity</label>
            <input type="number" name="quantity" class="form-control" placeholder="Quantity" value="{{ $transaction->quantity }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Type</label>
            <input type="text" name="transaction_type" class="form-control" placeholder="Transaction Type" value="{{ $transaction->transaction_type }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Date</label>
            <input type="date" name="transaction_date" class="form-control" placeholder="Transaction Date" value="{{ $transaction->transaction_date }}" readonly>
        </div>
    </div>
   
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $transaction->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $transaction->updated_at }}" readonly>
        </div>
    </div>
    <a class="btn btn-primary"  href="{{ route('transaction') }}">Cancel</a>
@endsection


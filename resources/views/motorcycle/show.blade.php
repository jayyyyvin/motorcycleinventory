@extends('layouts.app')
  

  
@section('contents')
    <h1 class="mb-0">Detail Motorcycle</h1>
    <hr />
    
    <div class="row mb-3">
            <div class="col">
            <label class="form-label">Brand</label>
                <input type="text" name="brand" class="form-control" placeholder="Brand" value="{{ $motorcycle->brand }}" readonly>
            </div>
            <div class="col">
            <label class="form-label">Model</label>
                <input type="text" name="model" class="form-control" placeholder="Model" value="{{ $motorcycle->model }}" readonly>
            </div>
        </div>

            <!-- // -->
            <div class="row mb-3">
            <div class="col">
            <label class="form-label">Year</label>
                <input type="text" name="year" class="form-control" placeholder="Year" value="{{ $motorcycle->year }}" readonly>
            </div>
            <div class="col">
            <label class="form-label">Color</label>
                <input type="text" name="color" class="form-control" placeholder="Color" value="{{ $motorcycle->color }}" readonly>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
            <label class="form-label">Price</label>
                <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $motorcycle->price }}" readonly>
            </div>
            <div class="col">
            <label class="form-label">Quantity</label>
                <input type="text" name="quantity" class="form-control" placeholder="Quantity" value="{{ $motorcycle->quantity }}" readonly>
            </div>
        </div>

   
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $motorcycle->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $motorcycle->updated_at }}" readonly>
        </div>
    </div>
    <a class="btn btn-primary"  href="{{ route('motorcycle') }}">Cancel</a>
@endsection


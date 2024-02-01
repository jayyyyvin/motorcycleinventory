


@extends('layouts.app')

  
@section('contents')
    <h1 class="mb-0">Edit Motorcycle</h1>
    <hr />
    <form action="{{ route('motorcycle.update', $motorcycle->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
    <label class="form-label">Brand</label>
    <select type="text" name="brand" class="form-control" id="exampleInputEmail" placeholder="Brand">
        <option value="" disabled>Select a Brand</option>
        <option value="BMW" {{ $motorcycle->brand === 'BMW' ? 'selected' : '' }}>BMW</option>
        <option value="HONDA" {{ $motorcycle->brand === 'HONDA' ? 'selected' : '' }}>HONDA</option>
        <option value="SUZUKI" {{ $motorcycle->brand === 'SUZUKI' ? 'selected' : '' }}>SUZUKI</option>
        <option value="harleydavidson" {{ $motorcycle->brand === 'harleydavidson' ? 'selected' : '' }}>HARLEY DAVIDSON</option>
    </select>
</div>

<div class="row mb-3">
    <label class="form-label">Model</label>
    <select type="text" name="model" class="form-control" id="exampleInputEmail" placeholder="Model">
        <option value="" disabled>Select a Model</option>
        <option value="s1000xr" {{ $motorcycle->model === 's1000xr' ? 'selected' : '' }}>s 1000 XR (BMW)</option>
        <option value="s1000rr" {{ $motorcycle->model === 's1000rr' ? 'selected' : '' }}>s 1000 RR (BMW)</option>
        <option value="cbr1000rr" {{ $motorcycle->model === 'cbr1000rr' ? 'selected' : '' }}>CBR 1000 RR (HONDA)</option>
        <option value="gsxs1000abs" {{ $motorcycle->model === 'gsxs1000abs' ? 'selected' : '' }}>GSX S1000 ABS (SUZUKI)</option>
        <option value="iron1200" {{ $motorcycle->model === 'iron1200' ? 'selected' : '' }}>IRON 1200 (HARLEY DAVIDSON)</option>
        <option value="custom1200" {{ $motorcycle->model === 'custom1200' ? 'selected' : '' }}>CUSTOM 1200 (HARLEY DAVIDSON)</option>
    </select>
</div>

            <!-- // -->
            <div class="row mb-3">
            <div class="col">
            <label class="form-label">Year</label>
                <input type="number" name="year" class="form-control" placeholder="Year" value="{{ $motorcycle->year }}" > 
            </div>
            <div class="col">
            <label class="form-label">Color</label>
                <input type="text" name="color" class="form-control" placeholder="Color" value="{{ $motorcycle->color }}" >
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
            <label class="form-label">Price</label>
                <input type="number" name="price" class="form-control" placeholder="Price" value="{{ $motorcycle->price }}" >
            </div>
            <div class="col">
            <label class="form-label">Quantity</label>
                <input type="number" name="quantity" class="form-control" placeholder="Quantity" value="{{ $motorcycle->quantity }}" >
            </div>
        </div>

        
        <div class="row-auto">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
                <a class="btn btn-primary"  href="{{ route('motorcycle') }}">Cancel</a>
            </div>
        </div>
    </form>
@endsection
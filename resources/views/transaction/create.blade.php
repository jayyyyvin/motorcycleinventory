@extends('layouts.app')
  

  
@section('contents')
    <h1 class="mb-0">Create Transaction</h1>
    <hr />
    <form action="{{ route('transaction.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
        <label class="form-label">Brand</label>
            <select type="text" name="brand" class="form-control" id="exampleInputEmail" placeholder="Brand">
                <option value="" selected disabled>Select a Brand</option>
                <option value="BMW">BMW</option>
                <option value="HONDA">HONDA</option> 
                <option value="SUZUKI">SUZUKI</option> 
                <option value="harleydavidson">HARLEY DAVIDSON</option> 
            </select>

            <label class="form-label">Model</label>
            <select type="text" name="model" class="form-control" id="exampleInputEmail" placeholder="Model">
                <option value="" selected disabled>Select a Model</option>
                <option value="s1000xr">s 1000 XR (BMW)</option>
                <option value="s1000rr">s 1000 RR (BMW)</option>
                <option value="cbr1000rr">CBR 1000 RR (HONDA)</option> 
                <option value="gsxs1000abs">GSX S1000 ABS (SUZUKI)</option> 
                <option value="iron1200">IRON 1200 (HARLEY DAVIDSON)</option> 
                <option value="custom1200">CUSTOM 1200 (HARLEY DAVIDSON)</option>
            </select>
            </div>

            <!-- // -->
            <div class="row mb-3">
            <div class="col">
            <label class="form-label">Year</label>
                <input type="number" name="year" class="form-control" placeholder="Year">
            </div>
            <div class="col">
            <label class="form-label">Color</label>
                <input type="text" name="color" class="form-control" placeholder="Color">
            </div>
            <div class="col">
            <label class="form-label">Price</label>
                <input type="number" name="price" class="form-control" placeholder="Price">
            </div>
            <div class="col">
            <label class="form-label">Quantity</label>
                <input type="number" name="quantity" class="form-control" placeholder="Quantity">
            </div>
    
        </div>

        <!-- sdd -->
            <div class="col">
            <label class="form-label">Transaction Type</label>
            <select type="text" name="transaction_type" class="form-control" placeholder="Type">
                <option value="Receive">Receive</option>
                <option value="Release">Release</option>
            </select>
            </div>

          
            <label class="col">Transaction Date</label>
            <div class="col">
                <input type="date" name="transaction_date" class="form-control" placeholder="Date">
            </div>
     <div class="row-auto">
   
   
     <div class="col-auto">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-primary" href="{{ route('transaction') }}">Cancel</a>
    </div>
</div>

        
    </form>
@endsection
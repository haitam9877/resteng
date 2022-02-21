@extends('layouts.app')

@section('content')


<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Add Your Offers</div>

            <div class="container m-5">
                <form method="POST" action="{{route('offers.store')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputtext1" class="form-label">Name Offer</label>
                        <input type="text" class="form-control" name="name">
                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputtext1" class="form-label">Prise</label>
                        <input type="text" class="form-control" name="prise">
                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputtext1" class="form-label">Dituls</label>
                        <input type="text" class="form-control" name="dituls">
                        
                    </div>
                        
                   
                    <button type="submit" class="btn btn-primary">Submit</button>
              </form>

            </div>

           
            
        </div>
    </div>
</div>
</div>
    
@endsection



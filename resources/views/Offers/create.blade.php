@extends('layouts.app')

@section('content')
@include('includes/Admin.navbar')


<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header"> {{__('offers.title offer')}}</div>

            <div class="container m-5">
                <form method="POST" action="{{route('offers.store')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputtext1" class="form-label">{{__('Offers.Name Offer')}}</label>
                        <input type="text" class="form-control" name="name">
                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputtext1" class="form-label">{{__('Offers.Prise')}}</label>
                        <input type="text" class="form-control" name="prise">
                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputtext1" class="form-label">{{__('Offers.Dituls')}}</label>
                        <input type="text" class="form-control" name="dituls">
                        
                    </div>
                        
                   
                    <button type="submit" class="btn btn-primary">{{__('Offers.Send')}}</button>
              </form>

            </div>

           
            
        </div>
    </div>
</div>
</div>
    
@endsection



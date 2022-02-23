@extends('layouts.app')

@section('content')
@include('includes/Admin.navbar')


<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header"> {{__('Admin/prodact.title prodact')}}</div>

            @if(Session::has('secs'))
            <div>hhhhhhhhhhhhhhhhhhhh</div>
            @endif

            <div class="container m-5">
                <form method="POST" action="{{route('prodacts.store')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputtext1" class="form-label">{{__('Admin/prodact.name prodact')}}</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}">
                        @error('name')
                        <div id="emailHelp" class="form-text alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputtext1" class="form-label">{{__('Admin/prodact.Prise')}}</label>
                        <input type="text" class="form-control  @error('prise') is-invalid @enderror" name="prise" value="{{old('prise')}}">
                        @error('prise')
                        <div id="emailHelp" class="form-text alert alert-danger">{{$message}}</div>
                        @enderror
                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputtext1" class="form-label">{{__('Admin/prodact.store')}}</label>
                        <input type="text" class="form-control  @error('store') is-invalid @enderror" name="store" value="{{old('store')}}">
                        @error('store')
                        <div id="emailHelp" class="form-text alert alert-danger">{{$message}}</div>
                        @enderror
                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputtext1" class="form-label">{{__('Admin/prodact.country')}}</label>
                        <input type="text" class="form-control  @error('country') is-invalid @enderror" name="country" value="{{old('country')}}">
                        @error('country')
                        <div id="emailHelp" class="form-text alert alert-danger">{{$message}}</div>
                        @enderror
                        
                    </div>
                        
                   
                    <button type="submit" class="btn btn-primary">{{__('Admin/prodact.send')}}</button>
              </form>

            </div>

           
            
        </div>
    </div>
</div>
</div>
    
@endsection
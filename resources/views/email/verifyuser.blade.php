@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <!-- اشعار بوقت التعلم -->
                    {{$datals['php']}}
                </div>

                <div class="card-body">
                    
                        <div class="alert alert-success" role="alert">
                            
                        <!-- سيكون موعدنا اليوم على الساعة 22:20 ليلا كن في الموعد -->
                    {{$datals['body']}}

                        </div>
                    

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

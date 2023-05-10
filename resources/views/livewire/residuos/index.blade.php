@auth
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-12">
            <div class="card bg-body border-secondary shadow p-3 mb-3">
                <div class="card-header border-secondary text-secondary"><h4>Residuos Existentes</h4>
                </div>  
                <div class="card-body">
                    <livewire:residuos.view>
                </div>
            
            </div> 
        </div>
    </div>
</div>
@endsection  
@endauth

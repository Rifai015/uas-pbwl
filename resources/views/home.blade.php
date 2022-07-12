@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Selamat Datang Di Website Laundry Rantauprapat ') }}

                    <br> {{ __('Laundry') }}
                    
                    <br> {{ __('Laundry diambil dari kata launder yang berarti mencuci pakaian / bahan tekstil. Usaha laundry bisa dilakukan dengan peralatan / mesin yang sederhana maupun dalam skala besar / industri.  ') }}
                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

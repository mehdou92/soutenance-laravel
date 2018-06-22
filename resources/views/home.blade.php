@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h2><?php echo Auth::id(); ?></h2>
                    Tu es bien enregistré !

                        <h4>Voici un récapitulatif de ton profil</h4>
                        <div class="profil-block">

                        </div>
                        <a class="nav-link" href="{{ url('user-list') }}">{{ __('Voir tes futurs match !') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

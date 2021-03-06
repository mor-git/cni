@extends('layouts.layoutLogin')

@section('contenu')
<style>
.tout {
    height: 100%;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    padding-top: 40px;
    padding-bottom: 40px;
}
</style>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
<div class="tout">
    <div class="splash-container">
        <div class="card ">
        <br>
        <div class="card-header text-center"><span class="splash-description">Se Connecter</span></div>
            <!-- <div class="card-header text-center"><img class="logo-img" src="../assets/images/ph3.jpg" alt="logo" style="height: 80px;width: 80px;"></a><span class="splash-description">Please entrez vos informations.</span></div> -->
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" placeholder="password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-success btn-lg btn-block">Se Connecter</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered" style="margin-left: 100px;">
                    <a href="#" class="footer-link">Mot de Passe Oublié</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
</div>
@endsection
  
   
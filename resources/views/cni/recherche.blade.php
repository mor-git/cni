
@extends('layouts.layout')

@section('contenu') 
<br>
<div class="dashboard-wrapper">
    <div class="container-fluid  dashboard-content">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-8 col-sm-8 col-8">
                <div class="card">
                    <h5 class="card-header">Recherche par Intervalle d'age</h5>
                    <div class="card-body">
                        <form method="get" action="{{ url('age') }}" id="validationform" data-parsley-validate="" novalidate="">
                            <input type="hidden" value="{{csrf_token()}}" name="_token" id="token" />
                            
                            <div class="form-group row">
                                <label class="col-4 col-sm-3 col-form-label text-sm-right" for="annee">Age Début</label>
                                &nbsp;&nbsp;
                                <div class="col-8 col-md-8">
                                    <select id="annee" name="anneeDebut"  class="form-control col-12 col-md-8">
                                    @for($i=18 ; $i<=100 ; $i++)
                                        <option value="{{ $i }}ans">{{ $i }}&nbsp;&nbsp;ans</option>
                                    @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-sm-3 col-form-label text-sm-right" for="anneeFin">Age Limite</label>
                                &nbsp;&nbsp;
                                <div class="col-8 col-md-8">
                                    <select id="anneeFin" name="anneeFin"  class="form-control col-12 col-md-8">
                                    @for($i=18 ; $i<=100 ; $i++)
                                        <option value="{{ $i }}ans">{{ $i }}&nbsp;&nbsp;ans</option>
                                    @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-sm-3 col-form-label text-sm-right" for="departement">Département</label>
                                &nbsp;&nbsp;
                                <div class="col-8 col-md-8">
                                    <select id="departement" name="departement"  class="form-control col-12 col-md-8">
                                        <option value="MBACKE">Mbacke</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group row text-center">
                                <div class="col col-md-10 offset-sm-1 offset-lg-0">
                                    <button type="submit" class="btn btn-space btn-success">Valider</button>
                                    <button class="btn btn-space btn-secondary">Annuler</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-4 col-sm-4 col-4">
                <div class="card">
                <h5 class="card-header">Recherche par Genre</h5>
                <div class="card-body">
                        <form method="get" action="{{ url('genre') }}" id="validationform" data-parsley-validate="" novalidate="">
                            <input type="hidden" value="{{csrf_token()}}" name="_token" id="token" />
                            
                            <div class="form-group row">
                                <label class="col-6 col-sm-3 col-form-label text-sm-right" for="genre">Genre</label>
                                &nbsp;&nbsp;
                                <div class="col-6 col-md-8">
                                    <select id="genre" name="genre"  class="form-control col-12 col-md-8">
                                        <option value="Masculin">Masculin</option>
                                        <option value="Féminin">Féminin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-sm-3 col-form-label text-sm-right" for="departement">Département</label>
                                &nbsp;&nbsp;
                                <div class="col-8 col-md-8">
                                    <select id="departement" name="departement"  class="form-control col-12 col-md-8">
                                        <option value="MBACKE">Mbacke</option>
                                    </select>
                                </div>
                            </div>
                                           
                            <div class="form-group row text-center">
                                <div class="col col-md-10 offset-sm-1 offset-lg-0 text-center">
                                    <button type="submit" class="btn btn-space btn-success">Valider</button>
                                    <button class="btn btn-space btn-secondary">Annuler</button>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection
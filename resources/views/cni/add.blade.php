
@extends('layouts.layout')

@section('contenu') 
<br>
<div class="dashboard-wrapper">
        <div class="container-fluid  dashboard-content">
<div class="row">
<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
                <div class="card">
                    <h5 class="card-header">Enrégistrement CNI</h5>
                    <div class="card-body">
                        <form method="post" action="{{ route('add_cni') }}" id="validationform" data-parsley-validate="" novalidate="">
                            <input type="hidden" value="{{csrf_token()}}" name="_token" id="token" />
                            
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Numéro</label>
                            
                                <div class="col-12 col-md-5">
                                 <input type="number" name="numero"  class="form-control" placeholder="Numéro">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Nom</label>
                            
                                <div class="col-12 col-md-5">
                                 <input type="text" name="nom"  class="form-control" placeholder="Nom">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right" >Prenom</label>
                            
                                <div class="col-12 col-md-5">
                                <input type="text" name="prenom"  class="form-control" placeholder="Prenom">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Genre</label>
                                <div class="col-12 col-md-5">
                                    <input required="" name="genre" type="text" min="6" max="100" placeholder="Genre." class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Age</label>
                                <div class="col-12 col-md-5">
                                    <input type="text" name="age" required="" data-parsley-minlength="6" placeholder="Age." class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Numero CNI</label>
                                <div class="col-12 col-md-5">
                                    <input type="text" name="cni_numero" required="" data-parsley-maxlength="6" placeholder="Numéro CNI." class="form-control">
                                </div>
                            </div>
                           
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Adresse</label>
                                <div class="col-12 col-md-5">
                                    <input type="text" name="adresse" required="" data-parsley-length="[5,10]" placeholder="Adresse." class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Telephone</label>
                                <div class="col-12 col-md-5">
                                    <input  type="text" name="telephone" id="telephone" required="" placeholder="Telephone." class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Département</label>
                                <div class="col-12 col-md-5">
                                    <input  type="text" name="departement" id="adresse" required="" placeholder="Departement." class="form-control">
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

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">

            <div class="card">
                    <h5 class="card-header">Enrégistrement via Excel</h5>
                    <div class="card-body">

            <form method="post" action="{{ route('upload') }}" enctype="multipart/form-data" >
            <input type="hidden" value="{{csrf_token()}}" name="_token" id="token" />
              <div class="form-group">
              <label for="">Selection fichier xls</label>
               <input type="file" name="select_file" class="form-control" id="">
              </div>
              <div class="form-group">
              <button type="submit" class="btn btn-space btn-success">Valider</button>
              </div>
            </form>
  </div>
  </div>
            </div>
            
            </div>

            </div>
            </div>

@endsection
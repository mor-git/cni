@extends('layouts.layout')

@section('contenu') 

<!-- ============================================================== -->
<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Ajouter un Cni</h2>
                        <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Liste des CNI</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- recent orders  -->
            <!-- ============================================================== -->
    <!-- <div style="margin-left : 35%;" class="col-12 col-md-4"><input style="background-color: #F8F8FF;color: black;" type="text" class="form-control" placeholder="Recherche par Département..." name="recherche" id="recherche"></div><br> -->
            <!-- <div style="text-align : left;"><input type="text" placeholder="Recherche" name="recherche" id="recherche"></div><br>
            <div style="text-align : right; margin-right : 12px;"><a href="{{ url('/cni_add')}}" class="btn btn-outline-success">Nouveau</a></div><br>
            -->
            <!-- ============================================================== -->
            <!-- end recent orders  -->
            <!-- ============================================================== -->
            <!-- Mor -->
            <!-- <php dd($cnis); ?> -->
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Number</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Genre</th>
                        <th>Age</th>
                        <th>Adresse</th>
                        <th>Telephone</th> 
                        <th>CNI-Numero</th>
                        <th>Departement</th>
                    </tr>
                </thead>
                <tbody id="cni_departement">
                    @foreach($cnis as $cni)
                        <tr>
                            <td>{{ $cni->numero }}</td>
                            <td>{{ $cni->nom }}</td>
                            <td>{{ $cni->prenom }}</td>
                            <td>{{ $cni->genre }}</td>
                            <td>{{ $cni->age }}</td>
                            <td>{{ $cni->adresse }}</td>
                            <td>{{ $cni->telephone }}</td>
                            <td>{{ $cni->cni_numero }}</td>  
                            <td>{{ $cni->departement }}</td>
                        </tr>
                    @endforeach
            
                </tbody>
                <tfoot>
                    <tr>
                        <th>Number</th>
                        <th>Name</th>
                        <th>Prenom</th>
                        <th>Genre</th>
                        <th>Age</th>
                        <th>Adresse</th>
                        <th>Telephone</th>
                        <th>CNI-Numero</th>
                        <th>Departement</th>
                    </tr>
                </tfoot>
            </table>
            <!--end Mor -->
    </div>
</div>
<!-- ============================================================== -->
<!-- end wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- end main wrapper  -->
<!-- ============================================================== -->
@endsection
@section('script')  
<script>
$(document).ready(function(){
    $('#example').DataTable( {
                "bInfo" : true,
                searching: false,
                stateSave: true,
                // "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                // dom: 'Bfrtip',
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                ]
            } );
});
</script>
@endsection

@extends('administrateurs.app',['title'=>'Actualités'])
@section('css')
<style>

</style>
@endsection
@section('content')

<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Liste des actualités.</h3>
        </div>

        <div class="title_right">
          <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Rechercher!</button>
              </span>
            </div>
          </div>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">

        <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Actualités</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Settings 1</a>
                      <a class="dropdown-item" href="#">Settings 2</a>
                    </div>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                      <div class="card-box table-responsive">
              <p class="text-muted font-13 m-b-30">
                Cliquez sur l'une des icones se trouvant à droite de chaque ligne du tableau et correspondant à une action de votre choix pour effectuer l'action. Par exemple vous pouvez supprimer une actualité en cliquant sur l'icone en forme de X.
              </p>

              <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>TITRE</th>
                    <th>STATUT</th>
                    <th>ACTION</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $numero = 0;
                    @endphp
                    @foreach ($actualites as $actualite)
                    @php
                        $numero +=1
                    @endphp
                    <tr>
                        <td>{{$numero}}</td>
                        <td>{{$actualite->titre}}</td>
                        <td>
                            @if ($actualite->statut == 0)
                                Non publié
                            @else
                                Publié
                            @endif
                        </td>
                        <td style="text-align: center">
                            @if ($actualite->statut == 0)
                                <a href="{{route('publier_actualite',['id'=>$actualite -> id])}}"><i class="fa fa-check-square"></i></a>
                            @else
                                <a href="{{route('annuler_publication_actualite',['id'=>$actualite -> id])}}"><i class="fa fa-close"></i></a>
                            @endif

                            <a href="{{route('supprimer_actualite',['id'=>$actualite -> id])}}"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
@section('js')

@endsection

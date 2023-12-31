@extends('administrateurs.app',['title'=>'Boite de reception'])
@section('css')
<style>

</style>
@endsection
@section('content')

<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Liste de messages non repondu.</h3>
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
              <h2>Boite de reception</h2>
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
                Cliquez sur l'une des icones se trouvant à droite de chaque ligne du tableau et correspondant à une action de votre choix pour effectuer l'action. Par exemple vous pouvez supprimer un message en cliquant sur l'icone en forme de X.
              </p>

              <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>EXPEDITEUR</th>
                    <th>EMAIL</th>
                    <th>OBJET</th>
                    <th>DATE - HEURE</th>
                    <th>ACTION</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($message_non_repondus as $message_non_repondu)
                    <tr>
                        <td>{{$message_non_repondu->nom_visiteur}}</td>
                        <td><a target="_blank" href="mailto:{{$message_non_repondu->email_visiteur}}">{{$message_non_repondu->email_visiteur}}</a></td>
                        <td>{{$message_non_repondu->objet}}</td>
                        <td>{{$message_non_repondu->created_at}}</td>
                        <td style="text-align: center">
                            <a href="{{route('lire_message_visiteur_delete',['id'=>$message_non_repondu -> id])}}"><i class="fa fa-trash"></i></a>
                            <a href="{{route('lire_message_visiteur',['id'=>$message_non_repondu -> id])}}"><i class="fa fa-pencil-square"></i></a>
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
      </div>
    </div>
  </div>

@endsection
@section('js')

@endsection

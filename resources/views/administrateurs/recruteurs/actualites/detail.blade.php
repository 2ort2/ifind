@extends('administrateurs.app',['title'=>'Lire Actualité'])
@section('css')
<style>

</style>
@endsection
@section('content')


<!-- page content -->
<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Gestion des actualités</h3>
        </div>

        <div class="title_right">
          <div class="col-md-5 col-sm-5   form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="">
        <div class="col-md-12 col-sm-12  ">
          <div class="x_panel">
            <div class="x_title">
              <h2><i class="fa fa-bars"></i> Actualités des recruteurs</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                {{-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Settings 1</a>
                      <a class="dropdown-item" href="#">Settings 2</a>
                    </div>
                </li> --}}
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">

              <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Titre</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Contenu</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Image</a>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <p style="font-size: 20px">Titre : <small>{{$actualite->titre}}</small> </p>
                    <p style="font-size: 20px">Createur : <small>{{$actualite->name}} </small></p>
                    <p style="font-size: 20px">Date d'ajout : <small>{{$actualite->created_at}} </small></p>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    {{$actualite->contenu}}
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <img style="width: 100%" src="{{asset('storage/'.$actualite -> image_actualite)}}" alt="">
                </div>
                <div class="ln_solid" style="padding-top: 20px">
                    <div class="form-group">
                        <div class="col-md-6 offset-md-3" style="text-align: center">
                            <button type='submit' class="btn btn-primary"><a style="color: white" href="{{route('annuler_publication_actualite',['id'=>$actualite -> id])}}">Depublier</a></button>
                            <button type='reset' class="btn btn-success"><a style="color: white" href="{{route('publier_actualite',['id'=>$actualite -> id])}}">Publier</a></button>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="clearfix"></div>

    </div>
    <div class="clearfix"></div>
  </div>
  <!-- /page content -->


@endsection
@section('js')

@endsection

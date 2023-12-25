@extends('administrateurs.app',['title'=>'Evenement'])
@section('css')
<style>

</style>
@endsection
@section('content')

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Dernier évenement</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Rechercher!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Ajouter un évenement</h2>
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
                        <form class="" action="{{route('ajouter_evenement')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <p>Veillez renseigner tous les champs du formulaire avant de valider.</a>
                            </p>
                            <span class="section">Evenement Info</span>
                            <div class="field item form-group" style="display: none;">
                                <label style="display: none;" class="col-form-label col-md-3 col-sm-3  label-align">Titre<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6" style="display: none;">
                                    <input style="display: none;" class="form-control"  name="id_user" value="{{Auth::guard('administrateur')->user()->id}}"/>
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Titre de l'évenement<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control"  name="titre" placeholder="Titre de l'évenement*" required="required" />
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">lieu de l'évenement<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control"  name="lieu" placeholder="lieu de l'évenement*" required="required" />
                                </div>
                            </div>


                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Date début<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="datetime-local" name="date_debut" placeholder="Date début*" required="required" />
                                </div>
                            </div>


                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Date fin<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="datetime-local" name="date_fin" placeholder="Date fin*" required="required" />
                                </div>
                            </div>



                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Image<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input type="file" class="form-control" class='optional' name="event_image"/>
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">message<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <textarea required="required" name='description' id="description"></textarea>
                                </div>
                            </div>
                            <div class="ln_solid">
                                <div class="form-group">
                                    <div class="col-md-6 offset-md-3">
                                        <button type='submit' class="btn btn-primary">Engistrer</button>
                                        <button type='reset' class="btn btn-success">Effacer</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('js')
<script>
    $(document).ready(function() {
        $('#description').summernote({
            height: "200px",
            placeholder: "Entrez le contenu de l'actualité*"
        })
    })
</script>


@endsection

@extends('recruteurs.app',['title'=>'Actualités'])
@section('css')
<style>

</style>
@endsection
@section('content')

    <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header pb-0">
            <div class="d-flex align-items-center">
                <p class="mb-0">Ajouter une actualité</p>
                <button class="btn btn-primary btn-sm ms-auto">Settings</button>
            </div>
            </div>
            <div class="card-body">
            <p class="text-uppercase text-sm">News Infos</p>
            <form action="{{route('recruteur_news_succes')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Titre</label>
                            <input name="titre" class="form-control" type="text" placeholder="Le titre de l'actualité *">
                        </div>
                    </div>
                    <div class="col-md-6" style="display: none">
                        <div class="form-group" style="display: none">
                            <label style="display: none" for="example-text-input" class="form-control-label">Titre</label>
                            <input style="display: none" name="id_user" class="form-control" type="text" value="{{Auth::guard('recruteur')->user()->id}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Image</label>
                        <input name="image_actualite" class="form-control" type="file">
                    </div>
                    </div>
                    <div class="col-md-12">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Contenu</label>
                        <textarea name="" id="contenu_actu" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    </div>
                    <div class="col-md-12" style="text-align: center">
                        <button class="btn btn-primary btn-sm ms-auto" type="submit">Enregistrer</button>
                        <button class="btn btn-primary btn-sm ms-auto" type="reset">Effacer</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>

@endsection
@section('js')
    {{-- <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script> --}}

    <script>
        $(document).ready(function() {
            $('#contenu_actu').summernote({
                height: "200px",
                placeholder: "Entrez le contenu de l'actualité*"
            })
        })
    </script>
@endsection

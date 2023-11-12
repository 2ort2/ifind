@extends('administrateurs.app',['title'=>'Repondre'])
@section('css')
<style>

</style>
@endsection
@section('content')

<div class="right_col" role="main">
    <div class="">

      <div class="page-title">
        <div class="title_left">
          <h3>Boîte de reception</h3>
        </div>

        <div class="title_right">
          <div class="col-md-5 col-sm-5   form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Rechercher</button>
              </span>
            </div>
          </div>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Inbox Design<small>User Mail</small></h2>
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
                <div class="col-sm-3 mail_list_column">
                  <button id="compose" class="btn btn-sm btn-success btn-block" type="button">MESSAGES NON LUS</button>
                  @if ($message_non_lus->isEmpty())
                    <p style="color: red">Aucun message trouvé</p>
                  @else
                  @foreach ($message_non_lus as $message_non_lu)
                  <a href="{{route('lire_message_visiteur',['id'=>$message_non_lu -> id])}}">
                    <div class="mail_list">
                      <div class="left">
                        <i class="fa fa-circle"></i> <i class="fa fa-edit"></i>
                      </div>
                      <div class="right">
                        <h3>{{$message_non_lu->nom_visiteur}} <small>3.00 PM</small></h3>
                        <p>{{$message_non_lu->objet}}</p>
                      </div>
                    </div>
                  </a>
                  @endforeach
                  @endif
                </div>
                <!-- /MAIL LIST -->

                <!-- CONTENT MAIL -->
                <div class="col-sm-9 mail_view">
                  <div class="inbox-body">
                    <div class="mail_heading row">
                      <div class="col-md-8">
                        <div class="btn-group">
                          <button class="btn btn-sm btn-primary" type="button"><i class="fa fa-reply"></i> Repondre</button>
                          <button class="btn btn-sm btn-default" type="button"  data-placement="top" data-toggle="tooltip" data-original-title="Forward"><i class="fa fa-share"></i></button>
                          <button class="btn btn-sm btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Print"><i class="fa fa-print"></i></button>
                          <button class="btn btn-sm btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Trash"><i class="fa fa-trash-o"></i></button>
                        </div>
                      </div>
                      <div class="col-md-4 text-right">
                        <p class="date"> {{$message->updated_at}}</p>
                      </div>
                      <div class="col-md-12">
                        <h4>{{$message->objet}}</h4>
                      </div>
                    </div>
                    <div class="sender-info">
                      <div class="row">
                        <div class="col-md-12">
                          <strong>{{$message->nom_visiteur}}</strong>
                          <span>({{$message->email_visiteur}})</span> à
                          <strong>moi</strong>
                          <a class="sender-dropdown"><i class="fa fa-chevron-down"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="view-mail">
                      <p>{{$message->contenu}}</p>
                    </div>
                    {{-- <div class="attachment">
                      <p>
                        <span><i class="fa fa-paperclip"></i> 3 attachments — </span>
                        <a href="#">Download all attachments</a> |
                        <a href="#">View all images</a>
                      </p>
                      <ul>
                        <li>
                          <a href="#" class="atch-thumb">
                            <img src="{{asset('/templates/administrateurs/production/images/inbox.png')}}" alt="img" />
                          </a>

                          <div class="file-name">
                            image-name.jpg
                          </div>
                          <span>12KB</span>


                          <div class="links">
                            <a href="#">View</a> -
                            <a href="#">Download</a>
                          </div>
                        </li>

                        <li>
                          <a href="#" class="atch-thumb">
                            <img src="{{asset('/templates/administrateurs/production/images/inbox.png')}}" alt="img" />
                          </a>

                          <div class="file-name">
                            img_name.jpg
                          </div>
                          <span>40KB</span>

                          <div class="links">
                            <a href="#">View</a> -
                            <a href="#">Download</a>
                          </div>
                        </li>
                        <li>
                          <a href="#" class="atch-thumb">
                            <img src="{{asset('/templates/administrateurs/production/images/inbox.png')}}" alt="img" />
                          </a>

                          <div class="file-name">
                            img_name.jpg
                          </div>
                          <span>30KB</span>

                          <div class="links">
                            <a href="#">View</a> -
                            <a href="#">Download</a>
                          </div>
                        </li>

                      </ul>
                    </div> --}}
                    <div class="btn-group">
                      <button class="btn btn-sm btn-primary" type="button"><i class="fa fa-reply"></i> Repondre</button>
                      <button class="btn btn-sm btn-default" type="button"  data-placement="top" data-toggle="tooltip" data-original-title="Forward"><i class="fa fa-share"></i></button>
                      <button class="btn btn-sm btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Print"><i class="fa fa-print"></i></button>
                      <button class="btn btn-sm btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Trash"><i class="fa fa-trash-o"></i></button>
                    </div>
                  </div>

                </div>
                <!-- /CONTENT MAIL -->
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

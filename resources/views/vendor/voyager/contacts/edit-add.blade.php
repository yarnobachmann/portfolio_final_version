@extends('voyager::master')

@section('page_title', __('voyager.generic.'.(isset($dataTypeContent->id) ? 'edit' : 'add')).' '.$dataType->display_name_singular)

@section('css')
    <style>
        .panel .mce-panel {
            border-left-color: #fff;
            border-right-color: #fff;
        }
        .panel .mce-toolbar,
        .panel .mce-statusbar {
            padding-left: 20px;
        }
        .panel .mce-edit-area,
        .panel .mce-edit-area iframe,
        .panel .mce-edit-area iframe html {
            padding: 0 10px;
            min-height: 350px;
        }
        .mce-content-body {
            color: #555;
            font-size: 14px;
        }
        .panel.is-fullscreen .mce-statusbar {
            position: absolute;
            bottom: 0;
            width: 100%;
            z-index: 200000;
        }
        .panel.is-fullscreen .mce-tinymce {
            height:100%;
        }
        .panel.is-fullscreen .mce-edit-area,
        .panel.is-fullscreen .mce-edit-area iframe,
        .panel.is-fullscreen .mce-edit-area iframe html {
            height: 100%;
            position: absolute;
            width: 99%;
            overflow-y: scroll;
            overflow-x: hidden;
            min-height: 100%;
        }
    </style>
@stop

@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i>
        Wijzig je Contact gegevens
    </h1>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')
    <div class="page-content container-fluid">
        <form class="form-edit-add" role="form" action="@if(isset($dataTypeContent->id)){{ route('voyager.contacts.update', $dataTypeContent->id) }}@else{{ route('voyager.contacts.store') }}@endif" method="POST" enctype="multipart/form-data">
            <!-- PUT Method if we are editing -->
            @if(isset($dataTypeContent->id))
                {{ method_field("PUT") }}
            @endif
            {{ csrf_field() }}

            <div class="row">
                <div class="col-md-8">
                    <!-- ### organisation ### -->
                    <div class="panel  panel-bordered">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="panel-heading">
                            <h3 class="panel-title">
                              Contact gegevens
                                <span class="panel-desc"> vul hier de contact gegevens in</span>
                            </h3>
                            <div class="panel-actions">
                                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                            </div>
                        </div>
                        <div class="panel-body">
                          <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" required="" class="form-control" id="email" name="email" placeholder="yarnobachmann@gmail.com" value="@if(isset($dataTypeContent->email)){{ $dataTypeContent->email }}@endif">
                          </div>
                          <div class="form-group">
                            <label for="phone_number">Telefoon nummer:</label>
                            <input type="text" required="" class="form-control" id="phone_number" name="phone_number" placeholder="+31 6 37241371" value="@if(isset($dataTypeContent->phone_number)){{ $dataTypeContent->phone_number }}@endif">
                          </div>
                          <div class="form-group">
                            <label for="whapp_number">Whatsapp nummer:</label>
                            <input type="text" required="" class="form-control" id="whapp_number" name="whapp_number" placeholder="31637241371" value="@if(isset($dataTypeContent->whapp_number)){{ $dataTypeContent->whapp_number }}@endif">
                          </div>
                        </div>
                      </div>
                  </div>
                    <div class="col-md-4">
                    <!-- ### adress gegevens ### -->
                    <div class="panel  panel-bordered ">
                        <div class="panel-heading">
                            <h3 class="panel-title">Adres gegevens
                            <span class="panel-desc"> vul hier je adres gegevens in</span>
                          </h3>
                            <div class="panel-actions">
                                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                            </div>
                        </div>
                        <div class="panel-body">
                          <label for="street_name" style="display:block;">Straat:</label>
                            <div class="form-group" style="display: inline-flex;">
                                <input type="text" required="" class="form-control" id="street_name" name="street_name"
                                    placeholder="straat naam"
                                    value="@if(isset($dataTypeContent->street_name)){{ $dataTypeContent->street_name }}@endif">

                                <input type="text" required="" class="form-control" id="house_number" name="house_number"
                                    placeholder="huisnummer"
                                    value="@if(isset($dataTypeContent->house_number)){{ $dataTypeContent->house_number }}@endif" style="margin-left:2%; width: 60%;">
                            </div>
                            <div class="form-group">
                                <label for="recidence">Plaats:</label>
                                <input type="text" required="" class="form-control" id="recidence" name="recidence"
                                    placeholder="plaats"
                                    value="@if(isset($dataTypeContent->recidence)){{ $dataTypeContent->recidence }}@endif">
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="">
                      <button type="submit" class="btn btn-primary save">Sla wijzingen op</button>
                  </div>
        </form>

        <iframe id="form_target" name="form_target" style="display:none"></iframe>
        <form id="my_form" action="{{ route('voyager.upload') }}" target="form_target" method="post" enctype="multipart/form-data" style="width:0px;height:0;overflow:hidden">
            {{ csrf_field() }}
            <input name="image" id="upload_file" type="file" onchange="$('#my_form').submit();this.value='';">
            <input type="hidden" name="type_slug" id="type_slug" value="{{ $dataType->slug }}">
        </form>
    </div>
@stop

@section('javascript')
    <script>
        $('document').ready(function () {
            $('#slug').slugify();
        @if ($isModelTranslatable)
            $('.side-body').multilingual({"editing": true});
        @endif
        });
    </script>
@stop

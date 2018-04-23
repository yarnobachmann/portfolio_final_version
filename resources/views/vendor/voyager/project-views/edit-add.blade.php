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
        Wijzig de project views gegevens
    </h1>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')
    <div class="page-content container-fluid">
        <form class="form-edit-add" role="form" action="@if(isset($dataTypeContent->id)){{ route('voyager.project-views.update', $dataTypeContent->id) }}@else{{ route('voyager.project-views.store') }}@endif" method="POST" enctype="multipart/form-data">
            <!-- PUT Method if we are editing -->
            @if(isset($dataTypeContent->id))
                {{ method_field("PUT") }}
            @endif
            {{ csrf_field() }}

            <div class="row">
                <div class="col-md-8">
                    <!-- ### posts ### -->
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
                              Sections
                                <span class="panel-desc"> vul hier de gegevens in</span>
                            </h3>
                            <div class="panel-actions">
                                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                            </div>
                        </div>
                        <div class="panel-body">
                          <div class="form-group">
                            <label for="section_1">Section 1:</label>
                            <textarea class="form-control" required="" minlength="2" rows="8" id="section_1" name="section_1" placeholder="section 1 text" style="resize: vertical;">@if(isset($dataTypeContent->section_1)){{ $dataTypeContent->section_1 }}@endif</textarea>
                          </div>
                          <div class="form-group">
                            <label for="section_2">Section 2:</label>
                            <textarea class="form-control" required="" minlength="2" rows="8" id="section_2" name="section_2" placeholder="section 2 text" style="resize: vertical;">@if(isset($dataTypeContent->section_2)){{ $dataTypeContent->section_2 }}@endif</textarea>
                          </div>
                          <div class="form-group">
                            <label for="project_name">Project naam (Zelfde als project):</label>
                            <input type="text" required="" minlength="2" class="form-control" id="project_name" name="project_name" placeholder="project naam" value="@if(isset($dataTypeContent->project_name)){{ $dataTypeContent->project_name }}@endif">
                          </div>
                          <div class="form-group">
                            <label for="link_website">Link website (optioneel):</label>
                            <input type="text" class="form-control" id="link_website" name="link_website" placeholder="link naar website" value="@if(isset($dataTypeContent->link_website)){{ $dataTypeContent->link_website }}@endif">
                          </div>
                          <div class="form-group">
                            <label for="project_id">Project:</label>
                            <select required="" class="form-control" id="project_id" name="project_id">
                                @foreach(App\Project::all() as $project)
                                    <option value="{{ $project->id }}"@if(isset($dataTypeContent->project_id) && $dataTypeContent->project_id == $project->id) selected="selected"@endif>{{ $project->name }}</option>
                                @endforeach
                            </select>
                          </div>
                           </div>
                      </div>
                  </div>
                    <div class="col-md-4">
                      <div class="panel  panel-bordered">
                      <div class="panel-heading">
                          <h3 class="panel-title">
                            Afbeelding
                              <span class="panel-desc"> vul hier de afbeelding in</span>
                          </h3>
                          <div class="panel-actions">
                              <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                          </div>
                          <div class="panel-body">
                            @if(isset($dataTypeContent->side_image))
                                <img id="image_side" src="{{ filter_var($dataTypeContent->side_image, FILTER_VALIDATE_URL) ? $dataTypeContent->side_image : Voyager::image( $dataTypeContent->side_image ) }}" style="max-width: 100%; max-height:500px;" />
                            @endif
                            <div class="form-group">
                              <label for="side_image" style="font-weight:bold;">Afbeelding banner links:</label>
                              <input type="file" class="form-control" id="side_image" name="side_image" value="@if(isset($dataTypeContent->side_image)){{ $dataTypeContent->side_image }}@endif">
                            </div>
                            @if(isset($dataTypeContent->right_image))
                                <img src="{{ filter_var($dataTypeContent->right_image, FILTER_VALIDATE_URL) ? $dataTypeContent->right_image : Voyager::image( $dataTypeContent->right_image ) }}" style="max-width: 100%; max-height:500px;" />
                            @endif
                            <div class="form-group">
                              <label for="right_image" style="font-weight:bold;">Afbeelding rechts(optioneel):</label>
                              <input type="file" class="form-control" id="right_image" name="right_image" value="@if(isset($dataTypeContent->right_image)){{ $dataTypeContent->right_image }}@endif">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel-footer">
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
        $('.save').attr("style", "pointer-events: none;");
        if (document.getElementById('image_side')){
          $('.save').attr("style", "pointer-events: auto;");
        } else{
          $('.save').attr("style", "pointer-events: none;");
        }

        $('#side_image').bind('change', function() {

          //this.files[0].size gets the size of your file.


          if (this.files[0].size >= 2039670) {
            alert("Je afbeelding is groter dan 2039670 bytes namelijk:" + this.files[0].size +" kies a.u.b een andere afbeelding");
          }else{
            $('.save').attr("style", "pointer-events: auto;");
          }

        });

        $('#right_image').bind('change', function() {

          //this.files[0].size gets the size of your file.


          if (this.files[0].size >= 2039670) {
            alert("Je afbeelding is groter dan 2039670 bytes namelijk:" + this.files[0].size +" kies a.u.b een andere afbeelding");
          }else{

          }

        });

        });

    </script>
@stop

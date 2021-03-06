@extends('backend.admin-master')

@section('site-title')
    {{__('About Section')}}
@endsection
@section('content')
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-lg-12">
                <div class="margin-top-40"></div>
                @include('backend/partials/message')
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="col-lg-12 mt-t">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">{{__('About Us Section Settings')}}</h4>

                        <form action="{{route('admin.about.page.about')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    @foreach($all_language as $key => $lang)
                                        <a class="nav-item nav-link @if($key == 0) active @endif" id="nav-home-tab" data-toggle="tab" href="#nav-home-{{$lang->slug}}" role="tab" aria-controls="nav-home" aria-selected="true">{{$lang->name}}</a>
                                    @endforeach
                                </div>
                            </nav>
                            <div class="tab-content margin-top-30" id="nav-tabContent">
                                @foreach($all_language as $key => $lang)
                                    <div class="tab-pane fade @if($key == 0) show active @endif" id="nav-home-{{$lang->slug}}" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <div class="form-group">
                                            <label for="about_page_{{$lang}}_about_section_title">{{__('Title')}}</label>
                                            <input type="text" name="about_page_{{$lang->slug}}_about_section_title" value="{{get_static_option('about_page_'.$lang->slug.'_about_section_title')}}" class="form-control" id="about_page_{{$lang->slug}}_about_section_title">
                                        </div>
                                        <div class="form-group">
                                            <label for="about_page_{{$lang->slug}}_about_section_description">{{__('Description')}}</label>
                                            <textarea name="about_page_{{$lang->slug}}_about_section_description" id="about_page_{{$lang->slug}}_about_section_description" class="form-control max-height-150" cols="30" rows="10">{{get_static_option('about_page_'.$lang->slug.'_about_section_description')}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="about_page_about_section_btn_status"><strong>{{__('Button Show/Hide')}}</strong></label>
                                            <label class="switch">
                                                <input type="checkbox" name="about_page_{{$lang->slug}}_about_section_btn_status"  @if(!empty(get_static_option('about_page_'.$lang->slug.'_about_section_btn_status'))) checked @endif id="about_page_about_section_btn_status">
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="about_page_{{$lang->slug}}_about_section_btn_text">{{__('Button Text')}}</label>
                                            <input type="text" name="about_page_{{$lang->slug}}_about_section_btn_text" class="form-control" value="{{get_static_option('about_page_'.$lang->slug.'_about_section_btn_text')}}" id="about_page_{{$lang->slug}}_about_section_btn_text">
                                        </div>
                                        <div class="form-group">
                                            <label for="about_page_{{$lang->slug}}_about_section_btn_url">{{__('Button URL')}}</label>
                                            <input type="text" name="about_page_{{$lang->slug}}_about_section_btn_url" class="form-control" value="{{get_static_option('about_page_'.$lang->slug.'_about_section_btn_url')}}" id="about_page_{{$lang->slug}}_about_section_btn_url">
                                        </div>
                                        <div class="img-wrapper">
                                            @if(file_exists('assets/uploads/'.get_static_option('about_page_'.$lang->slug.'_about_section_left_image')))
                                                <img  style="max-width: 200px; margin-top:20px;margin-bottom: 20px" src="{{asset('assets/uploads/'.get_static_option('about_page_'.$lang->slug.'_about_section_left_image'))}}" alt="">
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="about_page_{{$lang->slug}}_about_section_left_image">{{__('Left Image')}}</label>
                                            <input type="file" class="form-control"  id="about_page_{{$lang->slug}}_about_section_left_image" name="about_page_{{$lang->slug}}_about_section_left_image">
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">{{__('Update Settings')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


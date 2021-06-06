@extends('admin.layout')
@section('content')
    <div class="row">
        {!! Form::open(['route'=>'page-create', 'enctype'=>'multipart/form-data']) !!}       
            @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach                
            </div>
            @endif
            <div class="x_panel">
                <div class="x_title">
                    <h2 class="sub_title"> Page Content</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>                        
                    </ul>

                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <div class="form-group has-feedback" style="position: relative;">
                        <h3>First Section </h3>
                        <label for="name" class="hws_form_label">Title :</label>
                        {!! Form::text('title', 'home', ['class'=>'form-control', 'required'=>'required', 'readonly'=>'readonly']) !!}
                        <span class="hws_error text-right text-danger">{{$errors->first('title')}}</span>
                    </div>

                    <div class="form-group has-feedback" style="position: relative;">
                        <label for="image" class="hws_form_label">Banner Image :</label>
                        {!! Form::hidden('image[]', 'banner_image') !!}
                        {!! Form::file('banner_image', ['class'=>'form-control', 'id'=>'file' ]) !!}  
                        @foreach($page as $value)
                            @if($value->section_title == 'banner_image')
                                <img src="{{ asset('uploads')}}/{{$value->data}}" style="height: 200px; width: 300px; margin-top: 10px;"> 
                            @endif
                        @endforeach                     
                    </div>

                    <div class="form-group has-feedback" style="position: relative;">
                        <h3>Second Section </h3>
                        <label class="hws_form_label">Title :</label>
                        {!! Form::hidden('txt_name[]', 'second_title') !!}
                        @foreach($page as $value)
                            @if($value->section_title == 'second_title')
                                {!! Form::text('second_title', $value->data, ['class'=>'form-control', 'required'=>'required']) !!} 
                            @endif
                        @endforeach                                                                   
                    </div>                    

                    <div class="form-group has-feedback" style="position: relative;">
                        <h3>Fourth Section </h3>
                        <label class="hws_form_label">Title :</label>
                        {!! Form::hidden('txt_name[]', 'fourth_icon') !!}
                        @foreach($page as $value)
                            @if($value->section_title == 'fourth_icon')
                                {!! Form::text('fourth_icon', $value->data, ['class'=>'form-control']) !!}  
                            @endif
                        @endforeach                                                                                                 
                    </div>


                    {{Form::submit('Save', ['class'=>'btn btn-primary'])}}
                </div>
            </div>
        {!! Form::close() !!}
    </div>
@endsection

@push('footer-scripts') 
   
@endpush
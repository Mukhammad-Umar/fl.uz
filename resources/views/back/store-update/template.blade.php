@extends('back.layout')

@section('css')
<style>
    .upload_field {
        opacity:0.0;
        z-index:2;
        position:absolute;
     }
    .upload_submit {
        z-index:1;
        display:none;
     }
</style>
@endsection

@section('main')

<div class="row">
        <!-- left column -->
       <div class="col-md-3">
       </div>
        <!-- center column -->       
        <div class="col-md-6 margin">
            @if (session('news-ok'))
                @component('back.components.alert')
                    @slot('type')
                        success
                    @endslot
                    {!! session('news-ok') !!}
                @endcomponent
            @endif
            <!-- general form elements -->
            <div class="box box-primary">
                <!-- form start -->
                    <div class="box-body">
                        @yield('form-open')
                        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                            <label for="title">@lang('Title')</label>
                            <input type="text" class="form-control" id="title" name="title" value="@if(isset($news)){{$news->title}}@elseif(old('title')){{old('title')}}@endif" placeholder="Sarlavha | Title" required> 
                            {!! $errors->first('title', '<small class="help-block">:message</small>') !!}
                        </div>
                        <div class="form-group {{ $errors->has('information') ? 'has-error' : '' }}">
                            <label for="information">@lang('Information')</label>
                            <input type="text" class="form-control" id="information" name="information" value="@if(isset($news)){{$news->information}}@elseif(old('information')){{old('information')}}@endif" placeholder="Information" required> 
                            {!! $errors->first('information', '<small class="help-block">:message</small>') !!}
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">@lang('Submit')</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (right) -->
        <!-- right column -->
       <div class="col-md-3">
       </div> 
    </div>
    <!-- /.row -->
@endsection


@section('js')
    <script>
        // $(document).ready(function(){
        //     $("body").on("change", ".upload_field", function(){
        //         //alert('hi');
        //         $(".upload_submit").click();
        //     });
        // });       
    </script>
@endsection  


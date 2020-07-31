@extends('front.layout')

    @section('css')
        <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css')}}" media="screen">
        <link rel="stylesheet" href="{{ asset('css/gallery.css')}}">
    @endsection

    @section('main')

    <style>
        #footer{
            background: #5d802c;
        }
    </style>
    <!-- Page Content -->
    <div class="container page-top">
        <h3 class="gellery_title">Galleriya</h3>
        <div class="row">
            @foreach($photos as $photo)
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="{{ asset('images/' . $photo->image)}}" class="fancybox" rel="ligthbox">
                        <img src="{{ asset('images/' . $photo->image)}}" class="zoom img-fluid" alt="Photo">
                    </a>
                </div>
            @endforeach
       </div>
    </div>

    @endsection

    @section('js')
    <script src="{{ asset('js/jquery.fancybox.js')}}"></script>
        <script>
            $(document).ready(function(){
                
                $(".zoom").hover(function(){
                    $(this).addClass('transition');
                }, function(){
                    $(this).removeClass('transition');
                });
            });   
        </script>
    @endsection
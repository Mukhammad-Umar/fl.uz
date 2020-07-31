@extends('back.layout')

   @section('css')

      <style>
         .back-pannel img{
            width : 120px;
            height: 80px;
         }
         .info_sec{
            width: 65%;
         }
      </style>

   @endsection

    @section('main')

      <!-- yield('main') -->    
   <div class="row padding_body">
      <div class="col-md-12">
         <div class="box box-primary">
            <div class="box-body">
                     @if (session('news-updated'))
                        @component('back.components.alert')
                           @slot('type')
                                 success
                           @endslot
                           {!! session('news-updated') !!}
                        @endcomponent
                     @endif
               <div id="spinner" class="text-center"></div>
               <div class="table-responsive">
                  <table class="news_table">
                        @include('back.brick-standard')
                  </table>
               </div>
               <hr>                       
            </div>  
         </div>
      </div> 
   </div>

    @endsection

    @section('js')

    <script src="{{ asset('js/mine.js')}}"></script>
      <script>
         $(document).ready(function () {
            $('.listbuttonremove').click(function () {
               BaseRecord.deleteone($(this).attr('id'));
               return false;
             });
         });
      </script>

    @endsection

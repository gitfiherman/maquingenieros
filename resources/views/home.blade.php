@extends('layouts.app')

@section('content')
<style>
    .v_img_dash{
        margin: 10px;
        width: 100%;
        height: auto;
        line-height: 115px;
        text-align: center;
        border: 1px solid red;
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
    }
</style>
<section id="widget-grid" class="">  
    <div class="row">
        <div class="col-md-12">
            <div class="thumbnail">                
                <img src="plantilla/images/home/1.jpg" alt="Lights" style="width:92%">
            </div>
        </div>
        
    </div>
    <!--    <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom: -12px">
                <section id="widget-grid" class="">
                    <div class="well">                    
                        <div class="row">
                            <img src="plantilla/images/home/1.jpg" class="img-responsive" alt="Cinque Terre">
                        </div>
                    </div>
                </section>           
            </div>
        </div>-->
</section>
@section('page-js-script')

<script type="text/javascript">
    $(document).ready(function () {
//        $("#menu_logistica").show();
//        $("#menu_logistica_usuarios").addClass('cr-active');
    });
</script>
@stop
@endsection

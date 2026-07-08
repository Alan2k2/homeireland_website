@extends('layouts.admin.main')
@section('content')
<style>
    input.larger {
        width: 20px;
        height: 20px;
      }
    a {
        text-decoration: none;
    }

form
{
    font-size:15px;
}

    .next{
                                    background-color: red;
                                    color: #fff;
                                    widows: 300px;
                                    border: red;

                                }
                                .next:hover{
                                    background-color: black;
                                    color: #fff;

                                }
    h4
    {
        font-size:15px;
        font-weight:500;
        color:black;
    }
.search-btn
   {
       width:200px;
       height:auto;
       padding:10px;
       background-color:#dc3545;
       border:1px solid #dc3545;
      color:white;
       margin-top:-10px
   }
   .search-btn:hover
   {
       width:200px;
       height:auto;
       padding:10px;
       background-color:black;
       border:1px solid #dc3545;
      color:white;
       margin-top:-10px;
       cursor:pointer;
   }
	.spaceman{
		margin: 15px;
	}
	.spaceman .row .col-md-6,.spaceman .row .col-md-12{
		margin-top:10px;

	}
	.spaceman label{
		font-weight: 600;
	}
	.spaceman .block-heading{
		margin-top: 20px;
		margin-bottom: 10px;
		font-weight: 600;
		font-size: 22px;
		border-bottom: 1px solid black;
		padding-bottom:10px ;
	}
</style>
<style>
    section
    {
        border:1px solid grey;
        padding:20px;
    }aside
{
    border:1px solid rgb(221, 221, 221);;
    padding-left:15px;
    border-radius: 4px;
 
}
.facilities1{
    display:flex;
    flex:wrap;
}
@media(max-width:767px){
    .facilities1{
        flex-direction:column;
        
    }
}

</style>
<div class="spacer">
</div>
<div class="row">
    <div class="col-md-12">

        <div class="main-card card">
            <div class="card-header">Edit Properties
            </div>
			<div class="spaceman">
<!--===============MAIN STARTS===============================================-->

<!--===============section 1=====================================================-->
<section id="basic">


<form method="get" action="{{url('admin/property_description')}}" id="uploadForm" >
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h3 class="text-danger">{{$property->main_name}} / Property Details</h3>
    </div>
</div>
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6  mb-4" >
                                      <h5><b>Access</b></h5>
                                      <?php
                                      $a=$b="";
                                      if($property->Access==1)
                                      {
                                          $a="checked";
                                      }
                                      if($property->Access==2)
                                      {
                                          $b="checked";
                                      }
                                      ?>
                                     <aside style="boder:1px solid black;padding:10px">
                                         &nbsp;&nbsp;&nbsp;    Business&nbsp;&nbsp;&nbsp;
                                             &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 
                                    <input type="radio" class="larger"name="Access" value="1" <?=$a?> >
                                    </aside>
                                 </div>
                                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mb-3" style="margin-top:35px;">
                                      <h5><b></b></h5>
                                     <aside style="boder:1px solid black;padding:10px">
                                           &nbsp;&nbsp;&nbsp;  
24/7&nbsp;&nbsp;&nbsp;
                                           &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;   
                                           <input type="radio" class="larger" name="Access" value="2" <?=$b?>>
                                    </aside>
                                 </div>
                             </div>
                           
                           <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                 <h3 style="margin-left:12px">Spaces Available</h3>
                                 <input  style="margin-left:12px"type="number" name="space" value="{{$property->space}}" class="mt-4 form-control" placeholder="Enter a Number">
                                   
                               </div>
                               @if(session::get('main_cat')==7)
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                       <h3 style="margin-left:12px">Sale price</h3> 
                                         <input style="margin-left:12px" type="text" placeholder="€" class="form-control mt-4" name="price_sale" value="{{$property->price_sale}}">
                                    </div>
                                    @endif
                               </div><br><br>
                               
                               

                               
                                @if(session::get('main_cat')==4||session::get('main_cat')==7)
                            <div class="row" id="serviced_office">
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-4">
                                        <h4 class="mt-2">   Facilities</h4>
                                       <div style="display:flex;margin-top:15px;flex:wrap;">
                                         <?php
                                    //   j5
                                         $a=$b=$c=$d=$e=$f=$g=$h=$i=$j=$k="";
                                         $facilities=$property->facilities;
                                     if(!empty($facilities)){      
            if(in_array("Garage",$facilities))
    {
        $a="checked";
    }
    if(in_array("Bus",$facilities))
    {
        $b="checked";
    }
    if(in_array("Train",$facilities))
    {
        $c="checked";
    }
    if(in_array("Meeting Rooms",$facilities))
    {
        $d="checked";
    }
    if(in_array("Shopping",$facilities))
    {
        $e="checked";
    }
    if(in_array("Toilets",$facilities))
    {
        $f="checked";
    }
   
                                     }
                                         ?>
                                        
                                       <div class="container">
    <div class="row">
        <div class="col-lg-2 col-md-2 col-6 mb-2">
            <input type="checkbox" name="fa1[]" class="larger" placeholder="€" id="auction" value="Garage" <?=$a?>> &nbsp;
            <h6 class="mt-2 d-inline">Garage</h6>
        </div>
        <div class="col-lg-2 col-md-2 col-6 mb-2">
            <input type="checkbox" name="fa1[]" class="larger" placeholder="€" id="auction" value="Bus" <?=$b?>> &nbsp;
            <h6 class="mt-2 d-inline">Bus</h6>
        </div>
        <div class="col-lg-2 col-md-2 col-6 mb-2">
            <input type="checkbox" name="fa1[]" class="larger" placeholder="€" id="auction" value="Train" <?=$c?>> &nbsp;
            <h6 class="mt-2 d-inline">Train</h6>
        </div>
        <div class="col-lg-2 col-md-2 col-6 mb-2">
            <input type="checkbox" name="fa1[]" class="larger" placeholder="€" id="auction" value="Meeting Rooms" <?=$d?>> &nbsp;
            <h6 class="mt-2 d-inline">Meeting Rooms</h6>
        </div>
        <div class="col-lg-2 col-md-2 col-6 mb-2">
            <input type="checkbox" name="fa1[]" class="larger" placeholder="€" id="auction" value="Shopping" <?=$e?>> &nbsp;
            <h6 class="mt-2 d-inline">Shopping</h6>
        </div>
        <div class="col-lg-2 col-md-2 col-6 mb-2">
            <input type="checkbox" name="fa1[]" class="larger" placeholder="€" id="auction" value="Toilets" <?=$f?>> &nbsp;
            <h6 class="mt-2 d-inline">Toilets</h6>
        </div>
    </div>
</div>
 
                                               
                                               
                                               
                                               </div>
                                 </div>
                            </div>
                            @endif
                            <section id="next">
      <!--next button-->
     
                    <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12  mt-4">
                            <a href="{{url('admin/edit-properties')}}/{{$property->id}}?a=2&&b=4"  class="btn btn-large btn-block yellow-btn next font-roboto 
                                light brbottom-30 icon-link icon-link-hover" ><b><i class="fa fa-arrow-left" 
                                    aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;PREV</b></a>
                            </div>
        <!---->
                                   <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12  mt-4">
                                   </div>
                                   <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12  mt-4">
                                   </div>
                                 <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12  mt-4">
                                     <button type="submit"  class="btn btn-large btn-block yellow-btn next font-roboto 
                            light brbottom-30 icon-link icon-link-hover" style="margin-left">
                            <b>NEXT
                    &nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right mt-2" aria-hidden="true" style="float: right"></i></b> </button>
                                 </div>
                                 
                            </div>
                                    </form>
                           <!--next button end-->
</section>
</section>
@endsection
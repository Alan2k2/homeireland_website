@extends('layouts.panel.main')
@section('content')
<?php
if($status==1)
{
    $status_name="Payment Success";
    $class="text-success";
}
elseif($status==2)
{
    $status_name="Payment Failed";
    $class="text-danger";
}
else
{
     $status_name="Payment Cancelled";
     $class="text-warning";
}

?>
    
<section class="my-4">
    <center>
       
            <main style="border:3px solid black;padding:20px;background-color:#FAF1EF;width:300px;height:250px;border-radius:5px">
                <h1 class="{{$class}}">{{$status_name}}</h1>
             
    <?php
if($status==1)
{
?>
    <h1 style="color:#91EA11;font-size:100px"><i class="fa fa-check-circle-o" aria-hidden="true"></i></h1>
      <a href="{{asset('uploads/PDF/'.$pdfName)}}" target="_blank"><button class="btn btn-success" style="font-size:14px"><i class="fa fa-download" aria-hidden="true"></i> &nbsp;Down Load Invoice</button></a>
        <?php
    } 
else
{?>
<h1 style="color:#EA3C11;font-size:100px"> <i class="fa fa-ban" aria-hidden="true"></i></h1>
    
    <?php
} 
?>
            </main>
       
    </center>
    
</section>
@endsection
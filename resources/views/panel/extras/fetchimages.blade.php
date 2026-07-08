<?php
// print_r(count($prop));exit;
?>
@if(count($prop)>0)
<div class="row">
	@foreach($prop as $pro)
	<div class="col-md-3 card">
		
	<input type="hidden" value="{{$pro->id}}" class="img_id">
	<span class="removefetchedimage" style="cursor:pointer;color:red;font-size:30px;">x</span>
	<img src="{{asset('uploads/properties/'.$pro->image)}}" width="150px" height="150px">
	</div>
	@endforeach
</div>
@else
0
@endif
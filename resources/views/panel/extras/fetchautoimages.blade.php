<div class="row">
	@foreach($prop as $pro)
	<div class="col-md-3 card">
		
	<input type="hidden" value="{{$pro->id}}" class="img_id">
	<span class="removefetchedimage" style="cursor:pointer;">x</span>
	<img src="{{asset('uploads/autos/'.$pro->image)}}" width="150px" height="150px">
	</div>
	@endforeach
</div>

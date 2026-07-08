@extends('layouts.website.main')
@section('content')

    

<script src="jssor.slider.min.js"></script>
<div id="jssor_1" style="position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
     @if(count($middleads) > 0)
    <div data-u="slides" style="position:absolute;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
       
        <div>
              @foreach($middleads as $ads)
              <img data-u="image" src="{{asset('uploads/ads/'.$ads->image)}}" /></div>
              @endforeach

        <!--<div><img data-u="image" src="image2.jpg" /></div>-->
    </div>
</div>
  @endif
<script>
    var options = { $AutoPlay: 1 };
    var jssor_1_slider = new $JssorSlider$("jssor_1", options);
</script>
@endsection
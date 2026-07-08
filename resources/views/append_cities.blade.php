
@if(isset($countydat) && count($countydat) >0)
<h4><b>Search By Counties</b></h4>
@foreach($countydat as $dat)
<li class="main_sub_button">{{$dat->name}}</li>
@endforeach
@endif
@if(isset($citydat) && count($citydat) >0)
<h4><b>Search By Cities</b></h4>
@foreach($citydat as $dat)
<li class="main_sub_button">{{$dat->name}}, Co {{$dat->county}}</li>
@endforeach
@endif
@if(isset($citydat) && count($citydat) >0)
@else
@if(isset($citycodat) && count($citycodat) >0)
<h4><b>Search By Cities</b></h4>
@endif
@endif
@foreach($citycodat as $dat)
<li class="main_sub_button">{{$dat->name}}, Co {{$dat->county}}</li>
@endforeach

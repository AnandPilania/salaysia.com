<option value="all">All Cities</option>
@foreach($city as $i => $cities)
<option value="{{$cities->city_name}}">{{$cities->city_name}}</option>
@endforeach
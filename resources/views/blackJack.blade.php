<!-- @foreach ($deck as $d)
<div>{{$d[0]}}{{$d[1]}}</div>
@endforeach -->
@foreach ($deck[$myHand[0]] as $hand)
{{$hand}}
@endforeach
@foreach ($deck[$myHand[1]] as $hand)
{{$hand}}
@endforeach

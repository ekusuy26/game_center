<div>player手札</div>
<div>
  @foreach ($list[$playerHand[0]] as $hand)
  {{$hand}}
  @endforeach
  @foreach ($list[$playerHand[1]] as $hand)
  {{$hand}}
  @endforeach
</div>
<div>dealer手札</div>
<div>
  @foreach ($list[$dealerHand[0]] as $hand)
  {{$hand}}
  @endforeach
  @foreach ($list[$dealerHand[1]] as $hand)
  {{$hand}}
  @endforeach
</div>

<form class="test" action="/black-jack" method="post">
    @csrf
    <input type="hidden" class="form-control" value="$playerHand">
    <input type="submit" value="draw card">
  </form>
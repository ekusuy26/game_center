<div>player手札</div>
<div>
  @foreach ($list[$playerHand[0]] as $handMark)
  {{$handMark}}
  @endforeach
  @foreach ($list[$playerHand[1]] as $handNum)
  {{$handNum}}
  @endforeach
</div>
<div>dealer手札</div>
<div>
  @foreach ($list[$dealerHand[0]] as $handMark)
  {{$handMark}}
  @endforeach
  @foreach ($list[$dealerHand[1]] as $handNum)
  {{$handNum}}
  @endforeach
</div>

<form class="test" action="/black-jack" method="post">
    @csrf
    <input type="hidden" class="form-control" name="aaa" value="{$playerHand}">
    <input type="submit" value="draw card">
  </form>
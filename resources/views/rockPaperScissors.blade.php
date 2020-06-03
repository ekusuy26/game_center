<form action="/rock-paper-scissors" method="post">
  @csrf
  <input type="radio" name="hand" value="0">ぐー
  <input type="radio" name="hand" value="1">ぱー
  <input type="radio" name="hand" value="2">ちょき
  <input type="submit" value="じゃんけん">
</form>

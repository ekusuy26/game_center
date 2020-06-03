<form action="/rock-paper-scissors" method="post">
  @csrf
  <input type="radio" name="hand" value="rock">ぐー
  <input type="radio" name="hand" value="scissors">ちょき
  <input type="radio" name="hand" value="paper">ぱー
  <input type="submit" value="じゃんけん">
</form>
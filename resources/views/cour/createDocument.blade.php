<form action="{{url('')}}" method="post">
@csrf
<input type="text" name="name">
<input type="file" name="path">
<button type="submit">send</button>
</form>
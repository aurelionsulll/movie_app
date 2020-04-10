<form action="{{url('/createClasse')}}" method="post">
@csrf
<input type="text" name="name">

<button type="submit">enve</button>

</form>
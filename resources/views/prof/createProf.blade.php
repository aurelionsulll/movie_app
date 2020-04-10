<form action="{{url('/createProf')}}" method="post">
    @csrf
    <input type="text" name="name">
    <input type="text" name="email">
    <input type="text" name="phone">
    <button type="submit">send</button>
</form>
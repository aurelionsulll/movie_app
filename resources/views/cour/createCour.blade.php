<form action="{{url('/createCour')}}" method="post">
    @csrf

    <input type="text" name="name">

    <select  name="prof_id">
        @foreach ($profs as $profs)
            <option valeur="{{$profs->name}}">{{$profs->name}}</option>
        @endforeach
    </select>

    <select  name="classe_id">
        @foreach ($classes  as $classe)
            <option valeur="{{$classe->name}}">{{$classe->name}}</option>
        @endforeach
    </select>

    <button type="submit">send</button>
</form>
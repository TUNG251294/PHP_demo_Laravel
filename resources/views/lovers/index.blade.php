@foreach($lovers as $lover)
    <h4>{{$lover -> name}}</h4>
    <p>{{$lover -> birthday}}</p>
@endforeach
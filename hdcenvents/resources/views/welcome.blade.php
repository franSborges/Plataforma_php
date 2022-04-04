@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<div id="search-container" class="col-md-12">
  <h1>Busque um evento</h1>
  <form action="">
   <input type="text" id="search" name="search" class="form-control" placeholder="Procurar..."></input>
  </form>
</div>
<div id="events-container" class="col-md-12">
 <h2>Próximos Eventos</h2>
 <p>Veja os eventos dos próximos dias</p>
 <div id="cards-container" class="row">
    @foreach($events as $event)
      <div class="card col-md-3">
        <img src="https://images.unsplash.com/photo-1587825140708-dfaf72ae4b04?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="{{ $event->title}}">
        <div class="card-body">
         <p class="card-date">10/2022</p>
         <h5 class="card-title">{{ $event->title }}</h5>
         <p class="card-participants">x Participantes</p> 
          <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
        </div>
      </div>
    @endforeach
 </div>
</div>
@endsection
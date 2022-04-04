@extends('layouts.main')

@section('title', $event->title)

@section('content')
  <div class="col-md-10 offset-md-1">
    <div class="row">
      <div id="image-container" class="col-md-6">
      <img src="https://images.unsplash.com/photo-1587825140708-dfaf72ae4b04?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="img-fluid" alt="{{ $event->title }}">
      </div>
      <div id="info-container" class="col-md-6">
       <h1>{{ $event->title }}</h1>
       <p class="event-city"><ion-icon name="location-outline"></ion-icon>{{ $event->city }}</p>
       <p class="events-participants"><ion-icon name="people-outline"></ion-icon>X participantes</p>
       <p class="event-owner"><ion-icon name="star-outline"></ion-icon>Dono do Evento</p>
       <a href="#" class="btn btn-primary" id="event-submit">Confirmar Presença</a>
     </div>
     <div class="col-md-12" id="description-container">
       <h3>Sobre o evento</h3>
       <p class="event-description">{{ $event->description }}</p>
      </div>
    </div>
  </div>

@endsection
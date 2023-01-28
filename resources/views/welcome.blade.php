 @extends('layouts.main')
 @section('title', 'HDC Events')
 @section('content')

     <div class="container d-flex col-md-12">
         @foreach ($events as $event)
             <div class="card p-2 m-2" style="width: 18rem;">
                 <img class="card-img-top" src="{{ url('img/event.jpg') }}" alt="Imagem de capa do card">
                 <div class="card-body">
                     <h5 class="card-title">{{ $event->title }}</h5>
                     <p class="card-text">{{ $event->description }}</p>
                     <p class="card-text">{{ $event->city }}</p>
                     @if ($event->private == 0)
                     <p class="card-text">Público</p>
                     @else
                     <p class="card-text">Privado</p>
                     @endif
                     <a href="#" class="btn btn-primary">Visitar</a>
                 </div>
             </div>
         @endforeach
     </div>



     {{-- gtygujgyg --}}
     <!--Comentário html-->
     {{-- Comentário do Blade --}}

 @endsection

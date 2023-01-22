 @extends('layouts.main')
 @section('title', 'HDC Events')
 @section('content')
     <h1>Algum título</h1>
     <img src="/img/primeiraImagem.jpeg" alt="Banner">
     @if (10 > 5)
         <p>A condição é true</p>
     @endif

     @if ($nome == 'Maria')
         <p>O nome é Maria</p>
     @elseif ($nome == 'Leuza')
         <p> O nome é {{ $nome }} e ela tem {{ $idade }} anos e {{ $altura }} de altura.</p>
     @else
         <p>O nome não é Maria</p>
     @endif

     @for ($i = 0; $i < count($arr); $i++)
         <p>{{ $arr[$i] }} - {{ $i }}</p>

         @if ($i == 2)
             <p>O i é 2</p>
         @endif
     @endfor

     @foreach ($nomes as $nomes)
         <p>{{ $loop->index }}</p>
         <p>{{ $nomes }}</p>
     @endforeach

     @php
         $name = 'Leuza';
         echo $name;
     @endphp
     <!--Comentário html-->
     {{-- Comentário do Blade --}}

 @endsection

@extends('layouts.main')
@section('title', 'Criar Evento')

@section('content')
    <div class="container">
        <span class="mt-3 lead">Criar um Evento</span>

        <form action="{{ route('event.store') }}" method="POST">
      @csrf
            <div class="form-group mt-2">
                <label for="title" class="mb-1">Título do evento</label>
                <input required type="text" class="form-control"  name="title" id="title" placeholder="Ex. Formatura">
            </div>

            <div class="form-group mt-2">
                <label for="description" class="mb-1">Descrição do evento</label>
                <textarea required class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
            </div>

            <div class="form-group mt-2">
                <label for="city" class="mb-1">Cidade do Evento</label>
                <input required type="text" class="form-control"  name="city" id="city" placeholder="Ex. Ipatinga do Sul">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Opções</label>
                </div>
                <select required class="custom-select" name="private" id="inputGroupSelect01">
                  <option selected>Natureza do Evento...</option>
                  <option value="0">Público</option>
                  <option value="1">Privado</option>
                </select>
              </div>

            <button type="submit" class="btn btn-primary mt-2">Criar</button>
        </form>
    </div>
@endsection

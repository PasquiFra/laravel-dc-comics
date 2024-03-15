@extends('layouts.layout')

@section('title', 'Add-new')

@section('main-content')
    <section id="add-new">
        <h1 class="text-center py-3">
            @if (Route::is('comics.create')) Aggiungi un nuovo fumetto
            @else Modifica {{$comic->title}} @endif 
        </h1>

@include('form.validation')

        @if ($comic->exists())
            <form action="{{route('comics.store')}}" method="post" novalidate class="flex container py-4 justify-content-center">
        @else
            <form action="{{route('comics.update', $comic->id  ) }}" method="post" class="flex container py-4 justify-content-center">
            @method('put')
        @endif
            @csrf
            <div class="input-group mb-3 w-50 p-1">
                <input type="text" required id="title" name="title" class="form-control @error('title') is-invalid @elseif(old('title')) is-valid @enderror" value="{{old('title', $comic->title)}}" placeholder="Inserisci titolo...">
                @error('title')
                <div class="invalid-feedback">
                    Campo errato
                </div>   
                @else        
                <div class="valid-feedback">
                    Campo corretto
                </div>      
                @enderror       
            </div>
            <div class="input-group mb-3 w-100 p-1">
               <textarea id="description" name="description" id="" cols="50" rows="3" placeholder="Inserisci una descrizione..." class="w-100 @error('description') is-invalid @elseif(old('description')) is-valid @enderror">{{old('title', $comic->description)}}</textarea>
            </div>
            <div class="input-group mb-3 w-50 p-1">
                <input id="thumb" type="url"  name="thumb" class="form-control  @error('thumb') is-invalid @elseif(old('thumb')) is-valid @enderror" value="{{old('thumb', $comic->thumb)}}" placeholder="Inserisci url immagine...">
                @error('thumb')
                <div class="invalid-feedback">
                    Campo errato
                </div>   
                @else        
                <div class="valid-feedback">
                    Campo corretto
                </div>      
                @enderror   
            </div>
            <div class="input-group mb-3 w-50 p-1">
                <span class="input-group-text">$</span>
                <input id="price" type="number"  name="price" class="form-control @error('price') is-invalid @elseif(old('price')) is-valid @enderror" value="{{old('price', $comic->price)}}" placeholder="Inserisci prezzo...">
                @error('price')
                <div class="invalid-feedback">
                    Campo errato
                </div>   
                @else        
                <div class="valid-feedback">
                    Campo corretto
                </div>      
                @enderror  
            </div>
            <div class="input-group mb-3 w-50 p-1">
                <input id="series" type="text"  required name="series" class="form-control @error('series') is-invalid @elseif(old('series')) is-valid @enderror" value="{{old('series', $comic->series)}}" placeholder="Inserisci serie... es.Action Comics">
                @error('series')
                <div class="invalid-feedback">
                    Campo errato
                </div>   
                @else        
                <div class="valid-feedback">
                    Campo corretto
                </div>      
                @enderror  
            </div>
            <div class="input-group mb-3 w-50 p-1">
                <input id="type" type="text"  required name="type" class="form-control @error('type') is-invalid @elseif(old('type')) is-valid @enderror" value="{{old('type', $comic->type)}}" placeholder="Inserisci categoria... es.comic book">
                @error('type')
                <div class="invalid-feedback">
                    Campo errato
                </div>   
                @else        
                <div class="valid-feedback">
                    Campo corretto
                </div>      
                @enderror  
            </div>
            <div class="input-group mb-3 w-50 p-1">
                <span class="input-group-text">Data pubblicazione</span>
                <input id="sale_date" type="date" required name="sale_date" class="form-control @error('sale_date') is-invalid @elseif(old('sale_date')) is-valid @enderror" value="{{old('date', $comic->date)}}">
                @error('sale_date')
                <div class="invalid-feedback">
                    Campo errato
                </div>   
                @else        
                <div class="valid-feedback">
                    Campo corretto
                </div>      
                @enderror  
            </div>
            <div class="input-group mb-3 p-1">
                <input id="artists" type="text" name="artists" class="form-control @error('artists') is-invalid @elseif(old('artists')) is-valid @enderror" value="{{old('artists', $comic->artists)}}" placeholder="Inserisci artisti...">
                @error('artists')
                <div class="invalid-feedback">
                    Campo errato
                </div>   
                @else        
                <div class="valid-feedback">
                    Campo corretto
                </div>      
                @enderror  
            </div>
            <div class="input-group mb-3 p-1">
                <input id="writers" type="text" name="writers" class="form-control @error('writers') is-invalid @elseif(old('writers')) is-valid @enderror" value="{{old('writers', $comic->writers)}}" placeholder="Inserisci scrittori...">
                @error('writers')
                <div class="invalid-feedback">
                    Campo errato
                </div>   
                @else        
                <div class="valid-feedback">
                    Campo corretto
                </div>      
                @enderror  
            </div>
            <div class="w-100">
                <button type="submit" class="btn btn-success me-3">Salva</button>
                <button type="reset" class="btn btn-danger">Svuota</button>
            </div>
        </form>
    </section>
@endsection

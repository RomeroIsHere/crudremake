@extends('layout.app')

@section('title','Platillos')
@section('content')
    
    <section
            class="font-roboto flex flex-row flex-wrap justify-center items-center h-full gap-5 p-0 py-20 bg-primary"
        >
        
        @foreach ($allPlates as $plate)
        <a href="{{ route('Plate.view',$plate['id']) }}">
            <div
                class="font-roboto aspect-6/8 max-h-100 bg-secondary rounded-xl border overflow-clip hover:shadow-xl hover:shadow-accent transition-shadow"
            >
                <img src="{{$plate['filepath']}}" alt="Imagen del Platillo" class="h-1/2 min-w-full" />
                <span>
                    <h3>{{ $plate['name'] }}</h3>
                    <h3>${{ $plate['price'] }}</h3>
                </span>
                <span
                    class="font-roboto flex flex-row justify-end items-center gap-3 p-3 pt-0s"
                >
                    <img
                        class="font-roboto size-5 {{ $plate['isVegan'] }} "
                        src="resources/vegan-Circle.svg"
                        alt="Vegano"
                    />
                    <img
                        class="font-roboto size-5 {{ $plate['hasGluten'] }} "
                        src="resources/gluten-Circle.svg"
                        alt="Gluten"
                    />
                </span>
            </div>
        </a>
        @endforeach
        <a href="{{ route('Create') }}">
            <div
                class="flex flex-row flex-wrap justify-center items-center font-roboto aspect-6/8 max-h-100 bg-secondary rounded-xl border overflow-clip hover:shadow-xl hover:shadow-secondary transition-shadow"
            >
                <span>
                    <h3>Añadir Platillo</h3>
                </span>
                <span
                    class="font-roboto flex flex-row justify-end items-center gap-3 p-3 pt-0s"
                >
                </span>
            </div>
        </a>
        </section>
@endsection
@section('javascript')
@endsection

@include('partial.legend')
@extends('layout.app')

@section('title','Inicio')
@section('content')
<header
            class="font-roboto relative inline-block w-full text-center mb-0"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 1440 320"
                class="font-roboto absolute z-40"
            >
                <path
                    fill="#30b2a5"
                    fill-opacity="1"
                    d="M0,192L80,197.3C160,203,320,213,480,197.3C640,181,800,139,960,106.7C1120,75,1280,53,1360,42.7L1440,32L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"
                ></path>
            </svg>
            <img
                src="resources/header.webp"
                alt="Imagen de El Interior del Restaurante"
                class="font-roboto brightness-[0.3] w-full"
            />
            <div class="font-roboto absolute top-1/2 right-1/2 text-white">
                <p class="font-roboto text-[5vw]">
                    Ven a Comer a
                    <br />
                    Space Shooting Star Burgers
                </p>
            </div>
        </header>

        <div
            class="font-roboto mt-10 py-10 lg:py-3 mx-5 bg-primary flex flex-col flex-wrap justify-around items-center gap-10 lg:gap-0"
        >
            <div
                class="font-roboto flex flex-col lg:flex-row gap-10 justify-between items-center"
            >
                <div
                    class="font-roboto w-full lg:size-[50%] flex justify-center items-center"
                >
                    <a
                        href="{{ route('Menu') }}"
                        class="font-roboto w-full flex justify-center items-center"
                    >
                        <button
                            class="font-roboto h-10 w-[80%] lg:size-100 bg-secondary text-black rounded-xl lg:text-8xl customShadow transition-all duration-300 ease-in-out"
                        >
                            Platillos
                        </button>
                    </a>
                </div>
                <a href="{{ route('Menu') }}" class="font-roboto block ImageHighlight lg:max-w-[50%] transition-all duration-300 ease-in-out">

                
                <img
                    src="resources/OpenFacedBurger.jpg"
                    alt="Hamburgesa en un Plato con Papas y Catsup"
                    
                />
                </a>
            </div>
            <div
                class="font-roboto flex flex-col-reverse gap-10 lg:flex-row justify-between items-center"
            >
            <a href="{{ route('Menu') }}" class="font-roboto block ImageHighlight lg:max-w-[50%] transition-all duration-300 ease-in-out">

                <img
                src="resources/Burger.jpeg"
                alt="Hamburgesa en un Plato con Papas y Catsup"
                
                />
            </a>
                <div
                    class="font-roboto w-full lg:size-[50%] flex justify-center items-center self-center"
                >
                    <a
                        href="{{ route('Specials') }}"
                        class="font-roboto w-full flex justify-center items-center"
                    >
                        <button
                            class="font-roboto h-10 w-[80%] lg:size-100 bg-accent text-black rounded-xl lg:text-6xl customShadow transition-all duration-300 ease-in-out"
                        >
                            Especialidades
                        </button>
                    </a>
                </div>
            </div>
            <a
                href="{{ route('Contact') }}"
                class="font-roboto w-full flex justify-center items-center"
            >
                <button
                    class="font-roboto h-10 w-[80%] lg:m-10 bg-secondary text-black rounded-xl customShadow transition-all duration-300 ease-in-out"
                >
                    Contactanos
                </button>
            </a>
        </div>
@endsection
@section('javascript')
@endsection
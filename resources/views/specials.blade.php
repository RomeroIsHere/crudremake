@extends('layout.app')

@section('title','Especialidades')
@section('content')
    <div class="font-roboto max-w-1000px relative m-auto">
                <div class="font-roboto hidden Slides animate-fade-in-scale">
                    <div class="font-roboto absolute top-0">1 / 3</div>
                    <img
                        class="font-roboto align-middle"
                        src="resources/Burger.jpeg"
                        style="width: 100%"
                    />
                    <div
                        class="font-roboto text-15 px-8 py-12 absolute bottom-8 w-full text-center flex flex-row justify-center align-center"
                    >
                        <div
                            class="font-roboto bg-primary/30 rounded-xl p-5 md:p-20 font-bold"
                        >
                            El Reto de la Hamburguesa Simple
                            <br>
                            <br>
                            <p>Una Orden de 20 Hamburguesas Tipo Slider. 
                            </p>
                            <br>
                            <p>
                             Si Tomas menos de Media Hora Para Devorar todas, Ganaras un Trofeo y Una Tarjeta de Regalo Para nuestro Establecimiento!</p>
                        </div>
                    </div>
                </div>

                <div class="font-roboto hidden Slides animate-fade-in-scale">
                    <div class="font-roboto absolute top-0">2 / 3</div>
                    <img
                        class="font-roboto align-middle"
                        src="resources/BasilBurger.jpg"
                        style="width: 100%"
                    />
                    <div
                        class="font-roboto text-15 px-8 py-12 absolute bottom-8 w-full text-center flex flex-row justify-center align-center"
                    >
                        <div
                            class="font-roboto bg-primary/30 rounded-xl p-5 md:p-20 font-bold"
                        >
                            Hamburguesa Imposible
                            <br>
                            <br><p>
                                Esta Hamburguesa Es una Alternativa Vegetariana para un Amante de Los Animales
                            </p>
                            <br>
                            <p>
                                Este Sustituto Puede Añadirse a Casi cualquier Hamburgues que usted Desee, y Se Marca con una Bandera Verde en un Palillo insertado en la Hamburguesa
                            </p>
                        </div>
                    </div>
                </div>

                <div class="font-roboto hidden Slides animate-fade-in-scale">
                    <div class="font-roboto absolute top-0">3 / 3</div>
                    <img
                        class="font-roboto align-middle"
                        src="resources/OpenFacedBurger.jpg"
                        style="width: 100%"
                    />
                    <div
                        class="font-roboto text-15 px-8 py-12 absolute bottom-8 w-full text-center flex flex-row justify-center align-center"
                    >
                        <div
                            class="font-roboto bg-primary/30 rounded-xl p-5 md:p-20 font-bold"
                        >
                            Papas sin Fin
                            <br>
                            <br><p>Si en Algun Momento Has dudado Si Vale la Pena Pedir mas Aperitifs, No dudes en Pedir una Orden de Papas sin Fin.</p>
                            <br>
                            <p>Por Una Compra especial de 2 Hamburguesas Del Menu Pesado, Puedes Pedir un sin Fin de Ordenes de Papas, con 3 tipos de Salsa a Tu dispocisión</p>
                        </div>
                    </div>
                </div>

                <a
                    class="font-roboto absolute cursor-pointer top-1/2 w-auto p-5 md:p-16 -mt-22 text-white font-bold rounded-r-2xl select-none text-18 bg-primary/50 hover:bg-accent"
                    onclick="plusSlides(-1)"
                    >❮</a
                >
                <a
                    class="font-roboto absolute cursor-pointer top-1/2 right-0 h w-auto p-5 md:p-16 -mt-22 text-white font-bold rounded-l-2xl select-none text-18 bg-primary/50 hover:bg-accent"
                    onclick="plusSlides(1)"
                    >❯</a
                >
            </div>
            <br />

            <div style="text-align: center">
                <span
                    class="font-roboto dot inline-block cursor-pointer size-5 my-2 rounded-2xl border hover:bg-accent animate-fade-only transition-colors"
                    onclick="currentSlide(0)"
                ></span>
                <span
                    class="font-roboto dot inline-block cursor-pointer size-5 my-2 rounded-2xl border hover:bg-accent animate-fade-only transition-colors"
                    onclick="currentSlide(1)"
                ></span>
                <span
                    class="font-roboto dot inline-block cursor-pointer size-5 my-2 rounded-2xl border hover:bg-accent animate-fade-only transition-colors"
                    onclick="currentSlide(2)"
                ></span>
            </div>
@endsection
@section('javascript')
<script src="{{asset('js/Carousel.js')}}"></script>
@endsection
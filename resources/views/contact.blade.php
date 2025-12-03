@extends('layout.app')

@section('title','Contacto')
@section('content')
    <section class="font-roboto p-10 bg-primary">
            <div
                class="font-roboto border h-full rounded-xl bg-secondary p-4 shadow-8xl"
            >
                <div
                    class="font-roboto TabBar w-full px-4 flex flex-wrap justify-start gap-x-2 md:gap-5 pt-2"
                >
                    <button
                        class="font-roboto Tab rounded-t border border-b-0 bg-primary"
                        onclick="openTab(event, 'Reservar')"
                    >
                        Reservar
                    </button>
                    <button
                        class="font-roboto Tab rounded-t border border-b-0 bg-secondary"
                        onclick="openTab(event, 'Queja')"
                    >
                        Queja
                    </button>
                    <button
                        class="font-roboto Tab rounded-t border border-b-0 bg-secondary"
                        onclick="openTab(event, 'Sugerencia')"
                    >
                        Sugerencia
                    </button>
                    <button
                        class="font-roboto Tab rounded-t border border-b-0 bg-secondary"
                        onclick="openTab(event, 'Otros')"
                    >
                        Otros
                    </button>
                </div>
                <form
                    id="Reservar"
                    class="font-roboto TabContent grid grid-cols-1 md:grid-cols-2 bg-primary gap-5 p-5 border rounded-2xl"
                    action="#"
                >
                    <div
                        class="font-roboto flex flex-col items-start justify-between"
                    >
                        <label for="tipo"> Nombre </label>
                        <input
                            class="font-roboto w-full"
                            type="text"
                            name="name"
                            id="name"
                        />
                    </div>
                    <div
                        class="font-roboto flex flex-col items-start justify-between"
                    >
                        <label for="tipo"> Apellido(/s) </label>
                        <input
                            class="font-roboto w-full"
                            type="text"
                            name="lastName"
                            id="lastName"
                        />
                    </div>
                    <div
                        class="font-roboto flex flex-col items-start justify-between col-span-full"
                    >
                        <label for="email">
                            Correo Electronico<span class="font-roboto redText"
                                >*</span
                            >
                        </label>
                        <input
                            class="font-roboto w-full"
                            type="email"
                            name="email"
                            placeholder="Escribe tu Correo Electronico Aqui"
                            id="email"
                            required
                        />
                    </div>
                    <div
                        class="font-roboto flex flex-col items-start justify-between"
                    >
                        <label for="Day"> Dia a Reservar </label>
                        <input type="date" name="Day" id="day" />
                    </div>
                    <div
                        class="font-roboto flex flex-col items-start justify-between"
                    >
                        <label for="Time"> Tiempo a Reservar </label>
                        <input
                            type="time"
                            name="Time"
                            id="time"
                            min="13:00"
                            max="22:00"
                            value="13:00"
                            step="00:15"
                        />
                        <small>Horario De Reservas de 13:00 a 22:00</small>
                    </div>
                    <input
                        class="font-roboto col-span-full"
                        type="submit"
                        value="Enviar"
                    />
                    <br />
                </form>
                <form
                    id="Queja"
                    class="font-roboto TabContent hidden grid-cols-1 md:grid-cols-2 bg-primary gap-5 p-5 border rounded-2xl"
                    action="#"
                >
                    <div
                        class="font-roboto flex flex-col items-start justify-between"
                    >
                        <label for="tipo"> Nombre </label>
                        <input
                            class="font-roboto w-full"
                            type="text"
                            name="name"
                            id="name"
                        />
                    </div>
                    <div
                        class="font-roboto flex flex-col items-start justify-between"
                    >
                        <label for="tipo"> Apellido(/s) </label>
                        <input
                            class="font-roboto w-full"
                            type="text"
                            name="lastName"
                            id="lastName"
                        />
                    </div>
                    <div
                        class="font-roboto flex flex-col items-start justify-between col-span-full"
                    >
                        <label for="email">
                            Correo Electronico<span class="font-roboto redText"
                                >*</span
                            >
                        </label>
                        <input
                            class="font-roboto w-full"
                            type="email"
                            name="email"
                            placeholder="Escribe tu Correo Electronico Aqui"
                            id="email"
                            required
                        />
                    </div>
                    <div
                        class="font-roboto flex flex-col items-start justify-between col-span-full"
                    ></div>
                    <div
                        class="font-roboto flex flex-col items-start justify-between col-span-full"
                    >
                        <label for="Comentario">Queja</label>
                        <textarea
                            class="font-roboto w-full"
                            name="Comentario"
                            id="Comentario"
                        ></textarea>
                    </div>
                    <input
                        class="font-roboto col-span-full"
                        type="submit"
                        value="Enviar"
                    />
                    <br />
                </form>
                <form
                    id="Sugerencia"
                    class="font-roboto TabContent hidden grid-cols-1 md:grid-cols-2 bg-primary gap-5 p-5 border rounded-2xl"
                    action="#"
                >
                    <div
                        class="font-roboto flex flex-col items-start justify-between"
                    >
                        <label for="tipo"> Nombre </label>
                        <input
                            class="font-roboto w-full"
                            type="text"
                            name="name"
                            id="name"
                        />
                    </div>
                    <div
                        class="font-roboto flex flex-col items-start justify-between"
                    >
                        <label for="tipo"> Apellido(/s) </label>
                        <input
                            class="font-roboto w-full"
                            type="text"
                            name="lastName"
                            id="lastName"
                        />
                    </div>
                    <div
                        class="font-roboto flex flex-col items-start justify-between col-span-full"
                    >
                        <label for="email">
                            Correo Electronico<span class="font-roboto redText"
                                >*</span
                            >
                        </label>
                        <input
                            class="font-roboto w-full"
                            type="email"
                            name="email"
                            placeholder="Escribe tu Correo Electronico Aqui"
                            id="email"
                            required
                        />
                    </div>
                    <div
                        class="font-roboto flex flex-col items-start justify-between col-span-full"
                    ></div>
                    <div
                        class="font-roboto flex flex-col items-start justify-between col-span-full"
                    >
                        <label for="Comentario">Sugerencia</label>
                        <textarea
                            class="font-roboto w-full"
                            name="Comentario"
                            id="Comentario"
                        >
                        </textarea>
                    </div>
                    <input
                        class="font-roboto col-span-full"
                        type="submit"
                        value="Enviar"
                    />
                    <br />
                </form>
                <form
                    id="Otros"
                    class="font-roboto TabContent hidden grid-cols-1 md:grid-cols-2 bg-primary gap-5 p-5 border rounded-2xl"
                    action="#"
                >
                    <div
                        class="font-roboto flex flex-col items-start justify-between"
                    >
                        <label for="tipo"> Nombre </label>
                        <input
                            class="font-roboto w-full"
                            type="text"
                            name="name"
                            id="name"
                        />
                    </div>
                    <div
                        class="font-roboto flex flex-col items-start justify-between"
                    >
                        <label for="tipo"> Apellido(/s) </label>
                        <input
                            class="font-roboto w-full"
                            type="text"
                            name="lastName"
                            id="lastName"
                        />
                    </div>
                    <div
                        class="font-roboto flex flex-col items-start justify-between col-span-full"
                    >
                        <label for="email">
                            Correo Electronico<span class="font-roboto redText"
                                >*</span
                            >
                        </label>
                        <input
                            class="font-roboto w-full"
                            type="email"
                            name="email"
                            placeholder="Escribe tu Correo Electronico Aqui"
                            id="email"
                            required
                        />
                    </div>
                    <div
                        class="font-roboto flex flex-col items-start justify-between col-span-full"
                    ></div>
                    <div
                        class="font-roboto flex flex-col items-start justify-between col-span-full"
                    >
                        <label for="Comentario">Comentario</label>
                        <textarea
                            class="font-roboto w-full"
                            name="Comentario"
                            id="Comentario"
                        ></textarea>
                    </div>
                    <input
                        class="font-roboto col-span-full"
                        type="submit"
                        value="Enviar"
                    />
                    <br />
                </form>
            </div>
        </section>
@endsection
@section('javascript')
<script src="{{asset('js/Tabbar.js')}}"></script>
<script src="{{asset('js/DateConstraint.js')}}"></script>
@endsection
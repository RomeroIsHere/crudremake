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
                    <div
                        class="font-roboto Tab rounded-t border border-b-0 bg-accent"
                    >
                        El Platillo No se Creo correctamente. Imagen o Nombre demasiado Largo
                    </div>
                </div>
            
                <div
                    class="font-roboto TabBar w-full px-4 flex flex-wrap justify-start gap-x-2 md:gap-5 pt-2"
                >
                    <button
                        class="font-roboto Tab rounded-t border border-b-0 bg-primary"
                    >
                        Crear
                    </button>
                </div>
                <form
                    id="Reservar"
                    class="font-roboto TabContent grid grid-cols-1 md:grid-cols-2 bg-primary gap-5 p-5 border rounded-2xl"
                    action="{{ route('Plate.store') }}"
                    method="POST"
                    enctype="multipart/form-data"
                >
                @csrf
                    <div
                        class="font-roboto flex flex-col items-start justify-between"
                    >
                        <label for="tipo"> Nombre </label>
                        <input
                            required
                            class="font-roboto w-full"
                            type="text"
                            name="name"
                            id="name"
                        />
                    </div>
                    <div
                        class="font-roboto flex flex-col items-start justify-between"
                    >
                        <label for="price"> Precio </label>
                        <input
                            required
                            class="font-roboto w-full"
                            type="number"
                            step="1"
                            min="0"
                            pattern="\d+"
                            name="price"
                            id="price"
                        />
                    </div>
                    
                    <div
                        class="font-roboto flex flex-col items-start justify-between"
                    >
                        <label for="isVegan"> Es Vegano </label>
                        <input type="checkbox" name="isVegan" id="isVegan" />
                    </div>
                    <div
                        class="font-roboto flex flex-col items-start justify-between"
                    >
                        <label for="hasGluten"> Tiene Gluten </label>
                        <input
                            type="checkbox"
                            name="hasGluten"
                            id="hasGluten"
                        />
                    </div>
                    <div
                        class="font-roboto flex flex-col items-start justify-between col-span-full"
                    >
                        <label for="file"> Foto de Referencia </label>
                        <input
                        class="font-roboto w-full"
                            type="file"
                            name="file"
                            id="file"
                        />
                    </div>
                    <input
                        class="font-roboto col-span-full"
                        type="submit"
                        value="Crear Nuevo Platillo"
                    />
                    <br />
                </form>
            </div>
        </section>
@endsection
@section('javascript')
@endsection
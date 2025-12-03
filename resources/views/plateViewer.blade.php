@extends('layout.app')

@section('title','Contacto')
@section('content')
    <section class="font-roboto p-10 bg-primary">
            <div
                class="font-roboto border h-full rounded-xl bg-secondary p-4 shadow-8xl"
            >
            @if ($success??false)
                <div
                    class="font-roboto TabBar w-full px-4 flex flex-wrap justify-start gap-x-2 md:gap-5 pt-2"
                >
                    <div
                        class="font-roboto Tab rounded-t border border-b-0 bg-primary"
                    >
                        Se Ha Actualizado el Platillo Con Exito
                    </div>
                </div>
            
            @endif
            @if ($failure??false)
                <div
                    class="font-roboto TabBar w-full px-4 flex flex-wrap justify-start gap-x-2 md:gap-5 pt-2"
                >
                    <div
                        class="font-roboto Tab rounded-t border border-b-0 bg-accent"
                    >
                        El Platillo No se Actualizo correctamente.
                    </div>
                </div>
            @endif
                <div
                    class="font-roboto TabBar w-full px-4 flex flex-wrap justify-start gap-x-2 md:gap-5 pt-2"
                >
                    <button
                        class="font-roboto Tab rounded-t border border-b-0 bg-primary"
                    >
                        Actualizar
                    </button>
                </div>
                <form
                    id="Reservar"
                    class="font-roboto TabContent grid grid-cols-1 md:grid-cols-2 bg-primary gap-5 p-5 border rounded-2xl"
                    action="{{ route('Plate.update',$plate['id']) }}"
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
                            value="{{$plate['name']??''}}"
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
                            value="{{$plate['price']??1}}"
                        />
                    </div>
                    
                    <div
                        class="font-roboto flex flex-col items-start justify-between"
                    >
                        <label for="isVegan"> Es Vegano </label>
                        <input type="checkbox" name="isVegan" id="isVegan" 
                        @if ($plate['isVegan'])
                            checked
                        @endif
                        />
                    </div>
                    <div
                        class="font-roboto flex flex-col items-start justify-between"
                    >
                        <label for="hasGluten"> Tiene Gluten </label>
                        <input
                            type="checkbox"
                            name="hasGluten"
                            id="hasGluten"
                            @if ($plate['hasGluten'])
                                checked
                            @endif
                        />
                    </div>
                    <div
                        class="font-roboto flex flex-col items-start justify-between col-span-full"
                    >
                        <img src="{{url($plate['filepath'])}}" id="imagePreview" alt="Imagen del Platillo" class="max-w-full" />
                        <label for="file">Actualizar Foto de Referencia </label>
                        <input
                        class="font-roboto w-full"
                            type="file"
                            name="file"
                            id="file"
                            accept="image/*"
                        />
                    </div>
                    <input
                        class="font-roboto col-span-full"
                        type="submit"
                        value="Actualizar Platillo"
                    />
                    <br />
                </form>
                <div
                    class="font-roboto TabContent grid grid-cols-1 md:grid-cols-2 bg-primary gap-5 p-5 border rounded-2xl"
                >
                <input
                        class="font-roboto bg-accent col-span-full"
                        type="button"
                        onclick="ConfirmDeletion()"
                        value="Borrar Platillo"
                    />
            </div>
            </div>
        </section>
@endsection
@section('javascript')
<script>
    const chooseFile = document.getElementById("file");
    const imgPreview = document.getElementById("imagePreview");
    function getImgData() {
    const files = chooseFile.files[0];
        if (files) {
            const fileReader = new FileReader();
            fileReader.readAsDataURL(files);
            fileReader.addEventListener("load", function () {
            imgPreview.src=this.result;
            });    
        }
    }
    chooseFile.addEventListener("change", function () {
        getImgData();
    });

    function ConfirmDeletion() {
        let text = "Estas a Punto de Borrar el Platillo!\nEsta es una Accion no Revertible, Quieres Proceder?.";
        if (confirm(text) == true) {
            console.log("{{ route('Plate.delete',$plate['id']) }}");
            window.location.replace("{{ route('Plate.delete',$plate['id']) }}");
        }
    }
</script>
@endsection
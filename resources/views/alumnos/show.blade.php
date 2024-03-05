<x-layouts.layout>
    <div class="max-w-4xl mx-auto p-5">
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <h2 class="card-title text-2xl">Detalles del Alumno</h2>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="label">
                            <span class="label-text">Nombre:</span>
                        </label>
                        <p>{{ $alumno->nombre }}</p>
                    </div>
                    <div>
                        <label class="label">
                            <span class="label-text">Apellidos:</span>
                        </label>
                        <p>{{ $alumno->apellidos }}</p>
                    </div>
                    <div>
                        <label class="label">
                            <span class="label-text">Dirección:</span>
                        </label>
                        <p>{{ $alumno->direccion }}</p>
                    </div>
                    <div>
                        <label class="label">
                            <span class="label-text">Teléfono:</span>
                        </label>
                        <p>{{ $alumno->telefono }}</p>
                    </div>
                    <div>
                        <label class="label">
                            <span class="label-text">Email:</span>
                        </label>
                        <p>{{ $alumno->email }}</p>
                    </div>
                </div>
                <div class="divider"></div>
                <h3 class="text-xl font-semibold">Idiomas que habla</h3>
                <ul class="list-disc list-inside">
                    @foreach($alumno->idiomas as $idioma)
                        <li>{{ $idioma->idioma }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="flex justify-end mt-4">
                <a href="{{ route('alumnos.index') }}" class="btn btn-primary">
                    Volver al listado
                </a>
            </div>
        </div>
    </div>
</x-layouts.layout>

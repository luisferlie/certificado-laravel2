import React, { useState } from 'react'

export default function EditarAlumno({ alumnoInicial }) {
    // Estado para almacenar y actualizar los idiomas del alumno
    const [idiomas, setIdiomas] = useState(alumnoInicial.idiomas);

    // Agregar un nuevo idioma al listado
    const agregarIdioma = idioma => {
        if (!idiomas.includes(idioma)) {
            setIdiomas([...idiomas, idioma]);
        }
    };

    // Eliminar un idioma del listado
    const eliminarIdioma = idiomaAEliminar => {
        setIdiomas(idiomas.filter(idioma => idioma !== idiomaAEliminar));
    };

    return (
        <div>

            <div>
                <select onChange={(e) => agregarIdioma(e.target.value)}>
                    <option value="" disabled>Selecciona un idioma</option>
                    {/* Asumiendo que `idiomasDisponibles` es una lista de idiomas disponibles */}
                    {idiomasDisponibles.map(idioma => (
                        <option key={idioma} value={idioma}>{idioma}</option>
                    ))}
                </select>
            </div>
            <div>
                {idiomas.map((idioma, index) => (
                    <div key={index}>
                        {idioma}
                        <button onClick={() => eliminarIdioma(idioma)}>Eliminar</button>
                    </div>
                ))}
            </div>
        </div>
    );
}

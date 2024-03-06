import './bootstrap';
import '../css/app.css';

import React from 'react';
import ReactDOM from 'react-dom/client';
import EditarAlumno from './Pages_React/EditarAlumno';



// Encuentra un elemento en tu HTML donde quieras montar el componente de React
const el = document.getElementById('react-app');
// Asegúrate de que las variables están definidas
    if (document.getElementById('react-app') && typeof alumnoInicial !== 'undefined' && typeof idiomasDisponibles !== 'undefined') {
        ReactDOM.render(<EditarAlumno alumnoInicial={JSON.parse(alumnoInicial)} idiomasDisponibles={JSON.parse(idiomasDisponibles)} />, document.getElementById('react-app'));
    }

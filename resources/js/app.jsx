import React from 'react';
import ReactDOM from 'react-dom/client';
import Tabla from './Pages_React/Tabla.jsx'; // Asegúrate de ajustar la ruta de importación

if (document.getElementById('react-root')) {
    const root = ReactDOM.createRoot(document.getElementById('react-root'));
    root.render(<Tabla />);
}

# Instalación del proyecto
````bash
laravel new Jugadores
````
# Creo el ecosistema para el crud


## Sweet alert 

Instalo
````bash
npm install sweetalert2
````
Importo la librería en **app.js**
````js
import Swal from 'sweetalert2';

window.Swal = Swal;
````

*Lo utilizo en blade
````html


````
## Instalar react
*Partimos de tener vite instalado, si no:
````bash
npm install laravel-vite-plugin --save-dev
````
### Instalo los paquetes de react

```bash
npm install react react-dom
```

### Configuramos vite para react
;Instalamos el plugin de vite para usar react
```bash
npm install @vitejs/plugin-react
```
### modificamos el fichero de configuración de vite
```bash
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        laravel([
            'resources/js/app.jsx', // Cambia a .jsx si tu punto de entrada usa JSX
            'resources/css/app.css',
        ]),
        react(),
    ],
});

```


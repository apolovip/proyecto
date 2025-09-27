# Estructura básica del proyecto

Este proyecto sigue una arquitectura modular orientada a la separación de responsabilidades. A continuación se detalla la estructura de carpetas y archivos principales que se refleja en el directorio ```src/```:

estructura basica del proyecto 
```
proyecto/
│
├── src/                    → Código fuente principal de la aplicación (MVC)
│   ├── assets/             → Recursos reutilizables para el frontend (CSS, JS, imágenes, etc.)
│   │   ├── bootstrap/      → Archivos de Bootstrap locales (CSS/JS)
|   │   │   ├── css/        → bootstrap.min.css necesario para los estilos
|   │   │   ├── icons/      → iconos de bootstrap locales
|   │   │   └── js/         → javascript de bootstrap necesario para offcanvas y demas elementos de bootstrap
│   │   ├── components/     → Fragmentos HTML reutilizables (botones, tarjetas, etc.)
│   │   ├── icons/          → Iconos SVG utilizados en la interfaz
│   │   ├── images/         → Imágenes y logotipos del proyecto
│   │   └── elements/       → Elementos repetitivos PHP del frontend
│   │       ├── header.php  → Cabecera común de todas las vistas
│   │       ├── footer.php  → Pie de página común
│   │       ├── links.php   → Enlaces CSS y meta tags
│   │       └── scripts.php → Enlaces a scripts JS
│   │
│   ├── config/             → Archivos de configuración
│   │   ├── APP/            → Constantes globales reutilizables (nombres, rutas, etc.)
│   │   └── SERVER/         → Datos sensibles (credenciales, claves de encriptación). ⚠️ **No modificar sin autorización**
│   │
│   ├── controller/         → Controladores
│   │   └── vista_controller.php → Controlador principal que gestiona la carga de vistas según la URL
│   │
│   ├── docs/               → Documentación técnica y notas internas. Puede extenderse con manuales, diagramas, etc.
│   │   └── diagrams/       → diagramas de flujo, MER, Casos de uso, etc. (usualmente generados con la extension draw.io y code.viz)
│   │
│   ├── helpers/            → Fragmentos de código reutilizable. Pensado para extensión
│   │   ├── js/             → Funciones JavaScript comunes
│   │   └── php/            → Funciones PHP compartidas
│   │
│   ├── model/              → Modelos (Lógica de datos y negocio)
│   │   ├── mainModel/      → Modelo base con métodos comunes (conexión, encriptación, etc.)
│   │   └── vista_model.php → Modelo que determina qué vista cargar según la URL. ⚠️ **No modificar sin comprender la herencia**
│   │
│   ├── view/               → Vistas (Archivos de presentación)
│   │   ├── css/            → Estilos personalizados
│   │   ├── html/           → Vistas estáticas
│   │   ├── js/             → Scripts específicos por vista
│   │   └── plantilla/      → Plantilla que integra layouts y vistas. Pensado para personalización visual
│   │
│   ├── .htaccess           → Configuración del servidor Apache (reescritura de URLs). ⚠️ **No modificar sin conocimiento técnico**
│   ├── index.php           → Punto de entrada principal de la aplicación. ⚠️ **No modificar sin revisar el flujo MVC**
│   └── README.md           → Descripción general del proyecto (este archivo)
│
├── vendor/                 → Dependencias gestionadas por Composer (Bootstrap, etc.). ⚠️ **No modificar manualmente**
├── composer.json           → Declaración de paquetes y configuración de Composer. ⚠️ **No modificar sin revisar compatibilidad**
└── composer.lock           → Registro exacto de versiones instaladas. ⚠️ **No modificar manualmente**
```

## 📌 Notas adicionales

- Este proyecto sigue el patrón **MVC** (Modelo-Vista-Controlador).
- Los archivos marcados con ⚠️ deben ser modificados solo por usuarios con conocimiento técnico o autorización explícita.
- La carpeta `docs/` puede expandirse con diagramas, flujos de trabajo y manuales de uso.
- Las funciones compartidas en `helpers/` están pensadas para facilitar la extensibilidad del sistema.

---
# 💡 Proyecto Base MVC en PHP

Aplicación web modular construida bajo el patrón **Modelo-Vista-Controlador** (**MVC**) para facilitar el desarrollo escalable, seguro y mantenible de interfaces dinámicas en PHP.

---
## 📝 Tareas

Para ver la **Estructura Completa de Tareas y Pendientes**, visita nuestro [Tablero Kanban aquí ➡️](.kanbn/index.md).

---

## 🚀 Inicio Rápido

Este repositorio sirve como **plantilla base** para cualquier aplicación web construida en PHP que requiera una estructura organizada, segura y modular. Ir a [manual de desarrollador](src/docs/manual_desarrollador.md) para más detalles.

---

## 🛠️ Tecnologías Principales

El proyecto está construido con un stack moderno y enfocado en la seguridad y la modularidad.

| Componente    | Versión / Propósito                   |
| :------------ | :------------------------------------ |
| **PHP**       | 8.0+ (POO, modularidad)               |
| **Composer**  | Gestión de dependencias y autoloading |
| **Bootstrap** | 5 (Estilos y diseño responsivo)       |
| **PDO**       | Acceso seguro a Bases de Datos        |
| **Apache**    | Reescritura de URLs con `.htaccess`   |
| **OpenSSL**   | Encriptación de datos sensibles       |

---

## ⚙️ Instalación y Configuración

Sigue estos pasos para poner en marcha el proyecto en tu entorno local (requiere **PHP 8.0+**, **Apache** y **Composer**).

### 1. Clonar el Repositorio

Clona el proyecto en tu directorio de servidor web (ej. `htdocs` de XAMPP):

```bash
git clone [URL_DEL_REPO]
cd proyecto
```
## 2. Instalar Dependencias

Usa **Composer** para descargar todas las librerías necesarias (incluyendo Bootstrap):

```bash
composer install
```
## 3. Configuración Inicial

Configura las **variables esenciales del sistema** en los siguientes archivos. Asegúrate de configurar `config/SERVER` para la conexión a la base de datos.

* `config/SERVER`: Credenciales de BD, claves de encriptación y parámetros sensibles. **⚠️ Añadir a `.gitignore`.**
* `config/APP`: Nombre del sistema, ruta base y configuración general.

---

## 4. Iniciar el Servidor

Accede al proyecto en tu navegador. El punto de entrada es `index.php`, que gestiona las rutas dinámicas.

```bash
https://localhost/nombre_del_proyecto/
```
---

## 🏗️ Estructura del Proyecto (MVC)

El núcleo del sistema sigue el patrón **Modelo-Vista-Controlador (MVC)**, garantizando la separación de responsabilidades:

| Carpeta       | Responsabilidad     | Descripción                                                         |
| :------------ | :------------------ | :------------------------------------------------------------------ |
| `controller/` | **Controlador (C)** | Gestiona el flujo de la aplicación e interactúa con el Modelo.      |
| `model/`      | **Modelo (M)**      | Lógica de negocio, conexión a BD, validaciones y encriptación.      |
| `view/html/`  | **Vista (V)**       | Archivos `.php` que contienen la interfaz de usuario (`-view.php`). |
| `assets/`     | **Recursos**        | CSS, JS, imágenes, layouts y componentes reutilizables.             |
| `helpers/`    | **Auxiliares**      | Funciones de PHP y JavaScript reutilizables para todo el sistema.   |
| `config/`     | **Configuración**   | Constantes y parámetros de entorno.                                 |

### Referencia a estructura del proyecto

>[Estructura del proyecto](src/docs/estructura_proyecto.md)

---

## 🤝 Contribución

**¡Las contribuciones son bienvenidas!** Para colaborar en el desarrollo:

1.  Clona el repositorio y crea una rama a partir de `master`: 

```bash
git checkout -b feature/nombre-funcionalidad
```

2.  Sigue las **Convenciones de Desarrollo**.
3.  Asegúrate de que tus cambios pasen las pruebas.
4.  Realiza un `commit` descriptivo y abre un **Pull Request (PR)**.

---

## 🛡️ Seguridad

La seguridad es una prioridad. Por favor, asegúrate de:

* Usar siempre **consultas preparadas (PDO)** para interactuar con la base de datos.
* **Hashear contraseñas** con `password_hash`.
* **No modificar** archivos críticos como `config/SERVER` o `.htaccess`.

---

## 📄 Licencia

Este proyecto está bajo la Licencia **MIT** - ver el archivo [LICENSE.md](src/docs/LICENSE.MD) para más detalles.

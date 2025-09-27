# 📘 Manual del Desarrollador: Proyecto Base MVC en PHP

Este repositorio contiene una aplicación web estructurada bajo el patrón **Modelo-Vista-Controlador** (**MVC**), diseñada para facilitar el desarrollo **escalable, seguro y mantenible** de interfaces dinámicas en PHP. Este manual es la guía técnica de referencia para todos los colaboradores.

---

<h2 align="center">Índice de Navegación Rápida</h2>

<div align="center">
  <table>
    <tr>
      <td><a href="#1-introducción-general" style="text-decoration:none; color:inherit;">1. Introducción General</a></td>
      <td><a href="#2-estructura-del-proyecto" style="text-decoration:none; color:inherit;">2. Estructura del Proyecto</a></td>
      <td><a href="#3-instalación-y-configuración" style="text-decoration:none; color:inherit;">3. Instalación y Configuración</a></td>
      <td><a href="#4-flujo-de-ejecución" style="text-decoration:none; color:inherit;">4. Flujo de Ejecución</a></td>
    </tr>
    <tr>
      <td><a href="#5-convenciones-de-desarrollo" style="text-decoration:none; color:inherit;">5. Convenciones de Desarrollo</a></td>
      <td><a href="#6-frontend" style="text-decoration:none; color:inherit;">6. Frontend</a></td>
      <td><a href="#7-backend" style="text-decoration:none; color:inherit;">7. Backend</a></td>
      <td><a href="#8-reutilización-y-helpers" style="text-decoration:none; color:inherit;">8. Reutilización y Helpers</a></td>
    </tr>
    <tr>
      <td><a href="#9-testing-y-depuración" style="text-decoration:none; color:inherit;">9. Testing y Depuración</a></td>
      <td><a href="#10-seguridad-y-buenas-prácticas" style="text-decoration:none; color:inherit;">10. Seguridad y Buenas Prácticas</a></td>
      <td><a href="#11-colaboración-y-control-de-versiones" style="text-decoration:none; color:inherit;">11. Colaboración y Control de Versiones</a></td>
      <td><a href="#12-documentación-adicional" style="text-decoration:none; color:inherit;">12. Documentación Adicional</a></td>
    </tr>
    <tr>
      <td><a href="#13-extensión-y-mantenimiento" style="text-decoration:none; color:inherit;">13. Extensión y Mantenimiento</a></td>
      <td><a href="#14-conclusión" style="text-decoration:none; color:inherit;">14. Conclusión</a></td>
      <td></td>
      <td></td>
    </tr>
  </table>
</div>

---

## 1. Introducción General

Este proyecto sirve como **plantilla base** para construir aplicaciones web en PHP con una arquitectura modular. Su objetivo es proporcionar una base **escalable, segura y mantenible** adaptable a contextos como paneles administrativos, sistemas internos o prototipos funcionales.

### Propósito y Descripción Funcional

El enfoque principal es la **separación clara de responsabilidades** (lógica, presentación, control de flujo) mediante el patrón MVC. Esto se logra permitiendo:

* **Carga dinámica de vistas** mediante URLs amigables gestionadas por **`.htaccess`**.
* Gestión centralizada de configuración y seguridad a través de los módulos **`APP`** y **`SERVER`**.
* **Reutilización de componentes** (layouts, helpers, assets) para mantener una interfaz coherente y eficiente.
* **Seguridad incorporada** mediante encriptación de datos sensibles, *hashing* de contraseñas y validación.

### Público Objetivo y Tecnologías Utilizadas

Dirigido a **Desarrolladores web** que trabajen en entornos PHP y requieran una base estructurada para sistemas dinámicos.

#### Tecnologías Principales

* **PHP 8.0 o superior** (Programación orientada a objetos y modularidad)
* **Composer** (Gestión de dependencias y autoloading eficiente)
* **Bootstrap 5** (Estilización y componentes *frontend* responsivos)
* **Apache + .htaccess** (Reescritura de URLs y control de flujo)
* **PDO** (Acceso seguro a bases de datos con *prepared statements*)
* **OpenSSL** (Encriptación de datos sensibles)
* **AJAX** y **JavaScript** (Interactividad y peticiones asíncronas)
* **GIT/Github** (Control de versiones)

---

## 2. Estructura del Proyecto

El sistema está organizado en **módulos funcionales** bajo la arquitectura **MVC**.

> **Consulta la descripción detallada de cada archivo/carpeta en:** `docs/estructura_proyecto.md`

### Archivos que NO deben modificarse directamente ⚠️

Alterar estos archivos puede comprometer la estabilidad, seguridad o compatibilidad del sistema.

* **`.htaccess`** (Reescritura de URLs)
* **`index.php`** (Punto de entrada principal)
* **`composer.json`** / **`composer.lock`** (Gestión de dependencias)
* **`config/SERVER/`** (Credenciales y parámetros sensibles)
* **`model/mainModel/`** (Modelo base, lógica de conexión)
* **`vendor/`** (Librerías externas de Composer)

### Carpetas pensadas para Extensión o Personalización ✅

Estas carpetas están diseñadas para que los desarrolladores agreguen nuevas funcionalidades.

* `view/html/` → Contiene las vistas del sistema (`nombre-view.php`).
* `assets/components/` → Almacena fragmentos HTML reutilizables (botones, formularios).
* `helpers/js/` y `helpers/php/` → Contienen funciones auxiliares reutilizables.
* `docs/` → Documentación técnica y seguimiento de tareas.
* `model/` → Crear nuevos modelos que **extiendan** de `mainModel`.
* `controller/` → Agregar nuevos controladores si se amplía la lógica.

---

## 3. Instalación y Configuración

### Requisitos del Sistema

* **PHP 8.0 o superior**
* **Servidor web Apache** (Ej: XAMPP, WAMP)
* **Composer** (Gestor de dependencias)

### Pasos para Clonar e Instalar el Proyecto

1.  **Clonar** el repositorio en la carpeta `htdocs` (o similar) utilizando Git.
    ```bash
    git clone [URL_DEL_REPO]
    cd proyecto
    ```
2.  Ejecutar **`composer install`** para instalar las dependencias (`vendor/` y Bootstrap).
    ```bash
    composer install
    ```
3.  Acceder al proyecto desde el navegador: `http://localhost/nombre_del_proyecto/`

### Configuración Inicial

La configuración se centraliza en dos módulos clave:

* **`config/SERVER`**: Contiene constantes sensibles (credenciales de base de datos, claves de encriptación). ⚠️ **No debe modificarse sin autorización y debe estar fuera del control de versiones (`.gitignore`).**
* **`config/APP`**: Contiene constantes generales (nombre del sistema, ruta base y configuraciones de frontend/backend).

---

## 4. Flujo de Ejecución

El sistema utiliza un flujo de carga dinámico para renderizar vistas en función de la URL solicitada, manteniendo una arquitectura desacoplada.

**Secuencia de Ejecución:**

$$ \text{.htaccess} \to \text{index.php} \to \text{vista\_controller.php} \to \text{vista\_model.php} \to \text{plantilla.php} \to \text{Layouts + Vista} $$

### Explicación del Flujo:

1.  **`.htaccess`**: Reescribe URLs amigables (ej: `/inicio`) a llamadas internas (`index.php?page=inicio`).
2.  **`index.php`**: Actúa como punto de entrada e instancia el controlador principal.
3.  **`vista_controller.php`**: Interpreta el parámetro `page` para determinar la vista a cargar.
4.  **`vista_model.php`**: Valida que la vista exista en el arreglo `paginas_existentes`. (Si no existe, retorna un error 404).
5.  **`plantilla.php`**: Carga la vista validada e integra los *layouts* comunes (`header`, `footer`, `scripts`).

---

## 5. Convenciones de Desarrollo

Es fundamental seguir estas convenciones para garantizar la coherencia, legibilidad y escalabilidad del código.

### Nombres y Estructura

* **Archivos PHP:** Minúsculas y con guiones bajos (ejemplo: `vista_controller.php`).
* **Funciones:** Estilo **`camelCase`** (ejemplo: `cargarVista`, `desencriptarDato`).
* **Vistas:** Deben nombrarse como `nombre-view.php` (ejemplo: `usuario-view.php`).
* **Modelos/Controladores:** Deben seguir el patrón `Nombre_tipo.php`.

### Reglas para Agregar Nuevos Componentes o Vistas

* Toda nueva **vista** debe agregarse en `view/html` con el sufijo `-view.php`.
* El nombre de la vista debe añadirse al arreglo **`paginas_existentes`** en **`vista_model.php`** para su reconocimiento.
* Los **componentes nuevos** deben ubicarse en `assets/components`.
* Los estilos y *scripts* específicos de una vista deben colocarse en `view/css` y `view/js` respectivamente.

---

## 6. Frontend

El desarrollo *frontend* se centra en la modularidad y el uso de **Bootstrap 5** para la responsividad y consistencia visual.

### Estructura y Elementos

* **Framework principal:** **Bootstrap 5** (uso local o por CDN).
* **Elementos Comunes** (`assets/Elements`):
    * `header.php`, `footer.php`, `links.php`, `scripts.php`.
    * Se cargan automáticamente en `plantilla.php` para mantener consistencia.
* **Componentes Reutilizables:**
    * Se ubican en **`assets/components`** y se incluyen mediante PHP en cualquier vista o *layout*.
* **Scripts y Estilos Específicos:**
    * `view/js` y `view/css` son para archivos que solo aplican a vistas particulares.

---

## 7. Backend

El *backend* centraliza la lógica de negocio y la seguridad del acceso a datos, basándose en la herencia de un modelo principal.

### Funcionamiento de Modelos

* **`mainModel`**: Contiene métodos base para **conexión PDO**, encriptación con **OpenSSL**, **hashing** de contraseñas y validación.
* **Modelos Específicos**: Deben **extender de `mainModel`** para heredar la funcionalidad base y garantizar la consistencia en el acceso a datos.
* El modelo `vista_model` se encarga de la lógica de validación de vistas.

### Acceso a Datos y Seguridad

* Se utiliza **PDO** con **consultas preparadas** (`prepare` y `execute`) para prevenir inyecciones SQL.
* Datos sensibles se **encriptan** usando `encriptar_dato` de `mainModel` antes de almacenarse.
* Contraseñas se **hashean** mediante `password_hash`.
* **Constantes Globales**: La configuración se maneja a través de **`config/APP`** y **`config/SERVER`**, incluidas automáticamente en el flujo.

---

## 8. Reutilización y Helpers

El proyecto promueve la reutilización de código mediante la carpeta `helpers/`.

### Uso de Fragmentos de Código

* **`helpers/js`**: Contiene funciones JavaScript reutilizables (validaciones del lado del cliente, alertas).
* **`helpers/php`**: Incluye funciones auxiliares para el *backend* (validación de entrada, formateo de datos, generación de *tokens* **CSRF**).

> Estas funciones deben ser independientes y cargarse mediante `require_once` o a través de la inclusión automática de *scripts* y *links* en la plantilla.

---

## 9. Testing y Depuración

### Métodos Recomendados para Probar

* Acceder directamente a vistas mediante la **URL amigable** (`https://localhost/proyecto/?page=nombre`) para verificar la carga de componentes.
* Utilizar valores de prueba para validar la respuesta del sistema en funciones clave (encriptación, sesiones, BD).

### Activación/Desactivación de Errores

* **Activar (Desarrollo):** Modificar `php.ini` o incluir:
    ```php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    ```
* **Desactivar (Producción):** Se recomienda: `error_reporting(0); ini_set("display_errors", 0);` (crucial para la seguridad).

### Herramientas Sugeridas para Debugging

* **Consola del navegador** (inspección de errores JS, red, DOM).
* **XAMPP Panel** (monitoreo de logs de Apache y MySQL).
* Funciones nativas de PHP: **`var_dump()`** y **`print_r()`**.
* Herramientas externas como Postman/Insomnia para probar *endpoints*.

---

## 10. Seguridad y Buenas Prácticas

La seguridad y la integridad del sistema dependen de respetar estas prácticas y las restricciones de archivos.

### Archivos Protegidos (Ver sección 2)

* Nunca modificar: `.htaccess`, `composer.lock`, `vendor/`, `config/SERVER`, `index.php`.

### Manejo de Credenciales y Datos Sensibles

* Las credenciales deben definirse en **`config/SERVER`** y **mantenerse fuera del control de versiones** (usar `.gitignore`).
* Nunca deben exponerse en el *frontend* ni imprimirse en pantalla.

### Prevención de Vulnerabilidades Comunes

* Usar **consultas preparadas** (`prepare + execute`) para prevenir inyecciones SQL.
* **Hashear** todas las contraseñas con `password_hash`.
* **Sanitizar y validar** todas las entradas del usuario.
* **Encriptar** datos sensibles con OpenSSL.

---

## 11. Colaboración y Control de Versiones

Se utiliza **Git** para el control de versiones. Es obligatorio seguir este flujo de trabajo para mantener la estabilidad de la rama principal.

### Uso de Git (Ramas, Commits)

1.  Cada desarrollador debe trabajar en una **rama propia** basada en **`master`** (o `main`).
2.  Los **commits** deben ser descriptivos, breves y reflejar el cambio.
3.  Las **Pull Requests** deben ser claras y concisas, y **no deben fusionarse sin revisión previa**.

### Comandos Recomendados para Trabajo en Equipo

```bash
# 1. Actualizar la rama principal
git checkout master
git pull origin master

# 2. Crear una nueva rama para trabajar
git checkout -b nombre-de-tu-rama

# 3. Agregar y confirmar cambios
git add .
git commit -m "Descripción clara del cambio"

# 4. Subir la rama al repositorio remoto
git push origin nombre-de-tu-rama

# 5. Sincronizar con master antes del Pull Request
git checkout master
git pull origin master
git checkout nombre-de-tu-rama
git merge master # Resolver conflictos si aparecen

# 6. Subir cambios corregidos y solicitar Pull Request
git push origin nombre-de-tu-rama
```
###
>Ir a [Contributing.md](src/docs/Contributing.md) para mas informaacion acerca de como colaboracion y trabajo en equipo.

---

## 12. Documentación Adicional

La carpeta `docs/` centraliza los archivos de documentación técnica y es esencial para el *onboarding* y la trazabilidad.

### Contenido de la Carpeta `docs/`

* [Changelog.md](Changelog.md): Lista cronológica de funcionalidades, mejoras y correcciones por versión.
* [estructura_proyecto.md](estructura_proyecto.md): Descripción jerárquica de la arquitectura.
* [manual_desarrollador.md](manual_desarrollador.md): Guía técnica principal de funcionamiento.
* [Contributing.md](Contributing.md): Guía para colaboradores y trabajo en equipo.

### Mantenimiento del Archivo README.md

El **`README.md`** (o este manual) debe mantenerse **actualizado** con cada cambio relevante en funcionalidades, estructura o requisitos técnicos.

---

## 13. Extensión y Mantenimiento

* **Agregar nuevas vistas**:
1. Crear `nombre-view.php` en `view/html`.
2. Registrar el nombre en `paginas_existentes` de `vista_model.php`.
* **Agregar nuevos modelos**: Crear el archivo en `model/` y debe **extender de `mainModel`**.
* **Actualización de dependencias**: Utiliza **`composer update`** para actualizar librerías.
* **Escalabilidad**: La estructura modular facilita la adición de nuevos módulos o *plugins* sin alterar la base.

---

## 14. Conclusión

Este manual proporciona una guía completa para comprender, utilizar y extender el sistema de forma segura y colaborativa. La **claridad**, la **modularidad** y la **responsabilidad compartida** son pilares fundamentales del proyecto. Se recomienda utilizar este documento como referencia principal durante todo el ciclo de desarrollo.
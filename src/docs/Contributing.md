## 🧩 Estructura profesional de trabajo colaborativo

---

### 1. Ramas temporales por funcionalidad

Cada colaborador debe trabajar en una **rama temporal y descriptiva**, basada en `main`.

**Ejemplo:**

```bash
git checkout main
git pull origin main
git checkout -b feat/login-form
```

| Prefijo     | Propósito                                                        |
| :---------- | :--------------------------------------------------------------- |
| `feat/`     | Para **nuevas funcionalidades**.                                 |
| `fix/`      | Para **correcciones** de errores.                                |
| `refactor/` | Para **reestructuraciones** de código sin cambio funcional.      |
| `hotfix/`   | **Corrección crítica** en producción, directamente desde `main`. |
| `doc/`      | Solo cambios en archivos de **documentación**.                   |
| `test/`     | Ramas dedicadas solo a la **creación o corrección de tests**.    |

### 2. Mantener la rama main actualizada

Antes de crear una rama o hacer un *merge*, siempre sincroniza con `main`:
```bash
git checkout main
git pull origin main
```
Para actualizar tu **rama temporal** con los últimos cambios de `main`:

```bash
git checkout feat/login-form
git fetch origin
git rebase origin/main
```

**⚠️ Usa `rebase` para mantener un historial limpio.** Si hay conflictos, resuélvelos y continúa con:

```bash
git add .
git rebase --continue
```

### 3. Evitar sobrescribir trabajo ajeno

**Nunca** hagas `push --force` a ramas compartidas. Solo se permite en ramas personales y con consentimiento.

Para subir tu rama:

```bash
git push origin feat/login-form
```

---

## ✏️ Convención de Mensajes de Commit (Conventional Commits)

Todos los mensajes de commit deben seguir el formato: `<tipo>(ámbito opcional): <descripción breve>`.

| Tipo        | Propósito                                                | Ejemplo                                          |
| :---------- | :------------------------------------------------------- | :----------------------------------------------- |
| `feat:`     | Implementación de una nueva característica.              | `feat: agregar validación de email en registro`  |
| `fix:`      | Corrección de un error o *bug*.                          | `fix(login): corregir error de credenciales`     |
| `docs:`     | Cambios solo en la documentación.                        | `docs: actualizar guía de contribución`          |
| `style:`    | Cambios de formato (espacios, puntos y comas).           | `style: aplicar formato de prettier`             |
| `refactor:` | Reestructuración de código sin cambiar funcionalidad.    | `refactor: modularizar componente de perfil`     |
| `test:`     | Adición o corrección de pruebas.                         | `test: agregar tests unitarios para modelo User` |
| `chore:`    | Tareas de mantenimiento o configuración de herramientas. | `chore(deps): actualizar versión de Bootstrap`   |

**Reglas clave:**

* Usar **imperativo** en el commit (`agregar`, no `agregué`).
* La primera línea (asunto) debe tener **menos de 50 caracteres**.

---

## 🔁 Flujo de Pull Request (PR)

### 4. Cómo deben trabajar tus compañeros

Al terminar una funcionalidad, deben:

* Crear el **PR desde su rama hacia `main`**.
* Agregar descripción clara: **qué se hizo, por qué, cómo probarlo**.
* Solicitar revisión: **asignar revisores**.
* **No hacer *merge* directo**: esperar aprobación.

### 5. Cómo debes revisar y aceptar PRs

#### a. Revisión técnica

1.  Verifica que la rama esté actualizada con `main`.
2.  Revisa el código: estilo, **seguridad**, lógica.
3.  Ejecuta pruebas locales si aplica.

#### b. Comandos para revisar localmente

```bash
git fetch origin pull/ID/head:pr-branch
git checkout pr-branch
```


> **Reemplaza `ID` con el número del PR.**

#### c. Merge profesional

Una vez aprobado, haz *merge* tipo **squash** para mantener el historial limpio:

```bash
git checkout main
git pull origin main
git merge --squash feat/login-form
git commit -m "feat: login form implementation"
git push origin main
```


> Alternativamente, puedes hacer el *squash* desde la interfaz de GitHub.

---

## 6. Proceso de Hotfix (Corrección Rápida) 🚨

Para errores críticos en producción que no pueden esperar el ciclo normal:

1.  Crea la rama de corrección desde `main`: 
```bash
git checkout main && git checkout -b hotfix/nombre-del-bug
```
2.  Aplica los cambios y haz commit con el prefijo `fix:`.
3.  Crea un PR a `main` y pide revisión **urgente**.
4.  Una vez aprobado, haz *merge* e implementa inmediatamente.

---

## 7. Limpieza post-Merge

Una vez que un Pull Request es aceptado y se ha hecho *merge* a `main`:

* **Elimina la rama temporal:** La plataforma ofrece un botón para eliminar la rama automáticamente. Si lo haces localmente: 
```bash
git branch -d feat/nombre-funcionalidad.
```
* **Sincroniza `main`:** Asegúrate de que tu `main` local refleje los últimos cambios: 
```bash
git checkout main && git pull origin main
```

---

## 🛡️ Reglas de protección

**Protege la rama `main` desde GitHub:**

* Requiere PR para hacer cambios.
* Requiere revisión de al menos un compañero.
* Prohíbe *force push*.
* Requiere que los *tests* pasen (si usas CI/CD).

---

## 📦 Comandos clave resumen

| Acción                   | Comando                                      |
| :----------------------- | :------------------------------------------- |
| Crear rama temporal      | `git checkout -b feat/nombre`                |
| Actualizar rama con main | `git fetch origin && git rebase origin/main` |
| Subir cambios            | `git push origin feat/nombre`                |
| Revisar PR localmente    | `git fetch origin pull/ID/head:pr-branch`    |
| Hacer *merge* limpio     | `git merge --squash feat/nombre`             |
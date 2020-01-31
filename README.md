# bolsa-empleo

El proyecto servirá para gestionar una bolsa de empleo.

**Objetivo**
- Funcionalidad mínima y lo más simple para realizar un primer proyecto útil
- Debe ser desarrollado durante el curso

## Requisitos principales
- Sin registro se pueden consultar las ofertas de empleo
- Con registro un alumno puede pedir que le manden ofertas nuevas
- Con registro un alumno se debe poder dar de baja en la notificaciones y borrar sus datos
- Sin registro una empresa puede subir su oferta de empleo
- Validación.
  - Debe tener un proceso de validación para los alumnos nuevos
  - Debe tener un proceso de validación manual para las ofertas
  - Las nuevas ofertas y los nuevos usuarios deben de rellenar un captcha (No spam)


## Ofertas de empleo
- A través de un link se podrán dar de alta ofertas de empleo
- El formulario tendrá un captcha para evitar abusos
- Una oferta está asociada a una serie de ciclos (Los ciclos están puestos en la plantilla, no están en la base de datos)
  - Son los ciclos que oferta el centro, con esto se consultará los emails de alumnos dados de alta y que quieren recibir notificaciones y se les enviará una vez aceptadas
- Las ofertas dadas de alta estarán en estado pendiente revisión.
- Cuando un administrador las valide, se le enviará un email a la persona de contacto y se publicará en el listado

## Profesional (Exalumno)
- Proceso de registro con usuario y contraseña
- Sube sus datos e indica ciclos
- Si quiere notificaciones


## Ampliación
- Mejorar el listado de ofertas, filtros y ordenación
- Registro de empresas
- Subir CV de profesionales

## Análisis

### Entidad-Relación

![Análisis]: (docs/ER_bolsa_empleo.png)

### URLS
```
/ofertas -> listado ofertas de empleo activas ordenadas más reciente
/ofertas/ciclo/<ciclo> -> listado de ofertas de un ciclo
/ofertas/nueva -> nueva oferta
/ofertas/detalle/<slug>
/ofertas/edit/<id>/<token>

/profesional/perfil

Symfony
/admin
/login
```

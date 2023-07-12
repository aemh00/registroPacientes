# Resolución prueba diagnóstico parte práctica 
### Alfredo Morales H.

## ¿Qué se logró implementar?
- Llegué a armar la interfaz de usuario que da la bienvenida a la aplicación, muestra botones con opciones de ver registros y de ingresar registro. Ambos llevan a sus respectivas páginas.
- Se logró incluir diseños de bootstrap que utilizan CSS y JS.
- La parte de formulario está con todos los datos solicitados, son sus respectivos tipos y formatos de selección donde corresponde. Sin embargo, al enviar al formulario solo muestra los mismos datos ingresados.
- La parte de visualización está pensada para mostrar los registros en una tabla, sólo muestra algunos campos principales. (se verán sólo los encabezados de columna si no hay registros)

## ¿Qué faltó?
- Implementar el servidor MySQL que almacene las tablas. No hay back-end. Tuve problemas para montar el servidor local y decidí desarrollar la lógica de las otras partes.

## Lógica de los controladores (Controllers)
- en la carpeta `App/Controllers` están los intentos de controladores que logré desarrollar. No están funcionando, sin embargo presentan una lógica adecuada para el problema, sólo faltó pulirlo.


## Requiremientos de funcionamiento

Se trabajó con PHP version 8.2.8 con las siguientes extensiones instaladas: `intl`, `curl` y las básicas necesarias.

## Instrucciones de ejecución
- En la carpeta raiz, abrir una consola y ejecutar `php -S localhost:8000`
- Luego en un navegador visitar `http://localhost:8000/`.
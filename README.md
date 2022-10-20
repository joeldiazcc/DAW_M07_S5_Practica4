# S5_Practica4
## Repository Authors✒️

-   Joel Felipe Díaz Carissimi - [joeldiazcc](https://github.com/joeldiazcc)

-   Luis Andres Castillo Ensinas - [lcastienc](https://github.com/lcastienc)

Practica para aprender el uso de PMA, phpMyAdmin, mediante el uso de php y conectarlo a la base de datos. 
Material o herramientas a usar: 
-XAMPP.
-IDE de PHP, en nuestro caso PhpStorm.

Resultado esperado de la practica: 

<img width="285" alt="image" src="https://user-images.githubusercontent.com/102548167/197025467-b9d77ca5-4511-4217-b82d-b5c0ed214e3a.png">

Usamos XAMPP con el servidor Apache y Mysql en fucionamento y como administradores, como en la imagen siguiente: 

![image](https://user-images.githubusercontent.com/102548167/197025901-b138fb23-e099-418c-8125-6de21527cefb.png)

Una vez hecho esto vamos al buscador y nos aparecera el PMA, en caso de no hacerlo escribimos localhost y ya nos aparecera una sugerencia. 
En caso de erros, ya sea porque los puertos estan ocupados o hay otro programa usando unos canales especificos, para solucionarlos vamos al apartado de Logs y Netstat para ver si nuestros puertos estan ocupados; en caso de estar ocupados localizamos el puerto y matamos el proceso de ese puerto para que quede libre. 

![image](https://user-images.githubusercontent.com/102548167/197026893-e41ed198-97e9-45d5-9acf-74ebd4bb99d9.png)

PhpMyAdmin
Esta es la pagina principal que tendria que aparecer:

![image](https://user-images.githubusercontent.com/102548167/197027229-d6043376-51dc-4d05-a2f0-aced3350b5ee.png)

Nos vamos al apartado de Nueva y creamos una BBDD: 

![image](https://user-images.githubusercontent.com/102548167/197027687-f0767327-d988-470c-aa65-8631206c6f00.png)

Luego en esa BBDD creamos una tabla y la llenamos de datos: 

![image](https://user-images.githubusercontent.com/102548167/197027948-77c69cfa-1740-47f0-82ac-0bf8d19fe763.png)

La llenamos de datos con las siguientes lineas y le damos a continuar para ejecutar eso comandos: 

![image](https://user-images.githubusercontent.com/102548167/197028698-c0acb5ca-7139-49eb-b128-f0b7217cdad1.png)

El resultado de la tabla sera el siguiente: 

![image](https://user-images.githubusercontent.com/102548167/197028827-d87061f2-7d43-4f30-aadf-d8cafc085f39.png)

Lo siguiente es el codigo php, que esta en el respositorio. Algunos archivos .php tienen html, ademas archivos para conecertar el php con la BBDD mediante el mysqli_connect. 

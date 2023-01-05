# Aplicacion web basico de login

pagina -> https://migatoalaire.ml/

## Authors

- [Eder Llancari Guerra](https://github.com/EderLG2020)

## 🛠 Skills

Javascript, HTML, CSS, PHP, MYSSQL

## Screenshots

**Interfaz de Login**

![Interfaz de Login](https://i.ibb.co/qnNzT8x/Interfaz-Login.png)

**Interfaz de Registro**

![Interfaz de Registro](https://i.ibb.co/BtC48vR/interfaz-Registro.png)

**Base de Datos Myssql**

![Base de Datos Myssql](https://i.ibb.co/z4d5PsT/myssq.png)

## API Reference

### **USER**

#### Login

```http
  POST /validar.php
```

| Parámetro | Tipo     | Descripción                          |
| :-------- | :------- | :----------------------------------- |
| `usuario` | `String` | **Required**. Nombre del usuario     |
| `pass1`   | `String` | **Required**. Contraseña del usuario |

### **USER**

#### Registro

```http
  POST /registro.php
```

| Parámetro          | Tipo     | Descripción                          |
| :----------------- | :------- | :----------------------------------- |
| `usuario`          | `String` | **Required**. Nombre del usuario     |
| `correoe`          | `String` | **Required**. Correo del usuario     |
| `numerotelefonico` | `Int`    | **Required**. Telefono del usuario   |
| `direccion`        | `String` | **Required**. Domicilio del usuario  |
| `apodo`            | `String` | **Required**. Nickname del usuario   |
| `pass1`            | `String` | **Required**. Contraseña del usuario |

## Problemas al desarrollar

Tengo problemas de conexión a la base de datos Myssql con xamp por lo que opte por una plataforma https://www.infinityfree.net/ 
Esta plataforma tiene problemas en la carga, por lo que va a demorar un día para la carga del diseño, pero no hay problemas con los archivos de "PHP" es decir que cumple la funcion de validad.

## License

[MIT](https://choosealicense.com/licenses/mit/)

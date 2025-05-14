# 🔐 Sistema de Inicio de Sesión en PHP (Login System)

Una aplicación web que permite registrar usuarios, iniciar sesión y cerrar sesión. Desarrollada con PHP y MySQL, esta app es ideal para aprender autenticación básica y manejo seguro de contraseñas.

## 🚀 Características

- Registro de nuevos usuarios
- Inicio de sesión con validación de credenciales
- Cierre de sesión (logout)
- Contraseñas almacenadas de forma segura con `password_hash()`
- Interfaz sencilla con HTML y CSS
- Organización por carpetas (`includes`, `pages`, `assets`)

## 🧰 Tecnologías utilizadas

- PHP
- MySQL
- HTML/CSS
- XAMPP (Apache + MySQL)
- phpMyAdmin

## 📦 Estructura del proyecto

```
mi_proyecto_login/
├── assets/
│   └── css/
│       └── styles.css
├── config/
├── includes/
│   ├── db.php
│   └── functions.php
├── pages/
│   ├── login.php
│   ├── register.php
│   ├── dashboard.php
│   ├── authentication.php
│   └── logout.php
├── creacion tabla base de datos.sql
└── README.md
```

## 🔧 Instalación y uso

1. Clona o descarga este repositorio.
2. Copia la carpeta en `C:/xampp/htdocs/`
3. Inicia Apache y MySQL desde el panel de XAMPP.
4. Abre [http://localhost/phpmyadmin](http://localhost/phpmyadmin) y crea una base de datos, por ejemplo: `usuarios_db`
5. Importa el archivo `creacion tabla base de datos.sql` dentro de esa base de datos.
6. Accede al proyecto desde tu navegador:  
   👉 `http://localhost/mi_proyecto_login/pages/login.php`

## 🧪 Usuario de prueba

Puedes iniciar sesión con el siguiente usuario de prueba:

- **Usuario:** `Usuarioprueba`
- **Contraseña:** `123456`

## 📄 Licencia

Este proyecto es de uso libre con fines educativos.

## 👤 Autor

Marc — https://github.com/marcgarciacampobadal

# 🎓 CUP FICCT — Sistema Web de Admisión Universitaria

**Laravel 12** · **PHP 8.3+** · **PostgreSQL** · **Bootstrap 5** · **Blade**

Aplicación web completa para administrar el proceso de admisión al Curso Preuniversitario (CUP) de la Facultad de Ingeniería de Ciencias de la Computación y Telecomunicaciones (FICCT) - UAGRM.

---

## 🎯 Características por Rol

### Administrador
- 🔐 Inicio de sesión seguro
- 👥 CRUD completo de usuarios, postulantes, docentes
- 📚 Gestión de carreras, grupos, aulas y horarios
- 📝 Registro de notas por materia (3 exámenes)
- ✅ Registro de asistencias
- 💳 Gestión de pagos
- 📊 Dashboard con KPIs ejecutivos
- 📈 Reportes estadísticos (HTML, PDF, Excel)
- 📋 Bitácora de acciones del sistema

### Coordinador Académico
- 📊 Dashboard propio
- 👥 Consulta de postulantes
- 📚 Consulta de grupos, horarios
- 📈 Reportes limitados

### Docente
- 📊 Dashboard propio
- 👥 Ver mis grupos asignados
- 📝 Registrar notas por postulante
- ✅ Registrar asistencia por grupo
- 🕐 Consulta de carga horaria

### Postulante
- 📊 Dashboard propio
- 👤 Consulta de perfil
- 📝 Consulta de calificaciones y promedio
- 🏫 Grupo asignado y horarios
- 💳 Gestión de pagos
- 📈 Estado de admisión

---

## 🛠️ Stack Tecnológico

| Capa | Tecnología |
|------|------------|
| **Backend** | PHP 8.3+ / Laravel 12 |
| **Frontend** | Blade + Bootstrap 5.3 + Vite |
| **Base de Datos** | PostgreSQL |
| **Autenticación** | Laravel Breeze |
| **PDF** | barryvdh/laravel-dompdf |
| **Excel** | maatwebsite/excel |
| **Gráficos** | Chart.js |
| **Pagos** | PayPal Sandbox |
| **Control de Versiones** | Git + GitHub |

---

## ✅ Requisitos Previos

| Herramienta | Versión Mínima |
|-------------|----------------|
| PHP | 8.3+ |
| Composer | 2.x |
| Node.js | 20+ |
| PostgreSQL | 16+ |
| Git | 2.40+ |

---

## 🚀 Instalación y Ejecución

### Paso 1: Clonar el Repositorio

git clone https://github.com/Rolandovs7/CUP-FICCT.git
cd CUP-FICCT

### Paso 2: Crear la Base de Datos

sudo -u postgres psql

CREATE DATABASE "CUPFICCT";
CREATE USER tu_usuario WITH PASSWORD 'tu_contraseña';
GRANT ALL PRIVILEGES ON DATABASE "CUPFICCT" TO tu_usuario;
ALTER USER tu_usuario CREATEDB;
\q

### Paso 3: Instalar Dependencias

composer install
npm install
npm run build

### Paso 4: Configurar el archivo .env

cp .env.example .env
nano .env

Configurar la conexión a PostgreSQL:

DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=CUPFICCT
DB_USERNAME=
DB_PASSWORD=

### Paso 5: Generar Clave y Migrar

php artisan key:generate
php artisan migrate
php artisan db:seed

### Paso 6: Iniciar el Servidor

php artisan serve

**Acceso:** http://localhost:8000

---

## 📚 Documentación

La documentación del proyecto sigue el **Proceso Unificado de Desarrollo de Software (PUDS)**, incluyendo:

- Diagramas de Casos de Uso
- Diagramas de Clases (Análisis + Diseño)
- Diagramas de Secuencia
- Diagramas de Actividad
- Diagramas de Componentes y Despliegue
- Modelo Entidad-Relación

---

## 👥 Equipo

| Estudiante | Registro | Rol |
|------------|----------|-----|
| Rolando Velasco Soliz | 223044768 | Full Stack Developer |
| Jimena Jahuira Poma | 223042951 | Documentación |

**Materia:** Sistemas de Información I  
**Sigla:** INF411-SA  
**Grupo:** #23  
**Semestre:** 1-2026  
**Facultad:** FICCT - UAGRM

---

## 🙏 Agradecimientos

Proyecto desarrollado como parte del curso **Sistemas de Información I** aplicando el Proceso Unificado de Desarrollo de Software (PUDS).

---

⭐ Si este proyecto te resultó útil, dale una estrella en GitHub.

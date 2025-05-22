<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preload" href="css/ficha.css" as="style">
    <link rel="stylesheet" href="css/ficha.css">
    <link rel="preload" href="css/responsive.css" as="style">
    <link rel="stylesheet" href="css/responsive.css">
    <title>Ficha de asistencia</title>
</head>
<body>
    <div class="grid-container">
        <header>
            <h1>Ficha de Asistencia</h1>
            <div class="bnv-container">
                <h2>Sistema General de la Asistencia de la Escuela</h2>
            </div> 
        </header> 
        <div class="nav-bg">
            <nav class="contenedor">
                <button class="boton" onclick="location.href='./main.php'">Menú Principal</button>
                <button class="boton" onclick="location.href='./login.php'">Cerrar Sesión</button>
            </nav>
        </div>
    </div>
    
    <section class="ficha-container">
        <main>
            <h2>Selecciona tu carrera</h2>
            <p>Para ver tu ficha de asistencia, selecciona primero tu carrera y luego el grupo.</p>
            <p>Después podrás ver las materias correspondientes a tu grupo.</p>
            <div style="align-items: center;">
                <button id="btnCarrera" class="btn ficha-boton">Carrera</button>
            </div>
        </main>
        <!-- Texto que aparece al mostrar carreras -->
        <div id="textoCarrera" class="hidden">
            <p>Ahora selecciona tu carrera de la lista de abajo.</p>
        </div>
        <div id="carreras" class="container hidden"></div>
        <!-- Texto que aparece al mostrar grupos -->
        <div id="textoGrupo" class="hidden">
            <p>Ahora selecciona tu grupo.</p>
        </div>
        <div id="grupos" class="container hidden"></div>
        <!-- Texto que aparece al mostrar materias -->
        <div id="textoMateria" class="hidden">
            <p>Ahora selecciona la materia.</p>
        </div>
        <div id="materias" class="container  hidden"></div>
    </section>

    
    <script>
        // Datos de ejemplo
        const data = {
            carreras: {
                ingenieria: {
                    grupos: {
                        A: ["Matemáticas", "Física", "Programación"],
                        B: ["Álgebra", "Química", "Electrónica"]
                    }
                },
                medicina: {
                    grupos: {
                        A: ["Anatomía", "Biología", "Química"],
                        B: ["Fisiología", "Farmacología", "Patología"]
                    }
                },
                derecho: {
                    grupos: {
                        A: ["Derecho Civil", "Derecho Penal", "Derecho Laboral"],
                        B: ["Derecho Constitucional", "Derecho Mercantil", "Derecho Internacional"]
                    }
                }
            },
        };

        const btnCarrera = document.getElementById('btnCarrera');
        const carrerasDiv = document.getElementById('carreras');
        const gruposDiv = document.getElementById('grupos');
        const materiasDiv = document.getElementById('materias');
        const textoCarrera = document.getElementById('textoCarrera');
        const textoGrupo = document.getElementById('textoGrupo');
        const textoMateria = document.getElementById('textoMateria'); 

        btnCarrera.addEventListener('click', () => {
            mostrarCarreras(); 
            carrerasDiv.classList.remove('hidden');
            textoCarrera.classList.remove('hidden');
            gruposDiv.classList.add('hidden');
            materiasDiv.classList.add('hidden');
            textoGrupo.classList.add('hidden');
            textoMateria.classList.add('hidden');
            gruposDiv.innerHTML = '';
            materiasDiv.innerHTML = '';
        });

        
        function mostrarCarreras() {
            carrerasDiv.innerHTML = '';
            for (const carrera in data.carreras) {
                const nodo = document.createElement('div');
                nodo.className = 'ficha-nodo';
                const btn = document.createElement('button');
                btn.className = 'btn ficha-boton carrera';
                btn.textContent = carrera.charAt(0).toUpperCase() + carrera.slice(1);
                btn.setAttribute('data-carrera', carrera);
                nodo.appendChild(btn);
                carrerasDiv.appendChild(nodo);
            }
        }

        carrerasDiv.addEventListener('click', (e) => {
            if (e.target.classList.contains('carrera')) {
                const carrera = e.target.getAttribute('data-carrera');
                mostrarGrupos(carrera);
                gruposDiv.classList.remove('hidden');
                textoGrupo.classList.remove('hidden');
                materiasDiv.classList.add('hidden');
                textoMateria.classList.add('hidden'); 
                materiasDiv.innerHTML = '';
            }
        });

        function mostrarGrupos(carrera) {
            gruposDiv.innerHTML = '';
            const grupos = data.carreras[carrera].grupos; 
            for (const grupo in grupos) {
                const nodo = document.createElement('div');
                nodo.className = 'ficha-nodo';
                const btn = document.createElement('button');
                btn.className = 'btn ficha-boton grupo';
                btn.textContent = `Grupo ${grupo}`;
                btn.setAttribute('data-carrera', carrera);
                btn.setAttribute('data-grupo', grupo);
                nodo.appendChild(btn);
                gruposDiv.appendChild(nodo);
            }
        }

        gruposDiv.addEventListener('click', (e) => {
            if (e.target.classList.contains('grupo')) {
                const carrera = e.target.getAttribute('data-carrera');
                const grupo = e.target.getAttribute('data-grupo');
                mostrarMaterias(carrera, grupo);
                materiasDiv.classList.remove('hidden');
                textoMateria.classList.remove('hidden'); 
            }
        });

        function mostrarMaterias(carrera, grupo) {
            materiasDiv.innerHTML = '';
            const materias = data.carreras[carrera].grupos[grupo]; 
            materias.forEach(materia => {
                const nodo = document.createElement('div');
                nodo.className = 'ficha-nodo';
                const btn = document.createElement('button');
                btn.className = 'btn ficha-boton materia';
                btn.textContent = materia;
                nodo.appendChild(btn);
                materiasDiv.appendChild(nodo);
            });
        }
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TodoApp</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            Logo
        </div>
        <div class="content">
            <nav>
                <a href="#" class="btn btn-primary">
                    Criar Tarefa
                </a>
            </nav>
            <main>
                <section class="graph">
                    <div class="graph-header">
                        <h2>Progresso do dia</h2>
                        <hr>
                        Data 
                    </div>
                    <div class="graph-header-subtitle">
                        Tarefas: <b>3/6</b> 
                    </div>
                    <div class="graph-placeholder">
                    </div>
                    <p class="graph-header-tasks-left">Restam 3 tarefas para serem realizadas</p>
                </section>
                <section class="list">
                    <div class="list-header">
                        <select class="list-header-select">
                            <option value="#">Todas as tarefas</option>
                        </select>
                    </div>
                    <div class="task-list">
                        <div class="task">
                            <div class="title">
                                <input type="checkbox" name="" id="">
                                <div class="task-title">
                                    Titulo da Tarefa
                                </div>
                            </div>
                            <div class="priority">
                                <div class="sphere"></div>
                                <div>Titulo da tarefa</div>
                            </div>
                            <div class="actions">
                                Editar - Excluir
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
</body>
</html>
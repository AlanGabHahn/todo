<x-layout>
    <section class="graph">
        <div class="graph-header">
            <h2>Progresso do dia</h2>
            <div class="graph-header-line"></div>
            <div class="graph-header-date">
                <img src="/assets/images/icon-prev.png" >
                    01 de Dez
                <img src="/assets/images/icon-next.png" >
            </div>
        </div>
        <div class="graph-header-subtitle">
            Tarefas: <b>3/6</b> 
        </div>
        <div class="graph-placeholder">
        </div>
        <div class="tasks-left-footer">
            <img src="/assets/images/icon-info.png">
            Restam 3 tarefas para serem realizadas
        </div>
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
                    <a href="#">
                        <img src="/assets/images/icon-edit.png">
                    </a> 
                    <a href="#">
                        <img src="/assets/images/icon-delete.png">
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layout>
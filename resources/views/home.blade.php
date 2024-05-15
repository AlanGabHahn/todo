<x-layout>
    <x-slot:btn>
        <a href="{{ route('tasks.create') }}" class="btn btn-primary">
            Criar Tarefa
        </a>
        <a href="{{ route('logout') }}" class="btn btn-primary">
            Sair
        </a>
    </x-slot:btn>
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
            @foreach ($tasks as $task)
                <x-task :data=$task/>
            @endforeach
        </div>
    </section>
    <script>
        async function checkedTask(element)
        {
            let status = element.checked;
            let taskId = element.dataset.id;
            let rawResult = await fetch(url, {
                method: 'POST',
                headers: {
                    'Content-type': 'application/json',
                    'accept': 'application/json'
                },
                body: JSON.stringify({status, taskId})
            });
            result = await rawResult.json();
            
        }
    </script>
</x-layout>
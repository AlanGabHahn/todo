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
                <a href="{{ route('home', ['date' => $date_prev_button]) }}">
                    <img src="/assets/images/icon-prev.png" >
                </a>
                    {{$date_string}}
                <a href="{{ route('home', ['date' => $date_next_button]) }}"> 
                    <img src="/assets/images/icon-next.png" >
                </a>
            </div>
        </div>
        <div class="graph-header-subtitle">
            Tarefas: <b>{{$tasks_count - $undone_tasks_count}}/{{$tasks_count}}</b>
        </div>
        <div class="graph-placeholder">
        </div>
        <div class="tasks-left-footer">
            <img src="/assets/images/icon-info.png">
            Restam {{$undone_tasks_count}} tarefas para serem realizadas
        </div>
    </section>
    <section class="list">
        <div class="list-header">
            <select class="list-header-select" onchange="changeTaskStatusFilter(this)">
                <option value="all_tasks">Todas as tarefas</option>
                <option value="pending">Tarefas pendentes</option>
                <option value="done">Tarefas realizadas</option>
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
            let url = '{{route('task.checked')}}';
            let rawResult = await fetch(url, {
                method: 'POST',
                headers: {
                    'Content-type': 'application/json',
                    'accept': 'application/json'
                },
                body: JSON.stringify({status, taskId, _token: '{{ csrf_token() }}'})
            });
            result = await rawResult.json();
            if (result.success) {
                alert('Tarefa atualizada com sucesso!');
                location.reload();
            } else {
                element.checked = !status;
            }
        }

        function changeTaskStatusFilter(e)
        {
            if(e.value == 'pending') {
                showAllTasks();
                document.querySelectorAll('.done').forEach(function(element) {
                    element.style.display = 'none';
                });
            } else if (e.value == 'done') {
                showAllTasks()
                document.querySelectorAll('.pending').forEach(function(element) {
                    element.style.display = 'none';
                });
            } else {
                showAllTasks();
            }
        }

        function showAllTasks()
        {
            document.querySelectorAll('.task').forEach(function(element) {
                    element.style.display = 'flex';
                });
        }
    </script>
</x-layout>
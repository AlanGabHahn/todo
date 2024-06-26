<x-layout page="App Todo: Editar tarefa">
    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>
    <section id="task-section">

        <h1>Editar tarefa</h1>

        <form method="POST" action="{{ route('task.update') }}">
            @csrf

            <input type="hidden" name="id" value="{{ $task->id }}" />
            <x-form.checkbox_input
                name="is_done"
                label="Tarefa realizada?"
                checked="{{ $task->is_done }}"
            />
            <x-form.text_input
                name="title"
                label="Título da task"
                required="required"
                placeholder="Digite o título da tarefa:"
                value="{{ $task->title }}"
            />
            <x-form.text_input
                type="datetime-local"
                name="due_date"
                label="Data de realização:"
                required="required"
                value="{{ $task->due_date }}"
            />
            <x-form.select_input name="category_id" label="Categoria:" required="required">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}"
                       @if ($category->id  == $task->category_id)
                           selected
                       @endif
                        >{{ $category->title }}</option>
                @endforeach
            </x-form.select_input>
            <x-form.textarea
                name="description"
                label="Descrição da tarefa:"
                placeholder="Digite uma descrição para sua tarefa"
                value="{{ $task->description }}"
            />
            <x-form.form_button label="Editar tarefa"/>
        </form>
    </section>

</x-layout>
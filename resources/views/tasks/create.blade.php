<x-layout page="App Todo: Criar tarefa">
    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>
    <section id="task-section">

        <h1>Criar tarefa</h1>

        <form method="POST" action="{{ route('task.store') }}">
            @csrf
            <x-form.text_input
                name="title"
                label="Título da task"
                required="required"
                placeholder="Digite o título da tarefa:"
            />
            <x-form.text_input
                type="date"
                name="due_date"
                label="Data de realização:"
                required="required"
            />
            <x-form.select_input name="category_id" label="Categoria:" required="required">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </x-form.select_input>
            <x-form.textarea
                name="description"
                label="Descrição da tarefa:"
                placeholder="Digite uma descrição para sua tarefa"
            />
            <x-form.form_button />
        </form>
    </section>
    
</x-layout>
<x-layout page="App Todo: Criar tarefa">
    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>
    <section id="create-task">
        <h1>Criar tarefa</h1>
        <form action="">
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
            <x-form.select_input name="category" label="Categoria:" required="required">
                <option value="">Teste</option>
            </x-form.select_input>
            <x-form.textarea
                name="description"
                label="Descrição da tarefa:"
                placeholder="Digite uma descrição para sua tarefa"
            />
            <div class="input-area">
                <x-form.button type="reset" class="btn" label="Resetar"/>
                <x-form.button type="submit" class="btn btn-primary" label="Criar tarefa"/>
            </div>
        </form>
    </section>
</x-layout>
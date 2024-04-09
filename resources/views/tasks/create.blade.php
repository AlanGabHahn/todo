<x-layout page="App Todo: Criar tarefa">
    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>
    <section id="create-task">
        <h1>Criar tarefa</h1>
        <form action="">
            <div class="input-area">
                <label for="title">
                    Título da tarefa:
                </label>
                <input type="text" id="title" name="title" placeholder="Digite o título da tarefa" required>
            </div>
            <div class="input-area">
                <label for="title" for="due_date">
                    Data de realização:
                </label>
                <input name="due_date" id="due_date" type="date" placeholder="Digite o título da tarefa" required>
            </div>
            <div class="input-area">
                <label for="category">
                    Categoria:
                </label>
                <select id="category" name="category" required>
                    <option selected disable value="">Selecione a categoria</option>
                </select>
            </div>
            <div class="input-area">
                <label>
                    Descrição da tarefa:
                </label>
                <textarea placeholder="Digite uma descrição para sua tarefa" name="description"></textarea>
            </div>
        </form>
    </section>
</x-layout>
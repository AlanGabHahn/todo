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
                <input type="text" name="title" placeholder="Digite o título da tarefa" required>
            </div>
            <div class="input-area">
                <label for="title">
                    Título da tarefa:
                </label>
                <input type="text" name="title" placeholder="Digite o título da tarefa" required>
            </div>
        </form>
    </section>
</x-layout>
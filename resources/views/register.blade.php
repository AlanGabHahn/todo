<x-layout page="App Todo: Login">
    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>
    <section id="task-section">

        <h1>Registrar-se</h1>

        @if ($errors->any())
            <ul class="alert alert-error">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form method="POST" action="{{ route('register.store') }}">
            @csrf
            <x-form.text_input
                name="name"
                label="Nome"
                required="required"
                placeholder="Seu nome"
            />
            <x-form.text_input
                type="email"
                name="email"
                label="E-mail"
                required="required"
                placeholder="Seu e-mail"
            />
            <x-form.text_input
                type="password"
                name="password"
                label="Senha"
                required="required"
                placeholder="Sua senha"
            />
            <x-form.text_input
                type="password"
                name="password_confirmation"
                label="Confirme sua senha"
                required="required"
                placeholder="Confirme sua senha"
            />
            <x-form.form_button label="Registrar-se"/>
        </form>
    </section>
</x-layout>
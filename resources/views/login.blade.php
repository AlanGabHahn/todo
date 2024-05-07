<x-layout page="App Todo: Login">
    <section id="task-section">

        <h1>Autenticação</h1>

        @if ($errors->any())
            <ul class="alert alert-error">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form method="POST" action="{{ route('login.store') }}">
            @csrf
        
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
          
            <x-form.form_button label="Logar-se"/>
        </form>
    </section>
</x-layout>
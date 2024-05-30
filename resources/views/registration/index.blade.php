<x-layouts.auth>
    <x-slot:title>
        Регистрация аккаунта
    </x-slot:title>
    <x-card>
        <x-card.body>
            <x-form action="{{ route('registration.store') }}" method="POST">
                <x-form.item>
                    <x-form.label>Ваше имя</x-form.label>
                    <x-form.text name="first_name" placeholder="имя" autofocus></x-form.text>
                </x-form.item>
                <x-form.item>
                    <x-form.label>Ваш email</x-form.label>
                    <x-form.text name="email" placeholder="mail@example.com"></x-form.text>
                </x-form.item>
                <x-form.item>
                    <x-form.label>Придумайте пароль</x-form.label>
                    <x-form.text type="password" name="password" placeholder="*******"></x-form.text>
                </x-form.item>
                <x-form.item>
                    <x-form.label>Повторите пароль</x-form.label>
                    <x-form.text type="password" name="password_confirmation" placeholder="*******"></x-form.text>
                </x-form.item>
                <x-form.item>
                    <x-form.check name="agreement">Принимаю пользовательское соглашение</x-form.check>
                </x-form.item>
                <x-button type="submit">Зарегистрироваться</x-button>
            </x-form>
        </x-card.body>
    </x-card>
    <x-slot:crosslink>
        <div class="p-4 text-center text-sm text-gray-500">
            Уже зарегистрированы?
            <x-link href="{{ route('login') }}">
                Войти
            </x-link>
        </div>
    </x-slot:crosslink>
</x-layouts.auth>







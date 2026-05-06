<x-layout>
    <div class="mt-10 text-muted-foreground">
        <div class="grid md:grid-cols-2 gap-6">
            @foreach ($accounts as $account)
                <x-accounts.card href="{{ route('account.show', $account) }}">

                    <div class="mt-2 text-right">
                        <x-accounts.status status="{{ $account->verified }}" type="{{ $account->admin }}" />
                    </div>

                    <h2 class="card-title">{{ $account->name }}</h2>



                    <p>{{ $account->email }}</p>



                </x-accounts.card>
            @endforeach
        </div>
    </div>
</x-layout>

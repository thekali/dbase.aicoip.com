<x-layout>
    @foreach ($accounts as $account)
        <div class="card bg-base-100 w-96 shadow-sm">
            <div class="card-body">
                <h2 class="card-title">{{ $account->name }}</h2>
                <p>{{ $account->email }}</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Edit</button>
                    <button class="btn btn-primary">Delete</button>
                </div>
            </div>
        </div>
    @endforeach
</x-layout>

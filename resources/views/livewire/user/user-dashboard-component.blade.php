
<div class="card my-4">
    <div class="card-body">
        <h1 class="card-title">Welcome, {{ $user->name }}</h1>

        <h2 class="card-subtitle mb-3">User Information:</h2>
        <p class="card-text">Name: {{ $user->name }}</p>
        <p class="card-text">Email: {{ $user->email }}</p>


    </div>
</div>

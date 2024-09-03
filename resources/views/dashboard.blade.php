@foreach ($users as $user)
    <h1> {{ $user['name'] }} </h1>
    <h2> {{ $user['age'] }}</h2>
    @if ($user['age'] < 18)
        <p>User can't drive</p>
    @endif
@endforeach


@copyright {{ date('Y') }}

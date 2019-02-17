@extends('layout.app')
@section('content')
        <div class="jumbotron text-center mt-3">
                <h1>Welcome to my page</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ac mauris neque. Duis vulputate, lorem eu vehicula dapibus, felis metus pulvinar leo, vel varius lectus enim quis felis. Aliquam sed auctor nisi. Phasellus aliquam diam in placerat vestibulum. Suspendisse tincidunt pharetra odio, vel mattis eros placerat a. Proin arcu nunc, ultricies id efficitur at, auctor vel ligula. Curabitur vel hendrerit ipsum, a commodo leo. Ut ultricies vehicula laoreet. Nam aliquam et nibh vel gravida. Aenean elementum lacus eros, vitae finibus odio sollicitudin a. Sed congue ultrices eros, vitae sodales sem hendrerit in. Nullam ultrices ut lectus ut ornare. Mauris accumsan viverra venenatis. Nulla vitae pellentesque metus. Etiam aliquet est id elementum mollis.</p>
                <p><a class="btn btn-outline-primary btn-lg" href="{{ route('login') }}" role="button">Login</a>   <a class="btn btn-outline-success btn-lg" href="{{ route('register') }}" role="button">Register</a></p>
        </div>
@endsection

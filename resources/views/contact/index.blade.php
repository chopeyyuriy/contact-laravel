@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">Feedback form</div>

                    <div class="card-body">
                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">First Name</label>
                                <input type="text" name="first_name"
                                       class="form-control @error('first_name') is_invalid @enderror"
                                       id="exampleInputFirstName" aria-describedby="emailHelp"
                                       placeholder="Enter First Name" value="{{ old('first_name') }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Last Name</label>
                                <input type="text" name="last_name"
                                       class="form-control @error('last_name') is_invalid @enderror"
                                       id="exampleInputLastName" aria-describedby="emailHelp"
                                       placeholder="Enter Last Name" value="{{ old('last_name') }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email"
                                       class="form-control @error('email') is_invalid @enderror" id="exampleInputEmail1"
                                       aria-describedby="emailHelp" placeholder="Enter email" value="{{ old('email') }}"
                                       required>
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                    anyone else.
                                </small>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="card w-50 mt-5 mx-auto">
            <div class="card-header bg-danger">
                <span class="float-left text-light mt-2">Your Profile</span>
                <div class="float-right">
                    <a href="{{ route('userprofile',[ 'id' => $user->id ] ) }}" class="btn btn-light">Visit my profile</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('uploadprofile',[ 'id' => Auth::user()->id ]) }}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-control mt-3" value="{{ $user->name }}">
                        @if($errors->has('name'))
                            <span class="help-block text-danger">
                                <strong>
                                    {{ $errors->first('name')}}
                                </strong>
                            </span>
                        @endif    
                        
                        @if ($user->phone == null)
                            <input type="number" name="phone" class="form-control mt-3" placeholder="Phone number">
                        @else
                            <input type="number" name="phone" class="form-control mt-3" value="{{ $user->phone }}">
                        @endif
                        @if($errors->has('phone'))
                            <span class="help-block text-danger">
                                <strong>
                                    {{ $errors->first('phone')}}
                                </strong>
                            </span>
                        @endif    
                        
                        @if ($user->description == null)
                            <textarea class="form-control mt-3" name="description" placeholder="Description"></textarea>
                        @else
                            <textarea class="form-control mt-3" name="description">{{ $user->description }}</textarea>
                        @endif
                        @if($errors->has('description'))
                            <span class="help-block text-danger">
                                <strong>
                                    {{ $errors->first('description')}}
                                </strong>
                            </span>
                        @endif    
                        
                        <input type="email" name="email" class="form-control mt-3" value="{{ $user->email }}">
                        @if($errors->has('email'))
                            <span class="help-block text-danger">
                                <strong>
                                    {{ $errors->first('email')}}
                                </strong>
                            </span>
                        @endif              
                        
                        <input type="password" name="password" class="form-control mt-3" placeholder="New Password">
                            @if($errors->has('password'))
                                <span class="help-block text-danger">
                                    <strong>
                                        {{ $errors->first('password')}}
                                    </strong>
                                </span>
                            @endif              
                        
                        <input type="password" name="password_confirmation" class="form-control mt-3" placeholder="Confirm Password">
                        
                        <input type="submit" name="" class="btn btn-danger form-control mt-3" value="Save">
                    </div>
                </form>                  
            </div>
        </div>
    </div>

@endsection
@extends('layouts.default')

@section('title', '注册')

@section('content')
    <div class="offset-md-2 col-md-8">
        <div class="card">
            <div class="card-header">
                <h5>注册</h5>
            </div>
            <div class="card-body">
                <form action="{{route('users.store')}}" method="POST" accept-charset="utf-8">
                    {{ csrf_field()  }}
                    <div class="form-group">
                        <label for="name">名称: </label>
                        <input type="text" name="name" class="form-control" value="{{ old('name')}}">
                    </div>

                    <div class="form-group">
                        <label for="email">邮箱: </label>

                        <input type="text" name="email" value="{{ old('email')}}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="password">密码:</label>
                        <input type="text" name="password" value="{{ old('password')}}" class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="password_confirmation">确认密码:</label>
                        <input type="text" name="password_confirmation" value="{{ old('password_confirmation')}}"  class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">注册</button>

                </form>
            </div>
        </div>
    </div>
@stop

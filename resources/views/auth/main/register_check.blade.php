@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">本会員登録確認</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register.main.registered') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">名前</label>
                            <div class="col-md-6">
                                <span class="">{{$user->name}}</span>
                                <input type="hidden" name="email" value="{{$user->name}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name_pronunciation" class="col-md-4 col-form-label text-md-right">フリガナ</label>
                            <div class="col-md-6">
                                <span class="">{{$user->name_pronunciation}}</span>
                                <input type="hidden" name="name_pronunciation" value="{{$user->name_pronunciation}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birth" class="col-md-4 col-form-label text-md-right">生年月日</label>
                            <div class="col-md-6">
                                <span class="">{{$user->birth_year}}年</span>
                                <input type="hidden" name="birth_year" value="{{$user->birth_year}}">
                                <span class="">{{$user->birth_month}}月</span>
                                <input type="hidden" name="birth_month" value="{{$user->birth_month}}">
                                <span class="">{{$user->birth_day}}日</span>
                                <input type="hidden" name="birth_day" value="{{$user->birth_day}}">
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    本登録
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

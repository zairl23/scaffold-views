@extends('layouts.scaffold')

@section('main')

<h1>创建</h1>

{{ Form::open(array('route' => 'users.store')) }}
	<ul>
        <li>
            {{ Form::label('nickname', '用户名:必填') }}
            {{ Form::text('nickname') }}
        </li>

        <li>
            {{ Form::label('email', '邮箱:必填') }}
            {{ Form::text('email') }}
        </li>

        <li>
            {{ Form::label('phone', '手机号码:选填') }}
            {{ Form::text('phone') }}
        </li>

        <li>
            {{ Form::label('avatar', '头像:') }}
            {{ Form::text('avatar') }}
        </li>

        <li>
            {{ Form::label('password', '密码:至少6位数字或字母的组合') }}
            {{ Form::password('password') }}
        </li>

        <li>{{ Form::label('password_confirmation', '密码确认') }}
            {{ Form::password('password_confirmation') }}
        </li>

		<li>
			{{ Form::submit('创建', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop



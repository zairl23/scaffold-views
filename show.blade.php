@extends('person::layouts.scaffold')

@section('main')

<h1>查看用户</h1>

<p>{{ link_to_route('users.index', '用户列表') }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Field-1</th>
				<th>Field-2</th>
				<th>Field-3</th>
				<th>Field-4</th>
				<th>Field-5</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $user->nickname }}}</td>
					<td>{{{ $user->email }}}</td>
					<td>{{{ $user->phone }}}</td>
					<td>{{{ $user->avatar }}}</td>
					<td>{{{ $user->password }}}</td>
                    <td>{{-- link_to_route('users.edit', 'Edit', array($user->id), array('class' => 'btn btn-info')) --}}</td>
                    <td>
                        {{-- Form::open(array('method' => 'DELETE', 'route' => array('users.destroy', $user->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() --}}
                    </td>
		</tr>
	</tbody>

</table>



@stop

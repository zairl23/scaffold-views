@extends('layouts.scaffold')

@section('main')

<h1></h1>

<p>{{ link_to_route('*.create', '创建') }}</p>

@if ($topics->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>名称</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($topics as $topic)
				<tr>
					<td><a href='{{ URL::route('manage.topics.show', $topic->id) }}'>{{ $topic->name }}</a></td>
                    <td>{{ link_to_route('manage.topics.edit', '编辑', array($topic->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('manage.topics.destroy', $topic->id))) }}
                            {{ Form::submit('删除', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no topics
@endif

@stop

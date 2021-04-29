<x-app-layout>
	<x-slot name="title">Activity Log</x-slot>

	<x-card>
		<x-slot name="title">All Activity Log</x-slot>

		<table class="table table-bordered">
			<thead>
				<th>Description</th>
				<th>Properties</th>
				<th>Date</th>
			</thead>
			<tbody>
				@forelse($logs as $log)
				<tr>
					<td>{{ $log->description }}</td>
					<td>
						@forelse($log->properties["attributes"] as $key => $value)
						<ul>
							<li><b>{{ $key }}</b>: {{ $value }}</li>
						</ul>
						@empty
						empty
						@endforelse
					</td>
					<td>{{ $log->created_at->format('d-M-Y H:m:s') }}</td>
				</tr>
				@empty
				<tr>
					<td colspan="3" class="text-center">Nothing Logs</td>
				</tr>
				@endforelse
			</tbody>
		</table>
	</x-card>
</x-app-layout>
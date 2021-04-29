<x-app-layout>
	<x-slot name="title">
		Settings
	</x-slot>

	<form action=" {{ route('settings') }}" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="row">
			<!-- general settings -->
			<div class="col-md-6">
				<x-card>
					<x-slot name="title">General</x-slot>

					<img src="{{ (setting('logo')) ? '/storage/'.setting('logo') : '/dist/img/logo/logo2.png' }}" class="img-fluid mb-3" width="150" alt="">

					<x-input text="File Logo" name="logo" type="file" />

					<x-input text="URL Website" name="url" type="text" value="{{ setting('url') }}" />
				</x-card>
			</div>
			<!-- SEO settings -->
			<div class="col-md-6">
				<x-card>
					<x-slot name="title">SEO</x-slot>

					<x-input text="Site Name" name="site_name" type="text" value="{{ setting('site_name') }}" />

					<x-input text="Keyword" name="keyword" type="text" value="{{ setting('keyword') }}" />

					<x-textarea text="Description" name="description" rows="4" value="{{ setting('description') }}" />
				</x-card>
			</div>
		</div>
		<div class="row">
			<div class="col text-center">
				<x-button type="success" text="Save settings" />
			</div>
		</div>
	</form>
	
</x-app-layout>
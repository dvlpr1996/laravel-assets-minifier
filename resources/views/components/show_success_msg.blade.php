@if (session('success'))
		<div class="my-3 w-full rounded-lg bg-green-200 p-3 text-base font-bold text-green-700">
				<p class="my-1 inline-flex items-center">
						{{ $message }}
				</p>
		</div>
@endif

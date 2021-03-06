@if (session('success'))
		<div class="my-3 w-full rounded-lg bg-green-200 p-3 text-base font-bold text-green-700">
				<p class="my-1 text-left">
						{{ session('success') }}
				</p>
		</div>
@endif


@if (session('error'))
		<div class="my-3 w-full rounded-lg bg-red-200 p-3 text-base font-bold text-red-700">
				<p class="my-1 text-left">
						{{ session('error') }}
				</p>
		</div>
@endif

@if ($errors->any())
		<div class="my-3 w-full rounded-lg bg-red-200 p-3 text-base font-bold text-red-700">
				<ul class="flex flex-col justify-start">
						@foreach ($errors->all() as $error)
								<li class="my-1 inline-flex items-center">
										<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times-circle"
												class="mr-2 h-4 w-4 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
												<path fill="currentColor"
														d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z">
												</path>
										</svg>
										{{ $error }}
								</li>
						@endforeach
				</ul>
		</div>
@endif

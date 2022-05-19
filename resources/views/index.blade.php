<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<meta name="designer" content="Nima jahan bakhshian">
<meta name="owner" content="Nima jahan bakhshian">
<meta name="author" content="Nima jahan bakhshian">
<meta name="language" content="en">
<meta name="robots" content="index, follow">
<meta charset="UTF-8">
<meta name="keywords" content="laravel , minifier , php , web design">
<meta name="description" content="compress images and minify css, js  and html files">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="icon" type="image/png" sizes="16x16" href="{{ url('img/icon.ico') }}">
<meta name="theme-color" content="#2F80ECff">
<meta name="msapplication-navbutton-color" content="#2F80ECff">
<meta name="apple-mobile-web-app-status-bar-style" content="#2F80ECff">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<!-- [if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<![endif] -->

<body class="bg-primary xs:py-0 px-4 py-4 font-['Open_Sans'] capitalize">
		<main class="xs:h-screen flex h-auto items-center justify-center">
				<div class="w-[500px] rounded-xl bg-white p-5 text-center">

						<div class="space-y-3 text-center">
								<h1 class="text-4xl">file minifier</h1>
								<p class="mx-auto w-full text-lg sm:w-3/4">
										upload your images to compress them or upload css js files to minify
										them
								</p>
						</div>

						<x-show_errors></x-show_errors>

						<div class="my-6 mx-auto">
								<div class="uploader">
										<form action="{{ route('upload') }}" method="POST" id="uploader" enctype="multipart/form-data"
												class="flex h-full flex-col items-center justify-center gap-5">
												@csrf
												<i id="icon" class="fa fa-upload text-5xl"></i>
												<input type="file" name="files[]" id="file-input"
														class="absolute top-0 left-0 m-0 h-full w-full cursor-pointer p-0 opacity-0 outline-0" multiple>

												<div class="select-none">
														<h3>Drag and drop your files or click here</h3>
												</div>

										</form>
								</div>

								<button type="submit" name="upload" class="btn" form="uploader">upload</button>
						</div>

						@if (false)
								<x-show_file_info></x-show_file_info>
						@endif

				</div>
		</main>

		<script src="{{ asset('js/app.js') }}"></script>
		<noscript>your browser does not support the javascript</noscript>
</body>

</html>

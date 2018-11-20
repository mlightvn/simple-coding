@php
$header_params = [
	"title"         => $title,
	"css"           => "landing_page/index",
];
@endphp

@include{("_include/header", $header_params)}

	<div class="jumbotron hero">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-pull-3 get-it">
					<h1><img src="/img/logo.png" alt="{{$title}}" width="40px"> Simple Coding</h1>
					<p>Write single PHP page with simple code</p>
					<p>
						<a class="btn btn-primary btn-lg" role="button" href="/documents/"><i class="fas fa-book-dead"></i> Documents</a>
						@if{(ENVIRONMENT !== 'production')}
						<a class="btn btn-primary btn-lg" role="button" href="/demo/"><i class="fas fa-eye"></i> Demo</a>
						@endif
						<a class="btn btn-success btn-lg" role="button" href="https://github.com/namtenten/simple-coding" target="_blank"><i class="fab fa-github"></i> GitHub<a>
					</p>
				</div>
				<div class="col-md-12 col-md-push-9 phone-preview" style="color: #ffffff;">
					<div class="col-md-12">
						<h3>Sample</h3>
					</div>
					<div class="col-md-12">
							<pre class="border border-primary p-2 text-white">include_once("../Raku/config/bootstrap.php");

$raku = new \Raku\SimpleCoding\SimpleCoding();

$title = "Simple Coding";

$data = ["title" => $title];

$raku->view('template_file_name', $data);</pre>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section class="testimonials"></section>
	<section class="features">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<h2>Fantastic Features</h2>
					<p>This package helps website developers write codes simpler. </p>
				</div>
				<div class="col-md-7">
					<div class="row icon-features">
						<div class="col-md-4 icon-feature"><i class="fas fa-smile-beam"></i>
							<p>Simple coding </p>
						</div>
						<div class="col-md-4 icon-feature"><i class="fas fa-clock"></i>
							<p>Saves Your Time</p>
						</div>
						<div class="col-md-4 icon-feature"><i class="fas fa-cogs"></i>
							<p>Many built-in functions</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<h5>Simple Coding © 2018</h5>
				</div>
				{{--
				<div class="col-sm-6 social-icons">
					<a href="#"><i class="fab fa-github"></i></a>
				</div>
					--}}
	</footer>

@include{("_include/footer")}

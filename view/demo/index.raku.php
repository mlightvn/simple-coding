@php
$include_param = [
	"title" 	=> $title,
];

@endphp

@include{("_include/header", $include_param)}

	<h1>{{$title}}</h1>
	<ul>
		<li><a href="/demo/select-box.php">Select box</a></li>
		<li><a href="/demo/japanese.php">Japanese</a></li>
	</ul>

@include{("_include/footer")}

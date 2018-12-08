@php
$include_param = [
	"title" 	=> $title,
];

@endphp

@include{("_include/header", $include_param)}

	<h1>{{$title}}</h1>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Key</th>
				<th>Value</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Select</td>
				<td>
					<input id="westernYear" list="years" tepe="text" class="form-control" pattern="\d{8}">
					@assign{(
						$currentYear,
						date('Y')
					)}
					<datalist id="years">
						@for{($i = $currentYear; $i >= 1970; $i--)}
						<option value="{{$i}}0524">{{toJpNengoDateTime($i . '0524')}} ({{$i}})年</option>
						@endfor
					</datalist>

					<input id="eraYear" class="form-control">

				</td>
			</tr>
		</tbody>
	</table>

	<script src="/js/demo/select-box.js"></script>

@include{("_include/footer")}

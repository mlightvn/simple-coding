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
				<th>INPUT</th>
				<th>OUTPUT</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					@php
					$japanese = 'あ・ナムテスト・モダール・ギャラリー・氏名：無し 孫';
					@endphp
					{{$japanese}}
				</td>
				<td>
					@php
					$phonetic = mb_convert_kana($japanese,"rKVHc","UTF-8");
					echo $phonetic;
					@endphp
				</td>
			</tr>
		</tbody>
	</table>

	<script src="/js/demo/select-box.js"></script>

@include{("_include/footer")}

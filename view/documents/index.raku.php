@php
$include_param = [
	"title" 	=> $title,
	"css" 		=> "documents/index",
];

@endphp

@include{("_include/header", $include_param)}

	<h1>{{$title}}</h1>

	<h2>Introduction</h2>
	<h3>Folders structure</h3>
	<div class="border border-primary">
		<pre>
			<table class="table-hover">
				<tr>
					<td>SimpleCode</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|----config</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;|----domain</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;|----default.php</td>
					<td></td>
					<td>This file use to config for production</td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;|----simple-code.raku.com.php</td>
					<td></td>
					<td>&lt;= Your custom domain file ("simple-code.raku.com"). This could be dev or staging domain. You can also overwrite production configuration by creating file name same as production domain.</td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;|----simple-code2.raku.com.php</td>
					<td></td>
					<td>&lt;= Your custom domain file ("simple-code2.raku.com")</td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;|----simple-code3.raku.com.php</td>
					<td></td>
					<td>&lt;= Your custom domain file ("*.raku.com")</td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;|</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;|----constants.php</td>
					<td></td>
					<td>&lt;= Add your custom constants here. Then you can use every where.</td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;|----functions.php</td>
					<td></td>
					<td>&lt;= Add your custom functions here. Then you can use every where.</td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|----Raku</td>
					<td></td>
					<td>&lt;= Simple Coding package is here. You should not change any in here. You can configure in your "/config/domain/(*).php" (your domain php file)</td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|----storage</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;|----cached</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;|----compiled</td>
					<td></td>
					<td>&lt;= Compiled files stay here.</td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;|----log</td>
					<td></td>
					<td>&lt;= Logged files stay here.</td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;|----tmp</td>
					<td></td>
					<td>&lt;= Temporary files stay here.</td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|----controller</td>
					<td></td>
					<td>&lt;= This folder is for controlling program. It is the Controller in VMC model. You can change to another folder in "/config/domain/*.php" by `define("CONTROLLER_DIR", "/your/new/controller/path/");`. (Must have this "/" character at the end)</td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;|----index.php</td>
					<td></td>
					<td>&lt;= Default index file</td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;|</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;|----js</td>
					<td>(Optional)</td>
					<td>&lt;= JavaScript folder.</td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;|----css</td>
					<td>(Optional)</td>
					<td>&lt;= CSS folder.</td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|----view</td>
					<td></td>
					<td>&lt;= This folder is for keeping view/template code. It is the View in MVC model. (See in documents for more details). You can change to another folder in "/config/domain/*.php" by `define("VIEW_DIR", "/your/new/view/path/");`. (Must have this "/" character at the end)</td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;|----index.raku.php</td>
					<td></td>
					<td>&lt;= Default template file of `/view/index.php` file</td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|</td>
					<td></td>
					<td></td>
				</tr>

				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|----shortcode</td>
					<td>(Optional)</td>
					<td>&lt;= Component folder, or any custom php code here</td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;|----sample.php</td>
					<td>(Optional)</td>
					<td></td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|</td>
					<td></td>
					<td></td>
				</tr>
			</table>
		</pre>

	</div>
	<br>
	@hrGreen

	<h2>Installation</h2>
	<p>
		<h3>"Raku" folder</h3>
		<ul>
			<li>Copy <strong>Raku</strong> folder into your project folder.</li>
			<li>Create folders structure like above (Introduction part).</li>
			<li>Copy `simple-coding.nam.php.php` and rename to your domain_name and extension is "php".</li>
		</ul>
	</p>
	<p>
		<h3>Folder permission</h3>
		<br>
		Change permission for `<strong>storage</strong>` folder to be <strong>writable</strong>. Especially folder `<strong>storage/compiled</strong>`.
		<br>
		CentOS/Linux
		<br>
		<code>chmod -R 777 storage</code>
	</p>

	<p>
		<h3>Apache configuration</h3>
		<br>
		<pre class="border border-primary">
&lt;VirtualHost *:80&gt;
    ServerName "simple-coding.raku.nam"
    DocumentRoot "/var/www/vhosts/raku/simple-coding/controller/"
    ErrorLog logs/simple-coding.error.log
    CustomLog logs/simple-coding.access.log combined env=!no_log

    &lt;Directory "/var/www/vhosts/raku/simple-coding/"&gt;
	DirectoryIndex index.php index.html
	Options FollowSymLinks
        AllowOverride All
        Require all granted
    &lt;/Directory&gt;

&lt;/VirtualHost&gt;
		</pre>
		Then restart/reload apache<br>
		<code>
			systemctl restart httpd
		</code>
	</p>

	<br>
	@hrGreen
	<br>

	<p>
		<h3>Sample code for controller</h3>
		Example: controller/index.php
		<br>
		<pre class="border border-primary">include_once("../Raku/config/bootstrap.php");

$raku = new \Raku\SimpleCoding\SimpleCoding();

$title = "Simple Coding";

$data = ["title" => $title];

$raku->view('index', $data); // &lt= Do not put extension (".php", or ".raku.php") in template file name.
</pre>
	</p>

	<br>
	@hrGreen
	<br>

	<h2>Sample code for view</h2>
	<br>
	Example: view/index.raku.php
	<br>
	<table class="table table-bordered table-striped table-hover table-condensed ">
		<thead>
			<tr class="">
				<th>Item</th>
				<th>Code</th>
				<th>Value/Output</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>ENVIRONMENT</td>
				<td>
					<code>
						@{{ ENVIRONMENT }}
					</code>
				</td>
				<td>
					{{ ENVIRONMENT }}
				</td>
			</tr>
			<tr>
				<td>DEBUG_MODE</td>
				<td>
					<code>
						@{{ DEBUG_MODE }}
					</code>
				</td>
				<td>
					{{ DEBUG_MODE }}
				</td>
			</tr>
			<tr>
				<td>AUTO_CLEAR_CACHED
					<br>
					(1: true, 0: false)
					<br>
					<i>You can configure in `config/domain/*.php`</i>
				</td>
				<td>
					<code>
						@{{ AUTO_CLEAR_CACHED }}
					</code>
				</td>
				<td>
					{{ AUTO_CLEAR_CACHED }}
				</td>
			</tr>
			<tr>
				<td>VIEW_DIR
					<br>
					<i>You can configure in `config/domain/*.php`</i>
				</td>
				<td>
					<code>
						@{{ VIEW_DIR }}
					</code>
				</td>
				<td>
					{{ VIEW_DIR }}
				</td>
			</tr>

			<tr>
				<td>Output (convert html tag)</td>
				<td>
					<code>
						@{{$link1}}
					</code>
				</td>
				<td>
					{{$link1}}
				</td>
			</tr>
			<tr>
				<td>Output</td>
				<td>
					<code>
						@{!!$link1!!}
					</code>
				</td>
				<td>
					{!!$link1!!}
				</td>
			</tr>
			<tr>
				<td>Paragraph</td>
				<td>
					<code>
						@{{$p1}}
					</code>
				</td>
				<td>
					{{$p1}}
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<code>
						@{!!$p1!!}
					</code>
				</td>
				<td>
					{!!$p1!!}
				</td>
			</tr>

			<tr>
				<td></td>
				<td>
					<code>
						@{{$p2}}
					</code>
				</td>
				<td>
					{{$p2}}
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<code>
						@{!!$p2!!}
					</code>
				</td>
				<td>
					{!!$p2!!}
				</td>
			</tr>

			<tr>
				<td>Comment code</td>
				<td>
					<code>
						@{{--$title--}}
					</code>
				</td>
				<td>
					{{--$title--}}
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<code>
@{{--<br>
		&lt;ul&gt;<br>
		@@foreach{($arr as $key => $value)}<br>
			&lt;li&gt;@{{$key}} / @{{$value}}&lt;/li&gt;<br>
		@@endforeach<br>
		&lt;/ul&gt;<br>
	--}}
					</code>
				</td>
				<td>
{{--
		<ul>
		@foreach{($arr as $key => $value)}
			<li>{{$key}} / {{$value}}</li>
		@endforeach
		</ul>
	--}}
				</td>
			</tr>

			<tr>
				<td>hr</td>
				<td>
					<code>
						@@hr{(&quot;red&quot;)}<br>
						@@hrRed<br>
						@@hr{('#339900')}<br>
						@@hrGreen<br>
						@@hr{('#007bff')}<br>
						@@hrBlue<br>
						@@hrYellow<br>
						@@hr{('#9900ff')}<br>
						@@hrPurple<br>
						@@hr<br>
						@@hrWhite<br>
						&lt;b&gt;Escape ↓&lt;/b&gt;<br>
						@@@hr{(&quot;red&quot;)}<br>
						@@@@hr{('#339900')}<br>
						@@@hr
					</code>
				</td>
				<td>
						@hr{("red")}
						@hrRed
						@hr{('#339900')}
						@hrGreen
						@hr{('#007bff')}
						@hrBlue
						@hrYellow
						@hr{('#9900ff')}
						@hrPurple
						@hr
						@hrWhite
						<b>Escape ↓</b><br>
						@@hr{("red")}<br>
						@@hr{('#339900')}<br>
						@@hr

				</td>
			</tr>
			<tr>
				<td>LINK/html tag</td>
				<td>
					<code>
@{{$link1}}<br>
@{!!$link1!!}<br>
@@if{(isset($link2))}<br>
@{{$link2}}<br>
@@else<br>
&lt;i&gt;$link2 was not defined.&lt;/i&gt;<br>
@@endif
<br>
@{{isset($link2) ? $link2 : 'Undefined...'}}
					</code>
				</td>
				<td>
{{$link1}}<br>
{!!$link1!!}<br>
@if{(isset($link2))}
{{$link2}}
@else
<i>$link2 was not defined.</i>
@endif
<br>
{{isset($link2) ? $link2 : 'Undefined...'}}

				</td>
			</tr>


			<tr>
				<td>Foreach</td>
				<td>
					<code>
						&lt;ul&gt;
						<br>
						@@foreach{($arr as $key => $value)}<br>
							@@if{(is_string($value))}<br>
							&lt;li&gt;@{{$key}} / @{{$value}}&lt;/li&gt;<br>
							@@endif<br>
						@@endforeach<br>
						&lt;/ul&gt;
					</code>
				</td>
				<td>
					<ul>
					@foreach{($arr as $key => $value)}
						@if{(is_string($value))}
							<li>{{$key}} / {{$value}}</li>
						@endif
					@endforeach
					</ul>
				</td>
			</tr>

			<tr>
				<td>Array</td>
				<td>
					<code>
						@@if{(is_string($arr))}<br>
							@{{$arr}}<br>
						@@elseif{(is_array($arr))}<br>
							&lt;i&gt;This is an array&lt;/i&gt;<br>
						@@endif
					</code>
				</td>
				<td>
					@if{(is_string($arr))}
						{{$arr}}
					@elseif{(is_array($arr))}
						<i>This is an array</i>
					@endif
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<code>@{{ d($arr) }}</code>
				</td>
				<td>
					{{ d($arr) }}
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<code>@@d{($arr)}</code>
				</td>
				<td>
					@d{($arr)}
				</td>
			</tr>

			<tr>
				<td>IF ELSE</td>
				<td>
					<code>
						@@if{((true) || (true))}<br>
						-&gt; This is TRUE;<br>
						@@endif
					</code>
				</td>
				<td>
					@if{((true) || (true))}
					-&gt; This is TRUE;
					@endif
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<code>
	@@if{((false) || (false))}<br>
	-&gt; This is FALSE (NO output);<br>
	@@elseif{((true) || (true))}<br>
	-&gt; else if TRUE<br>
	@@endif
					</code>
				</td>
				<td>
	@if{((false) || (false))}
	-&gt; This is FALSE (NO output);
	@elseif{((true) || (true))}
	-&gt; else if TRUE
	@endif
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<code>
	@@if{(false)}<br>
	-&gt; This is FALSE (NO output);<br>
	@@else<br>
	-&gt; else TRUE<br>
	@@endif
					</code>
				</td>
				<td>
	@if{(false)}
	-&gt; This is FALSE (NO output);
	@else
	-&gt; else TRUE
	@endif
				</td>
			</tr>

			<tr>
				<td>Include other views (raku file)</td>
				<td>
					<code>@@include{('documents/test1')}</code>
				</td>
				<td>
					@include{('documents/test1')}
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<code>@@d{($json_string)}&lt;br&gt;&lt;br&gt;<br>
					@@include{(<br>
					&nbsp;&nbsp;&nbsp;&nbsp;'sub1/test1', [<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"json_string" 		=> $json_string,<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"line2" 			=> "Line 2",<br>
					&nbsp;&nbsp;&nbsp;&nbsp;])}</code>
				</td>
				<td>
					@d{($json_string)}<br><br>
					@include{('sub1/test1', [
							"json_string" 		=> $json_string,
							"line2" 			=> "Line 2",
					])}
				</td>
			</tr>

			<tr>
				<td>ShortCode</td>
				<td>
					<code>@@shortcode{('sample')}</code>
				</td>
				<td>
					@shortcode{('sample')}
				</td>
			</tr>

			<tr>
				<td>@@php</td>
				<td>
					<code>@@php echo "this is @@@php tag"; @@endphp</code>
				</td>
				<td>
					@php echo "this is @@php tag"; @endphp
				</td>
			</tr>
			<tr>
				<td>@assign</td>
				<td>
					<code>@@assign{($assign, "Hello")}
						<br>
						@{{$assign}}
					</code>
				</td>
				<td>
					@assign{($assign, "Hello")}
					{{$assign}}
				</td>
			</tr>
			<tr>
				<td>js test</td>
				<td>
					<code>
						&ltscript src="/js/index.js"&gt;&lt/script&gt;
						<br><br>

						&lt;button type="button" id="btnJsTest" class="btn btn-dark"&gt;Toggle&lt;/button&gt;
						&nbsp;&nbsp;<br>
						&lt;span id="spanJsTest"&gt;JS Test&lt;/span&gt;

					</code>
				</td>
				<td>
					<button type="button" id="btnJsTest" class="btn btn-dark">Toggle</button>
					&nbsp;&nbsp;
					<span id="spanJsTest">JS Test</span>
				</td>
			</tr>
			<tr>
				<td>CSS test</td>
				<td>
					<code>
						&lt;link rel="stylesheet" href="/css/documents/index.css"&gt;
						<br><br>
						&lt;button type="button" class="sample-button"&gt;CSS button&lt;/button&gt;
					</code>
				</td>
				<td>
					<button type="button" class="sample-button">CSS button</button>
				</td>
			</tr>
			<tr>
				<td>Image</td>
				<td>
					<code>

						&lt;img src="/img/logo.png" alt="@{{$title}}"&gt;
					</code>
				</td>
				<td>
					<img src="/img/logo.png" alt="{{$title}}">
				</td>
			</tr>
		</tbody>
	</table>

	<script src="/js/index.js"></script>

@include{("_include/footer")}

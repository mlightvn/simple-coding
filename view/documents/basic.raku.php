@include{("_include/header", $include_param = [
	"title" 	=> $title,
	"css" 		=> "documents/styles",
])}

<div id="main" class="fix-sidebar">
  <div class="sidebar">
  <div class="sidebar-inner">
    <ul class="main-menu">
      <li>
  <form id="search-form">
    <span class="algolia-autocomplete" style="position: relative; display: inline-block; direction: ltr;"><input type="text" id="search-query-sidebar" class="search-query st-default-search-input aa-input" autocomplete="off" spellcheck="false" role="combobox" aria-autocomplete="list" aria-expanded="false" aria-owns="algolia-autocomplete-listbox-2" dir="auto" style="position: relative; vertical-align: top;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: Arial; font-size: 13.3333px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: normal; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><span class="aa-dropdown-menu" role="listbox" id="algolia-autocomplete-listbox-2" style="position: absolute; top: 100%; z-index: 100; display: none; left: 0px; right: auto;"><div class="aa-dataset-3"></div></span></span>
  </form>
</li>
<li class="nav-dropdown-container learn">
  <a class="nav-link current">Learn</a><span class="arrow"></span>
  <ul class="nav-dropdown">
    <li><ul>
      <li><a href="/v2/guide/" class="nav-link current">Guide</a></li>
      <li><a href="/v2/api/" class="nav-link">API</a></li>
      <li><a href="/v2/style-guide/" class="nav-link">Style Guide</a></li>
      <li><a href="/v2/examples/" class="nav-link">Examples</a></li>
      <li><a href="/v2/cookbook/" class="nav-link">Cookbook</a></li>
    </ul></li>
  </ul>
</li>

<li class="nav-dropdown-container ecosystem">
  <a class="nav-link">Ecosystem</a><span class="arrow"></span>
  <ul class="nav-dropdown">
    <li><h4>Help</h4></li>
    <li><ul>
      <li><a href="https://forum.vuejs.org/" class="nav-link" target="_blank">Forum</a></li>
      <li><a href="https://chat.vuejs.org/" class="nav-link" target="_blank">Chat</a></li>
      <li><a href="https://www.vuemeetups.org/" class="nav-link" target="_blank">Meetups</a></li>
    </ul></li>
    <li><h4>Tooling</h4></li>
    <li>
      <ul>
        <li><a href="https://github.com/vuejs/vue-devtools" class="nav-link" target="_blank">Devtools</a></li>
        <li><a href="https://cli.vuejs.org/" class="nav-link" target="_blank">Vue CLI</a></li>
        <li><a href="https://vue-loader.vuejs.org" class="nav-link" target="_blank">Vue Loader</a></li>
      </ul>
    </li>
    <li><h4>Core Libraries</h4></li>
    <li><ul>
      <li><a href="https://router.vuejs.org/" class="nav-link" target="_blank">Vue Router</a></li>
      <li><a href="https://vuex.vuejs.org/" class="nav-link" target="_blank">Vuex</a></li>
      <li><a href="https://ssr.vuejs.org/" class="nav-link" target="_blank">Vue Server Renderer</a></li>
    </ul></li>
    <li><h4>News</h4></li>
    <li><ul>
      <li><a href="https://news.vuejs.org" class="nav-link" target="_blank">Weekly News</a></li>
      <li><a href="https://github.com/vuejs/roadmap" class="nav-link" target="_blank">Roadmap</a></li>
      <li><a href="https://twitter.com/vuejs" class="nav-link" target="_blank">Twitter</a></li>
      <li><a href="https://medium.com/the-vue-point" class="nav-link" target="_blank">Blog</a></li>
      <li><a href="https://vuejobs.com/?ref=vuejs" class="nav-link" target="_blank">Jobs</a></li>
    </ul></li>
    <li><h4>Resource Lists</h4></li>
    <li><ul>
      <li><a href="https://github.com/vuejs" class="nav-link" target="_blank">Official Repos</a></li>
      <li><a href="https://curated.vuejs.org/" class="nav-link" target="_blank">Vue Curated</a></li>
      <li><a href="https://github.com/vuejs/awesome-vue" class="nav-link" target="_blank">Awesome Vue</a></li>
    </ul></li>
  </ul>
</li>

<li>
  <a href="/v2/guide/team.html" class="nav-link team">Team</a>
</li>
<li class="nav-dropdown-container support-vue">
  <a href="/support-vuejs/" class="nav-link">Support Vue</a><span class="arrow"></span>
  <ul class="nav-dropdown">
    <li><ul>
      <li><a href="/support-vuejs/#One-time-Donations" class="nav-link">One-time Donations</a></li>
      <li><a href="/support-vuejs/#Recurring-Pledges" class="nav-link">Recurring Pledges</a></li>
      <li><a href="https://vue.threadless.com" target="_blank" class="nav-link">T-Shirt Shop</a></li>
    </ul></li>
  </ul>
</li>

<li class="nav-dropdown-container language">
  <a class="nav-link">Translations</a><span class="arrow"></span>
  <ul class="nav-dropdown">
    <li><a href="https://cn.vuejs.org/v2/guide/syntax.html" class="nav-link" target="_blank">中文</a></li>
    <li><a href="https://jp.vuejs.org/v2/guide/syntax.html" class="nav-link" target="_blank">日本語</a></li>
    <li><a href="https://ru.vuejs.org/v2/guide/syntax.html" class="nav-link" target="_blank">Русский</a></li>
    <li><a href="https://kr.vuejs.org/v2/guide/syntax.html" class="nav-link" target="_blank">한국어</a></li>
    <li><a href="https://br.vuejs.org/v2/guide/syntax.html" class="nav-link" target="_blank">Português</a></li>
    <li><a href="https://fr.vuejs.org/v2/guide/syntax.html" class="nav-link" target="_blank">Français</a></li>
    <li><a href="https://vi.vuejs.org/v2/guide/syntax.html" class="nav-link" target="_blank">Tiếng Việt</a></li>
  </ul>
</li>


    </ul>
    <div class="list">
      <div id="sidebar-sponsors-special">
{{--
	<div class="main-sponsor">
		<span>Special Sponsor</span>
		<div>
			<a href="https://stdlib.com/" target="_blank" class="logo">
				<img src="/images/stdlib.png" alt="">
			</a>
		</div>
	</div>
--}}

</div>

{{--
<div id="sidebar-sponsors-platinum-left">
  <div class="main-sponsor">
    <span>Platinum Sponsors</span>
    <div>
    <a href="https://www.bitsrc.io/?utm_source=vue&amp;utm_medium=vue&amp;utm_campaign=vue&amp;utm_term=vue&amp;utm_content=vue" target="_blank" class="logo">
      <img src="/images/bit-wide.png" alt="">
    </a>
    <a href="http://tooltwist.com/" target="_blank" class="logo">
      <img src="/images/tooltwist.png" alt="tooltwist">
    </a>
    <a href="https://vueschool.io/?utm_source=Vuejs.org&amp;utm_medium=Banner&amp;utm_campaign=Sponsored%20Banner&amp;utm_content=V1" target="_blank" class="logo">
      <img src="/images/vueschool.png" alt="vue school">
    </a>
    <a href="https://vehikl.com/" target="_blank" class="logo">
      <img src="/images/vehikl.png" alt="vehikl">
    </a>
    <a href="https://www.nativescript.org/vue?utm_source=vue-js-org&amp;utm_medium=website&amp;utm_campaign=nativescript-awareness" target="_blank" class="logo">
      <img src="/images/nativescript.png" alt="nativescript">
    </a>
    </div>
  </div>
  <a class="become-backer" href="/support-vuejs">
    Become a Sponsor
  </a>
</div>
--}}

        <h2>

          Guide
          
            <select class="version-select">
              <option value="SELF" selected="">2.x</option>
              <option value="v1">1.0</option>
              <option value="012">0.12</option>
              <option value="011">0.11</option>
            </select>

        </h2>
        <ul class="menu-root">
        <li><h3>Essentials</h3></li>
    <li>
      <a href="/v2/guide/installation.html" class="sidebar-link">Installation</a>
    </li>
    <li>
      <a href="/v2/guide/index.html" class="sidebar-link">Introduction</a>
    </li>
    <li>
      <a href="/v2/guide/instance.html" class="sidebar-link">The Vue Instance</a>
    </li>
    <li>
      <a href="/v2/guide/syntax.html" class="sidebar-link current">Template Syntax</a>
    <ul class="menu-sub"><li><a class="section-link" data-scroll="" href="#Interpolations">Interpolations</a></li><ul><li><a class="section-link" data-scroll="" href="#Text">Text</a></li><li><a class="section-link" data-scroll="" href="#Raw-HTML">Raw HTML</a></li><li><a class="section-link" data-scroll="" href="#Attributes">Attributes</a></li><li><a class="section-link" data-scroll="" href="#Using-JavaScript-Expressions">Using JavaScript Expressions</a></li></ul><li><a class="section-link" data-scroll="" href="#Directives">Directives</a></li><ul><li><a class="section-link" data-scroll="" href="#Arguments">Arguments</a></li><li><a class="section-link" data-scroll="" href="#Modifiers">Modifiers</a></li></ul><li><a class="section-link active" data-scroll="" href="#Shorthands">Shorthands</a></li><ul><li><a class="section-link" data-scroll="" href="#v-bind-Shorthand">v-bind Shorthand</a></li><li><a class="section-link" data-scroll="" href="#v-on-Shorthand">v-on Shorthand</a></li></ul></ul></li>
    <li>
      <a href="/v2/guide/computed.html" class="sidebar-link">Computed Properties and Watchers</a>
    </li>
    <li>
      <a href="/v2/guide/class-and-style.html" class="sidebar-link">Class and Style Bindings</a>
    </li>
    <li>
      <a href="/v2/guide/conditional.html" class="sidebar-link">Conditional Rendering</a>
    </li>
    <li>
      <a href="/v2/guide/list.html" class="sidebar-link">List Rendering</a>
    </li>
    <li>
      <a href="/v2/guide/events.html" class="sidebar-link">Event Handling</a>
    </li>
    <li>
      <a href="/v2/guide/forms.html" class="sidebar-link">Form Input Bindings</a>
    </li>
    <li>
      <a href="/v2/guide/components.html" class="sidebar-link">Components Basics</a>
    </li>

    <li><h3>Components In-Depth</h3></li>

    <li>
      <a href="/v2/guide/components-registration.html" class="sidebar-link">Component Registration</a>
    </li>
    <li>
      <a href="/v2/guide/components-props.html" class="sidebar-link">Props</a>
    </li>
    <li>
      <a href="/v2/guide/components-custom-events.html" class="sidebar-link">Custom Events</a>
    </li>
    <li>
      <a href="/v2/guide/components-slots.html" class="sidebar-link">Slots</a>
    </li>
    <li>
      <a href="/v2/guide/components-dynamic-async.html" class="sidebar-link">Dynamic &amp; Async Components</a>
    </li>
    <li>
      <a href="/v2/guide/components-edge-cases.html" class="sidebar-link">Handling Edge Cases</a>
    </li>
      
      
      
        <li><h3>Transitions &amp; Animation</h3></li>
      
      
      
      
      
      
      
    
    <li>
      <a href="/v2/guide/transitions.html" class="sidebar-link">Enter/Leave &amp; List Transitions</a>
    </li>
    <li>
      <a href="/v2/guide/transitioning-state.html" class="sidebar-link">State Transitions</a>
    </li>
      
      
      
      
        <li><h3>Reusability &amp; Composition</h3></li>
      
      
      
      
      
      
    
    <li>
      <a href="/v2/guide/mixins.html" class="sidebar-link">Mixins</a>
    </li>
    <li>
      <a href="/v2/guide/custom-directive.html" class="sidebar-link">Custom Directives</a>
    </li>
    <li>
      <a href="/v2/guide/render-function.html" class="sidebar-link">Render Functions &amp; JSX</a>
    </li>
    <li>
      <a href="/v2/guide/plugins.html" class="sidebar-link">Plugins</a>
    </li>
    <li>
      <a href="/v2/guide/filters.html" class="sidebar-link">Filters</a>
    </li>
      
      
      
      
      
        <li><h3>Tooling</h3></li>
      
      
      
      
      
    
    <li>
      <a href="/v2/guide/deployment.html" class="sidebar-link">Production Deployment</a>
    </li>
    <li>
      <a href="/v2/guide/single-file-components.html" class="sidebar-link">Single File Components</a>
    </li>
    <li>
      <a href="/v2/guide/unit-testing.html" class="sidebar-link">Unit Testing</a>
    </li>
    <li>
      <a href="/v2/guide/typescript.html" class="sidebar-link">TypeScript Support</a>
    </li>
      
      
      
      
      
      
        <li><h3>Scaling Up</h3></li>
      
      
      
      
    
    <li>
      <a href="/v2/guide/routing.html" class="sidebar-link">Routing</a>
    </li>
    <li>
      <a href="/v2/guide/state-management.html" class="sidebar-link">State Management</a>
    </li>
    <li>
      <a href="/v2/guide/ssr.html" class="sidebar-link">Server-Side Rendering</a>
    </li>
      
      
      
      
      
      
      
        <li><h3>Internals</h3></li>
      
      
      
    
    <li>
      <a href="/v2/guide/reactivity.html" class="sidebar-link">Reactivity in Depth</a>
    </li>
      
      
      
      
      
      
      
      
        <li><h3>Migrating</h3></li>
      
      
    
    <li>
      <a href="/v2/guide/migration.html" class="sidebar-link">Migration from Vue 1.x</a>
    </li>
    <li>
      <a href="/v2/guide/migration-vue-router.html" class="sidebar-link">Migration from Vue Router 0.7.x</a>
    </li>
    <li>
      <a href="/v2/guide/migration-vuex.html" class="sidebar-link">Migration from Vuex 0.6.x to 1.0</a>
    </li>

        <li><h3>Meta</h3></li>
    <li>
      <a href="/v2/guide/comparison.html" class="sidebar-link">Comparison with Other Frameworks</a>
    </li>
    <li>
      <a href="/v2/guide/join.html" class="sidebar-link">Join the Vue.js Community!</a>
    </li>
    <li>
      <a href="/v2/guide/team.html" class="sidebar-link">Meet the Team</a>
    </li>
</ul>

      
    </div>
  </div>
</div>

{{--
<div id="sidebar-sponsors-platinum-right">
  <div class="main-sponsor">
    <span>Platinum Sponsors</span>
    <div>
    <a href="https://www.bitsrc.io/?utm_source=vue&amp;utm_medium=vue&amp;utm_campaign=vue&amp;utm_term=vue&amp;utm_content=vue" target="_blank" class="logo">
      <img src="/images/bit-wide.png" alt="">
    </a>
    <a href="http://tooltwist.com/" target="_blank" class="logo">
      <img src="/images/tooltwist.png" alt="tooltwist">
    </a>
    <a href="https://vueschool.io/?utm_source=Vuejs.org&amp;utm_medium=Banner&amp;utm_campaign=Sponsored%20Banner&amp;utm_content=V1" target="_blank" class="logo">
      <img src="/images/vueschool.png" alt="vue school">
    </a>
    <a href="https://vehikl.com/" target="_blank" class="logo">
      <img src="/images/vehikl.png" alt="vehikl">
    </a>
    <a href="https://www.nativescript.org/vue?utm_source=vue-js-org&amp;utm_medium=website&amp;utm_campaign=nativescript-awareness" target="_blank" class="logo">
      <img src="/images/nativescript.png" alt="nativescript">
    </a>
    </div>
  </div>
  <a class="become-backer" href="/support-vuejs">
    Become a Sponsor
  </a>
</div>
--}}


<div class="content guide with-sidebar syntax-guide">
{{--
	<div id="ad">
		<script async="" type="text/javascript" src="//cdn.carbonads.com/carbon.js?serve=CKYIK2QU&amp;placement=vuejsorg" id="_carbonads_js">
		</script>

		<div id="carbonads"><span><span class="carbon-wrap"><a href="" target="_blank" rel="noopener"><img src="https://cdn4.buysellads.net/uu/1/21673/1538328389-Slack-green_logo.png" alt="" border="0" height="100" width="130" style="max-width: 130px;"></a><a href="" target="_blank" rel="noopener">All the tools your team needs in one place. Slack: Where work happens.</a></span><a href="" class="carbon-poweredby" target="_blank" rel="noopener">ads via Carbon</a><img src="https://ad.doubleclick.net/ddm/trackimp/N32602.3091281BUYSELLADS/B21259774.226230966;dc_trk_aid=424242175;dc_trk_cid=104202612;ord=154347852;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=?" border="0" height="1" width="1" style="display: none;"><img src="https://slack.sp1.convertro.com/view/vt/v1/slack/0/cvo.gif?cvosrc=display.carbon.green%20dev&amp;utm_source=carbon&amp;utm_medium=display&amp;utm_campaign=green%20dev" border="0" height="1" width="1" style="display: none;"></span>
		</div>
	</div>
--}}

    <h1>Template Syntax</h1>
    <p>Vue.js uses an HTML-based template syntax that allows you to declaratively bind the rendered DOM to the underlying Vue instance’s data. All Vue.js templates are valid HTML that can be parsed by spec-compliant browsers and HTML parsers.</p>
<p>Under the hood, Vue compiles the templates into Virtual DOM render functions. Combined with the reactivity system, Vue is able to intelligently figure out the minimal number of components to re-render and apply the minimal amount of DOM manipulations when the app state changes.</p>
<p>If you are familiar with Virtual DOM concepts and prefer the raw power of JavaScript, you can also <a href="render-function.html">directly write render functions</a> instead of templates, with optional JSX support.</p>
<h2 id="Interpolations"><a href="#Interpolations" class="headerlink" title="Interpolations" data-scroll="">Interpolations</a></h2><h3 id="Text"><a href="#Text" class="headerlink" title="Text" data-scroll="">Text</a></h3><p>The most basic form of data binding is text interpolation using the “Mustache” syntax (double curly braces):</p>
<figure class="highlight html"><table><tbody><tr><td class="code"><pre><span class="line"><span class="tag">&lt;<span class="name">span</span>&gt;</span>Message: @{{ msg }}<span class="tag">&lt;/<span class="name">span</span>&gt;</span></span><br></pre></td></tr></tbody></table></figure>
<p>The mustache tag will be replaced with the value of the <code>msg</code> property on the corresponding data object. It will also be updated whenever the data object’s <code>msg</code> property changes.</p>
<p>You can also perform one-time interpolations that do not update on data change by using the <a href="../api/#v-once">v-once directive</a>, but keep in mind this will also affect any other bindings on the same node:</p>
<figure class="highlight html"><table><tbody><tr><td class="code"><pre><span class="line"><span class="tag">&lt;<span class="name">span</span> <span class="attr">v-once</span>&gt;</span>This will never change: @{{ msg }}<span class="tag">&lt;/<span class="name">span</span>&gt;</span></span><br></pre></td></tr></tbody></table></figure>
<h3 id="Raw-HTML"><a href="#Raw-HTML" class="headerlink" title="Raw HTML" data-scroll="">Raw HTML</a></h3><p>The double mustaches interprets the data as plain text, not HTML. In order to output real HTML, you will need to use the <code>v-html</code> directive:</p>
<figure class="highlight html"><table><tbody><tr><td class="code"><pre><span class="line"><span class="tag">&lt;<span class="name">p</span>&gt;</span>Using mustaches: @{{ rawHtml }}<span class="tag">&lt;/<span class="name">p</span>&gt;</span></span><br><span class="line"><span class="tag">&lt;<span class="name">p</span>&gt;</span>Using v-html directive: <span class="tag">&lt;<span class="name">span</span> <span class="attr">v-html</span>=<span class="string">"rawHtml"</span>&gt;</span><span class="tag">&lt;/<span class="name">span</span>&gt;</span><span class="tag">&lt;/<span class="name">p</span>&gt;</span></span><br></pre></td></tr></tbody></table></figure>

<div id="example1" class="demo"><p>Using mustaches: &lt;span style="color: red"&gt;This should be red.&lt;/span&gt;</p> <p>Using v-html directive: <span><span style="color: red">This should be red.</span></span></p></div>
<script>
new Vue({
  el: '#example1',
  data: function () {
  	return {
  	  rawHtml: '<span style="color: red">This should be red.</span>'
  	}
  }
})
</script>

<p>The contents of the <code>span</code> will be replaced with the value of the <code>rawHtml</code> property, interpreted as plain HTML - data bindings are ignored. Note that you cannot use <code>v-html</code> to compose template partials, because Vue is not a string-based templating engine. Instead, components are preferred as the fundamental unit for UI reuse and composition.</p>
<p class="tip">Dynamically rendering arbitrary HTML on your website can be very dangerous because it can easily lead to <a href="https://en.wikipedia.org/wiki/Cross-site_scripting" target="_blank" rel="noopener">XSS vulnerabilities</a>. Only use HTML interpolation on trusted content and <strong>never</strong> on user-provided content.</p>

<h3 id="Attributes"><a href="#Attributes" class="headerlink" title="Attributes" data-scroll="">Attributes</a></h3><p>Mustaches cannot be used inside HTML attributes. Instead, use a <a href="../api/#v-bind">v-bind directive</a>:</p>
<figure class="highlight html"><table><tbody><tr><td class="code"><pre><span class="line"><span class="tag">&lt;<span class="name">div</span> <span class="attr">v-bind:id</span>=<span class="string">"dynamicId"</span>&gt;</span><span class="tag">&lt;/<span class="name">div</span>&gt;</span></span><br></pre></td></tr></tbody></table></figure>
<p>In the case of boolean attributes, where their mere existence implies <code>true</code>, <code>v-bind</code> works a little differently. In this example: </p>
<figure class="highlight html"><table><tbody><tr><td class="code"><pre><span class="line"><span class="tag">&lt;<span class="name">button</span> <span class="attr">v-bind:disabled</span>=<span class="string">"isButtonDisabled"</span>&gt;</span>Button<span class="tag">&lt;/<span class="name">button</span>&gt;</span></span><br></pre></td></tr></tbody></table></figure>
<p>If <code>isButtonDisabled</code> has the value of <code>null</code>, <code>undefined</code>, or <code>false</code>, the <code>disabled</code> attribute will not even be included in the rendered <code>&lt;button&gt;</code> element.</p>
<h3 id="Using-JavaScript-Expressions"><a href="#Using-JavaScript-Expressions" class="headerlink" title="Using JavaScript Expressions" data-scroll="">Using JavaScript Expressions</a></h3><p>So far we’ve only been binding to simple property keys in our templates. But Vue.js actually supports the full power of JavaScript expressions inside all data bindings:</p>
<figure class="highlight html"><table><tbody><tr><td class="code"><pre><span class="line">@{{ number + 1 }}</span><br><span class="line"></span><br><span class="line">@{{ ok ? 'YES' : 'NO' }}</span><br><span class="line"></span><br><span class="line">@{{ message.split('').reverse().join('') }}</span><br><span class="line"></span><br><span class="line"><span class="tag">&lt;<span class="name">div</span> <span class="attr">v-bind:id</span>=<span class="string">"'list-' + id"</span>&gt;</span><span class="tag">&lt;/<span class="name">div</span>&gt;</span></span><br></pre></td></tr></tbody></table></figure>
<p>These expressions will be evaluated as JavaScript in the data scope of the owner Vue instance. One restriction is that each binding can only contain <strong>one single expression</strong>, so the following will <strong>NOT</strong> work:</p>
<figure class="highlight html"><table><tbody><tr><td class="code"><pre><span class="line"><span class="comment">&lt;!-- this is a statement, not an expression: --&gt;</span></span><br><span class="line">@{{ var a = 1 }}</span><br><span class="line"></span><br><span class="line"><span class="comment">&lt;!-- flow control won't work either, use ternary expressions --&gt;</span></span><br><span class="line">@{{ if (ok) { return message } }}</span><br></pre></td></tr></tbody></table></figure>
<p class="tip">Template expressions are sandboxed and only have access to a whitelist of globals such as <code>Math</code> and <code>Date</code>. You should not attempt to access user defined globals in template expressions.</p>

<h2 id="Directives"><a href="#Directives" class="headerlink" title="Directives" data-scroll="">Directives</a></h2><p>Directives are special attributes with the <code>v-</code> prefix. Directive attribute values are expected to be <strong>a single JavaScript expression</strong> (with the exception of <code>v-for</code>, which will be discussed later). A directive’s job is to reactively apply side effects to the DOM when the value of its expression changes. Let’s review the example we saw in the introduction:</p>
<figure class="highlight html"><table><tbody><tr><td class="code"><pre><span class="line"><span class="tag">&lt;<span class="name">p</span> <span class="attr">v-if</span>=<span class="string">"seen"</span>&gt;</span>Now you see me<span class="tag">&lt;/<span class="name">p</span>&gt;</span></span><br></pre></td></tr></tbody></table></figure>
<p>Here, the <code>v-if</code> directive would remove/insert the <code>&lt;p&gt;</code> element based on the truthiness of the value of the expression <code>seen</code>.</p>
<h3 id="Arguments"><a href="#Arguments" class="headerlink" title="Arguments" data-scroll="">Arguments</a></h3><p>Some directives can take an “argument”, denoted by a colon after the directive name. For example, the <code>v-bind</code> directive is used to reactively update an HTML attribute:</p>
<figure class="highlight html"><table><tbody><tr><td class="code"><pre><span class="line"><span class="tag">&lt;<span class="name">a</span> <span class="attr">v-bind:href</span>=<span class="string">"url"</span>&gt;</span> ... <span class="tag">&lt;/<span class="name">a</span>&gt;</span></span><br></pre></td></tr></tbody></table></figure>
<p>Here <code>href</code> is the argument, which tells the <code>v-bind</code> directive to bind the element’s <code>href</code> attribute to the value of the expression <code>url</code>.</p>
<p>Another example is the <code>v-on</code> directive, which listens to DOM events:</p>
<figure class="highlight html"><table><tbody><tr><td class="code"><pre><span class="line"><span class="tag">&lt;<span class="name">a</span> <span class="attr">v-on:click</span>=<span class="string">"doSomething"</span>&gt;</span> ... <span class="tag">&lt;/<span class="name">a</span>&gt;</span></span><br></pre></td></tr></tbody></table></figure>
<p>Here the argument is the event name to listen to. We will talk about event handling in more detail too.</p>
<h3 id="Modifiers"><a href="#Modifiers" class="headerlink" title="Modifiers" data-scroll="">Modifiers</a></h3><p>Modifiers are special postfixes denoted by a dot, which indicate that a directive should be bound in some special way. For example, the <code>.prevent</code> modifier tells the <code>v-on</code> directive to call <code>event.preventDefault()</code> on the triggered event:</p>
<figure class="highlight html"><table><tbody><tr><td class="code"><pre><span class="line"><span class="tag">&lt;<span class="name">form</span> <span class="attr">v-on:submit.prevent</span>=<span class="string">"onSubmit"</span>&gt;</span> ... <span class="tag">&lt;/<span class="name">form</span>&gt;</span></span><br></pre></td></tr></tbody></table></figure>
<p>You’ll see other examples of modifiers later, <a href="events.html#Event-Modifiers">for <code>v-on</code></a> and <a href="forms.html#Modifiers">for <code>v-model</code></a>, when we explore those features.</p>
<h2 id="Shorthands"><a href="#Shorthands" class="headerlink" title="Shorthands" data-scroll="">Shorthands</a></h2><p>The <code>v-</code> prefix serves as a visual cue for identifying Vue-specific attributes in your templates. This is useful when you are using Vue.js to apply dynamic behavior to some existing markup, but can feel verbose for some frequently used directives. At the same time, the need for the <code>v-</code> prefix becomes less important when you are building a <a href="https://en.wikipedia.org/wiki/Single-page_application" target="_blank" rel="noopener">SPA</a> where Vue.js manages every template. Therefore, Vue.js provides special shorthands for two of the most often used directives, <code>v-bind</code> and <code>v-on</code>:</p>
<h3 id="v-bind-Shorthand"><a href="#v-bind-Shorthand" class="headerlink" title="v-bind Shorthand" data-scroll=""><code>v-bind</code> Shorthand</a></h3><figure class="highlight html"><table><tbody><tr><td class="code"><pre><span class="line"><span class="comment">&lt;!-- full syntax --&gt;</span></span><br><span class="line"><span class="tag">&lt;<span class="name">a</span> <span class="attr">v-bind:href</span>=<span class="string">"url"</span>&gt;</span> ... <span class="tag">&lt;/<span class="name">a</span>&gt;</span></span><br><span class="line"></span><br><span class="line"><span class="comment">&lt;!-- shorthand --&gt;</span></span><br><span class="line"><span class="tag">&lt;<span class="name">a</span> <span class="attr">:href</span>=<span class="string">"url"</span>&gt;</span> ... <span class="tag">&lt;/<span class="name">a</span>&gt;</span></span><br></pre></td></tr></tbody></table></figure>
<h3 id="v-on-Shorthand"><a href="#v-on-Shorthand" class="headerlink" title="v-on Shorthand" data-scroll=""><code>v-on</code> Shorthand</a></h3><figure class="highlight html"><table><tbody><tr><td class="code"><pre><span class="line"><span class="comment">&lt;!-- full syntax --&gt;</span></span><br><span class="line"><span class="tag">&lt;<span class="name">a</span> <span class="attr">v-on:click</span>=<span class="string">"doSomething"</span>&gt;</span> ... <span class="tag">&lt;/<span class="name">a</span>&gt;</span></span><br><span class="line"></span><br><span class="line"><span class="comment">&lt;!-- shorthand --&gt;</span></span><br><span class="line"><span class="tag">&lt;<span class="name">a</span> @<span class="attr">click</span>=<span class="string">"doSomething"</span>&gt;</span> ... <span class="tag">&lt;/<span class="name">a</span>&gt;</span></span><br></pre></td></tr></tbody></table></figure>
<p>They may look a bit different from normal HTML, but <code>:</code> and <code>@</code> are valid chars for attribute names and all Vue.js supported browsers can parse it correctly. In addition, they do not appear in the final rendered markup. The shorthand syntax is totally optional, but you will likely appreciate it when you learn more about its usage later.</p>

  
  
    <div class="guide-links">
      
      
        <span>← <a href="/v2/guide/instance.html">The Vue Instance</a></span>
      
      
      
        <span style="float: right;"><a href="/v2/guide/computed.html">Computed Properties and Watchers</a> →</span>
      
    </div>
  
  <div class="footer">
      <script src="//m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<div class="bsa-cpc"></div>
<script>
  (function(){
    if(typeof _bsa !== 'undefined' && _bsa) {
    _bsa.init('default', 'CKYD62QM', 'placement:vuejsorg', {
      target: '.bsa-cpc',
      align: 'horizontal',
      disable_css: 'true'
    });
      }
  })();
</script>

    Caught a mistake or want to contribute to the documentation?
    <a href="https://github.com/vuejs/vuejs.org/blob/master/src/v2/guide/syntax.md" target="_blank">
      Edit this page on GitHub!
    </a>
  </div>
</div>


      </div>

@include{("_include/footer")}

@extends('layouts.app')

@section('content')

<section class="bg-light" style="height: 800px;">
    <div class="container">
	  <div>XMLHttpRequest</div>
	  <div>
	    <button class="btn btn-success" onClick="xhr_method_click('/http/info', 'GET')">get</button>
	    <button class="btn btn-primary" onClick="xhr_method_click('/http/info', 'POST')">post</button>
	    <button class="btn btn-info" onClick="xhr_method_click('/http/info', 'PUT')">put</button>
	    <button class="btn btn-danger" onClick="xhr_method_click('/http/info', 'DELETE')">delete</button>
	    <button class="btn btn-warning" onClick="xhr_method_click('/http/info', 'PATCH')">patch</button>
	    <button class="btn btn-warning" onClick="xhr_method_click('/http/info', 'OPTIONS')">options</button>
	  </div>
	  <div>Fetch</div>
	  <div>
	    <button class="btn btn-success" onClick="fetch_method_click('/http/info', 'GET')">get</button>
	    <button class="btn btn-primary" onClick="fetch_method_click('/http/info', 'POST')">post</button>
	    <button class="btn btn-info" onClick="fetch_method_click('/http/info', 'PUT')">put</button>
	    <button class="btn btn-danger" onClick="fetch_method_click('/http/info', 'DELETE')">delete</button>
	    <button class="btn btn-warning" onClick="fetch_method_click('/http/info', 'PATCH')">patch</button>
	    <button class="btn btn-warning" onClick="fetch_method_click('/http/info', 'OPTIONS')">options</button>
	  </div>
	  <div>jQuery Ajax</div>
	  <div>
	    <button class="btn btn-success" onClick="jquery_ajax_method_click('/http/info', 'GET')">get</button>
	    <button class="btn btn-primary" onClick="jquery_ajax_method_click('/http/info', 'POST')">post</button>
	    <button class="btn btn-info" onClick="jquery_ajax_method_click('/http/info', 'PUT')">put</button>
	    <button class="btn btn-danger" onClick="jquery_ajax_method_click('/http/info', 'DELETE')">delete</button>
	    <button class="btn btn-warning" onClick="jquery_ajax_method_click('/http/info', 'PATCH')">patch</button>
	    <button class="btn btn-warning" onClick="jquery_ajax_method_click('/http/info', 'OPTIONS')">options</button>
	  </div>
	  <div>Axios</div>
	  <div>
	    <button class="btn btn-success" onClick="axios_method_click('/http/info', 'GET')">get</button>
	    <button class="btn btn-primary" onClick="axios_method_click('/http/info', 'POST')">post</button>
	    <button class="btn btn-info" onClick="axios_method_click('/http/info', 'PUT')">put</button>
	    <button class="btn btn-danger" onClick="axios_method_click('/http/info', 'DELETE')">delete</button>
	    <button class="btn btn-warning" onClick="axios_method_click('/http/info', 'PATCH')">patch</button>
	    <button class="btn btn-warning" onClick="axios_method_click('/http/info', 'OPTIONS')">options</button>
	  </div>
	  <div>Response</div>
	  <div>
		<div>ip: <span id="ip"></span></div>
		<div>method: <span id="method"></span></div>
		<div>url: <span id="url"></span></div>
		<div>get_param: <span id="get_param"></span></div>
		<div>post_param: <span id="post_param"></span></div>
		<div>header: <span id="header"></span></div>
		<div>body: <span id="body"></span></div>
		<div>user-agent: <span id="useragent"></span></div>
	  </div>
    </div>
</section>

@endsection

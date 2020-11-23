<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/style.css") }}" media="screen" />
        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/print.css") }}" media="print" />
        <script src="{{ asset("vendor/scribe/js/all.js") }}"></script>

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/highlight-darcula.css") }}" media="" />
        <script src="{{ asset("vendor/scribe/js/highlight.pack.js") }}"></script>
    <script>hljs.initHighlightingOnLoad();</script>

</head>

<body class="" data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">
<a href="#" id="nav-button">
      <span>
        NAV
            <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="-image" class=""/>
      </span>
</a>
<div class="tocify-wrapper">
                <div class="lang-selector">
                            <a href="#" data-language-name="bash">bash</a>
                            <a href="#" data-language-name="javascript">javascript</a>
                    </div>
        <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>
    <ul class="search-results"></ul>

    <ul id="toc">
    </ul>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI (Swagger) spec</a></li>
                            <li><a href='http://github.com/knuckleswtf/scribe'>Documentation powered by Scribe ✍</a></li>
                    </ul>
            <ul class="toc-footer" id="last-updated">
            <li>Last updated: November 13 2020</li>
        </ul>
</div>
<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1>Introduction</h1>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>
<script>
    var baseUrl = "http://localhost";
</script>
<script src="{{ asset("vendor/scribe/js/tryitout-2.1.0.js") }}"></script>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://localhost</code></pre><h1>Authenticating requests</h1>
<p>This API is not authenticated.</p><h1>Endpoints</h1>
<h2>api/user</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"></code></pre>
</div>
<div id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user"></code></pre>
</div>
<form id="form-GETapi-user" data-method="GET" data-path="api/user" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-user" onclick="tryItOut('GETapi-user');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-user" onclick="cancelTryOut('GETapi-user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-user" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/user</code></b>
</p>
</form>
<h2>Display a listing of the resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
&lt;!-- &lt;!doctype html&gt;
&lt;html lang="en"&gt;
  &lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"&gt;
    &lt;meta name="description" content=""&gt;
    &lt;meta name="author" content=""&gt;
    &lt;link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico"&gt;

    &lt;title&gt;Cover Template for Bootstrap&lt;/title&gt;

    &lt;link href="http://localhost/css/app.css" rel="stylesheet"&gt;

    &lt;link href="http://localhost/css/cover.css" rel="stylesheet"&gt;
  &lt;/head&gt; --&gt;

&lt;!doctype html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;

    &lt;!-- CSRF Token --&gt;
    &lt;meta name="csrf-token" content="thMl7mpIUSrFu1DFdMBtxabY8YxVs8kP2jaywjJW"&gt;

    &lt;title&gt;Laravel&lt;/title&gt;

    &lt;!-- Scripts --&gt;
    &lt;script src="http://localhost/js/app.js" defer&gt;&lt;/script&gt;

    &lt;!-- Fonts --&gt;
    &lt;link rel="dns-prefetch" href="//fonts.gstatic.com"&gt;
    &lt;link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"&gt;

    &lt;!-- Styles --&gt;
    &lt;link href="http://localhost/css/app.css" rel="stylesheet"&gt;

    &lt;!-- Footer --&gt;
    &lt;style&gt;
            footer {
            text-align: center;
            }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
        &lt;div id="app"&gt;
        &lt;nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm"&gt;
            &lt;div class="container"&gt;
                &lt;a class="navbar-brand" href="http://localhost/home"&gt;
                    Laravel
                &lt;/a&gt;
                &lt;button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"&gt;
                    &lt;span class="navbar-toggler-icon"&gt;&lt;/span&gt;
                &lt;/button&gt;

                &lt;div class="collapse navbar-collapse" id="navbarSupportedContent"&gt;
                    &lt;!-- Left Side Of Navbar --&gt;
                    &lt;ul class="navbar-nav mr-auto"&gt;

                    &lt;/ul&gt;

                    &lt;!-- Right Side Of Navbar --&gt;
                    &lt;ul class="navbar-nav ml-auto"&gt;
                        &lt;!-- Authentication Links --&gt;
                                                    &lt;li class="nav-item"&gt;
                                &lt;a class="nav-link" href="http://localhost/login"&gt;Login&lt;/a&gt;
                            &lt;/li&gt;
                                                            &lt;li class="nav-item"&gt;
                                    &lt;a class="nav-link" href="http://localhost/register"&gt;Register&lt;/a&gt;
                                &lt;/li&gt;
                                                                        &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/nav&gt;

        &lt;div class="container"&gt;
        &lt;h1&gt;&lt;/h1&gt;

  &lt;div class="text-center"&gt;

    &lt;div class="cover-container d-flex h-100 p-3 mx-auto flex-column"&gt;

      &lt;main role="main" class="inner cover"&gt;
        &lt;h1 class="cover-heading"&gt;Classco.&lt;/h1&gt;
        &lt;p class="lead"&gt;Classco is a “Mini Class Management System” project with Laravel to manage classroom assignments.&lt;/p&gt;
        &lt;p class="lead"&gt;
          &lt;a href="https://docs.google.com/document/d/14FaJhOx39ZJNDx3QW6RuxfRBOvPaCtM_y2R0fihiji8/edit#" class="btn btn-lg btn-secondary"&gt;Learn more&lt;/a&gt;
        &lt;/p&gt;
      &lt;/main&gt;
    &lt;/div&gt;

    &lt;!-- Bootstrap core JavaScript
    ================================================== --&gt;
    &lt;!-- Placed at the end of the document so the pages load faster --&gt;
    &lt;script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"&gt;&lt;/script&gt;
    &lt;script&gt;window.jQuery || document.write('&lt;script src="../../assets/js/vendor/jquery-slim.min.js"&gt;&lt;\/script&gt;')&lt;/script&gt;
    &lt;script src="../../assets/js/vendor/popper.min.js"&gt;&lt;/script&gt;
    &lt;script src="../../dist/js/bootstrap.min.js"&gt;&lt;/script&gt;
  &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;footer&gt;&lt;p&gt;Classco for &lt;a href="https://klasconnect.com/"&gt;Klasconnect&lt;/a&gt;, by &lt;a href="https://twitter.com/JustCabyr"&gt;@JustCabyr&lt;/a&gt;.&lt;/p&gt;&lt;/footer&gt;
&lt;/html&gt;
</code></pre>
<div id="execution-results-GET-" hidden>
    <blockquote>Received response<span id="execution-response-status-GET-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GET-"></code></pre>
</div>
<div id="execution-error-GET-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET-"></code></pre>
</div>
<form id="form-GET-" data-method="GET" data-path="/" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GET-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GET-" onclick="tryItOut('GET-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GET-" onclick="cancelTryOut('GET-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GET-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>/</code></b>
</p>
</form>
<h2>Display a listing of the resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/assignment" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/assignment"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
&lt;!-- &lt;!doctype html&gt;
&lt;html lang="en"&gt;
  &lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"&gt;
    &lt;meta name="description" content=""&gt;
    &lt;meta name="author" content=""&gt;
    &lt;link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico"&gt;

    &lt;title&gt;Cover Template for Bootstrap&lt;/title&gt;

    &lt;link href="http://localhost/css/app.css" rel="stylesheet"&gt;

    &lt;link href="http://localhost/css/cover.css" rel="stylesheet"&gt;
  &lt;/head&gt; --&gt;

&lt;!doctype html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;

    &lt;!-- CSRF Token --&gt;
    &lt;meta name="csrf-token" content="thMl7mpIUSrFu1DFdMBtxabY8YxVs8kP2jaywjJW"&gt;

    &lt;title&gt;Laravel&lt;/title&gt;

    &lt;!-- Scripts --&gt;
    &lt;script src="http://localhost/js/app.js" defer&gt;&lt;/script&gt;

    &lt;!-- Fonts --&gt;
    &lt;link rel="dns-prefetch" href="//fonts.gstatic.com"&gt;
    &lt;link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"&gt;

    &lt;!-- Styles --&gt;
    &lt;link href="http://localhost/css/app.css" rel="stylesheet"&gt;

    &lt;!-- Footer --&gt;
    &lt;style&gt;
            footer {
            text-align: center;
            }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
        &lt;div id="app"&gt;
        &lt;nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm"&gt;
            &lt;div class="container"&gt;
                &lt;a class="navbar-brand" href="http://localhost/home"&gt;
                    Laravel
                &lt;/a&gt;
                &lt;button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"&gt;
                    &lt;span class="navbar-toggler-icon"&gt;&lt;/span&gt;
                &lt;/button&gt;

                &lt;div class="collapse navbar-collapse" id="navbarSupportedContent"&gt;
                    &lt;!-- Left Side Of Navbar --&gt;
                    &lt;ul class="navbar-nav mr-auto"&gt;

                    &lt;/ul&gt;

                    &lt;!-- Right Side Of Navbar --&gt;
                    &lt;ul class="navbar-nav ml-auto"&gt;
                        &lt;!-- Authentication Links --&gt;
                                                    &lt;li class="nav-item"&gt;
                                &lt;a class="nav-link" href="http://localhost/login"&gt;Login&lt;/a&gt;
                            &lt;/li&gt;
                                                            &lt;li class="nav-item"&gt;
                                    &lt;a class="nav-link" href="http://localhost/register"&gt;Register&lt;/a&gt;
                                &lt;/li&gt;
                                                                        &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/nav&gt;

        &lt;div class="container"&gt;
        &lt;h1&gt;&lt;/h1&gt;

  &lt;div class="text-center"&gt;

    &lt;div class="cover-container d-flex h-100 p-3 mx-auto flex-column"&gt;

      &lt;main role="main" class="inner cover"&gt;
        &lt;h1 class="cover-heading"&gt;Classco.&lt;/h1&gt;
        &lt;p class="lead"&gt;Classco is a “Mini Class Management System” project with Laravel to manage classroom assignments.&lt;/p&gt;
        &lt;p class="lead"&gt;
          &lt;a href="https://docs.google.com/document/d/14FaJhOx39ZJNDx3QW6RuxfRBOvPaCtM_y2R0fihiji8/edit#" class="btn btn-lg btn-secondary"&gt;Learn more&lt;/a&gt;
        &lt;/p&gt;
      &lt;/main&gt;
    &lt;/div&gt;

    &lt;!-- Bootstrap core JavaScript
    ================================================== --&gt;
    &lt;!-- Placed at the end of the document so the pages load faster --&gt;
    &lt;script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"&gt;&lt;/script&gt;
    &lt;script&gt;window.jQuery || document.write('&lt;script src="../../assets/js/vendor/jquery-slim.min.js"&gt;&lt;\/script&gt;')&lt;/script&gt;
    &lt;script src="../../assets/js/vendor/popper.min.js"&gt;&lt;/script&gt;
    &lt;script src="../../dist/js/bootstrap.min.js"&gt;&lt;/script&gt;
  &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;footer&gt;&lt;p&gt;Classco for &lt;a href="https://klasconnect.com/"&gt;Klasconnect&lt;/a&gt;, by &lt;a href="https://twitter.com/JustCabyr"&gt;@JustCabyr&lt;/a&gt;.&lt;/p&gt;&lt;/footer&gt;
&lt;/html&gt;
</code></pre>
<div id="execution-results-GETassignment" hidden>
    <blockquote>Received response<span id="execution-response-status-GETassignment"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETassignment"></code></pre>
</div>
<div id="execution-error-GETassignment" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETassignment"></code></pre>
</div>
<form id="form-GETassignment" data-method="GET" data-path="assignment" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETassignment', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETassignment" onclick="tryItOut('GETassignment');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETassignment" onclick="cancelTryOut('GETassignment');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETassignment" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>assignment</code></b>
</p>
</form>
<h2>Show the form for creating a new resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/assignment/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/assignment/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
&lt;!doctype html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;

    &lt;!-- CSRF Token --&gt;
    &lt;meta name="csrf-token" content="thMl7mpIUSrFu1DFdMBtxabY8YxVs8kP2jaywjJW"&gt;

    &lt;title&gt;Laravel&lt;/title&gt;

    &lt;!-- Scripts --&gt;
    &lt;script src="http://localhost/js/app.js" defer&gt;&lt;/script&gt;

    &lt;!-- Fonts --&gt;
    &lt;link rel="dns-prefetch" href="//fonts.gstatic.com"&gt;
    &lt;link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"&gt;

    &lt;!-- Styles --&gt;
    &lt;link href="http://localhost/css/app.css" rel="stylesheet"&gt;

    &lt;!-- Footer --&gt;
    &lt;style&gt;
            footer {
            text-align: center;
            }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
        &lt;div id="app"&gt;
        &lt;nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm"&gt;
            &lt;div class="container"&gt;
                &lt;a class="navbar-brand" href="http://localhost/home"&gt;
                    Laravel
                &lt;/a&gt;
                &lt;button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"&gt;
                    &lt;span class="navbar-toggler-icon"&gt;&lt;/span&gt;
                &lt;/button&gt;

                &lt;div class="collapse navbar-collapse" id="navbarSupportedContent"&gt;
                    &lt;!-- Left Side Of Navbar --&gt;
                    &lt;ul class="navbar-nav mr-auto"&gt;

                    &lt;/ul&gt;

                    &lt;!-- Right Side Of Navbar --&gt;
                    &lt;ul class="navbar-nav ml-auto"&gt;
                        &lt;!-- Authentication Links --&gt;
                                                    &lt;li class="nav-item"&gt;
                                &lt;a class="nav-link" href="http://localhost/login"&gt;Login&lt;/a&gt;
                            &lt;/li&gt;
                                                            &lt;li class="nav-item"&gt;
                                    &lt;a class="nav-link" href="http://localhost/register"&gt;Register&lt;/a&gt;
                                &lt;/li&gt;
                                                                        &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/nav&gt;

        &lt;div class="container"&gt;
        &lt;h1&gt;&lt;/h1&gt;
                &lt;h1&gt;Create new Assignment&lt;/h1&gt;
    &lt;form method="post" action="/assignment"&gt;
        &lt;input type="hidden" name="_token" value="thMl7mpIUSrFu1DFdMBtxabY8YxVs8kP2jaywjJW"&gt;        &lt;div class="form-group"&gt;
            &lt;label for="course_code"&gt;Course Code&lt;/label&gt;
            &lt;input type="text" class="form-control" name="course_code" id="course_code" placeholder="Enter Course Code" value=""&gt;
        &lt;/div&gt;
        &lt;div class="form-group"&gt;
            &lt;label for="lecturer"&gt;Lecturer&lt;/label&gt;
            &lt;input type="text" class="form-control" name="lecturer" id="lecturer" placeholder="Enter Lecturer" value=""&gt;
        &lt;/div&gt;
        &lt;div class="form-group"&gt;
            &lt;label for="question"&gt;Question&lt;/label&gt;
            &lt;input type="text" class="form-control" name="question" id="question" placeholder="Enter Question" value=""&gt; 
        &lt;/div&gt;
        &lt;div class="form-group"&gt;
            &lt;label for="deadline"&gt;Deadline&lt;/label&gt;
            &lt;input type="date" class="form-control" name="deadline" id="deadline" placeholder="Enter Deadline" value=""&gt;
        &lt;/div&gt;
        &lt;button type="submit" class="btn btn-primary"&gt;Submit&lt;/button&gt;
    &lt;/form&gt;
         &lt;/div&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;footer&gt;&lt;p&gt;Classco for &lt;a href="https://klasconnect.com/"&gt;Klasconnect&lt;/a&gt;, by &lt;a href="https://twitter.com/JustCabyr"&gt;@JustCabyr&lt;/a&gt;.&lt;/p&gt;&lt;/footer&gt;
&lt;/html&gt;
</code></pre>
<div id="execution-results-GETassignment-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETassignment-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETassignment-create"></code></pre>
</div>
<div id="execution-error-GETassignment-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETassignment-create"></code></pre>
</div>
<form id="form-GETassignment-create" data-method="GET" data-path="assignment/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETassignment-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETassignment-create" onclick="tryItOut('GETassignment-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETassignment-create" onclick="cancelTryOut('GETassignment-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETassignment-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>assignment/create</code></b>
</p>
</form>
<h2>Store a newly created resource in storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/assignment" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/assignment"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTassignment" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTassignment"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTassignment"></code></pre>
</div>
<div id="execution-error-POSTassignment" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTassignment"></code></pre>
</div>
<form id="form-POSTassignment" data-method="POST" data-path="assignment" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTassignment', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTassignment" onclick="tryItOut('POSTassignment');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTassignment" onclick="cancelTryOut('POSTassignment');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTassignment" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>assignment</code></b>
</p>
</form>
<h2>Display the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/assignment/ad" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/assignment/ad"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-GETassignment--assignment-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETassignment--assignment-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETassignment--assignment-"></code></pre>
</div>
<div id="execution-error-GETassignment--assignment-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETassignment--assignment-"></code></pre>
</div>
<form id="form-GETassignment--assignment-" data-method="GET" data-path="assignment/{assignment}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETassignment--assignment-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETassignment--assignment-" onclick="tryItOut('GETassignment--assignment-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETassignment--assignment-" onclick="cancelTryOut('GETassignment--assignment-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETassignment--assignment-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>assignment/{assignment}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>assignment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="assignment" data-endpoint="GETassignment--assignment-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Show the form for editing the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/assignment/perspiciatis/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/assignment/perspiciatis/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Trying to get property 'id' of non-object (View: C:\\laragon\\www\\classco\\resources\\views\\edit.blade.php)",
    "exception": "Facade\\Ignition\\Exceptions\\ViewException",
    "file": "C:\\laragon\\www\\classco\\resources\\views\/edit.blade.php",
    "line": 5,
    "trace": [
        {
            "file": "C:\\laragon\\www\\classco\\resources\\views\/edit.blade.php",
            "line": 5,
            "function": "handleError",
            "class": "Illuminate\\Foundation\\Bootstrap\\HandleExceptions",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php",
            "line": 107,
            "function": "require"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php",
            "line": 108,
            "function": "Illuminate\\Filesystem\\{closure}",
            "class": "Illuminate\\Filesystem\\Filesystem",
            "type": "::"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\PhpEngine.php",
            "line": 58,
            "function": "getRequire",
            "class": "Illuminate\\Filesystem\\Filesystem",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\CompilerEngine.php",
            "line": 61,
            "function": "evaluatePath",
            "class": "Illuminate\\View\\Engines\\PhpEngine",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\facade\\ignition\\src\\Views\\Engines\\CompilerEngine.php",
            "line": 37,
            "function": "get",
            "class": "Illuminate\\View\\Engines\\CompilerEngine",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php",
            "line": 139,
            "function": "get",
            "class": "Facade\\Ignition\\Views\\Engines\\CompilerEngine",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php",
            "line": 122,
            "function": "getContents",
            "class": "Illuminate\\View\\View",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php",
            "line": 91,
            "function": "renderContents",
            "class": "Illuminate\\View\\View",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php",
            "line": 62,
            "function": "render",
            "class": "Illuminate\\View\\View",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php",
            "line": 34,
            "function": "setContent",
            "class": "Illuminate\\Http\\Response",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 765,
            "function": "__construct",
            "class": "Illuminate\\Http\\Response",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 737,
            "function": "toResponse",
            "class": "Illuminate\\Routing\\Router",
            "type": "::"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 691,
            "function": "prepareResponse",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php",
            "line": 41,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php",
            "line": 77,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php",
            "line": 49,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\View\\Middleware\\ShareErrorsFromSession",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php",
            "line": 121,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php",
            "line": 63,
            "function": "handleStatefulRequest",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php",
            "line": 67,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\EncryptCookies",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 693,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 668,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 634,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 623,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php",
            "line": 87,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 323,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 235,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 171,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 126,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 118,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 596,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 258,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\symfony\\console\\Application.php",
            "line": 920,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\symfony\\console\\Application.php",
            "line": 266,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\symfony\\console\\Application.php",
            "line": 142,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "-&gt;"
        }
    ]
}</code></pre>
<div id="execution-results-GETassignment--assignment--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETassignment--assignment--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETassignment--assignment--edit"></code></pre>
</div>
<div id="execution-error-GETassignment--assignment--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETassignment--assignment--edit"></code></pre>
</div>
<form id="form-GETassignment--assignment--edit" data-method="GET" data-path="assignment/{assignment}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETassignment--assignment--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETassignment--assignment--edit" onclick="tryItOut('GETassignment--assignment--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETassignment--assignment--edit" onclick="cancelTryOut('GETassignment--assignment--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETassignment--assignment--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>assignment/{assignment}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>assignment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="assignment" data-endpoint="GETassignment--assignment--edit" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Update the specified resource in storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://localhost/assignment/nam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/assignment/nam"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-PUTassignment--assignment-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTassignment--assignment-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTassignment--assignment-"></code></pre>
</div>
<div id="execution-error-PUTassignment--assignment-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTassignment--assignment-"></code></pre>
</div>
<form id="form-PUTassignment--assignment-" data-method="PUT" data-path="assignment/{assignment}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTassignment--assignment-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTassignment--assignment-" onclick="tryItOut('PUTassignment--assignment-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTassignment--assignment-" onclick="cancelTryOut('PUTassignment--assignment-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTassignment--assignment-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>assignment/{assignment}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>assignment/{assignment}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>assignment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="assignment" data-endpoint="PUTassignment--assignment-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Remove the specified resource from storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost/assignment/dolor" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/assignment/dolor"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-DELETEassignment--assignment-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEassignment--assignment-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEassignment--assignment-"></code></pre>
</div>
<div id="execution-error-DELETEassignment--assignment-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEassignment--assignment-"></code></pre>
</div>
<form id="form-DELETEassignment--assignment-" data-method="DELETE" data-path="assignment/{assignment}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEassignment--assignment-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEassignment--assignment-" onclick="tryItOut('DELETEassignment--assignment-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEassignment--assignment-" onclick="cancelTryOut('DELETEassignment--assignment-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEassignment--assignment-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>assignment/{assignment}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>assignment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="assignment" data-endpoint="DELETEassignment--assignment-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Display a listing of the resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/solution" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/solution"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-GETsolution" hidden>
    <blockquote>Received response<span id="execution-response-status-GETsolution"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETsolution"></code></pre>
</div>
<div id="execution-error-GETsolution" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETsolution"></code></pre>
</div>
<form id="form-GETsolution" data-method="GET" data-path="solution" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETsolution', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETsolution" onclick="tryItOut('GETsolution');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETsolution" onclick="cancelTryOut('GETsolution');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETsolution" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>solution</code></b>
</p>
</form>
<h2>Show the form for creating a new resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/solution/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/solution/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
&lt;!doctype html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;

    &lt;!-- CSRF Token --&gt;
    &lt;meta name="csrf-token" content="thMl7mpIUSrFu1DFdMBtxabY8YxVs8kP2jaywjJW"&gt;

    &lt;title&gt;Laravel&lt;/title&gt;

    &lt;!-- Scripts --&gt;
    &lt;script src="http://localhost/js/app.js" defer&gt;&lt;/script&gt;

    &lt;!-- Fonts --&gt;
    &lt;link rel="dns-prefetch" href="//fonts.gstatic.com"&gt;
    &lt;link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"&gt;

    &lt;!-- Styles --&gt;
    &lt;link href="http://localhost/css/app.css" rel="stylesheet"&gt;

    &lt;!-- Footer --&gt;
    &lt;style&gt;
            footer {
            text-align: center;
            }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
        &lt;div id="app"&gt;
        &lt;nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm"&gt;
            &lt;div class="container"&gt;
                &lt;a class="navbar-brand" href="http://localhost/home"&gt;
                    Laravel
                &lt;/a&gt;
                &lt;button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"&gt;
                    &lt;span class="navbar-toggler-icon"&gt;&lt;/span&gt;
                &lt;/button&gt;

                &lt;div class="collapse navbar-collapse" id="navbarSupportedContent"&gt;
                    &lt;!-- Left Side Of Navbar --&gt;
                    &lt;ul class="navbar-nav mr-auto"&gt;

                    &lt;/ul&gt;

                    &lt;!-- Right Side Of Navbar --&gt;
                    &lt;ul class="navbar-nav ml-auto"&gt;
                        &lt;!-- Authentication Links --&gt;
                                                    &lt;li class="nav-item"&gt;
                                &lt;a class="nav-link" href="http://localhost/login"&gt;Login&lt;/a&gt;
                            &lt;/li&gt;
                                                            &lt;li class="nav-item"&gt;
                                    &lt;a class="nav-link" href="http://localhost/register"&gt;Register&lt;/a&gt;
                                &lt;/li&gt;
                                                                        &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/nav&gt;

        &lt;div class="container"&gt;
        &lt;h1&gt;&lt;/h1&gt;
                &lt;h1&gt;Create new solution&lt;/h1&gt;
    &lt;form method="post" action="/solution" enctype="multipart/form-data"&gt;
        &lt;input type="hidden" name="_token" value="thMl7mpIUSrFu1DFdMBtxabY8YxVs8kP2jaywjJW"&gt;        &lt;div class="form-group"&gt;
            &lt;label for="first_name"&gt;First Name&lt;/label&gt;
            &lt;input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter First Name" value=""&gt;
        &lt;/div&gt;
        &lt;div class="form-group"&gt;
            &lt;label for="last_name"&gt;Last Name&lt;/label&gt;
            &lt;input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter Last Name" value=""&gt;
        &lt;/div&gt;

        &lt;div class="form-group"&gt;
            &lt;label for="assignment_course_code"&gt;Assignment Course Code&lt;/label&gt;
            &lt;select name="assignment_course_code" id="assignment_course_code" class="form-control"&gt;
                &lt;option value="Please select" &gt;
                    Please Select
                &lt;/option&gt;
                $assignment = Assignment::all();
                                    &lt;option value="EEG510"&gt;EEG510&lt;/option&gt;
                                &lt;/select&gt;
        &lt;/div&gt;

        &lt;div class="form-group"&gt;
            &lt;label for="email"&gt;Email&lt;/label&gt;
            &lt;input type="text" class="form-control" name="email" id="email" placeholder="Enter Email" value=""&gt;
        &lt;/div&gt;
        &lt;div class="form-group"&gt;
            &lt;label for="content"&gt;Content&lt;/label&gt;
            &lt;input type="text" class="form-control" name="content" id="content" placeholder="Content" value=""&gt; 
        &lt;/div&gt;      
        &lt;div class="form-group"&gt;
            &lt;label for="snapshot"&gt;Upload Snapshot&lt;/label&gt;
            &lt;input type="file" class="file" name="snapshot" multiple data-preview-file-type="any" data-upload-url="#" placeholder="Upload snapshot" value=""&gt;
        &lt;/div&gt;

        &lt;button type="submit" class="btn btn-primary"&gt;Submit&lt;/button&gt;
    &lt;/form&gt;
         &lt;/div&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;footer&gt;&lt;p&gt;Classco for &lt;a href="https://klasconnect.com/"&gt;Klasconnect&lt;/a&gt;, by &lt;a href="https://twitter.com/JustCabyr"&gt;@JustCabyr&lt;/a&gt;.&lt;/p&gt;&lt;/footer&gt;
&lt;/html&gt;
</code></pre>
<div id="execution-results-GETsolution-create" hidden>
    <blockquote>Received response<span id="execution-response-status-GETsolution-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETsolution-create"></code></pre>
</div>
<div id="execution-error-GETsolution-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETsolution-create"></code></pre>
</div>
<form id="form-GETsolution-create" data-method="GET" data-path="solution/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETsolution-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETsolution-create" onclick="tryItOut('GETsolution-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETsolution-create" onclick="cancelTryOut('GETsolution-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETsolution-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>solution/create</code></b>
</p>
</form>
<h2>Store a newly created resource in storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/solution" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/solution"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTsolution" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTsolution"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTsolution"></code></pre>
</div>
<div id="execution-error-POSTsolution" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTsolution"></code></pre>
</div>
<form id="form-POSTsolution" data-method="POST" data-path="solution" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTsolution', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTsolution" onclick="tryItOut('POSTsolution');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTsolution" onclick="cancelTryOut('POSTsolution');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTsolution" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>solution</code></b>
</p>
</form>
<h2>Display the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/solution/nobis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/solution/nobis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Undefined variable: todo (View: C:\\laragon\\www\\classco\\resources\\views\\showsolution.blade.php)",
    "exception": "Facade\\Ignition\\Exceptions\\ViewException",
    "file": "C:\\laragon\\www\\classco\\resources\\views\/showsolution.blade.php",
    "line": 5,
    "trace": [
        {
            "file": "C:\\laragon\\www\\classco\\resources\\views\/showsolution.blade.php",
            "line": 5,
            "function": "handleError",
            "class": "Illuminate\\Foundation\\Bootstrap\\HandleExceptions",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php",
            "line": 107,
            "function": "require"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php",
            "line": 108,
            "function": "Illuminate\\Filesystem\\{closure}",
            "class": "Illuminate\\Filesystem\\Filesystem",
            "type": "::"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\PhpEngine.php",
            "line": 58,
            "function": "getRequire",
            "class": "Illuminate\\Filesystem\\Filesystem",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\CompilerEngine.php",
            "line": 61,
            "function": "evaluatePath",
            "class": "Illuminate\\View\\Engines\\PhpEngine",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\facade\\ignition\\src\\Views\\Engines\\CompilerEngine.php",
            "line": 37,
            "function": "get",
            "class": "Illuminate\\View\\Engines\\CompilerEngine",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php",
            "line": 139,
            "function": "get",
            "class": "Facade\\Ignition\\Views\\Engines\\CompilerEngine",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php",
            "line": 122,
            "function": "getContents",
            "class": "Illuminate\\View\\View",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php",
            "line": 91,
            "function": "renderContents",
            "class": "Illuminate\\View\\View",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php",
            "line": 62,
            "function": "render",
            "class": "Illuminate\\View\\View",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php",
            "line": 34,
            "function": "setContent",
            "class": "Illuminate\\Http\\Response",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 765,
            "function": "__construct",
            "class": "Illuminate\\Http\\Response",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 737,
            "function": "toResponse",
            "class": "Illuminate\\Routing\\Router",
            "type": "::"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 691,
            "function": "prepareResponse",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php",
            "line": 41,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php",
            "line": 77,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php",
            "line": 49,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\View\\Middleware\\ShareErrorsFromSession",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php",
            "line": 121,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php",
            "line": 63,
            "function": "handleStatefulRequest",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php",
            "line": 67,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\EncryptCookies",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 693,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 668,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 634,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 623,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php",
            "line": 87,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 323,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 235,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 171,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 126,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 118,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 596,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 258,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\symfony\\console\\Application.php",
            "line": 920,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\symfony\\console\\Application.php",
            "line": 266,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\symfony\\console\\Application.php",
            "line": 142,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "-&gt;"
        }
    ]
}</code></pre>
<div id="execution-results-GETsolution--solution-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETsolution--solution-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETsolution--solution-"></code></pre>
</div>
<div id="execution-error-GETsolution--solution-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETsolution--solution-"></code></pre>
</div>
<form id="form-GETsolution--solution-" data-method="GET" data-path="solution/{solution}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETsolution--solution-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETsolution--solution-" onclick="tryItOut('GETsolution--solution-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETsolution--solution-" onclick="cancelTryOut('GETsolution--solution-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETsolution--solution-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>solution/{solution}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>solution</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="solution" data-endpoint="GETsolution--solution-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Show the form for editing the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/solution/ut/edit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/solution/ut/edit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Trying to get property 'id' of non-object (View: C:\\laragon\\www\\classco\\resources\\views\\editsolution.blade.php)",
    "exception": "Facade\\Ignition\\Exceptions\\ViewException",
    "file": "C:\\laragon\\www\\classco\\resources\\views\/editsolution.blade.php",
    "line": 5,
    "trace": [
        {
            "file": "C:\\laragon\\www\\classco\\resources\\views\/editsolution.blade.php",
            "line": 5,
            "function": "handleError",
            "class": "Illuminate\\Foundation\\Bootstrap\\HandleExceptions",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php",
            "line": 107,
            "function": "require"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php",
            "line": 108,
            "function": "Illuminate\\Filesystem\\{closure}",
            "class": "Illuminate\\Filesystem\\Filesystem",
            "type": "::"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\PhpEngine.php",
            "line": 58,
            "function": "getRequire",
            "class": "Illuminate\\Filesystem\\Filesystem",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\CompilerEngine.php",
            "line": 61,
            "function": "evaluatePath",
            "class": "Illuminate\\View\\Engines\\PhpEngine",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\facade\\ignition\\src\\Views\\Engines\\CompilerEngine.php",
            "line": 37,
            "function": "get",
            "class": "Illuminate\\View\\Engines\\CompilerEngine",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php",
            "line": 139,
            "function": "get",
            "class": "Facade\\Ignition\\Views\\Engines\\CompilerEngine",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php",
            "line": 122,
            "function": "getContents",
            "class": "Illuminate\\View\\View",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php",
            "line": 91,
            "function": "renderContents",
            "class": "Illuminate\\View\\View",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php",
            "line": 62,
            "function": "render",
            "class": "Illuminate\\View\\View",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php",
            "line": 34,
            "function": "setContent",
            "class": "Illuminate\\Http\\Response",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 765,
            "function": "__construct",
            "class": "Illuminate\\Http\\Response",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 737,
            "function": "toResponse",
            "class": "Illuminate\\Routing\\Router",
            "type": "::"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 691,
            "function": "prepareResponse",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php",
            "line": 41,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php",
            "line": 77,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php",
            "line": 49,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\View\\Middleware\\ShareErrorsFromSession",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php",
            "line": 121,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php",
            "line": 63,
            "function": "handleStatefulRequest",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Session\\Middleware\\StartSession",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php",
            "line": 67,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Cookie\\Middleware\\EncryptCookies",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 693,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 668,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 634,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 623,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 166,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php",
            "line": 87,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 37,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 141,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 110,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 323,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 235,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 171,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 126,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 118,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 596,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 258,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\symfony\\console\\Application.php",
            "line": 920,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\symfony\\console\\Application.php",
            "line": 266,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\symfony\\console\\Application.php",
            "line": 142,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\laragon\\www\\classco\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "-&gt;"
        }
    ]
}</code></pre>
<div id="execution-results-GETsolution--solution--edit" hidden>
    <blockquote>Received response<span id="execution-response-status-GETsolution--solution--edit"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETsolution--solution--edit"></code></pre>
</div>
<div id="execution-error-GETsolution--solution--edit" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETsolution--solution--edit"></code></pre>
</div>
<form id="form-GETsolution--solution--edit" data-method="GET" data-path="solution/{solution}/edit" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETsolution--solution--edit', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETsolution--solution--edit" onclick="tryItOut('GETsolution--solution--edit');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETsolution--solution--edit" onclick="cancelTryOut('GETsolution--solution--edit');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETsolution--solution--edit" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>solution/{solution}/edit</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>solution</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="solution" data-endpoint="GETsolution--solution--edit" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Update the specified resource in storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://localhost/solution/voluptatum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/solution/voluptatum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-PUTsolution--solution-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTsolution--solution-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTsolution--solution-"></code></pre>
</div>
<div id="execution-error-PUTsolution--solution-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTsolution--solution-"></code></pre>
</div>
<form id="form-PUTsolution--solution-" data-method="PUT" data-path="solution/{solution}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTsolution--solution-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTsolution--solution-" onclick="tryItOut('PUTsolution--solution-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTsolution--solution-" onclick="cancelTryOut('PUTsolution--solution-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTsolution--solution-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>solution/{solution}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>solution/{solution}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>solution</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="solution" data-endpoint="PUTsolution--solution-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Remove the specified resource from storage.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost/solution/culpa" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/solution/culpa"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-DELETEsolution--solution-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEsolution--solution-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEsolution--solution-"></code></pre>
</div>
<div id="execution-error-DELETEsolution--solution-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEsolution--solution-"></code></pre>
</div>
<form id="form-DELETEsolution--solution-" data-method="DELETE" data-path="solution/{solution}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEsolution--solution-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEsolution--solution-" onclick="tryItOut('DELETEsolution--solution-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEsolution--solution-" onclick="cancelTryOut('DELETEsolution--solution-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEsolution--solution-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>solution/{solution}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>solution</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="solution" data-endpoint="DELETEsolution--solution-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Show the application&#039;s login form.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
&lt;!doctype html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;

    &lt;!-- CSRF Token --&gt;
    &lt;meta name="csrf-token" content="thMl7mpIUSrFu1DFdMBtxabY8YxVs8kP2jaywjJW"&gt;

    &lt;title&gt;Laravel&lt;/title&gt;

    &lt;!-- Scripts --&gt;
    &lt;script src="http://localhost/js/app.js" defer&gt;&lt;/script&gt;

    &lt;!-- Fonts --&gt;
    &lt;link rel="dns-prefetch" href="//fonts.gstatic.com"&gt;
    &lt;link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"&gt;

    &lt;!-- Styles --&gt;
    &lt;link href="http://localhost/css/app.css" rel="stylesheet"&gt;

    &lt;!-- Footer --&gt;
    &lt;style&gt;
            footer {
            text-align: center;
            }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
        &lt;div id="app"&gt;
        &lt;nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm"&gt;
            &lt;div class="container"&gt;
                &lt;a class="navbar-brand" href="http://localhost/home"&gt;
                    Laravel
                &lt;/a&gt;
                &lt;button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"&gt;
                    &lt;span class="navbar-toggler-icon"&gt;&lt;/span&gt;
                &lt;/button&gt;

                &lt;div class="collapse navbar-collapse" id="navbarSupportedContent"&gt;
                    &lt;!-- Left Side Of Navbar --&gt;
                    &lt;ul class="navbar-nav mr-auto"&gt;

                    &lt;/ul&gt;

                    &lt;!-- Right Side Of Navbar --&gt;
                    &lt;ul class="navbar-nav ml-auto"&gt;
                        &lt;!-- Authentication Links --&gt;
                                                    &lt;li class="nav-item"&gt;
                                &lt;a class="nav-link" href="http://localhost/login"&gt;Login&lt;/a&gt;
                            &lt;/li&gt;
                                                            &lt;li class="nav-item"&gt;
                                    &lt;a class="nav-link" href="http://localhost/register"&gt;Register&lt;/a&gt;
                                &lt;/li&gt;
                                                                        &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/nav&gt;

        &lt;div class="container"&gt;
        &lt;h1&gt;&lt;/h1&gt;
            &lt;div class="container"&gt;
    &lt;div class="row justify-content-center"&gt;
        &lt;div class="col-md-8"&gt;
            &lt;div class="card"&gt;
                &lt;div class="card-header"&gt;Login&lt;/div&gt;

                &lt;div class="card-body"&gt;
                    &lt;form method="POST" action="http://localhost/login"&gt;
                        &lt;input type="hidden" name="_token" value="thMl7mpIUSrFu1DFdMBtxabY8YxVs8kP2jaywjJW"&gt;
                        &lt;div class="form-group row"&gt;
                            &lt;label for="email" class="col-md-4 col-form-label text-md-right"&gt;E-Mail Address&lt;/label&gt;

                            &lt;div class="col-md-6"&gt;
                                &lt;input id="email" type="email" class="form-control " name="email" value="" required autocomplete="email" autofocus&gt;

                                                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class="form-group row"&gt;
                            &lt;label for="password" class="col-md-4 col-form-label text-md-right"&gt;Password&lt;/label&gt;

                            &lt;div class="col-md-6"&gt;
                                &lt;input id="password" type="password" class="form-control " name="password" required autocomplete="current-password"&gt;

                                                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class="form-group row"&gt;
                            &lt;div class="col-md-6 offset-md-4"&gt;
                                &lt;div class="form-check"&gt;
                                    &lt;input class="form-check-input" type="checkbox" name="remember" id="remember" &gt;

                                    &lt;label class="form-check-label" for="remember"&gt;
                                        Remember Me
                                    &lt;/label&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class="form-group row mb-0"&gt;
                            &lt;div class="col-md-8 offset-md-4"&gt;
                                &lt;button type="submit" class="btn btn-primary"&gt;
                                    Login
                                &lt;/button&gt;

                                                                    &lt;a class="btn btn-link" href="http://localhost/password/reset"&gt;
                                        Forgot Your Password?
                                    &lt;/a&gt;
                                                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/form&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;footer&gt;&lt;p&gt;Classco for &lt;a href="https://klasconnect.com/"&gt;Klasconnect&lt;/a&gt;, by &lt;a href="https://twitter.com/JustCabyr"&gt;@JustCabyr&lt;/a&gt;.&lt;/p&gt;&lt;/footer&gt;
&lt;/html&gt;
</code></pre>
<div id="execution-results-GETlogin" hidden>
    <blockquote>Received response<span id="execution-response-status-GETlogin"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETlogin"></code></pre>
</div>
<div id="execution-error-GETlogin" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETlogin"></code></pre>
</div>
<form id="form-GETlogin" data-method="GET" data-path="login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETlogin', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETlogin" onclick="tryItOut('GETlogin');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETlogin" onclick="cancelTryOut('GETlogin');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETlogin" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>login</code></b>
</p>
</form>
<h2>Handle a login request to the application.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTlogin" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTlogin"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTlogin"></code></pre>
</div>
<div id="execution-error-POSTlogin" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTlogin"></code></pre>
</div>
<form id="form-POSTlogin" data-method="POST" data-path="login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTlogin', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTlogin" onclick="tryItOut('POSTlogin');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTlogin" onclick="cancelTryOut('POSTlogin');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTlogin" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>login</code></b>
</p>
</form>
<h2>Log the user out of the application.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTlogout" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTlogout"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTlogout"></code></pre>
</div>
<div id="execution-error-POSTlogout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTlogout"></code></pre>
</div>
<form id="form-POSTlogout" data-method="POST" data-path="logout" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTlogout', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTlogout" onclick="tryItOut('POSTlogout');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTlogout" onclick="cancelTryOut('POSTlogout');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTlogout" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>logout</code></b>
</p>
</form>
<h2>Show the application registration form.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
&lt;!doctype html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;

    &lt;!-- CSRF Token --&gt;
    &lt;meta name="csrf-token" content="thMl7mpIUSrFu1DFdMBtxabY8YxVs8kP2jaywjJW"&gt;

    &lt;title&gt;Laravel&lt;/title&gt;

    &lt;!-- Scripts --&gt;
    &lt;script src="http://localhost/js/app.js" defer&gt;&lt;/script&gt;

    &lt;!-- Fonts --&gt;
    &lt;link rel="dns-prefetch" href="//fonts.gstatic.com"&gt;
    &lt;link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"&gt;

    &lt;!-- Styles --&gt;
    &lt;link href="http://localhost/css/app.css" rel="stylesheet"&gt;

    &lt;!-- Footer --&gt;
    &lt;style&gt;
            footer {
            text-align: center;
            }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
        &lt;div id="app"&gt;
        &lt;nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm"&gt;
            &lt;div class="container"&gt;
                &lt;a class="navbar-brand" href="http://localhost/home"&gt;
                    Laravel
                &lt;/a&gt;
                &lt;button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"&gt;
                    &lt;span class="navbar-toggler-icon"&gt;&lt;/span&gt;
                &lt;/button&gt;

                &lt;div class="collapse navbar-collapse" id="navbarSupportedContent"&gt;
                    &lt;!-- Left Side Of Navbar --&gt;
                    &lt;ul class="navbar-nav mr-auto"&gt;

                    &lt;/ul&gt;

                    &lt;!-- Right Side Of Navbar --&gt;
                    &lt;ul class="navbar-nav ml-auto"&gt;
                        &lt;!-- Authentication Links --&gt;
                                                    &lt;li class="nav-item"&gt;
                                &lt;a class="nav-link" href="http://localhost/login"&gt;Login&lt;/a&gt;
                            &lt;/li&gt;
                                                            &lt;li class="nav-item"&gt;
                                    &lt;a class="nav-link" href="http://localhost/register"&gt;Register&lt;/a&gt;
                                &lt;/li&gt;
                                                                        &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/nav&gt;

        &lt;div class="container"&gt;
        &lt;h1&gt;&lt;/h1&gt;
            &lt;div class="container"&gt;
    &lt;div class="row justify-content-center"&gt;
        &lt;div class="col-md-8"&gt;
            &lt;div class="card"&gt;
                &lt;div class="card-header"&gt;Register&lt;/div&gt;

                &lt;div class="card-body"&gt;
                    &lt;form method="POST" action="http://localhost/register"&gt;
                        &lt;input type="hidden" name="_token" value="thMl7mpIUSrFu1DFdMBtxabY8YxVs8kP2jaywjJW"&gt;
                        &lt;div class="form-group row"&gt;
                            &lt;label for="name" class="col-md-4 col-form-label text-md-right"&gt;Name&lt;/label&gt;

                            &lt;div class="col-md-6"&gt;
                                &lt;input id="name" type="text" class="form-control " name="name" value="" required autocomplete="name" autofocus&gt;

                                                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class="form-group row"&gt;
                            &lt;label for="email" class="col-md-4 col-form-label text-md-right"&gt;E-Mail Address&lt;/label&gt;

                            &lt;div class="col-md-6"&gt;
                                &lt;input id="email" type="email" class="form-control " name="email" value="" required autocomplete="email"&gt;

                                                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class="form-group row"&gt;
                            &lt;label for="password" class="col-md-4 col-form-label text-md-right"&gt;Password&lt;/label&gt;

                            &lt;div class="col-md-6"&gt;
                                &lt;input id="password" type="password" class="form-control " name="password" required autocomplete="new-password"&gt;

                                                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class="form-group row"&gt;
                            &lt;label for="password-confirm" class="col-md-4 col-form-label text-md-right"&gt;Confirm Password&lt;/label&gt;

                            &lt;div class="col-md-6"&gt;
                                &lt;input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class="form-group row mb-0"&gt;
                            &lt;div class="col-md-6 offset-md-4"&gt;
                                &lt;button type="submit" class="btn btn-primary"&gt;
                                    Register
                                &lt;/button&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/form&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;footer&gt;&lt;p&gt;Classco for &lt;a href="https://klasconnect.com/"&gt;Klasconnect&lt;/a&gt;, by &lt;a href="https://twitter.com/JustCabyr"&gt;@JustCabyr&lt;/a&gt;.&lt;/p&gt;&lt;/footer&gt;
&lt;/html&gt;
</code></pre>
<div id="execution-results-GETregister" hidden>
    <blockquote>Received response<span id="execution-response-status-GETregister"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETregister"></code></pre>
</div>
<div id="execution-error-GETregister" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETregister"></code></pre>
</div>
<form id="form-GETregister" data-method="GET" data-path="register" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETregister', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETregister" onclick="tryItOut('GETregister');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETregister" onclick="cancelTryOut('GETregister');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETregister" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>register</code></b>
</p>
</form>
<h2>Handle a registration request for the application.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTregister" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTregister"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTregister"></code></pre>
</div>
<div id="execution-error-POSTregister" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTregister"></code></pre>
</div>
<form id="form-POSTregister" data-method="POST" data-path="register" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTregister', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTregister" onclick="tryItOut('POSTregister');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTregister" onclick="cancelTryOut('POSTregister');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTregister" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>register</code></b>
</p>
</form>
<h2>Display the form to request a password reset link.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
&lt;!doctype html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;

    &lt;!-- CSRF Token --&gt;
    &lt;meta name="csrf-token" content="thMl7mpIUSrFu1DFdMBtxabY8YxVs8kP2jaywjJW"&gt;

    &lt;title&gt;Laravel&lt;/title&gt;

    &lt;!-- Scripts --&gt;
    &lt;script src="http://localhost/js/app.js" defer&gt;&lt;/script&gt;

    &lt;!-- Fonts --&gt;
    &lt;link rel="dns-prefetch" href="//fonts.gstatic.com"&gt;
    &lt;link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"&gt;

    &lt;!-- Styles --&gt;
    &lt;link href="http://localhost/css/app.css" rel="stylesheet"&gt;

    &lt;!-- Footer --&gt;
    &lt;style&gt;
            footer {
            text-align: center;
            }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
        &lt;div id="app"&gt;
        &lt;nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm"&gt;
            &lt;div class="container"&gt;
                &lt;a class="navbar-brand" href="http://localhost/home"&gt;
                    Laravel
                &lt;/a&gt;
                &lt;button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"&gt;
                    &lt;span class="navbar-toggler-icon"&gt;&lt;/span&gt;
                &lt;/button&gt;

                &lt;div class="collapse navbar-collapse" id="navbarSupportedContent"&gt;
                    &lt;!-- Left Side Of Navbar --&gt;
                    &lt;ul class="navbar-nav mr-auto"&gt;

                    &lt;/ul&gt;

                    &lt;!-- Right Side Of Navbar --&gt;
                    &lt;ul class="navbar-nav ml-auto"&gt;
                        &lt;!-- Authentication Links --&gt;
                                                    &lt;li class="nav-item"&gt;
                                &lt;a class="nav-link" href="http://localhost/login"&gt;Login&lt;/a&gt;
                            &lt;/li&gt;
                                                            &lt;li class="nav-item"&gt;
                                    &lt;a class="nav-link" href="http://localhost/register"&gt;Register&lt;/a&gt;
                                &lt;/li&gt;
                                                                        &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/nav&gt;

        &lt;div class="container"&gt;
        &lt;h1&gt;&lt;/h1&gt;
            &lt;div class="container"&gt;
    &lt;div class="row justify-content-center"&gt;
        &lt;div class="col-md-8"&gt;
            &lt;div class="card"&gt;
                &lt;div class="card-header"&gt;Reset Password&lt;/div&gt;

                &lt;div class="card-body"&gt;

                    &lt;form method="POST" action="http://localhost/password/email"&gt;
                        &lt;input type="hidden" name="_token" value="thMl7mpIUSrFu1DFdMBtxabY8YxVs8kP2jaywjJW"&gt;
                        &lt;div class="form-group row"&gt;
                            &lt;label for="email" class="col-md-4 col-form-label text-md-right"&gt;E-Mail Address&lt;/label&gt;

                            &lt;div class="col-md-6"&gt;
                                &lt;input id="email" type="email" class="form-control " name="email" value="" required autocomplete="email" autofocus&gt;

                                                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class="form-group row mb-0"&gt;
                            &lt;div class="col-md-6 offset-md-4"&gt;
                                &lt;button type="submit" class="btn btn-primary"&gt;
                                    Send Password Reset Link
                                &lt;/button&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/form&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;footer&gt;&lt;p&gt;Classco for &lt;a href="https://klasconnect.com/"&gt;Klasconnect&lt;/a&gt;, by &lt;a href="https://twitter.com/JustCabyr"&gt;@JustCabyr&lt;/a&gt;.&lt;/p&gt;&lt;/footer&gt;
&lt;/html&gt;
</code></pre>
<div id="execution-results-GETpassword-reset" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpassword-reset"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpassword-reset"></code></pre>
</div>
<div id="execution-error-GETpassword-reset" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpassword-reset"></code></pre>
</div>
<form id="form-GETpassword-reset" data-method="GET" data-path="password/reset" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpassword-reset', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpassword-reset" onclick="tryItOut('GETpassword-reset');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpassword-reset" onclick="cancelTryOut('GETpassword-reset');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpassword-reset" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>password/reset</code></b>
</p>
</form>
<h2>Send a reset link to the given user.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/password/email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTpassword-email" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTpassword-email"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTpassword-email"></code></pre>
</div>
<div id="execution-error-POSTpassword-email" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpassword-email"></code></pre>
</div>
<form id="form-POSTpassword-email" data-method="POST" data-path="password/email" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTpassword-email', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTpassword-email" onclick="tryItOut('POSTpassword-email');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTpassword-email" onclick="cancelTryOut('POSTpassword-email');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTpassword-email" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>password/email</code></b>
</p>
</form>
<h2>Display the password reset view for the given token.</h2>
<p>If no token is present, display the link request form.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/password/reset/odit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/password/reset/odit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
&lt;!doctype html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;

    &lt;!-- CSRF Token --&gt;
    &lt;meta name="csrf-token" content="thMl7mpIUSrFu1DFdMBtxabY8YxVs8kP2jaywjJW"&gt;

    &lt;title&gt;Laravel&lt;/title&gt;

    &lt;!-- Scripts --&gt;
    &lt;script src="http://localhost/js/app.js" defer&gt;&lt;/script&gt;

    &lt;!-- Fonts --&gt;
    &lt;link rel="dns-prefetch" href="//fonts.gstatic.com"&gt;
    &lt;link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"&gt;

    &lt;!-- Styles --&gt;
    &lt;link href="http://localhost/css/app.css" rel="stylesheet"&gt;

    &lt;!-- Footer --&gt;
    &lt;style&gt;
            footer {
            text-align: center;
            }
    &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
        &lt;div id="app"&gt;
        &lt;nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm"&gt;
            &lt;div class="container"&gt;
                &lt;a class="navbar-brand" href="http://localhost/home"&gt;
                    Laravel
                &lt;/a&gt;
                &lt;button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"&gt;
                    &lt;span class="navbar-toggler-icon"&gt;&lt;/span&gt;
                &lt;/button&gt;

                &lt;div class="collapse navbar-collapse" id="navbarSupportedContent"&gt;
                    &lt;!-- Left Side Of Navbar --&gt;
                    &lt;ul class="navbar-nav mr-auto"&gt;

                    &lt;/ul&gt;

                    &lt;!-- Right Side Of Navbar --&gt;
                    &lt;ul class="navbar-nav ml-auto"&gt;
                        &lt;!-- Authentication Links --&gt;
                                                    &lt;li class="nav-item"&gt;
                                &lt;a class="nav-link" href="http://localhost/login"&gt;Login&lt;/a&gt;
                            &lt;/li&gt;
                                                            &lt;li class="nav-item"&gt;
                                    &lt;a class="nav-link" href="http://localhost/register"&gt;Register&lt;/a&gt;
                                &lt;/li&gt;
                                                                        &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/nav&gt;

        &lt;div class="container"&gt;
        &lt;h1&gt;&lt;/h1&gt;
            &lt;div class="container"&gt;
    &lt;div class="row justify-content-center"&gt;
        &lt;div class="col-md-8"&gt;
            &lt;div class="card"&gt;
                &lt;div class="card-header"&gt;Reset Password&lt;/div&gt;

                &lt;div class="card-body"&gt;
                    &lt;form method="POST" action="http://localhost/password/reset"&gt;
                        &lt;input type="hidden" name="_token" value="thMl7mpIUSrFu1DFdMBtxabY8YxVs8kP2jaywjJW"&gt;
                        &lt;input type="hidden" name="token" value="odit"&gt;

                        &lt;div class="form-group row"&gt;
                            &lt;label for="email" class="col-md-4 col-form-label text-md-right"&gt;E-Mail Address&lt;/label&gt;

                            &lt;div class="col-md-6"&gt;
                                &lt;input id="email" type="email" class="form-control " name="email" value="" required autocomplete="email" autofocus&gt;

                                                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class="form-group row"&gt;
                            &lt;label for="password" class="col-md-4 col-form-label text-md-right"&gt;Password&lt;/label&gt;

                            &lt;div class="col-md-6"&gt;
                                &lt;input id="password" type="password" class="form-control " name="password" required autocomplete="new-password"&gt;

                                                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class="form-group row"&gt;
                            &lt;label for="password-confirm" class="col-md-4 col-form-label text-md-right"&gt;Confirm Password&lt;/label&gt;

                            &lt;div class="col-md-6"&gt;
                                &lt;input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class="form-group row mb-0"&gt;
                            &lt;div class="col-md-6 offset-md-4"&gt;
                                &lt;button type="submit" class="btn btn-primary"&gt;
                                    Reset Password
                                &lt;/button&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/form&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;footer&gt;&lt;p&gt;Classco for &lt;a href="https://klasconnect.com/"&gt;Klasconnect&lt;/a&gt;, by &lt;a href="https://twitter.com/JustCabyr"&gt;@JustCabyr&lt;/a&gt;.&lt;/p&gt;&lt;/footer&gt;
&lt;/html&gt;
</code></pre>
<div id="execution-results-GETpassword-reset--token-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpassword-reset--token-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpassword-reset--token-"></code></pre>
</div>
<div id="execution-error-GETpassword-reset--token-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpassword-reset--token-"></code></pre>
</div>
<form id="form-GETpassword-reset--token-" data-method="GET" data-path="password/reset/{token}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpassword-reset--token-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpassword-reset--token-" onclick="tryItOut('GETpassword-reset--token-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpassword-reset--token-" onclick="cancelTryOut('GETpassword-reset--token-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpassword-reset--token-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>password/reset/{token}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="token" data-endpoint="GETpassword-reset--token-" data-component="url" required  hidden>
<br>
</p>
</form>
<h2>Reset the given user&#039;s password.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTpassword-reset" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTpassword-reset"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTpassword-reset"></code></pre>
</div>
<div id="execution-error-POSTpassword-reset" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpassword-reset"></code></pre>
</div>
<form id="form-POSTpassword-reset" data-method="POST" data-path="password/reset" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTpassword-reset', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTpassword-reset" onclick="tryItOut('POSTpassword-reset');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTpassword-reset" onclick="cancelTryOut('POSTpassword-reset');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTpassword-reset" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>password/reset</code></b>
</p>
</form>
<h2>Display the password confirmation view.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/password/confirm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETpassword-confirm" hidden>
    <blockquote>Received response<span id="execution-response-status-GETpassword-confirm"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETpassword-confirm"></code></pre>
</div>
<div id="execution-error-GETpassword-confirm" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETpassword-confirm"></code></pre>
</div>
<form id="form-GETpassword-confirm" data-method="GET" data-path="password/confirm" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETpassword-confirm', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETpassword-confirm" onclick="tryItOut('GETpassword-confirm');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETpassword-confirm" onclick="cancelTryOut('GETpassword-confirm');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETpassword-confirm" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>password/confirm</code></b>
</p>
</form>
<h2>Confirm the given user&#039;s password.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/password/confirm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<div id="execution-results-POSTpassword-confirm" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTpassword-confirm"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTpassword-confirm"></code></pre>
</div>
<div id="execution-error-POSTpassword-confirm" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpassword-confirm"></code></pre>
</div>
<form id="form-POSTpassword-confirm" data-method="POST" data-path="password/confirm" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTpassword-confirm', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTpassword-confirm" onclick="tryItOut('POSTpassword-confirm');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTpassword-confirm" onclick="cancelTryOut('POSTpassword-confirm');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTpassword-confirm" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>password/confirm</code></b>
</p>
</form>
<h2>Show the application dashboard.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/home" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/home"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GEThome" hidden>
    <blockquote>Received response<span id="execution-response-status-GEThome"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GEThome"></code></pre>
</div>
<div id="execution-error-GEThome" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GEThome"></code></pre>
</div>
<form id="form-GEThome" data-method="GET" data-path="home" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GEThome', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GEThome" onclick="tryItOut('GEThome');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GEThome" onclick="cancelTryOut('GEThome');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GEThome" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>home</code></b>
</p>
</form>
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                            </div>
            </div>
</div>
<script>
    $(function () {
        var languages = ["bash","javascript"];
        setupLanguages(languages);
    });
</script>
</body>
</html>
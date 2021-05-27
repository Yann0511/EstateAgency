<!doctype html>
<html>
    <head>
       @include('includes.head')
    </head>

    <body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">

		<header id="fh5co-header-section" class="sticky-banner">
            @include('includes.header')
        </header>

        @yield('content')

        <footer>
            @include('includes.footer')
        </footer>

        @include('includes.script')

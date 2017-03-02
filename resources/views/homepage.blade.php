@extends('layout')

@section('identifier')

<body class="homepage">

@stop
        
@section('content')
	<div class="sectionCover homepageCover">
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="hero">
					<div class="inner">
						<h1>
							Hand-made redizajnovaný nábytok a doplnky
						</h1>
						<a href="{{ url('ponuka') }}" class="btn">
							Pozrite si ponuku
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="productsList">
		<div class="container-fluid">
			<div class="row-fluid">
				<h2 class="sectionTitle">
					Najnovšie kúsky v našej ponuke
				</h2>
				<!--
				<ul class="row-fluid iconCols iconCols2">
					<li class="col-sm-6">
						<h3></h3>
						<p>
						</p>
						<a class="learnMore" href="{{ url('services') }}">
							Learn more >
						</a>
					</li>
				</ul>
				-->
			</div>
		</div>
	</div>
	<div class="sectionFullWidth aboutUs">
		<div class="container-fluid">
			<div class="row-fluid">
				<h2 class="sectionTitle">
					"Nech je domov odrazom vašej duše"
				</h2>
				<div class="ctaBlock">
					<a href="{{ url('o-nas') }}" class="btn white">
						Spoznajte nás
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="sectionFullWidth redekoracia">
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="col-sm-12">
					<h2 class="sectionTitle">
						Redekorácia vášho nábytku
					</h2>
				</div>
				<div class="col-sm-6">
					<a href="{{ url('redekoracia') }}">
						<img alt="Redekorácia" src="{{ asset('images/redekoracia.jpg') }}" />
					</a>
				</div>
				<div class="col-sm-6">
					<p>
						Pošlite nám váš starý kúsok a my mu dáme nový odev podľa vášho želania.
					</p>
				</div>
				<div class="col-sm-12">
					<div class="ctaBlock">
						<a class="btn" href="{{ url('redekoracia') }}">
							Mám záujem
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

@stop
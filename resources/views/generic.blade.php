@extends('layout')
@section('content')
    <!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>Eleifend vitae urna</p>
						<h2>Generic Page Template</h2>
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
							<header class="align-center">
								<p>{{$place->shorttitle}}</p>
								<h2>{{$place->place}}</h2>
							</header>
							<p>{{$place->description}}</p>
						</div>
					</div>
				</div>
			</section>
@endsection

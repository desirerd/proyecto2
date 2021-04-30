@extends('layouts.app')

@section('body-class', 'profile-page')

@section('content')
<div class="header header-filter" style="background-image: url('{{ asset('../img/img3.jpg') }}');"></div>


<div class="main main-raised">
			<div class="profile-content">
	            <div class="container">
	                <div class="description text-center">
	                   <div class="profile text-center">
	                        <div class="avatar">
	                           <img src="../img/christian.jpg" alt="Circle Image" class="img-circle img-responsive img-raised">
	                        </div>
	                        <div class="name">
	                            <h3 class="title">{{$doctor->nombre}} {{$doctor->apellidos}} </h3>
								<h6>{{$doctor->especialidad->nombre}}</h6>
	                        </div>
	                   </div>
	                </div>
	                <div class="description text-center">
                        <p>{{$doctor->description}} </p>
	                </div>

					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<div class="profile-tabs">
			                    <div class="nav-align-center">
									<ul class="nav nav-pills" role="tablist">
										<li class="active">
											<a href="#studio" role="tab" data-toggle="tab">
												<i class="material-icons">camera</i>
												Sección 1
											</a>
										</li>
										<li>
				                            <a href="#work" role="tab" data-toggle="tab">
												<i class="material-icons">palette</i>
												Sección 2
				                            </a>
				                        </li>
				                        <li>
				                            <a href="#shows" role="tab" data-toggle="tab">
												<i class="material-icons">favorite</i>
				                                Sección 3
				                            </a>
				                        </li>
				                    </ul>

								</div>
							</div>
							<!-- End Profile Tabs -->
						</div>
	                </div>

	            </div>
	        </div>
		</div>

    </div>






@include('includes.footer')
@endsection

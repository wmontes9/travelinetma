@extends("layouts.admin")
@section('title','Perfil')

@section("content")
        <!-- Page-header start -->
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <div class="d-inline">
                            <h4>Perfil de usuario</h4>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item" style="float: left;">
                                <a href="../index.html"> <i class="feather icon-home"></i> </a>
                            </li>
                            <li class="breadcrumb-item" style="float: left;"><a href="#!">Perfil</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-header end -->

        <!-- Page-body start -->
        <div class="page-body">
            <!--profile cover start-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="cover-profile">
                        <div class="profile-bg-img">
                            <img class="profile-bg-img img-fluid" src="{{ url('/img/panel/user-profile/bg-img1.jpg') }}" alt="bg-img">
                            <div class="card-block user-info">
                                <div class="col-md-12">
                                    <div class="media-left">
                                        <a href="#" class="profile-image">
                                            <img class="user-img img-radius" src="{{ url('/img/panel/user-profile/avatar')}}/{{ Auth::user()->foto }}" alt="user-img">
                                        </a>
                                    </div>
                                    <div class="media-body row">
                                        <div class="col-lg-12">
                                            <div class="user-title">
                                                <h2> {{ Auth::user()->name }} </h2>
                                                <span class="text-white">{{ Auth::user()->apellidos }}</span>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="pull-right cover-btn">
                                                <button type="button" class="btn btn-primary m-r-10 m-b-5"><i class="icofont icofont-plus"></i>
                                                    Follow</button>
                                                <button type="button" class="btn btn-primary"><i class="icofont icofont-ui-messaging"></i>
                                                    Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--profile cover end-->
            <div class="row">
                <div class="col-lg-12">
                    <!-- tab header start -->
                    <div class="tab-header card">
                        <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#personal" role="tab" aria-selected="true">Información personal</a>
                                <div class="slide"></div>
                            </li>
                            <li class="nav-item" style="display: none;">
                                <a class="nav-link" data-toggle="tab" href="#binfo" role="tab" aria-selected="false">User's Services</a>
                                <div class="slide"></div>
                            </li>
                            <li class="nav-item" style="display: none;">
                                <a class="nav-link" data-toggle="tab" href="#contacts" role="tab" aria-selected="false">User's Contacts</a>
                                <div class="slide"></div>
                            </li>
                            <li class="nav-item" style="display: none;">
                                <a class="nav-link" data-toggle="tab" href="#review" role="tab" aria-selected="false">Reviews</a>
                                <div class="slide"></div>
                            </li>
                        </ul>
                    </div>
                    <!-- tab header end -->
                    <!-- tab content start -->
                    <div class="tab-content">
                        <!-- tab panel personal start -->
                        <div class="tab-pane active" id="personal" role="tabpanel">
                            <!-- personal card start -->
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-header-text">Datos</h5>
                                    <button id="edit-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right">
                                        <i class="icofont icofont-edit"></i>
                                    </button>
                                </div>
                                <div class="card-block">
                                    <div class="view-info">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="general-info">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-xl-6">
                                                            <div class="table-responsive">
                                                                <table class="table m-0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row">
                                                                                Nombres
                                                                            </th>
                                                                            <td>
                                                                            	<input type="text" name="nombres" class="form-control" value="{{ Auth::user()->name }}">
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row"> Apellidos</th>
                                                                            <td><input type="text" name="nombres" class="form-control" value="{{ Auth::user()->apellidos }}"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row"> Documento</th>
                                                                            <td><input type="text" name="nombres" class="form-control" value="{{ Auth::user()->documento }}"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row"> Telefono</th>
                                                                            <td><input type="text" name="nombres" class="form-control" value="{{ Auth::user()->telefono }}"></td>
                                                                        </tr>
                                                                       
                                                                    </tbody>
                                                                </table>
                                                                <div class="modal-footer">
                                                                	<button type="button" class="btn btn-outline-primary">Actualizar</button>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        <!-- end of table col-lg-6 -->
                                                        <div class="col-lg-12 col-xl-6">
                                                            <div class="table-responsive">
                                                                <table class="table">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row">Correo</th>
                                                                            <td><input type="email" name="nombres" class="form-control" value="{{ Auth::user()->email }}"> </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Contraseña</th>
                                                                            <td><input type="password" class="form-control" name="nombres" value=""> </td>
                                                                        </tr>
                                                                        
                                                                    </tbody>
                                                                </table>
                                                                 <div class="modal-footer">
                                                                	<button type="button" class="btn btn-outline-primary">Cambiar</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end of table col-lg-6 -->
                                                    </div>
                                                    <!-- end of row -->
                                                </div>
                                                <!-- end of general info -->
                                            </div>
                                            <!-- end of col-lg-12 -->
                                        </div>
                                        <!-- end of row -->
                                    </div>
                                    <!-- end of view-info -->
  
                                    <!-- end of edit-info -->
                                </div>
                                <!-- end of card-block -->
                            </div>
                            
                            <!-- personal card end-->
                        </div>
                        <!-- tab pane personal end -->
                        <!-- tab pane info start -->

                    </div>
                    <!-- tab content end -->
                </div>
            </div>
        </div>
        <!-- Page-body end -->
@endsection
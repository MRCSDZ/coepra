<!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="../imagenes/cfelogo.png" width="160"> </a>

            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
               
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <?php echo $_SESSION['nombre_global']." "; ?><i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="MiPerfil.php"><i class="fa fa-user fa-fw"></i> Mi Perfil</a>
                        </li>
                        <li><a href="EditarMiPerfil.php"><i class="fa fa-gear fa-fw"></i> Modificar Perfil</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="cerrarsesion.php"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesion</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

                



            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       
                        

                        <li>
                            <a href="home.php"><i class="fa fa-home fa-fw"></i> Inicio<span class="fa arrow"></span></a>
                            
                            <!-- /.nav-second-level -->
                        </li>


                        

                         

                        <li>
                            <a href="#"><i class="fa fa-ambulance"></i> Ambulancias<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                <li>
                                    <a href="AgregarAmbulancias.php">Agregar</a>
                                </li>
                                <li>
                                    <a href="ConsultarAmbulancias.php">Consultar</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>


                        


                         

                        

                        

                        <li>
                            <a href="#"><i class="fa fa-hospital-o"></i> Hospitales<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                <li>
                                    <a href="AgregarHospitales.php">Agregar Hospitales</a>
                                </li>
                                <li>
                                    <a href="ConsultarHospitales.php">Consultar Hospitales</a>
                                </li>
                                
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                         <li>
                            <a href="#"><i class="fa fa-user"></i> Personal<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                <li>
                                    <a href="AgregarPersonales.php">Agregar Personales</a>
                                </li>
                                <li>
                                    <a href="ConsultarPersonales.php">Consultar Personales</a>
                                </li>
                                
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-medkit"></i> Servicios<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                <li>
                                    <a href="AgregarServiciosDisponibles.php">Agregar Servicios/Recursos</a>
                                </li>
                                <li>
                                    <a href="ConsultarServiciosDisponibles.php">Consultar Servicios</a>
                                </li>
                                <li>
                                    <a href="ConsultarRecursosDisponibles.php">Consultar Recursos</a>
                                </li>
                                
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        
                        <li>
                            <a href="#"><i class="fa fa-question-circle fa-fw"></i> Ayuda<span class="fa arrow"></span></a>
                            
                            <!-- /.nav-second-level -->
                        </li>


                        <li>
                            <a href="#"><i class="fa fa- fa-link fa-fw "></i> Enlaces<span class="fa arrow"></span></a>
                            
                            <!-- /.nav-second-level -->
                        </li>

                        



            
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
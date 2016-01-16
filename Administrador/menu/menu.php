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
                        <li><a href="../MiPerfil.php"><i class="fa fa-user fa-fw"></i> Mi Perfil</a>
                        </li>
                        <li><a href="../EditarMiPerfil.php"><i class="fa fa-gear fa-fw"></i> Modificar Perfil</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../cerrarsesion.php"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesion</a>
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
                            <a href="index.php"><i class="fa fa-home fa-fw"></i> Inicio</a>
                        </li>

                        <li>
                            <a href="Administrador.php"><i class="fa fa-dashboard fa-fw"></i> Panel</a>
                        </li>


                        <li>
                            <a href="#"><i class="fa fa-group"></i> Usuarios<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="CrearUsuario.php">Agregar</a>
                                </li>
                                <li>
                                    <a href="ConsultarUsuarios.php">Consultar</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-search"></i> Consultas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                <li>
                                   <a href="#"><i class="fa fa-bookmark fa-fw"></i>Cursos <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="ConsultarCursos.php">Cursos</a>
                                        </li>
                                        <li>
                                            <a href="ConsultarFichaIdentificacion.php">Fichas Identificacion</a>
                                        </li>
                                        <li>
                                            <a href="ConsultarInstructores.php">Instructores</a>
                                        </li>
                                        <li>
                                            <a href="ConsultarInstructoresAux.php">Instructores Auxiliares</a>
                                        </li>

                                        <li>
                                            <a href="ConsultarEvidencias.php">Evidencias</a>
                                        </li>

                                        <li>
                                            <a href="ConsultarAlumnos.php">Alumnos</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#"><i class="fa fa-user-md fa-fw"></i>TAMPS<span class="fa arrow"></a>
                                    <ul class="nav nav-third-level">
                                        
                                        <li>
                                            <a href="ConsultarTAMPS.php">TAMPS</a>
                                        </li>
                                        <li>
                                            <a href="ConsultarCapacitaciones.php">Capacitaciones</a>
                                        </li>

                                        
                                    </ul>
                                </li>

                                <li>
                                    <a href="ConsultarAmbulancias.php"><i class="fa fa-ambulance fa-fw"></i>Ambulancias</a>
                                </li>

                                <li>
                                    <a href="ConsularHospitales.php"><i class="fa fa-hospital-o fa-fw"></i>Hospitales</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                         <li>
                            <a href="CambiarRol.php"><i class="fa fa-male fa-fw"></i> Cambiar Rol</a>
                            
                            <!-- /.nav-second-level -->
                        </li>
                        

                        
                        <li>
                            <a href="#"><i class="fa fa-question-circle fa-fw"></i> Ayuda</a>
                            
                            <!-- /.nav-second-level -->
                        </li>


                        <li>
                            <a href="#"><i class="fa fa- fa-link fa-fw "></i> Enlaces</a>
                            
                            <!-- /.nav-second-level -->
                        </li>

                        



            
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
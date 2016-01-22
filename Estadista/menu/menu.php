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
                         
                            
                            <a href="Estadista.php"><i class="fa fa-dashboard fa-fw"></i> Panel Estadista</a>
                        </li>


                        <li>
                               <a href="FichaIdentificacion.php"><i class="fa fa-file fa-fw"></i> Ficha de Identificacion</a>
                            
                            
                        </li>


                        <li>
                            <a href="Cursos.php"><i class="fa fa-bookmark"></i> Cursos</span></a>
                            
                           
                        </li>

                        <li>
                            <a href="Alumnos.php"><i class="fa fa-group"></i> Alumnos</span></a>
                            
                           
                        </li>

                        <li>
                            <a href="TAMPS.php"><i class="fa fa-user-md"></i> TAMPS</span></a>
                            
                            
                        </li>

                        <li>
                            <a href="Hospitales.php"><i class="fa fa-hospital-o"></i> Hospitales</span></a>
                            
                           
                        </li>

                        <li>
                            <a href="Ambulancias.php"><i class="fa fa-ambulance"></i> Ambulancias</span></a>
                            
                            
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
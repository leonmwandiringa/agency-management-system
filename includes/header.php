<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="/" class="simple-text visible-lg">
                    &nbsp;
                </a>
                <a href="/" class="simple-text hidden-lg">
                    Hey Leon
                </a>
            </div>

            <ul class="nav">
                <li class="<?php echo ($page==1) ? 'active' : ''; ?>">
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>&nbsp;</p>
                    </a>
                </li>
                <li class="<?php echo ($page==2) ? 'active' : ''; ?>">
                    <a href="myprofile.php">
                        <i class="pe-7s-user"></i>
                        <p>&nbsp;</p>
                    </a>
                </li>
                <li class="<?php echo ($page==3) ? 'active' : ''; ?>">
                    <a href="users.php">
                        <i class="pe-7s-note2"></i>
                          <p>&nbsp;</p>
                    </a>
                </li>

                <li class="hidden-lg">
                    <a href="users.php">

                          <p>Logout</p>
                    </a>
                </li>

            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">


                    </ul>

                    <ul class="nav navbar-nav navbar-right ">

                        <li class="dropdown visible-lg">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    Whats Up
                                    <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Profile</a></li>

                                <li class="divider"></li>
                                <li><a href="#">Logout</a></li>
                              </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

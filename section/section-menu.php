        <header class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="<?=$containerClass?>">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>


                    <!-- Logo Image -->
                    <?php if ($LOGO_TYPE == "image") { ?>

                    <a class="brand logo-image" href="#">
                    <img alt="<?=$SiteTitle?>" src="<?=$LOGO_PATH?>">
                    </a>

                    <? } else { ?>

                    <!-- Logo -->
                    <a class="brand" href="#"><strong><i class="icon-reorder"></i> Stacks</strong></a>

                    <?php } ?>




                    <!-- Navigation -->
                    <nav class="nav-collapse collapse">
                        <ul class="nav">
                          <li class="active"><a href="#top">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#pricing">Pricing</a></li>
                            <li><a href="#team">Our Team</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <!-- <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Category 01</a></li>
                                    <li><a href="#">Category 02</a></li>
                                    <li><a href="#">Category 03</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">PM Says</li>
                                    <li><a href="#">Hurry Up</a></li>
                                    <li><a href="#">Get Your Work Done</a></li>
                                </ul>
                            </li> -->
                        </ul>


                    </nav><!--/.nav-collapse -->
                </div>
            </div>
        </header><!-- /.navbar -->
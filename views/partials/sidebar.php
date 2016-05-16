
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo $GLOBALS['config']['base_url'];?>">Chapeau Belle</a>
            </div>
            <!-- /.navbar-header -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo $GLOBALS["config"]["base_url"];?>">Dashboard</a>
                        </li>
						<li>
                            <a href="<?php echo $GLOBALS["config"]["base_url"];?>/products?cat_id=1">Incaltaminte</a>
                        </li>
						<li>
                            <a href="<?php echo $GLOBALS["config"]["base_url"];?>/products?cat_id=2">Palarii</a>
                        </li>
						<li>
                            <a href="<?php echo $GLOBALS["config"]["base_url"];?>/products?cat_id=3">Posete/Genti</a>
                        </li>
						<li>
                            <a href="<?php echo $GLOBALS["config"]["base_url"];?>/clients">Clienti</a>
							<ul class="nav nav-second-level">
								<li>
                                    <a href="<?php echo $GLOBALS["config"]["base_url"];?>/clients">Toti Clientii</a>
                                </li>
                                <li>
                                    <a href="<?php echo $GLOBALS["config"]["base_url"];?>/clients/add">Creare client</a>
                                </li>
                            </ul>
                        </li>
						<li>
                            <a href="<?php echo $GLOBALS["config"]["base_url"];?>/user/logout">Delogare</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

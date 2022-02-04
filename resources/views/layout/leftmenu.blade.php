<div id="leftmenu-wrap">
    <div class="panel-group slim-scroll" role="tablist">
        <div class="panel panel-default">
            <div id="leftmenuNav" class="panel-collapse collapse in" role="tabpanel">
                <div class="panel-body">
                    <!--  NAVIGATION Content -->
                    <ul id="navigation">
                        <li class="active open">
                            <a href="index.html">
                                <i class="fa fa-dashboard"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a role="button" tabindex="0">
                                <i class="fa fa-envelope"></i>
                                <span>Mail Box</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="mail-inbox.html">
                                        <i class="fa fa-angle-right"></i> Inbox
                                        <span class="label label-success">new</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="mail-compose.html">
                                        <i class="fa fa-angle-right"></i> Compose Mail</a>
                                </li>
                                <li>
                                    <a href="mail-single.html">
                                        <i class="fa fa-angle-right"></i> Single Mail</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a role="button" tabindex="0">
                                <i class="fa fa-bomb"></i>
                                <span>COMPLAINT</span>
                            </a>
                            <ul>
                                <li>
                                    <a href={{url('/complaints')}}>
                                        <i class="fa fa-angle-right"></i> Pending
                                        <span class="badge bg-danger">100</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="mail-compose.html">
                                        <i class="fa fa-angle-right"></i> In Proccess
                                        <span class="badge bg-info">100</span>
                                    </a>

                                </li>
                                <li>
                                    <a href="mail-single.html">
                                        <i class="fa fa-angle-right"></i> Closed
                                        <span class="badge bg-success">100</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href={{url('/cbe-branches')}}>
                                <i class="glyphicon glyphicon-random"></i>
                                <span>CBE BRANCHES</span>
                            </a>
                        </li>
                        <li>
                            <a href={{url('/departiments')}}>
                                <i class="fa fa-sitemap"></i>
                                <span>DEPARTIMENTS</span>
                            </a>
                        </li>
                        <li>
                            <a href={{url('/complaints-categories')}}>
                                <i class="fa fa-comments-o"></i>
                                <span>COMPLAINT CATEGORY</span>
                            </a>
                        </li>
                        <li>
                            <a role="button" tabindex="0">
                                <i class="fa fa-list"></i>
                                <span>SETTINGS</span>
                            </a>
                            <ul>
                                <li>
                                    <a href={{url('/staff-registration')}}>
                                        <i class="glyphicon glyphicon-user"></i> STAFF MANAGEMENT</a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fa fa-users"></i>USER MANAGEMENT</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                    <!--/ NAVIGATION Content -->
                </div>
            </div>
        </div>
        <div class="panel settings panel-default">
            <div class="panel-heading" role="tab">
                <h4 class="panel-title">
                    <a data-toggle="collapse" href="#leftmenuControls">General Settings
                        <i class="fa fa-angle-up"></i>
                    </a>
                </h4>
            </div>
        </div>
    </div>
</div>

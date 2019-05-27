 <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;background-color:#821A1A">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin/sanpham/danhsach" style="color: #fff;text-align: center;margin-left: 300%;width: 100%;">ADMIN HOT CUISINE</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right" >
                <!-- /.dropdown -->
                <li class="dropdown" style="color:#fff">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span style="color:#ECB731">{!!$user->name!!}</span><i class="fa fa-user fa-fw" style="color:#ECB731"></i>  <i class="fa fa-caret-down" style="color:#ECB731"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="admin/user"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        
                        <li class="divider"></li>
                        <li><a href="admin/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

           @include('admin.blocks.menu')
            <!-- /.navbar-static-side -->
        </nav>
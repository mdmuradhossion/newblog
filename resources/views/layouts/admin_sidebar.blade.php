<!-- Left Sidebar -->
<div class="left main-sidebar">

    <div class="sidebar-inner leftscroll">

        <div id="sidebar-menu">

            <ul>
                <li class="submenu">
                    <a class="active" href="{{route('admin.home')}}">
                        <i class="fas fa-bars"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li class="submenu">
                    <a href="{{route('blog.list')}}">

                        <i class="fas fa-file-alt"></i>
                        <span> Post </span>
                    </a>
                </li>

                <li class="submenu">
                    <a id="tables" href="#">
                        <i class="fas fa-file-alt"></i>
                        <span> Blog </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{route('blog.list')}}">
                                <span> Blog List</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('category.list')}}">
                                <span>Blog Category </span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="submenu">
                    <a id="website" href="#">
                        <i class="fab fa-wpforms"></i>
                        <span>Settings </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{route('web.settings')}}">Website settings</a>
                        </li>
{{--                        <li>--}}
{{--                            <a href="tables-datatable.html">Data Tables</a>--}}
{{--                        </li>--}}
                    </ul>
                </li>



                <li class="submenu">
                    <a href="#">
                        <span class="label radius-circle bg-danger float-right">18</span>
                        <i class="fas fa-envelope"></i>
                        <span> Mailbox </span>
                    </a>
                </li>



                <li class="submenu">
                    <a id="tables" href="#">
                        <i class="fas fa-table"></i>
                        <span> Tables </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="tables-basic.html">Basic Tables</a>
                        </li>
                        <li>
                            <a href="tables-datatable.html">Data Tables</a>
                        </li>
                    </ul>
                </li>


            </ul>

            <div class="clearfix"></div>

        </div>

        <div class="clearfix"></div>

    </div>

</div>
<!-- End Sidebar -->

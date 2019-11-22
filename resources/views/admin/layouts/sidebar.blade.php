<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Sandi Pratama</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
    
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
            <li class="active"><a href="{{ route('post.index')}}"><i class="fa fa-circle-o"></i> Posts</a></li>
            <li><a href="{{ route('category.index')}}"><i class="fa fa-circle-o"></i> Categories</a></li>
            <li><a href="{{ route('tag.index')}}"><i class="fa fa-circle-o"></i> Tags</a></li>   
            <li><a href="{{ route('user.index')}}"><i class="fa fa-circle-o"></i> Users</a></li>   
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
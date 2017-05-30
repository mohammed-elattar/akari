 <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>اعدادات الموقع</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{url('adminpanel/sitesetting')}}"><i class="fa fa-circle-o"></i>اعدادات رئيسية</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i>اعدادات أخري</a></li>
          </ul>
</li>

<li class="active treeview">
          <a href="{{url('/adminpanel/users')}}">
            <i class="fa fa-users"></i> <span>التحكم في الأعضاء</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{url('/adminpanel/users')}}"><i class="fa fa-circle-o"></i>كل الأعضاء</a></li>
            <li><a href="{{url('/adminpanel/users/create')}}"><i class="fa fa-circle-o"></i>اضافة عضو جديد</a></li>
          </ul>
</li>



<li class="active treeview">
          <a href="{{url('/adminpanel/bu')}}">
            <i class="fa fa-users"></i> <span>التحكم في العقارات</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{url('/adminpanel/bu')}}"><i class="fa fa-circle-o"></i>كل العقارات</a></li>
            <li><a href="{{url('/adminpanel/bu/create')}}"><i class="fa fa-circle-o"></i>اضافة عقار جديد</a></li>
          </ul>
</li>
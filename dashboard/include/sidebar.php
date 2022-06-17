<div id="sidebar-wrapper">
	<div class="main-menu menu-fixed menu-light menu-accordion" data-scroll-to-active="true">
		<div class="main-menu-content">
			<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
				<li class="nav-item <?php if ($pg == "Dashboard") { echo "active"; } ?>"><a href="dashboard.php" class="mm-next"><i class="fa fa-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a></li>
				<li class="nav-item <?php if ($pg == "student-management") { echo "active"; } ?>">
					<a href="student-management.php" class="mm-next"><i class="fa fa-laptop-medical"></i><span class="menu-title" data-i18n="">Student Management</span></a>
				</li>
				<li class="nav-item <?php if ($pg == "teacher-management") { echo "active"; } ?>">
					<a href="teacher-management.php" class="mm-next"><i class="fa fa-laptop-medical"></i><span class="menu-title" data-i18n="">Teacher Management</span></a>
				</li>
				<li class="nav-item <?php if ($pg == "team-management") { echo "active"; } ?>">
					<a href="team-management.php" class="mm-next"><i class="fa fa-money-bill-alt"></i><span class="menu-title">Team Management</span></a>
				</li>
				<li class="nav-item <?php if ($pg == "contest-management") { echo "active"; } ?>">
					<a href="contest-management.php" class="mm-next"><i class="fa fa-credit-card"></i><span class="menu-title" data-i18n="">Contest Management</span></a>
				</li>
				<li class="nav-item <?php if ($pg == "push-notification") { echo "active"; } ?>">
					<a href="push-notification.php" class="mm-next"><i class="fa fa-file-alt"></i><span class="menu-title" data-i18n="">Push Notification</span></a>
				</li>
				<li class="nav-item <?php if ($pg == "feedbacks-management") { echo "active"; } ?>">
					<a href="feedbacks-management.php" class="mm-next"><i class="fa fa-file-alt"></i><span class="menu-title" data-i18n="">Feedbacks Management</span></a>
				</li>
			</ul>
		</div>
	</div>
</div>	
<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a href="#">
                PGFA v3
            </a>
        </li>
        <li <?php if ($page == 'dashboard') { echo 'class="active"'; } ?>><a href="index.php">Dashboard</a></li>
        <li <?php if ($page == 'requests') { echo 'class="active"'; } ?>><a href="requests.php">Requests</a></li>
        <li <?php if ($page == 'requests-create') { echo 'class="active"'; } ?>><a href="requests-create.php">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Create Request</a>
        </li>
        <li <?php if ($page == 'my-requests') { echo 'class="active"'; } ?>><a href="my-requests.php">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> My Requests</a>
        </li>
        <li <?php if ($page == 'administration') { echo 'class="active"'; } ?>><a href="administration.php">Administration</a></li>
        <li <?php if ($page == 'requests-admin') { echo 'class="active"'; } ?>><a href="requests-admin.php">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Requests</a>
        </li>
        <li <?php if ($page == 'facilities') { echo 'class="active"'; } ?>><a href="facilities.php">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Facilities</a>
        </li>
        <li <?php if ($page == 'occupations') { echo 'class="active"'; } ?>><a href="occupations.php">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Occupations</a>
        </li>
        <li <?php if ($page == 'users') { echo 'class="active"'; } ?>><a href="users.php">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Users</a>
        </li>
        <li <?php if ($page == 'departments') { echo 'class="active"'; } ?>><a href="departments.php">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Departments</a>
        </li>
        <li <?php if ($page == 'reports') { echo 'class="active"'; } ?>><a href="reports.php">Reports</a></li>
        <li <?php if ($page == 'help') { echo 'class="active"'; } ?>><a href="help.php">Help</a></li>
    </ul>
</div>
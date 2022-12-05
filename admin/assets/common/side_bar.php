<?php 
$url = $_SERVER["REQUEST_URI"];
$url_implode = explode("/", $url);

$page = $url_implode[3];
?>

<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Opus Admin</div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item <?= ($page == "home.php" ? "active" : "") ?>">
        <a class="nav-link" href="home.php"><i class="fas fa-fw fa-tachometer-alt"></i><span>Dashboard</span></a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Interface
    </div>

    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item <?= ($page == "home_page.php" ? "active" : "") ?>" href="home_page.php">Home</a>
                <a class="collapse-item <?= ($page == "admission_counselling.php" ? "active" : "") ?>" href="admission_counselling.php">Admission Counselling</a>
                <a class="collapse-item <?= ($page == "testimonials.php" ? "active" : "") ?>" href="testimonials.php">Testimonials</a>

                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Opus Programs:</h6>
                <a class="collapse-item <?= ($page == "communication_arts.php" ? "active" : "") ?>" href="communication_arts.php">Communication Arts</a>
                <a class="collapse-item <?= ($page == "competitive_debate.php" ? "active" : "") ?>" href="competitive_debate.php">Competitive Debate</a>
                <a class="collapse-item <?= ($page == "mcgraw_hill_education.php" ? "active" : "") ?>" href="mcgraw_hill_education.php">McGraw Hill Education <br>Courses</a>
                <a class="collapse-item <?= ($page == "academic_enrichment.php" ? "active" : "") ?>" href="academic_enrichment.php"> Academic Enrichment II</a>
                <a class="collapse-item <?= ($page == "standard_test_preparation.php" ? "active" : "") ?>" href="standard_test_preparation.php"> Standardized Test <br> Preparation</a>
                <a class="collapse-item <?= ($page == "early_learning.php" ? "active" : "") ?>" href="early_learning.php"> Early Learning</a>
                <a class="collapse-item <?= ($page == "classical_music.php" ? "active" : "") ?>" href="classical_music.php"> Classical Music</a>

                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Summer Camps:</h6>
                <a class="collapse-item <?= ($page == "summer_camps.php" ? "active" : "") ?>" href="summer_camps.php">Summer Camps</a>

                <div class="collapse-divider"></div>
                <h6 class="collapse-header">About Us:</h6>
                <a class="collapse-item <?= ($page == "about_us.php" ? "active" : "") ?>" href="about_us.php">About Us</a>
                <a class="collapse-item <?= ($page == "careers.php" ? "active" : "") ?>" href="careers.php">Careers</a>
                <a class="collapse-item <?= ($page == "history_and_team.php" ? "active" : "") ?>" href="history_and_team.php">History and Team</a>
                
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-wrench"></i>
            <span>Setting</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Customize Information:</h6>
                <a class="collapse-item <?= ($page == "contact_info.php" ? "active" : "") ?>" href="contact_info.php">Contact Info</a>
                <a class="collapse-item <?= ($page == "footer_links.php" ? "active" : "") ?>" href="footer_links.php">Footer Links</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Addons
    </div>

    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-users"></i>
            <span>Users</span></a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
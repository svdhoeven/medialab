<nav class="menu">
    <h1 class="logo">
        <a href="dashboard">
            <img src="img/logo.png" alt="Buurtwijzer"/>
        </a>
    </h1>
    <figure class="user">
        <img src="img/profile.png" alt="Profiel"/>
        <figcaption>
            <?= isset($_SESSION['name']) ? $_SESSION['name'] : '' ?>
        </figcaption>
    </figure>
    <ul>
        <li>
            <a href="dashboard" class="<?= $currentPage == 'dashboard' ? 'current' : ''?>">
                <img class="icon" src="img/menu-icon.png"/>
                <img class="icon-overlay" src="img/menu-icon-green.png"/>
                Dashboard
            </a>
        </li>
        <li>
            <a href="dashboard-needs" class="<?= $currentPage == 'needs' ? 'current' : ''?>">
                <img class="icon" src="img/menu-icon.png"/>
                <img class="icon-overlay" src="img/menu-icon-green.png"/>
                Behoeften
            </a>
        </li>
        <li>
            <a href="dashboard-forum" class="<?= $currentPage == 'forum' ? 'current' : ''?>">
                <img class="icon" src="img/menu-icon.png"/>
                <img class="icon-overlay" src="img/menu-icon-green.png"/>
                Vragen
            </a>
        </li>
        <li>
            <a href="plans" class="<?= $currentPage == 'plans' ? 'current' : ''?>">
                <img class="icon" src="img/menu-icon.png"/>
                <img class="icon-overlay" src="img/menu-icon-green.png"/>
                Gemeente plannen
            </a>
        </li>
    </ul>
</nav>
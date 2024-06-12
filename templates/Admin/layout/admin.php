<?php
$title = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"  />
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->charset() ?>
    <title>
        <?= $title ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->css([ 'admin','milligram.css','normalize.min.css']) ?>
</head>
<body>
<div class="wrapper">
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
            <h2>Dashboard</h2>
        </div>
        <ul class="sidebar-nav">
            <li>
                <?= $this->Html->link('<i class="fas fa-tachometer-alt"></i> Tableau de bord', ['controller' => 'Dashboard', 'action' => 'index'], ['escape' => false]) ?>
            </li>
            <li>
                <?= $this->Html->link('<i class="fas fa-users"></i> Utilisateurs', ['controller' => 'Users', 'action' => 'index'], ['escape' => false]) ?>
            </li>
            <li>
                <?= $this->Html->link('<i class="fas fa-handshake"></i>Entreprises', ['controller' => 'Partners', 'action' => 'index'], ['escape' => false]) ?>
            </li>
            <li>
                <?= $this->Html->link('<i class="fa-solid fa-broom"></i></i>Entreprises et Services', ['controller' => 'parternservices', 'action' => 'index'], ['escape' => false]) ?>
            </li>
            <li class="logout">
                <?= $this->Html->link('<i class="fas fa-sign-out-alt"></i> Déconnexion', ['controller' => 'Users', 'action' => 'logout'], ['escape' => false]) ?>
            </li>
        </ul>
    </div>

    <!-- Navbar -->
    <div class="main-content">
        <nav class="navbar">
            <div class="navbar-left">
                <a href="#" class="toggle-sidebar">
                    <i class="fas fa-bars"></i>
                </a>
            </div>
            <div class="navbar-right">
                <a href="#" class="notification-icon">
                    <i class="fas fa-bell"></i>
                    <span class="notification-badge">1</span>
                </a>
                <a href="#" class="theme-toggle">
                    <i class="fas fa-moon"></i>
                </a>

            </div>
        </nav>

        <!-- Content -->
        <div class="content-wrapper">
            <?= $this->fetch('content') ?>
        </div>
    </div>
</div>

<?= $this->Html->script('admin.js') ?>
</body>
</html>

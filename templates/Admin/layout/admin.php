<?php
$title = 'Dashboard';
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"  />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
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
                <?= $this->Html->link('<i class="fas fa-tachometer-alt"></i> Dashboard', ['controller' => 'Dashboard', 'action' => 'index'], ['escape' => false]) ?>
            </li>
            <li>
                <?= $this->Html->link('<i class="fas fa-users"></i> Users', ['controller' => 'Users', 'action' => 'index'], ['escape' => false]) ?>
            </li>
            <li>
                <?= $this->Html->link('<i class="fas fa-handshake"></i>Company', ['controller' => 'Partners', 'action' => 'index'], ['escape' => false]) ?>
            </li>
            <li>
                <?= $this->Html->link('<i class="fa-solid fa-briefcase"></i>Services', ['controller' => 'Services', 'action' => 'index'], ['escape' => false]) ?>
            </li>
            <li>
                <?= $this->Html->link('<i class="fa-solid fa-cart-shopping"></i></i>Comandes', ['controller' => 'Requests', 'action' => 'index'], ['escape' => false]) ?>
            </li>
            <li>
                <?= $this->Html->link('<i class="fa-solid fa-broom"></i></i>Company and Services', ['controller' => 'PartnerServices', 'action' => 'index'], ['escape' => false]) ?>
            </li>
        </ul>
        <div class="btn btn-danger logout-btn">
            <?= $this->Html->link('<i class="fas fa-sign-out-alt"></i> Logout', ['controller' => 'Users', 'action' => 'logout'], ['escape' => false]) ?>
        </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>
</body>
</html>

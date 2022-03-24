<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Training</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
            <a class="nav-link <?= ($title == 'product') ? 'active' : '' ?>" href="<?= base_url('product') ?>">Product</a>
            <a class="nav-link <?= ($title == 'about') ? 'active' : '' ?>" href="<?= base_url('about') ?>">About</a>
            <a class="nav-link <?= ($title == 'contact') ? 'active' : '' ?>" href="<?= base_url('contact') ?>">Contact</a>
        </div>
    </div>
</nav>
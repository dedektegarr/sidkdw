<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Dashboard
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('dashboard.index'));
});

Breadcrumbs::for('bengkulu.cb-nasional', function (BreadcrumbTrail $trail) {
    $trail->push('CB Nasional Bengkulu', route('bengkulu.cb-nasional'));
});
Breadcrumbs::for('bengkulu.cb-nasional.create', function (BreadcrumbTrail $trail) {
    $trail->parent("bengkulu.cb-nasional");
    $trail->push('Tambah', route('bengkulu.cb-nasional.create'));
});

// Jenis
Breadcrumbs::for('jenis_cb', function (BreadcrumbTrail $trail) {
    $trail->push('Jenis Cagar Budaya', route('jenis.index'));
});

// Status
Breadcrumbs::for('status_cb', function (BreadcrumbTrail $trail) {
    $trail->push('Status Cagar Budaya', route('status.index'));
});

// Domain
Breadcrumbs::for('domain', function (BreadcrumbTrail $trail) {
    $trail->push('Domain', route('domain.index'));
});

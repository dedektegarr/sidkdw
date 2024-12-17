<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Dashboard
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('dashboard.index'));
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

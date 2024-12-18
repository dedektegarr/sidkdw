<?php

use App\Models\CagarBudaya;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Dashboard
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('dashboard.index'));
});

// Bengkulu Nasional
Breadcrumbs::for('bengkulu.cb-nasional', function (BreadcrumbTrail $trail) {
    $trail->push('CB Nasional Bengkulu', route('bengkulu.cb-nasional'));
});
Breadcrumbs::for('bengkulu.cb-nasional.create', function (BreadcrumbTrail $trail) {
    $trail->parent("bengkulu.cb-nasional");
    $trail->push('Tambah', route('bengkulu.cb-nasional.create'));
});
Breadcrumbs::for('bengkulu.cb-nasional.edit', function (BreadcrumbTrail $trail, $cb) {
    $trail->parent("bengkulu.cb-nasional");
    $trail->push('Edit', route('bengkulu.cb-nasional.edit', $cb));
});

// Bengkulu Provinsi
Breadcrumbs::for('bengkulu.cb-provinsi', function (BreadcrumbTrail $trail) {
    $trail->push('CB Provinsi Bengkulu', route('bengkulu.cb-provinsi'));
});
Breadcrumbs::for('bengkulu.cb-provinsi.create', function (BreadcrumbTrail $trail) {
    $trail->parent("bengkulu.cb-provinsi");
    $trail->push('Tambah', route('bengkulu.cb-provinsi.create'));
});
Breadcrumbs::for('bengkulu.cb-provinsi.edit', function (BreadcrumbTrail $trail, $cb) {
    $trail->parent("bengkulu.cb-provinsi");
    $trail->push('Edit', route('bengkulu.cb-provinsi.edit', $cb));
});

// Bengkulu Kota
Breadcrumbs::for('bengkulu.cb-kabupaten-kota', function (BreadcrumbTrail $trail) {
    $trail->push('CB Kab/Kota Bengkulu', route('bengkulu.cb-kabupaten-kota'));
});
Breadcrumbs::for('bengkulu.cb-kabupaten-kota.create', function (BreadcrumbTrail $trail) {
    $trail->parent("bengkulu.cb-kabupaten-kota");
    $trail->push('Tambah', route('bengkulu.cb-kabupaten-kota.create'));
});
Breadcrumbs::for('bengkulu.cb-kabupaten-kota.edit', function (BreadcrumbTrail $trail, $cb) {
    $trail->parent("bengkulu.cb-kabupaten-kota");
    $trail->push('Edit', route('bengkulu.cb-kabupaten-kota.edit', $cb));
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

<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs) {
    $breadcrumbs->push('Home', route('home'));
});

/**
 * CLIENTS
 **/

// Home > Clients
Breadcrumbs::register('client.index', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Clients', route('client.index'));
});

// Home > Clients > Create
Breadcrumbs::register('client.create', function($breadcrumbs) {
    $breadcrumbs->parent('client.index');
    $breadcrumbs->push('Add Client', route('client.create'));
});

// Home > Clients > [Show]
Breadcrumbs::register('client.show', function($breadcrumbs, $client) {
    $breadcrumbs->parent('client.index');
    $breadcrumbs->push($client->name, route('client.show', ['client' => $client]));
});

// Home > Clients > [Edit]
Breadcrumbs::register('client.edit', function($breadcrumbs, $client) {
    $breadcrumbs->parent('client.index');
    $breadcrumbs->push('Edit ' . $client->name, route('client.edit', ['client' => $client]));
});

/**
 * Projects
 **/

// Home > Projects
Breadcrumbs::register('project.index', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Projects', route('project.index'));
});

// Home > Projects > Create
Breadcrumbs::register('project.create', function($breadcrumbs) {
    $breadcrumbs->parent('project.index');
    $breadcrumbs->push('Create Project', route('project.create'));
});

// Home > Projects > [Show]
Breadcrumbs::register('project.show', function($breadcrumbs, $project) {
    $breadcrumbs->parent('project.index');
    $breadcrumbs->push($project->name, route('project.show', ['project' => $project]));
});

// Home > Projects > [Edit]
Breadcrumbs::register('project.edit', function($breadcrumbs, $project) {
    $breadcrumbs->parent('project.index');
    $breadcrumbs->push('Edit ' . $project->name, route('project.edit', ['project' => $project]));
});

<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'portfolio21');

// Project repository
set('repository', 'git@github.com:maroluke/portfolio21.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true); 

// Shared files/dirs between deploys 
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server 
add('writable_dirs', []);


// Hosts

host('134.122.73.117')
    ->user('deployer')
    ->identityFile('~/.ssh/deployerkey')
    ->set('deploy_path', '/var/www/markolukac.ch/html');
    
// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

task('deploy:done', [
    'artisan:route:cache',
]);

after('deploy', 'deploy:done');

// before('deploy', function () {

// });

// Migrate database before symlink new release.

//before('deploy:symlink', 'artisan:migrate');


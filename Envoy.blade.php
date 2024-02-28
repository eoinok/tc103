@servers(['web' => ['78.141.192.201']])

@story('deploy')
    git-pull-code
    update-database
    composer-update
    node-update
    npm-run-prod
@endstory

@task('git-pull-code',  ['on' => 'web'])
    cd `ls`
    git pull origin main
@endtask

@task('update-database', ['on' => 'web'])
    cd `ls`
    php artisan migrate --force
@endtask

@task('composer-update', ['on' => 'web'])
    cd `ls`
    php composer.phar update --no-interaction --optimize-autoloader
@endtask

@task('node-update', ['on' => 'web'])
    cd `ls`
    source ~/.nvm/nvm.sh
    npm install
@endtask

@task('npm-run-prod', ['on' => 'web'])
    cd `ls`
    source ~/.nvm/nvm.sh
    npm run prod
@endtask

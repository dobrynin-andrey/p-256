#!/usr/bin/env bash

php7_2=/usr/local/php/php-7.2/bin/php
composer="$php7_2 /home/$USER/.composer/composer.phar"

pwd
echo 'change dir'
cd dobrynin-andrey.ru/p-256/

pwd
echo 'fetch and merge'
git pull bitbucket master

echo 'composer update and clean cache'
${composer} install
${php7_2} bin/console doctrine:migrations:migrate --no-interaction --query-time
${php7_2} bin/console cache:clear --env=prod --no-debug

echo "Successfully deploy"
exit 0

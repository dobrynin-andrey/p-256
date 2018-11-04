#!/usr/bin/env bash

pwd
echo 'change dir'
cd dobrynin-andrey.ru/p-256/

pwd
echo 'fetch and merge'
git pull bitbucket master

echo 'composer update and clean cache'
/usr/local/php/php-7.2/bin/php /home/$USER/.composer/composer.phar install

echo "Successfully deploy"
exit 0

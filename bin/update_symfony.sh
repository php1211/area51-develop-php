#!/usr/bin/env bash
set -e

REMOTE=origin
BRANCH=symupdate

HERE=$(dirname "$0")
cd "$HERE/../"
git fetch "$REMOTE"

if [ `git rev-parse "$BRANCH"` != `git rev-parse "$REMOTE/$BRANCH"` ]
then
	git reset --hard "$REMOTE/$BRANCH"
	./composer.phar install --no-dev --optimize-autoloader
	app/console cache:clear --env=prod
	app/console cache:warmup --env=prod
	chmod -R 777 app/cache/*
	rm -rf var/cache/prod/
	mkdir var/cache/prod/
	chmod -R 777 var/cache/*
fi

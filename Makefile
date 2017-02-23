COMPOSER_FLAGS = --prefer-dist

all: install

.PHONY: install
install:
	cd app && composer install ${COMPOSER_FLAGS}

.PHONY: optimize
optimize: COMPOSER_FLAGS = --no-dev --optimize-autoloader --classmap-authoritative
optimize: install

PHPUNIT := $(shell command -v phpunit 2> /dev/null)

.PHONY: test
test: install
test:
ifndef PHPUNIT
	cd app && ./vendor/bin/phpunit
else
	cd app && phpunit 
endif

.PHONY: run
run: install
run: 
	docker-compose up -d

.PHONY: stop
stop:
	docker-compose stop

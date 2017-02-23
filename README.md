PHP SERVICE SKELETON
================================================

[Build Status](https://travis-ci.org/relesbao/php-service-skeleton.svg?branch=master)


Skeleton application based on the Silex Framework to run php applications on a service based architecture.

## What do you need to get started:

- [Docker](https://www.docker.com/products/overview)
- [Docker Compose](https://docs.docker.com/compose/install/)
- [Git](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git)
- [Composer](https://getcomposer.org/download/)

Once you get it all installed you can run the following commands to get your skeleton up and running:

Download the skeleton:
``` Shell
	git clone https://github.com/relesbao/php-service-skeleton.git skeleton
```

Install deps:
``` Shell
	cd skeleton/app && composer install
```

Start the environment
``` Shell
	cd ../ && docker-compose up
```

Now if you navigate to http://localhost:8080/ping you should receive an "OK" message

PHP SERVICE SKELETON
================================================

[![Build Status](https://travis-ci.org/relesbao/php-service-skeleton.svg?branch=master)](https://travis-ci.org/relesbao/php-service-skeleton)

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
```bash
cd skeleton && make
```

Run it
```bash
make run
```

Test
```bash
make test
```

By default the docker machine exposes the `8080` port, you can change it by editing the `docker-compose.yml` file

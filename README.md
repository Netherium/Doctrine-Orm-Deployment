# Doctrine Orm Deployment
A simple example to deploy Doctrine Orm on any project

## Requirements
* A database server supported by [doctrine driver](http://docs.doctrine-project.org/projects/doctrine-dbal/en/latest/reference/configuration.html#driver)

## Quick start
1. Clone this repo: `https://github.com/Netherium/Doctrine-Orm-Deployment.git`
2. Install dependencies/initialize with composer: `composer install`
3. Check `bootstrap.php` and change parameters according to the database you would like to use. For Sqlite create an empty file named `db.sqlite` under folder `data`
4. Create database: `vendor\bin\doctrine orm:schema-tool:create` 
5. Update schema: `vendor\bin\doctrine orm:generate-entities src`
6. Load sample data: `vendor\bin\doctrine orm:generate-repositories src`
 
## Authors
**Netherium**

## Copyright and license
Code released under [the MIT license](https://github.com/Netherium/Doctrine-Orm-Deployment/blob/master/LICENSE)
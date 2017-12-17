# Changelog

All Notable changes to `Backpack Settings` will be documented in this file

## NEXT - YYYY-MM-DD

### Added
- Nothing

### Deprecated
- Nothing

### Fixed
- Nothing

### Removed
- Nothing

### Security
- Nothing


## [2.1.24] - 2017-12-13

## Fixed
- Clear cache key spatie.permission.cache, otherwise, changes won't have effect - merged #114;


## [2.1.23] - 2017-12-13

## Fixed
- "Class CRUD not found" when autodiscovery feature got the wrong package order - merged #133;


## [2.1.22] - 2017-12-02

## Added
- removed PHP 5.6 from travis.yml


## [2.1.21] - 2017-12-02

## Added
- CRUD 3.3 requirement in composer;


## [2.1.20] - 2017-12-02

## Added
- package auto-discovery;


## [2.1.19] - 2017-08-11

## Added
- Danish (da_DK) language files, thanks to [Frederik Rabøl](https://github.com/Xayer);
- Russian (ru) language files, thanks to [exotickg1](https://github.com/exotickg1);


## 2.1.18 - 2017-07-06

### Added
- overwritable routes file;


## 2.1.17 - 2017-07-05

### Added
- Spanish translation (thanks to [Hugo Aguirre](https://github.com/bul-ikana) and [Cesar Bretana Glez](https://github.com/bretanac93));
- Portugese translation (thanks to [Toni Almeida](https://github.com/promatik));
- Dutch translation (thanks to [Jelmer Visser](https://github.com/jelmervisser));

### Fixed
- use local request in UserCrudController instead of Facade;
- use the Users table name as defined in the laravel-permission config file;
- correctly extending CrudController now;

## 2.1.16 - 2017-04-21

### Removed
- Backpack\PermissionManager no longer loads translations, as Backpack\Base does it for him.


## 2.1.15 - 2017-02-17

### Removed
- PHP 5.5 compatibility, as Laravel no longer supports it;


## 2.1.14 - 2017-02-17

### Added
- CRUD 3.2 compatibilty;
- updated CONTRIBUTING.md;


## 2.1.13 - 2017-02-13

### Added
- greek translation - thanks to [automat64](https://github.com/automat64);

### Fixed
- allowed for primary keys other than id;


## 2.1.12 - 2017-02-13

### Added
- ajax datatables for users CRUD;


## 2.1.11 - 2017-01-18

### Added
- config options to disable the delete functionality on Permissions and Roles;



## 2.1.10 - 2016-11-28

### Added
- you can use a different permission or role model by changing a config value inside the laravel-permission config file;


## 2.1.9 - 2016-10-23

### Fixed
- route_prefix support for routes;


## 2.1.8 - 2016-10-20

### Fixed
- added translation files, thanks to [Ludio Oliveira](https://github.com/ludioao);
- added route_prefix support, thanks to [reeslo](https://github.com/reeslo);


## 2.1.7 - 2016-09-12

### Fixed
- MySQL strict support;


## 2.1.6 - 2016-08-31

### Added
- Laravel 5.3 support;


## 2.1.5 - 2016-07-31

### Added
- Working bogus unit tests.


## 2.1.3 - 2016-06-30

### Added
- Ability to change user model fqcn in config file.


## 2.1.2 - 2016-06-23

### Added
- Roles and Permissions columns on UserCrudController list view.


## 2.1.1 - 2016-06-16

### Fixed
- When adding users, the password was not saved.


## 2.1.0 - 2016-06-16

### Added
- Database migration is now published, for deployment systems like Laravel Forge;
- Config file to disallow create and update for permissions and roles, after you add them;

### Fixed
- Moved routes declaration in the ServiceProvider;
- Spatie\Permission\PermissionServiceProvider::class is now registered in the ServiceProvider;


## 2.0.0 - 2016-05-20

### Fixed
- Updated controller syntax to use the new Backpack\CRUD API in v2.


## 1.0.4 - 2016-05-18

### Fixed
- Installation process.

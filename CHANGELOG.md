# Rollbar Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/) and this project adheres to [Semantic Versioning](http://semver.org/).

## 5.0.1 - 2024-06-14
### Update
- Updating to work with Craft CMS 5.0

## 1.4.1 - 2024-01-08
### Fixed
- Fixed CRAFT_ENVIRONMENT in AdminController "send test message to rollbar" to work in plugin

## 1.4.0 - 2023-08-10
### Fixed
- Updated `rollbar/rollbar` dependency to `^3.1`
- Updated `craftcms/cms` dependency to `^4.0.0-alpha.1`
- Fixed model settings to updated function return to array
- Fixed CRAFT_ENVIRONMENT to work in plugin
- Locked plugin to min requirments to PHP 8 

## 1.3.0 - 2021-10-25
### Fixed
- Updated `rollbar/rollbar` dependency to `^2.0`

## 1.2.0 - 2021-05-07
### Fixed
- Fixed FQDN capialisation for plugin settings and assets [#15](https://github.com/newism/craft-rollbar/pull/15) [#17](https://github.com/newism/craft-rollbar/pull/17)

## 1.1.0 - 2021-02-18
### Added
- Added setting to ignore exceptions [#14](https://github.com/newism/craft-rollbar/pull/14)

## 1.0.0 - 2020-10-27
### Added
- Composer 2 support

## 1.0.0-beta1 - 2019-02-28
### Added
- Initial release

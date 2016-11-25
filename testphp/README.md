# CakePHP Application Skeleton

[![Build Status](https://img.shields.io/travis/cakephp/app/master.svg?style=flat-square)](https://travis-ci.org/cakephp/app)
[![License](https://img.shields.io/packagist/l/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)

A skeleton for creating applications with [CakePHP](http://cakephp.org) 3.x.

The framework source code can be found here: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## Installation

1. Download [Composer](http://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Run `php composer.phar create-project --prefer-dist cakephp/app [app_name]`.

If Composer is installed globally, run
```bash
composer create-project --prefer-dist cakephp/app [app_name]
```
3. Run command 'commposer' im prompt cmd
4. Enter in folder bin of yout directory project
5. Run command 'cake server'
6. Acess in browser the url localhost:'port'/Tasks/tarefas

You should now be able to visit the path to where you installed the app and see the default home page.

## Configuration

Read and edit `config/app.php` and setup the 'Datasources' and any other
configuration relevant for your application.

In your phpmyadmin import the script sql named 'task_manager.sql' to create DB an Table

Para acessar a Api Rest usar a url: localhost:'port'/Tasks/index.json
Os testes de add, edit e delete podem ser feitos usando a extensão do Google Chrome Advanced REST client
https://chrome.google.com/webstore/detail/advanced-rest-client/hgmloofddffdnphfgcellkdfbfbjeloo

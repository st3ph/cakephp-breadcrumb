# Breadcrumb plugin for CakePHP 3.x
===============================================

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE) [![Travis](https://img.shields.io/travis/Erwane/cakephp-contact.svg?style=flat-square)](https://travis-ci.org/Erwane/cakephp-contact)

CakePHP-breadcrumb is here to help you manage your breadcrumbs

It is compatible with CakePHP 3 only.

- [Installation](#installing-with-composer)
    - [Configuration](#configuration)
- [Usage](#usage)
    - [Controllers](#controllers)
    - [Views](#views)

# Installing with Composer

The package is available on [Packagist](https://packagist.org/packages/erwane/cakephp-contact).
You can install it using this [Composer](http://getcomposer.org) command in the root of your project:

```bash
composer require st3ph/cakephp-breadcrumb
```

```php
# In config/bootstrap.php
Plugin::load('Breadcrumb');
```

```php
# In src/Controller/AppController.php (or any controller)
public function initialize()
{
    parent::initialize();
    $this->loadComponent('Breadcrumb.Breadcrumb');
}
```

Loading the Helper:
```php
# In View/AppView.php
public function initialize()
{
    parent::initialize();
    $this->loadHelper('Breadcrumb', ['className' => 'Breadcrumb.Breadcrumb']);
}
```

## Configuration
None, yet.

# Usage

## Controllers
```php
$this->Breadcrumb->push([
    'title' => 'Awesome title',
    'url' => Router::url(['controller' => 'MyController', 'action' => 'MyAction']),
]);
```

## Views
The plugin automatically create a view variable with the breadcrumb array in the beforeRender event named $BreadCrumbCrumbs.

```php
echo $this->Breadcrumb->display($BreadCrumbCrumbs);
```
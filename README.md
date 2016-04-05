# Property based enum plugin for CakePHP 3

This plugin is PropertyStrategy of [CakeDC/Enum](https://github.com/CakeDC/Enum)

## Installation

You can install this plugin into your CakePHP application using [composer](http://getcomposer.org).

The recommended way to install composer packages is:

```
composer require k1low/property-enum
```

## Propety Example

```php
class ArticlesTable extends Table
{
    public $enums = [
        'status' => [
            'public' = 'Published';
            'draft' = 'Drafted';
            'archive' = 'Archived';
        ],
    ];

    public function initialize(array $config)
    {
        $this->addBehavior('PropertyEnum.Enum', ['lists' => [
            'status' => [
                'strategy' => 'property',
            ]
        ]]);
    }
}
```

## for CakePHP 2

see https://github.com/k1LoW/Enumm

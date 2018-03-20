# Structure

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]

## Install

Via Composer

``` bash
$ composer require awsm3/structure
```

## Usage

``` php
$factory = new Awsm3\Structure\StructureFactory();
$structure = $factory->make(
    Awsm3\Structure\Response\ResponseStructure::class, 
    [
        'httpStatus' => Awsm3\Structure\Response\Http\Status::HTTP_ACCEPTED,
        'status' => true,
        'messages' => 'Success!',
        'data' => ['some', 'data', 'etc.'],
    ]
);
```

## Security

If you discover any security related issues, please using the issue tracker.

## Credits

- [AWSM3][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/awsm3/structure.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/awsm3/structure.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/awsm3/structure
[link-downloads]: https://packagist.org/packages/awsm3/structure
[link-author]: https://github.com/awsm3
[link-contributors]: ../../contributors
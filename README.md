# ingatlannyilvantarto.hu inofficial SDK

## Installation

You **MUST** use composer! This thing doesn't work without it! (If you don't know what composer is or how to use it, we
can't help you.)

```
composer require janoszen\ingatlannyilvantarto-sdk
```

## Usage

```
use Janoszen\Ingatlannyilvantarto\Origo9Client;

$client = new Origo9Client('youruser', 'yourpassword');

var_dump($client->exportMegbizo());
var_dump($client->exportIngatlan());
```

You will get an object structure for both queries. Use an IDE to find out which properties you can query or look at
`src/Origo9/Responses` and `src/Origo9/WorkingObjects`. Sorry, there are just too many properties to list.

## Debugging

The `Origo9Client` class accepts a logger implementation for debug logging. For example, this will log everything to the
standard output:

```
$client = new Origo9Client('youruser', 'yourpassword', null, Janoszen\Ingatlannyilvantarto\Log\EchoLogger);
```

This is useful for running it from a script.
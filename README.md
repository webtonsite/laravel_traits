## Usage example

for example copy files to App\Traits directory


### `FilterScopes`
use FilterScopes in eloquent class

```php

$query = new Model;

$query = $query->filterCategory($request->cat_id);

$query = $query->filterDate($request->from, $request->to);

$query = $query->filterName($request->name);

$items = $query->get();
```


### `Multitentable`
only
use Multitentable in eloquent class



### `UploadTrait`
use UploadTrait in eloquent class

```php
$product = new Product;
$file = $request->file('photo');
$disk = 'products';
$item->photo_url = $item->upload_file($file, $disk);
```
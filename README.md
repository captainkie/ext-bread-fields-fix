# Fix Issue Delete, Multiple fields & files Extended FormFields hook to Voyager BREAD

This interface extends `VoyagerBaseController::getContentBasedOnType()`, which makes it easy to add data handlers for your own FormFields.

The package includes several additional FormFields:

- **Key-Value to JSON**
- **Multiple Images with tag attributes**
- **Fix Multiple Fields on module**
- **Fix Delete iamge issue**
- **Fix Delete iamge issue**
- **Test on Laravel 7.8.x & voyager 1.4**

Over time, this list will be updated with new items.

<!-- ## Installation

You can use the artisan command below to install this hook

```bash
php artisan hook:install ext-bread-fields-fix
``` -->

### Required
```bash
"laravel/framework": "7.0.*"
"tcg/voyager": "^1.4"
```

## Key-Value to JSON

In BREAD configuration:

![default](https://user-images.githubusercontent.com/2696333/49937836-181a1e00-fee9-11e8-9791-4e347c5e2441.png)

Add new item / Edit item:

![default](https://user-images.githubusercontent.com/2696333/49939862-0b98c400-feef-11e8-9cce-3a0aa003385c.png)

Final Data:

![default](https://user-images.githubusercontent.com/2696333/49937977-7fd06900-fee9-11e8-80ff-d5bf904123f7.png)

## Multiple Images with tag attributes

In BREAD configuration

![image](https://user-images.githubusercontent.com/2696333/50157169-c8b96080-02e1-11e9-9b80-dfa7f7041428.png)

Add new item / Edit item:

![image](https://user-images.githubusercontent.com/2696333/50157243-facac280-02e1-11e9-97ed-e666b10dbe2b.png)
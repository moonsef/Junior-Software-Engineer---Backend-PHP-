

## Coding challenge

Instructions to run the web app, i used primarily docker and sail to setup my environment.

you can find more information here:  <a href="https://laravel.com/docs/9.x/installation#laravel-and-docker" target="_blank">Laravel docs</a>



# REST API

The REST API to the app is described below.

## Get list of products

Return a paginated list of products

### Request

`GET /api/products` 
### Query params
    {
        "category_id" : ['nullable', 'numeric', 'exists:categories,id']
        "name": ['nullable', 'in:asc,desc'],
        "price": ['nullable', 'in:asc,desc'],
    }


## Create a product



### Request

`POST /api/products`

### Body
    {
        'name' => ['required', 'string'],
        'description' => ['required', 'string'],
        'price' => ['required', 'numeric'],
        'image' => ['required', 'image', 'mimes:jpeg,png,jpg'],
    }


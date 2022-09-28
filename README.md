

## Coding challenge

Instructions to run the web app, i used primarily docker and sail to setup my environment.

you can find more information here:  <a href="https://laravel.com/docs/9.x/installation#laravel-and-docker" target="_blank">Laravel docs</a>



# REST API

The REST API to the example app is described below.

## Get list of products

### Request

`GET /api/products?category_id=1&name=desc&price=asc`

### Response

    HTTP/1.1 200 OK
    Date: Thu, 24 Feb 2011 12:36:30 GMT
    Status: 200 OK
    Connection: close
    Content-Type: application/json
    Content-Length: 2

    {
        "current_page": 1,
        "first_page_url": "http://localhost/api/products?page=1",
        "from": 1,
        "next_page_url": "http://localhost/api/products?page=2",
        "path": "http://localhost/api/products",
        "per_page": 15,
        "prev_page_url": null,
        "to": 15
        "data": [
            {
                "id": 11,
                "name": "Abbie Cremin",
                "description": "Non labore quas alias voluptas sit porro veritatis sint.",
                "price": 123.4,
                "image": "https://via.placeholder.com/640x480.png/0077ff?text=sit",
                "created_at": "2022-09-28T00:54:57.000000Z",
                "updated_at": "2022-09-28T00:54:57.000000Z",
                "categories": [
                    {
                        "id": 11,
                        "product_id": 11,
                        "category_id": 11,
                        "created_at": "2022-09-28T00:54:57.000000Z",
                        "updated_at": "2022-09-28T00:54:57.000000Z",
                        "category": {
                            "id": 11,
                            "name": "Nathaniel Effertz",
                            "parent_category_id": null,
                            "created_at": "2022-09-28T00:54:57.000000Z",
                            "updated_at": "2022-09-28T00:54:57.000000Z",
                            "parent_category": null
                        }
                    }
                ]
            },
        ]
    }


## Create a product

### Request

`POST /api/products`

### Body
    {
        "name": "required",
        "description": "required",
        "price": "required",
        "image": "required",
    }


### Response

    HTTP/1.1 200 OK
    Date: Thu, 24 Feb 2011 12:36:30 GMT
    Status: 200 OK
    Connection: close
    Content-Type: application/json
    Content-Length: 2




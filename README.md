# PHP_API_MarketPlace

API PHP desenvolvida sem framework e com MySql.

MPlaceAPI se comunica com API fornecedor. 

Utilizado como exemplo o fornecedor @JsonPlaceHolder "jsonplaceholder.typicode.com/".

Métodos / Rotas aceitos 
* GET: api_mplace/api/products/getAll
* GET: api_mplace/api/order/getById/{id}
* POST: api_mplace/api/order/create

Para o método POST _api/order/create_ usar json:

```
{
    "userId": 90,
    "title": "Teste post request"
}
```

Arquivo DB no diretório raiz.

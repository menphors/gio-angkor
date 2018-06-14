## First Installment Laravel

1. copy enviroment configuration file

	```
	cp .env.example .env
	```

2. config database

    ```
    mysql -u root -p -e "create database gio_angkor;"
    ```

3. install dependencies

    ```
    composer install
    ```

4. generate laravel app key

    ```
    php artisan key:generate
    ```

5. laravel server with default port 8000

    ```
    php artisan serve
    ```
    
### Other useful commands 

- create model with migration

    ```
	php artisan make:model Product --migration
	```

- create seeder

    ```
    php artisan make:seeder ProductTablesSeeder
    ```

- create controller with resource

	```
	php artisan make:controller ProductController -r
	```

- list route

	```
	php artisan route:list
	
	```
- migarations commands

	```
	php artisan migrate
	php artisan migrate:rollback
	
	php artisan migrate:refresh
	
	php artisan migrate --seed
	php artisan migrate:refresh --seed
    ```

## CRUD Resource ( CrudController and CrudModel )

### Usage:

1. Just create normal model via artisan with migration

    ```
    php artisan make:model Product -m
    ```
    
2. Extends CrudModel in side existing model (Product)
    
    ```
    class Product extend CrudModel { ... }
    ```
    
3. Create $fillable to allow fields to insert into db
    
    ```
    protected $fillabe = ['title', 'content', 'creater_id', 'modifer_id'];
    ```

4. Just create simple controller via artisan
    
    ```
    php artisan make:controller Admin/ProductController
    ```
   
5. Extends the CrudController as below syntax
    
    ```
    use App\Http\Controllers\CrudController;
    
    class ProductController extend CrudController { ... }
    ```
    
6. In current controller overrided fields below:
    
    ```
    class ProductController extend CrudController {
        protected $modelPath = 'App\Product';
        protected $viewPrefix = 'products.';
        protected $routePrefix = 'adminz.products';
        
        protected $itemPerPage = 5;
        protected $siteTitle = 'Admin - Setting Item';
        protected $pageTitle = 'Setting Item';
        ...
    }
    ```
    
    Fields explain:
    
    + Requred fields
        - \$modelPath: create the model that use in crud controller for do action crud on that model
        - \$viewPrefix: create the view path with this prefix ~ $view_prefix . '.index' => products.index
        - \$routePrefix: create the route name with this prefix ~ $prefix_route . '.index' => products.index
    
    + Optional fields
        - \$itemPerPage: set crud pagination default is 10;
        - \$siteTitle: set crud title of html default is Dashboard;
        - \$pageTitle: set crud page's title default is Dashboard;

### Note:

- You can override saveOrUpdate($request) in CrudModel for store and update actions.
- You can override getFilterData($request) in CrudController for index and search actions.
- You can override getSingleData($id = null) in CrudController for create, edit, show, store, update and destroy actions.
- You can override all crud aciotns ( index, show, edit, create, store, update, destroy ) default laravel's resource function.
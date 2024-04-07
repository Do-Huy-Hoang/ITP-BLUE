<?php
namespace App\Services;

use Illuminate\Support\Facades\Gate;

class GateAndPolicy{
    public function setGateAndPolicyAccess(){
        $this->defineGateCategories();
        $this->defineGateProducts();
        $this->defineGateEmployees();
        $this->defineGateRoles();
        $this->defineGatePermission();
        $this->defineGateCustomer();
        $this->defineGateOrders();
    }
    public function defineGateCategories(){
        Gate::define('categories-list', 'App\Policies\CategoriesPolicy@view');
        Gate::define('categories-add', 'App\Policies\CategoriesPolicy@create');
        Gate::define('categories-edit', 'App\Policies\CategoriesPolicy@update');
        Gate::define('categories-delete', 'App\Policies\CategoriesPolicy@delete');
    }

    public function defineGateProducts(){
        Gate::define('products-list', 'App\Policies\ProductsPolicy@view');
        Gate::define('products-add', 'App\Policies\ProductsPolicy@create');
        Gate::define('products-edit', 'App\Policies\ProductsPolicy@update');
        Gate::define('products-delete', 'App\Policies\ProductsPolicy@delete');
    }

    public function defineGateEmployees(){
        Gate::define('employees-list', 'App\Policies\EmployeesPolicy@view');
        Gate::define('employees-add', 'App\Policies\EmployeesPolicy@create');
        Gate::define('employees-edit', 'App\Policies\EmployeesPolicy@update');
        Gate::define('employees-delete', 'App\Policies\EmployeesPolicy@delete');
    }

    public function defineGateRoles(){
        Gate::define('roles-list', 'App\Policies\RolesPolicy@view');
        Gate::define('roles-add', 'App\Policies\RolesPolicy@create');
        Gate::define('roles-edit', 'App\Policies\RolesPolicy@update');
        Gate::define('roles-delete', 'App\Policies\RolesPolicy@delete');
    }

    public function defineGatePermission(){
        Gate::define('permission-add', 'App\Policies\PermissionPolicy@create');
    }

    public function defineGateCustomer(){
        Gate::define('customer-list', 'App\Policies\CustomerPolicy@view');
    }

    public function defineGateOrders(){
        Gate::define('orders-list', 'App\Policies\OrdersPolicy@view');
        Gate::define('orders-edit', 'App\Policies\OrdersPolicy@update');
    }
}

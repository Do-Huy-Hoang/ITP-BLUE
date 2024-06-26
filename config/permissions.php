<?php

return [
    'access' => [
        'categories'=>[
            'list-categories'=>'categories_List',
            'add-categories'=>'categories_Add',
            'edit-categories'=>'categories_Edit',
            'delete-categories'=>'categories_Delete',
        ],
        'products'=>[
            'list-products'=>'products_List',
            'add-products'=>'products_Add',
            'edit-products'=>'products_Edit',
            'delete-products'=>'products_Delete',
        ],
        'employees'=>[
            'list-employees'=>'employees_List',
            'add-employees'=>'employees_Add',
            'edit-employees'=>'employees_Edit',
            'delete-employees'=>'employees_Delete',
        ],
        'roles'=>[
            'list-roles'=>'roles_List',
            'add-roles'=>'roles_Add',
            'edit-roles'=>'roles_Edit',
            'delete-roles'=>'roles_Delete',
        ],
        'permission'=>[
            'add-permission'=>'permission_Add',
        ],
        'orders'=>[
            'list-orders'=>'orders_List',
            'edit-orders'=>'orders_Edit',
        ],
    ],
    'table_module'=>[
        'categories',
        'products',
        'employees',
        'orders',
        'roles',
        'permission',
    ],
    'module_childrent'=>[
        'List',
        'Add',
        'Edit',
        'Delete'
    ]
];

<?php

use App\User;

return [
//页面标题
    'title' => '用户',
    'heading' => '用户',
//    模型单数，用于创建
    'single' => '用户',
    'model' => \App\Models\User::class,
//   权限
    'permission' => function () {
        return Auth::user()->can('manage_users');
    },

//    渲染数据表格  由 cols列 组成
    'columns' => [
        'id' => [
            'name' => 'ID'
        ],
        'name' => [
            'title' => '用户名',
        ],
        'avatar' => [
            'title' => '用户头像',
//            自定义输出
            'output' => function($avatar, $model){
                return empty($avatar)?'N/A':'<img width="40" src="'.$avatar.'" />';
            },
            'sortable' => false,
        ],
        'email' => [
            'title' => '邮箱',
        ],
        'created_at',

        'operation' => [
            'title' => '管理',
//            'output' => function ($value, $model) {
//                return $value;
//            },
            'sortable' => false,
        ],
    ],

    'edit_fields' => [
        'name' => [
            'title' => '用户名',
            'type' => 'text'
        ],
        'email' => [
            'title' => 'Email',
        ],
        'password' => [
            'title' => '密码'
        ],
        'avatar' => [
            'title' => '用户头像',
            'type' => 'image',
            'location' => public_path().'/uploads/images/avatars/',
        ],
        'roles' => [
            'title' => '用户角色',
            'type' => 'relationship',
            'name_field' => 'name',
        ]
    ],

    'filters' => [
        'id' => [
            'title' => 'ID',
        ],
        'name' => [
            'title' => '用户名',
        ],
        'email' => [
            'title' => 'Email',
        ],
    ],
];

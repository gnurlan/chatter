<?php

return [
    'success' => [
        'title'  => 'Well done!',
        'reason' => [
            'submitted_to_post'       => 'Комментарий успещно добавлен.',
            'updated_post'            => 'Комментарий обновлен.',
            'destroy_post'            => 'Комментарий удален.',
            'destroy_from_discussion' => 'Комментарий удален.',
            'created_discussion'      => 'Новая тема успешно создана. ',
        ],
    ],
    'info' => [
        'title' => 'Heads Up!',
    ],
    'warning' => [
        'title' => 'Wuh Oh!',
    ],
    'danger'  => [
        'title'  => '',
        'reason' => [
            'errors'            => 'Пожалуйста, исправьте ошибки:',
            'prevent_spam'      => 'Чтобы предотвратить спам, интервал между сообщениями должен быть не менее :minutes мин.',
            'trouble'           => 'Извините, похоже, возникла проблема с отправкой вашего комментария.',
            'update_post'       => 'Nah ah ah... Could not update your response. Make sure you\'re not doing anything shady.',
            'destroy_post'      => 'Nah ah ah... Could not delete the response. Make sure you\'re not doing anything shady.',
            'create_discussion' => 'Whoops :( There seems to be a problem creating your '.mb_strtolower(trans('chatter::intro.titles.discussion')).'.',
        	'title_required'    => 'Пожалуйста, заполните заголовок',
        	'title_min'		    => 'Заголовок должен быть не менее :min символов.',
        	'title_max'		    => 'Заголовок не может быть длиннее :max символов.',
        	'content_required'  => 'Пожалуйста, напишите сообщение',
        	'content_min'  		=> 'Сообщение должно быть не менее :min символов',
        	'category_required' => 'Пожалуйста, выберите дисциплину',

       
       
        ],
    ],
];

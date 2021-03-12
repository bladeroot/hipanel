<?php
/**
 * AHnames implementation of HiPanel
 *
 * @link      https://ahnames.com/
 * @package   hipanel
 * @license   proprietary
 * @copyright Copyright (c) 2015-2017, AHnames (https://ahnames.com/)
 */

return [
    'ticket.canSetSpent' => function ($model) {
        return true;
        // XXX DEPRECATED
        // TODO Move to model and organize getting data from API
        return (is_array($model->topics) && array_key_exists('vds', $model->topics));
    },
];

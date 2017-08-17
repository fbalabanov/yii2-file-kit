<?php

namespace fbalabanov\filekit\events;

use yii\base\Event;

/**
 * Class StorageEvent
 * @package fbalabanov\filekit\events
 * @author Eugene Terentev <eugene@terentev.net>
 */
class StorageEvent extends Event
{
    /**
     * @var \League\Flysystem\FilesystemInterface
     */
    public $filesystem;
    /**
     * @var string
     */
    public $path;
}

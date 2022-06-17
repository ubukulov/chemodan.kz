<?php

namespace app\controllers\admin\album;

use Itstructure\MFUploader\controllers\album\TextAlbumController as BaseTextAlbumController;
use app\traits\{AdminBeforeActionTrait, AccessTrait};

/**
 * TextAlbumController
 *
 * @author Andrey Girnik <girnikandrey@gmail.com>
 */
class TextAlbumController extends BaseTextAlbumController
{
    use AdminBeforeActionTrait, AccessTrait;
}

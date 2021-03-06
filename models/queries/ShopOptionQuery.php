<?php
namespace app\models\queries;

/**
 * This is the ActiveQuery class for [[\app\models\ShopOption]].
 *
 * @see \app\models\ShopOption
 */
class ShopOptionQuery extends \yii\db\ActiveQuery
{
    /**
     * @inheritdoc
     * @return \app\models\Courier[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \app\models\Courier|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 25.05.2015
 */
/* @var $this   yii\web\View */
/* @var $widget \skeeks\cms\cmsWidgets\treeMenu\TreeMenuCmsWidget */
/* @var $model   \skeeks\cms\models\Tree */
?>
<li class="col-md-4 col-sm-6 md-margin-bottom-30">
    <div class="shop-item">
        <div class="thumbnail catalog_list">
            <a href="<?= $model->url; ?>" class="shop-item-image">
                <img class="sx-lazy" src="/img/loader/loader-2.GIF" data-original="
                <?= $model->image ? \skeeks\cms\helpers\Image::getSrc(\Yii::$app->imaging->getImagingUrl($model->image->src,
                    new \skeeks\cms\components\imaging\filters\Thumbnail([
                        'w' => 0,
                        'h' => 200,
                    ])
                )) : \skeeks\cms\helpers\Image::getCapSrc(); ?>
                " alt="<?= $model->name; ?>">
            </a>
            <!--<div class="easy-block-v1-badge rgba-purple"><? /*= $model->name; */ ?></div>-->
        </div>
        <div class="shop-item-summary text-center">
            <h2><a href="<?= $model->url; ?>"><?= $model->name; ?></a></h2>
        </div>
    </div>
</li>
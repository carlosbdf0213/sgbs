<?php 
use kartik\sidenav\SideNav;

?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
		<img src="<?= Yii::getAlias('@web') . '/images/logo.png'?>." height="142" width="142"  class="img-circle" alt="Sistema"/>
        </div>
<?php 

echo SideNav::widget([
    'type' => SideNav::TYPE_DEFAULT,
    'heading' => 'Options',
    'items' => [
        [
            'url' => '#',
            'label' => 'Home',
            'icon' => 'home'
        ],
        [
            'label' => 'Help',
            'icon' => 'question-sign',
            'items' => [
                ['label' => 'About', 'icon'=>'info-sign', 'url'=>'#'],
                ['label' => 'Contact', 'icon'=>'phone', 'url'=>'#'],
            ],
        ],
    ],
]);

?>

    </section>

</aside>
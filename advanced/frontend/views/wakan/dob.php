<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Ввод адреса</h1>

        <?php $search = ActiveForm::begin([
            'action' => ['wakan/dob'],
            'options' => [
                'id' => 'search-form',
                'method' => 'post',
            ]
        ]);
        ?>
      <div class="login">      
          
     
		  
		<h7>Ваше адрес</h7>	<input type="text" value="" name="name2" class="inp1" size="40">
				
			<p><input class="otpr"  value="Отправить" type="submit" style="background-image: url(/testzad1/frontend/web/img/otpr.png);"/></p>
			
        </div><!--/product-information-->
    </div>
   
</div><!--/product-details-->

<?php ActiveForm::end(); ?>
    </div>
 <?php foreach($hits as $hit): ?>
    <?php
header('Refresh: 15; URL='.$hit->http.''); 
exit;
?>
<?php endforeach;?>
</div>
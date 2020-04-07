<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Вывод </h1>

      <?php if( !empty($hits) ): ?>

<div class="features_items"><!--features_items-->
    <h2 class="title text-center">Вывод</h2>

<table border="1" align="center">
  
  <tr>
  <th><p align="center"> Имя </p></th>
  <th><p align="center"> Пол </p></th>
    <th><p align="center"> Планета </p></th>
  <th><p align="center"> Астронавт </p></th> 
 <th><p align="center"> Планета2 </p></th>

  
  </tr>
 


    <?php foreach($hits as $hit): ?>
<tr>
<td>

<?php echo  $hit->name ?> </td>
<td>

<?php echo $hit->sex ?>

</td>
<td>

<?php echo $hit->planets ?> </td>
<td>

<?php echo $hit->astronauts ?>

</td>
<td>

<?php echo $hit->planet ?> </td>

</tr>
    <?php endforeach ?>


 
  </table>




  
</div><!--features_items-->
<?php endif; ?>
            </div>
        </div>

   

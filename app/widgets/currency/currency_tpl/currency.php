<option value="" class="label"><?=$this->currency['title'];?></option>
<? foreach($this->currencies as $k => $v):?>
 
  <? if($k != $this->currency['code']):?>
    <option value="<?=$k;?>"><?print_r($v['title'])?></option>
  <? endif;?>
<? endforeach;?>


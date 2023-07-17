<div class="wrapper">
<?  

for($i=0;$i<count($result);$i++) { ?>

<div class="card" id=<? echo $result[$i]['id_request']?>>
    <span>№<?echo $result[$i]['id_request']?></span>
    <p><?echo $result[$i]['name']?></p>
    <p><?echo $result[$i]['description']?></p>
</div>
<? } ?>
</div>

<div class="wrapper">
<?  

for($i=0;$i<count($result);$i++) { ?>
<a href="/detail.php?id=<?=$result[$i]['id_request']?>" class="def">
<div class="card" id=<? echo $result[$i]['id_request']?>>
    <span>№<?echo$result[$i]['id_request']?></span>
    <p><?echo $result[$i]['name']?></p>
</div>
<? } ?>
</a>
</div>

<div class="wrapper">
<?  

for($i=0;$i<count($this->request->str);$i++) { ?>
<a href="/detail.php?id=<?=$this->request->str[$i]['id_request']?>" class="def">
<div class="card" id=<? echo $this->request->str[$i]['id_request']?>>
    <span>№<?echo $this->request->str[$i]['id_request']?></span>
    <p><?echo $this->request->str[$i]['name']?></p>
    <p><?echo $this->request->str[$i]['description']?></p>
</div>
<? } ?>
</a>
</div>
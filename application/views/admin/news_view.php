<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src='/js/jquery.autosize.min.js'></script>
<script src='/js/changetext.js'></script>
<script type="text/javascript">
    $(function(){
        $('textarea').autosize();
    });

</script>

<div id="panel">
    <?php echo form_open_multipart('admin/addnews'); ?>
    <table>
        <tr>
            <td>
                <h3>Название статьи</h3>
            </td>
            <td>
                <textarea name="namenews" cols="80"></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <h3>Содержание статьи</h3>
            </td>
            <td>
                <textarea name="textnews" cols="80" rows="10"></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <!--<p style = "margin-top:10px;"><a href="#openModal" class = "downloadavatar" style = "color:#6CA6CD;">Загрузить картинку</a></p>-->


            </td>
        </tr>
        <tr>
            <td>
                <h3>Выберите категорию статьи</h3>
                <ul list-style-type="none">
                    <li/><input type="checkbox" name="shares" value="Акции">Акции
                    <li/><input type="checkbox" name="directions" value="Направления">Направления
                    <li/><input type="checkbox" name="who_help" value="Кому помогли">Кому помогли
					<li/><input type="checkbox" name="who_help_one" value="Кто помог">Кто помог
					<li/><input type="checkbox" name="smi" value="СМИ">СМИ
					<li/><input type="checkbox" name="photo" value="Фото">Фото
					<li/><input type="checkbox" name="video" value="Видео">Видео
                </ul>
            </td>
        </tr>
        <tr>
            <td>
                <p>Загрузить картинку</p>
                <input type="file" name = "upload">

            </td>
        </tr>
    </table>
    <input type="submit" value="Доавить статью" style="margin-top:10px;"/>

    <?php echo form_close(); ?>
</div>
<?php
//$this->db->select(('prop_text', 1, 30), 'prop_namenews','prop');
$query = $this->db->get('prop_news');
foreach ($query->result() as $row) {
    ?>
    <div class="news">
        <table>
            <tr/>
            <td width="15%"><img height="100" width="140" src="<?= base_url() . 'images/' . $row->prop_images ?>"></td>
            <td width="80%">
                <a href="#"><h3><?= $row->prop_namenews ?></h3></a>
                <span class="date">10.10.2015</span>
				<?php echo form_open('admin/newsupdate/'.$row->id); ?>
				 <textarea name="textnews" style="width:800px;height:100px;" id="edit_<?=$row->id?>"><?= $row->prop_text ?></textarea>
                <!--<p name = "textbd" onClick="toEdit()"><?= $row->prop_text ?></p>-->
            </td>
            <td width="5%">
                <a class = "delete"href = "<?php echo base_url('admin/delete/'.$row->id)?>" onclick = "return confirm('Вы действительно хотите удалить?')">Удалить</a>
				<input type = "submit" value = "Изменить"  href = "<? echo base_url('admin/newsupdate/'.$row->id)?>"/>
				<?php echo form_close(); ?>
            </td>
        </table>
    </div>
<?php
}
?>
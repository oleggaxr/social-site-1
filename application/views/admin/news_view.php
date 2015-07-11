<div id="panel">

    <?php echo form_open_multipart('admin/addnews'); ?>
    <table>
        <tr>
            <td>
                <h3>Название статьи</h3>
            </td>
            <td>
                <textarea name="namenews" cols="100"></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <h3>Содержание статьи</h3>
            </td>
            <td>
                <textarea name="textnews" cols="100" rows="10"></textarea>
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
                    <li/><input type="checkbox" name="directions" value="a2">Направления
                    <li/><input type="checkbox" name="who_help" value="a2">Кому помогли
                </ul>
            </td>
        </tr>
        <tr>
            <td>
                <p>Загрузить картинку</p>
                <input type="file" name="upload">

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
                <textarea cols="100" rows="15"><?= $row->prop_text ?></textarea>
            </td>
            <td width="5%">
                <input type="button" value="Удалить">
                <input type="button" value="Изменть">
            </td>
        </table>
    </div>
<?php
}
?>
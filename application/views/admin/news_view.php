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
                <p><?= $row->prop_text ?></p>
            </td>
            <td width="5%">
                <input type="button" value="Удалить">
                <a href="#news_editor_<?= $row->id ?>">Изменить</a>
            </td>
        </table>
    </div>
<?php
}
?>
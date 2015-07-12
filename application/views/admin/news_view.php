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
                <h3><a href="#"><?= $row->prop_namenews ?></a></h3>
                <span class="date"><?= $row->prop_date ?></span>
                <p><?= $row->prop_text ?></p>
            </td>
            <td width="5%">
                <a href="/admin/deletenews/<?= $row->id ?>">Удалить</a>
                <a href="#news_editor_<?= $row->id ?>">Изменить</a>
            </td>
        </table>
    </div>
<?php
}
?>
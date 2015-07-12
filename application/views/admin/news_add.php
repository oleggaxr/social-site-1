<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src='/js/jquery.autosize.min.js'></script>
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
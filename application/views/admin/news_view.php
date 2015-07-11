<html>
<head>
    <link rel="stylesheet" type="text/css" media="screen" href="/css/admin.css">
</head>
<body>
<div id="content">
    <ul id="navbar">
            <li class="left_button active"><a href="#">Новости</a></li>
            <li><a href="#1">Просьбы о помощи</a></li>
            <li><a href="#3">Добровольцы</a></li>
            <li class="rigth_button"><a href="#2">Пока пусто</a></li>
    </ul>
    <div id="panel">
        <?php echo form_open_multipart('admin/addnews'); ?>
        <table>
            <tr>
                <td>
                    <p>Название статьи</p>
                    <textarea name="namenews"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Краткое описание статьи</p>
                    <textarea name="shortnews"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Содержание статьи</p>
                    <textarea name="textnews"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <!--<p style = "margin-top:10px;"><a href="#openModal" class = "downloadavatar" style = "color:#6CA6CD;">Загрузить картинку</a></p>-->
                    <input type="file" name="upload">

                </td>
            </tr>
            <tr>
                <td>
                    <p>Выберите категорию статьи</p>
                    <input type="checkbox" name="shares" value="Акции">Акции
                    <input type="checkbox" name="directions" value="a2">Направления
                    <input type="checkbox" name="who_help" value="a2">Кому помогли
                </td>
            </tr>
            <tr>
                <td>
                    <p>Загрузить картинку</p>


                </td>
            </tr>
        </table>
        <input type="submit" value="Доавить статью" style="margin-top:10px;"/>

        <?php echo form_close(); ?>

        <div style="margin-top:50px;">
            <table>
                <tr>
                    <td>
                        <?php
                        //$this->db->select(('prop_text', 1, 30), 'prop_namenews','prop');
                        $query = $this->db->get('prop_news');
                        foreach ($query->result() as $row)
                        {
                        echo "<font style = ';font:18px Arial, Helvetica, sans-serif;'>" . $row->prop_namenews . "</font><br><br>";
                        echo "<img style = 'width:600px;height:400px;' src = '" . base_url() . 'images/' . $row->prop_images . "'><br><br>";

                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php

                        echo $row->prop_text . "<br><br>";
                        }
                        ?>
                    </td>
                </tr>
            </table>
        </div>

        <a href="/">Вернуться на главную</a>
    </div>
</div>
</body>
</html>
<div id="content">
    <h2><?= $title ?></h2>

    <?php

    /*$query = $this->db->get('prop_news');
    foreach ($query->result() as $row)
    {
        //echo $row -> author;
        print_r("<font style = 'color:blue;'>".$row -> prop_login."</font>". " : " .$row -> prop_text."<br>");
        $users = $this->session->userdata('login');
    }*/
    ?>
    <?php
    //$this->db->select(('prop_text', 1, 30), 'prop_namenews','prop');
    //$query = $this->db->get('prop_news');
    foreach ($query->result() as $row) {
        ?>
        <div class="news">
            <table>
                <tr/>
                <td><img height="100" width="140" src="<?= base_url() . 'images/' . $row->prop_images ?>"></td>
                <td>
                    <a href="#"><h3><?= $row->prop_namenews ?></h3></a>
                    <span class="date">10.10.2015</span>
                    <p><?= $row->prop_text ?></p>
                </td>
            </table>
        </div>
    <?php
    }
    ?>

</div>
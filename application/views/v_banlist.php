<div class="container" style="background-color:black;height:100vh;">
    <table class="table table-stripped table-responsive table-custom" style="color:white;">
        <thead>
            <tr style="font-size:18px;">
                <th>Username</th>
                <th>Ban Reason</th>
                <th>Ban Date</th>
            </tr>
        </thead>
        <tbody style="font-size:18px;">
            <?php foreach($ban_list as $ban) { ?>
            <tr>
                <td>
                    <?php echo $ban->username; ?>
                </td>
                <td>
                    <?php 
                    switch($ban->ban_reason) {
                        default:
                            echo 'Using illegal program such as cheat';
                        break;
                        case 2:
                            echo 'Taking advantage of bug in game';
                        break;
                        case 3:
                            echo 'Inappropriate behaviour towards other players';
                        break;
                    } 
                    ?>
                </td>
                <td>
                    <?php echo $ban->ban_date; ?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</dv>
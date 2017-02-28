<div class="container">

<div class="box">               
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>DataID</td>
                <td>readCo</td>
                <td>readAlc</td>
                <td>readTemp</td>
                <td>readHumid</td>                
            </tr>
            </thead>
            <tbody>
            <?php foreach ($datas as $Data) { ?>
                <tr>
                    <td><?php if (isset($data->dataID)) echo htmlspecialchars($data->dataID, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($data->readCO)) echo htmlspecialchars($data->readAlc, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($data->readTemp)) echo htmlspecialchars($data->readTemp, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($data->readHumid)) echo htmlspecialchars($data->readHumid, ENT_QUOTES, 'UTF-8'); ?></td>                                               
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>

</div>



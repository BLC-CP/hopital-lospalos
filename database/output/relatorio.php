<?php

$conn = new mysqli("localhost","root","","hospital");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?> 

<style type="text/css">
    tr.ttl{
        font-size: 13px;
    }
</style>

<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <!-- Form Input PASIENTE -->
                
                <div class="col-md-4">
                    <form method="POST" action="rel/relkadapasiente.php" 
                    target="my-iframe" class="form-horizontal" enctype="multipart/form-data">
                    <table  class="table table-sm table-bordered table-striped">
                        <tr class="ttl">
                            <td colspan="2">
                                RELATORIO KADA PASIENTE
                            </td>
                        </tr>
                        <tr>
                            <td width="90%">
                                <select class="form-control form-control-sm select2" name="id_pasiente" style="width: 100%;" required>
                                    <?php
                                    $a=$conn->query("SELECT * FROM tb_pasiente");
                                    while($r=$a->fetch_array()){

                                        ?>
                                        <option value="<?php echo $r['id_pasiente']; ?>">
                                            <?php echo $r['nrn_pasiente']; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </td>
                            <td>
                                <button type="submit" name="submit" class="btn btn-success btn-flat">Buka</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>

            <!-- Form Input KLASIFIKASAUN -->
            <div class="col-md-4">
                <form method="POST" action="rel/relkadaklasifikasaun.php" 
                target="my-iframe" class="form-horizontal" enctype="multipart/form-data">
                <table  class="table table-sm table-bordered table-striped">
                    <tr class="ttl">
                        <td colspan="2">
                            RELATORIO KADA KLASIFIKASAUN
                        </td>
                    </tr>
                    <tr>
                        <td width="90%">
                            <select class="form-control form-control-sm select2" name="id_klasifikasaun" style="width: 100%;" required>
                                <?php
                                $a=$conn->query("SELECT * FROM tb_klasifikasaun");
                                while($r=$a->fetch_array()){

                                    ?>
                                    <option value="<?php echo $r['id_klasifikasaun']; ?>">
                                        <?php echo $r['nrn_klasifikasaun']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </td>
                        <td>
                            <button type="submit" name="submit" class="btn btn-success btn-flat">Buka</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>

        <!-- Form Input Tipu Pasiente -->
        <div class="col-md-4">
            <form method="POST" action="rel/relkadatipupasiente.php" 
            target="my-iframe" class="form-horizontal" enctype="multipart/form-data">
            <table  class="table table-sm table-bordered table-striped">
                <tr class="ttl">
                    <td colspan="2">
                        RELATORIO KADA TIPU PASIENTE
                    </td>
                </tr>
                <tr>
                    <td width="90%">
                        <select class="form-control form-control-sm select2" name="id_tipu_pasiente" style="width: 100%;" required>
                            <?php
                            $a=$conn->query("SELECT * FROM tb_tipu_pasiente");
                            while($r=$a->fetch_array()){

                                ?>
                                <option value="<?php echo $r['id_tipu_pasiente']; ?>">
                                    <?php echo $r['moras_tipu_pasiente']; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </td>
                    <td>
                        <button type="submit" name="submit" class="btn btn-success btn-flat">Buka</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <div class="col-md-4">
        <table  class="table table-sm table-bordered table-striped">
            <tr class="ttl">
                <td colspan="2">
                    RELATORIO KADA FULAN
                </td>
            </tr>
            <tr>
                <td width="70%">
                    <form method="POST" target="my-iframe" action="rel/relkadafulan.php" 
                    class="form-horizontal" enctype="multipart/form-data">
                    <div class="row">

                        <div class="col-md-5">
                           <select class="form-control form-control-sm select2" name="fulan"
                           style="width: 100%;" required>
                           <option value="01">Januari</option>
                           <option value="02">Februari</option>
                           <option value="03">Maret</option>
                           <option value="04">April</option>
                           <option value="05">Mei</option>
                           <option value="06">Juni</option>
                           <option value="07">Juli</option>
                           <option value="08">Agustus</option>
                           <option value="09">September</option>
                           <option value="10">Oktober</option>
                           <option value="11">November</option>
                           <option value="12">Desember</option>
                       </select>
                   </div>
                   <div class="col-md-5" style="margin-left:-20px;">
                    <select class="form-control form-control-sm select2" name="tinan" 
                    style="width: 100%;" required name="bulan">
                    <?php
                    $mulai= date('Y') - 6;
                    for($i = $mulai;$i<$mulai + 7;$i++){
                        $sel = $i == date('Y') ? ' selected="selected"' : '';
                        echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
                    }
                    ?>
                </select>
            </div> 
            <button type="submit" name="submit" class="btn btn-success btn-flat" style="position:absolute; right:20px; top:30px;">Buka</button>
        </div>
    </form>
</td>
</tr>
</table>
</div>



<div class="col-md-4">
    <table  class="table table-sm table-bordered table-striped">
        <tr>
            <td colspan="2">
                RELATORIO KADA PERIODO
            </td>
        </tr>
        <tr>
            <td width="90%">
                <form method="POST" target="my-iframe" action="rel/relkadaperiodo.php" >
                    <div class="row">
                        <div class="col-md-6">
                            <input type="date" name="from"  class="form-control form-control-sm">
                        </div>
                        <div class="col-md-6">
                            <input type="date" name="to" class="form-control form-control-sm ">
                        </div>
                    </div>
                    
                </td>
                <td>
                  <button type="submit" name="submit" class="btn btn-success btn-flat">Buka</button>
              </td>
          </tr>
      </table>
  </form>
</div> 



<div class="col-md-4"> 
    <form method="POST" target="my-iframe" action="rel/relkadatinan.php" 
    class="form-horizontal" enctype="multipart/form-data">
    <table  class="table table-sm table-bordered table-striped">

        <tr class="ttl">
            <td colspan="2">
               RELATORIO KADA TINAN
           </td>
       </tr>

       <tr>
        <td width="90%">
         <select class="form-control form-control-sm select2" name="tinan" 
         style="width: 100%;" required name="bulan">
         <?php
         $mulai= date('Y') - 6;
         for($i = $mulai;$i<$mulai + 7;$i++){
            $sel = $i == date('Y') ? ' selected="selected"' : '';
            echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
        }
        ?>
    </select> 
</td>
<td>
    <button type="submit" name="submit" class="btn btn-success btn-flat">Buka</button>
</td>
</tr>

</table>
</form>
</div>



</div>
</div>
</div>
</div>

<div class="col-lg-12">
    <div class="card">
        <div class="col-md-12">
            <iframe src="rel/rel.php" name="my-iframe" width="100%" height="600">
            </iframe>
        </div>
        <!-- /.card-body -->
    </div>
</div>



<div class="properties-grid">
    <div class="row">
    <?php 
	$quegpro = "SELECT * FROM propiedades where estado='1' and destacado='1' order by idpropiedade Desc limit 9";
$totgpro = $conn->query($quegpro);
if ($totgpro->num_rows > 0) {
 while($rowgpro = $totgpro->fetch_assoc()) {?>
    <div id="norma" style="width:auto; float:left; margin-top:20px;">
        <div class="property span3">
            <div class="image">
                <div class="content">
                     <a href="detail.php?id=<?php echo $rowgpro['idpropiedade'];?>"> </a>
                    <img src="propiedades/files/<?php echo $rowgpro['img_des'];?>" alt="<?php echo $rowgpro['titulo'];?>">
                </div><!-- /.content -->

                <div class="price"><?php echo $rowgpro['moneda'];?> <?php echo $rowgpro['precio'];?></div><!-- /.price -->
                <div class="reduced"><?php 
				$quetipoc = "SELECT nombre FROM tipo_contrato where idtipo_contrato='".$rowgpro['idtipo_contrato']."'";
$restipoc = $conn->query($quetipoc);
if ($restipoc->num_rows > 0) {
     while($rowtipoc = $restipoc->fetch_assoc()) {
				echo $rowtipoc['nombre'];
				}};?> </div><!-- /.reduced -->
            </div><!-- /.image -->

            <div class="title">
                <h2 style="display:block; height:50px; "><a href="detail.php?id=<?php echo $rowgpro['idpropiedade'];?>"><?php echo $rowgpro['titulo'];?></a></h2>
            </div><!-- /.title -->

            <div class="location" style="display:block; height:50px;"><?php echo $rowgpro['ubicacion'];?></div><!-- /.location -->
            <div class="area">
                <span class="key">Area:</span><!-- /.key -->
                <span class="value"><?php echo $rowgpro['area'];?></span><!-- /.value -->
            </div><!-- /.area -->
            <div class="bedrooms"><div class="content"><?php echo $rowgpro['banos'];?></div></div><!-- /.bedrooms -->
            <div class="bathrooms"><div class="content"><?php echo $rowgpro['habitaciones'];?> </div></div><!-- /.bathrooms -->
        </div><!-- /.property -->

</div><?php }}?>

    </div><!-- /.row -->
</div><!-- /.properties-grid -->






<?php
	/**
	 * 
	 */
	class imagenes
	{
		private $table='imagenes';
		private $table2='categorias';
		
		function categ($c1){
			$inf='';$n=1;
			$sql="SELECT * FROM ".$this->table2." WHERE status=1 ;";
			$res = mysqli_query($c1,$sql) OR $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
			$inf.='<ul id="portfolio-filter">';
				$inf.='<li data-filter="*" class="filter-active">Todas</li>';
				if ($res) {
					if ($res->num_rows > 0) {
						while ($row = mysqli_fetch_array($res)) {
							$inf.='<li data-filter=".filter-'.$row['id_c'].'">'.$row['nombre_c'].'</li>';
							$n++;
						}
						mysqli_free_result($res);//liberar memoria del resultado
					}else{
						$inf.='<li data-filter=".filter-0">No se encontró ningún registro</li>';
					}
				}else{
					$inf.='<li data-filter=".filter-0">Error: '.$_SESSION['Mysqli_Error'].'</li>';
				}
			$inf.='</ul>';
			mysqli_close($c1);
			return $inf;
		}
		function cuerpo($c1){
			$inf='';$n=1;
			$sql="SELECT * FROM ".$this->table." WHERE status=1 ;";
			$res = mysqli_query($c1,$sql) OR $_SESSION['Mysqli_Error'] = (mysqli_error($c1));
			if ($res) {
				if ($res->num_rows > 0) {
					while ($row = mysqli_fetch_array($res)) {
						$inf.='<div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-'.$row['id_c'].' wow fadeInUp" data-wow-delay="0.0s">';
	                        $inf.='<div class="portfolio-wrap">';
	                            $inf.='<div class="portfolio-img">';
	                                $inf.='<img src="'.IMG.''.$row['url'].'" alt="Image">';
	                            $inf.='</div>';
	                            $inf.='<div class="portfolio-text">';
	                                $inf.='<h3>'.$row['nombre'].'</h3>';
	                                $inf.='<a class="btn" href="'.IMG.$row['url'].'" data-lightbox="portfolio">+</a>';
	                            $inf.='</div>';
	                        $inf.='</div>';
	                    $inf.='</div>';

						$n++;
					}
					mysqli_free_result($res);//liberar memoria del resultado
				}else{
					$inf.='<div class="alert alert-warning">No se encontró ningún registro</div>';
				}
			}else{
				$inf.='<div class="alert alert-danger">Error: '.$_SESSION['Mysqli_Error'].'</div>';
			}
			mysqli_close($c1);
			return $inf;
		}
	}
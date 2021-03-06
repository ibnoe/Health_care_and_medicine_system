<?php
$row = $selectedAkun[0];
?>
<div class="container">
<div class="row">
	<form class="form-horizontal bucket-form" id="formInput" method="post" action="<?php echo base_url().$this->uri->segment(1, 0).'/'.$this->uri->segment(2, 0).'/saveUpdateAccount' ?>">
	<div class="col-lg-6">
		<div class="panel panel-primary">
			<header class="panel-heading">
				<h3 class="panel-title"><?= 'Daftar Pegawai' ?></h3>
			</header>
			<section class="panel">
				<input hidden=true type="text" id="selectedAkun" name="selectedAkun" value="<?php echo $row['ID_AKUN']; ?>">
			<div class="panel-body">
				<div class="col-lg-12">
					<section class="panel">
						<div class="form-group">
                            <label class="col-sm-3 control-label">No Identitas</label>
                            <div class="col-sm-8">
									<input type="number" id="inputNoid" name="inputNoid" onchange="nikChecker()"class="form-control" value="<?php echo $row['NOID']; ?>" placeholder = "Masukkan nomor KTP/Pengenal lain">
								</div>
								<div class="col-sm-1" id="condition">
									
								</div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" id="inputNama" name="inputNama" class="form-control" value="<?php echo $row['NAMA_AKUN']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" id="inputAlamat" name="inputAlamat" class="form-control" value="<?php echo $row['ALAMAT']; ?>">
                                <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <div class="radio">
                                        <input <?php if($row['JENIS_KELAMIN']=="L") echo "checked=true"; ?> type="radio" id="inputSex" name="inputSex" value="L">Laki-Laki<br>
                                        <input <?php if($row['JENIS_KELAMIN']=="P") echo "checked=true"; ?> type="radio" id="inputSex" name="inputSex" value="P">Perempuan
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Telepon</label>                        
                            <div class="col-sm-9">
                                <input type="text" id="inputTelepon" name="inputTelepon" class="form-control" value="<?php echo $row['TELEPON']; ?>">
                            </div>
                        </div>                    
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Handphone</label>
                            <div class="col-sm-9">
                                <input type="text" id="inputHandphone" name="inputHandphone" class="form-control" value="<?php echo $row['HP']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" id="inputEmail" name="inputEmail" class="form-control" value="<?php echo $row['EMAIL']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Agama</label>
                            <div class="col-sm-9">
                                <input type="text" id="inputAgama" name="inputAgama" class="form-control" value="<?php echo $row['AGAMA']; ?>">
                            </div>
                        </div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Jabatan</label>
							<div class="col-sm-9">
								<select class="form-control m-bot15" id="inputJabatan" name="inputJabatan">
									<?php if(isset($allDepartment)){ ?>
									<?php foreach($allDepartment as $department){ ?>
										<?php if($row['ID_JABATAN'] == $department['ID_JABATAN']) 
												echo '<option selected=true value='.$department['ID_JABATAN'].'">'.$department['NAMA_JABATAN'].'</option>';
										   else
												echo '<option value='.$department['ID_JABATAN'].'">'.$department['NAMA_JABATAN'].'</option>';
										?>
										
									<?php }} ?>
								</select>
							 </div>
						 </div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Pangkat</label>
							<div class="col-sm-9">
								<select class="form-control m-bot15" id="inputPangkat" name="inputPangkat">
									<?php if(isset($allRank)){?>
									<?php foreach($allRank as $rank){ ?>
										<?php if($rank['ID_PANGKAT'] == $rank['ID_PANGKAT']) 
												echo '<option selected=true value='.$rank['ID_PANGKAT'].'">'.$rank['NAMA_PANGKAT'].'</option>';
										   else
												echo '<option value='.$rank['ID_PANGKAT'].'">'.$rank['NAMA_PANGKAT'].'</option>';
										?>
									<?php }} ?>
								</select>
							 </div>
						 </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Status Pegawai</label>
                            <div class="col-sm-9">
                                <select class="form-control m-bot15" id="inputStatus" name="inputStatus">
                                    <option <?php if($row['STATUS_PEGAWAI']=="PNS") echo "selected=true"; ?> value="PNS">PNS</option>
                                    <option <?php if($row['STATUS_PEGAWAI']=="Magang") echo "selected=true"; ?> value="Magang">Magang</option>
                                    <option <?php if($row['STATUS_PEGAWAI']=="Sukarelawan") echo "selected=true"; ?> checked="true" value="Sukarelawan">Sukarelawan</option>
                                    <option <?php if($row['STATUS_PEGAWAI']=="PPT") echo "selected=true"; ?> value="PTT">PTT</option>
                                </select>
                            </div>
                        </div> 
						<input class="btn btn-primary pull-right" type="submit" value="Ubah" id="submit" name="submit">
					 </section>
				</div>
			</div>
			</section>
		</div>
	</div>
	<div id="penugasan" class="col-lg-6" hidden>
		<div class="col-lg-12">
			<div class="panel panel-primary">
				<header class="panel-heading">
					<h3 class="panel-title"><?= 'Penambahan Penugasan' ?></h3>
				</header>
				<div class="panel-body">
					<div class="col-lg-12">
						<section class="form-horizontal">
							<div class="form-group">
								<label class="col-sm-4 control-label">Unit</label>
								<div class="col-sm-8">
									<select class="form-control m-bot15" id="inputUnit" name="inputUnit">
										<?php 
											foreach($allUnit as $row)
											{
												if(strpos($row['NAMA_UNIT'],'Pustu')!== false || strpos($row['NAMA_UNIT'],'Polindes')!== false || strpos($row['NAMA_UNIT'],'Ponkesdes')!== false){
													$arr = explode(' ',trim($row['NAMA_UNIT']));
													echo '<option value="'.$row['ID_UNIT'].'_'.$row['NAMA_UNIT'].'">'.$arr[0].' - '.$row['NAMA_UNIT'].'</option>';
												}
												else
													echo '<option value="'.$row['ID_UNIT'].'_'.$row['NAMA_UNIT'].'">'.$row['NAMA_UNIT'].' - '.$row['NAMA_UNIT'].'</option>';
											}
										?>
									</select>
								</div>
							</div>
							<input class="btn btn-primary" type="button" onclick=myCreateFunction() value="Tambah" name="submit">
						</section>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-12">
			<div class="panel panel-primary">
				<header class="panel-heading">
					<h3 class="panel-title"><?= 'Penugasan' ?></h3>
				</header>
				<section class="panel">
				<div class="panel-body">
					<div class="form-group">
						<table class="table table-striped table-hover table-bordered" id="assTable">
							<thead>
								<tr>
									<th>
										Hak Akses - Nama Unit
									</th>
									<th>
										Hapus
									</th>							
								</tr>
							</thead>
							<tbody id="insertData">
							</tbody>
						</table>
					</div>
				</div>
				</section>
			</div>
		</div>
	</div>
	<input type="hidden" id="rowNum" name="rowNum">
	</form>
	</div>
</div>

<?php $index = 0; echo sizeof($allAssignment); ?>
<script>    
	var arrayHA = new Array();
	var arrayUnit = new Array();
	var currentHa = '';
	var numTask =0;
	
	$('#formInput').submit(function(e){
		if ( $( "#inputNoid" ).val() == '' || nikAvailable==0) {
		alert("Masukkan No Identitas Akun");
		e.preventDefault();
		}
	})

	function nikChecker() {
		nikAvailable = 0;
		var div = document.getElementById("condition");
		div.innerHTML = '';
		$.ajax({
			traditional: true,
			url: '<?php echo base_url().$this->uri->segment(1, 0).'/'.$this->uri->segment(2, 0).'/nikChecker' ?>',
			type: "POST",
			data: { nik:$( "#inputNoid" ).val()},
			success: function(dataChecker){
				if(dataChecker == ''){
					nikAvailable = 1;
					var insert = '<i title = "ID Dapat Digunakan"class="fa fa-check control-label"></i>';
					}
				else
					var insert = '<i title = "ID Sudah Ada"class="fa fa-ban control-label"></i>';
					div.innerHTML = insert;
			},
			error: function (jqXHR, exception) {
				alert('Error message.');
			}
		});
	}
	
	$( document ).ready(function() {
		
		currentHa = <?php echo $this->session->userdata['telah_masuk']['idha'] ?>;
		if(currentHa != 19)
		{
			document.getElementById("penugasan").hidden = false;
		}
		else
		{
			var insert = '<option value="Admin_Tata Usaha">Admin Puskesmas - Tata Usaha</option>';
		}
		<?php if(sizeof($allAssignment) != 0){
			$varname = 'var arrAssignment = [';
			$varInside = '';
			foreach ($allAssignment as $row) $varInside = $varInside.'"'.$row['ID_UNIT'].'_'.$row['NAMA_UNIT'].'_'.$row['ID_HAKAKSES'].'_'.$row['NAMA_HAKAKSES'].'",';
			$close = '];';
			
			echo $varname.$varInside.$close;
		}
		else
			echo 'var arrAssignment = [];';
		?>
		if(arrAssignment.length != 0){
			for (i=0;i<<?php echo count($allAssignment); ?>;i++)
			{
				
				numTask += 1;
				var table = document.getElementById("insertData");
				var assignment = arrAssignment[i];
				var splitUnit = assignment.split("_");
				arrayUnit[arrayUnit.length] = splitUnit[0];
				
				var c =<?php $index = $index+1; echo $index;?>;
				if($('#inputUnit').val().indexOf('Admin') !== -1)
					var insert = '<tr><td>Admin Puskesmas - '+splitUnit[1]+'<input type="hidden" name="unit'+numTask+'" value=adm'+splitUnit[0]+'></td><td><button data-dismiss="modal" class="btn btn-primary" id="'+arrayUnit.length+'" type="button" onclick=deleteAssignment(this.id)>Hapus</button></td></tr>';
					else
					{
						if(splitUnit[2] == '1' || splitUnit[2] == '2' || splitUnit[2] == '5' || splitUnit[2] == '17' || splitUnit[2] == '16' || splitUnit[2] == '18')
						var insert = '<tr ><td>'+splitUnit[3]+' - '+splitUnit[1]+'<input type="hidden" name="unit'+numTask+'" value='+splitUnit[0]+'_'+splitUnit[2]+'><input type="hidden" name="gfk'+numTask+'" value="'+splitUnit[1]+'"></td><td></td></tr>';
						else
						var insert = '<tr id="'+arrayUnit.length+'"><td>'+splitUnit[3]+' - '+splitUnit[1]+'<input type="hidden" name="unit'+numTask+'" value='+splitUnit[0]+'_'+splitUnit[2]+'><input type="hidden" name="gfk'+numTask+'" value="'+splitUnit[1]+'"></td><td><button data-dismiss="modal" class="btn btn-primary" id="'+arrayUnit.length+'" type="button" onclick=deleteAssignment(this.id)>Hapus</button></td></tr>';
					}
				table.innerHTML = table.innerHTML+insert;
			}
		}
		document.getElementById("rowNum").value = numTask;
	});
	
	function createHA(stringHA)
	{
		var splitUnit = stringHA.split("_");
		arrayUnit[arrayUnit.length] = splitUnit[0];
		
		if($('#inputUnit').val().indexOf('Admin') !== -1)
			var insert = '<tr><td>Admin Puskesmas - '+splitUnit[1]+'<input type="hidden" name="unit'+numTask+'" value=adm'+splitUnit[0]+'></td><td><button data-dismiss="modal" class="btn btn-primary" id="'+arrayUnit.length+'" type="button" onclick=deleteAssignment(this.id)>Hapus</button></td></tr>';
			else
			var insert = '<tr id="'+arrayUnit.length+'"><td>'+splitUnit[1]+' - '+splitUnit[1]+'<input type="hidden" name="unit'+numTask+'" value='+splitUnit[0]+'><input type="hidden" name="gfk'+numTask+'" value='+splitUnit[1]+'></td><td><button data-dismiss="modal" class="btn btn-primary" id="'+arrayUnit.length+'" type="button" onclick=deleteAssignment(this.id)>Hapus</button></td></tr>';
		table.innerHTML = table.innerHTML+insert;
	}
	function myCreateFunction() {
		numTask += 1;
		var table = document.getElementById("insertData");
		var splitUnit = $('#inputUnit').val().split("_");
		arrayUnit[arrayUnit.length] = splitUnit[0];
		
		if($('#inputUnit').val().indexOf('Admin') !== -1)
			var insert = '<tr><td>Admin Puskesmas - '+splitUnit[1]+'<input type="hidden" name="unit'+numTask+'" value=adm'+splitUnit[0]+'></td><td><button data-dismiss="modal" class="btn btn-primary" id="'+arrayUnit.length+'" type="button" onclick=deleteAssignment(this.id)>Hapus</button></td></tr>';
			else
			var insert = '<tr id="'+arrayUnit.length+'"><td>'+splitUnit[1]+' - '+splitUnit[1]+'<input type="hidden" name="unit'+numTask+'" value='+splitUnit[0]+'><input type="hidden" name="gfk'+numTask+'" value="'+splitUnit[1]+'"></td><td><button data-dismiss="modal" class="btn btn-primary" id="'+arrayUnit.length+'" type="button" onclick=deleteAssignment(this.id)>Hapus</button></td></tr>';
		table.innerHTML = table.innerHTML+insert;
		document.getElementById("rowNum").value = numTask;
	}

	$("#sendAssignment").click(function () {
			var tempHA ='';
			var tempUnit = '';
			var index = 0;
			for(index = 0;index<arrayHA.length;index++){
				tempHA += arrayHA[index]+',';
				tempUnit += arrayUnit[index]+',';
			}
			
			$.ajax({
			traditional: true,
			url: '<?php echo base_url().$this->uri->segment(1, 0).'/'.$this->uri->segment(2, 0).'/addTask' ?>',
			type: "POST",
			data: { dataHA:tempHA,dataUnit:tempUnit,dataAkun:$('#inputNoid').val() },
			success: function(){
				alert('Penambahan Berhasil');
			},
			error: function (jqXHR, exception) {
				alert('Error message.');
			}
		});
	});
	
	function deleteAssignment(arrayNumber) {
		arrayHA.splice(arrayNumber, 1);
		arrayUnit.splice(arrayNumber, 1);
		//document.getElementById("assTable").deleteRow(arrayNumber);
		$('table#assTable tbody#insertData tr#'+arrayNumber).remove();
		document.getElementById("rowNum").value = numTask;
	}
	function myShowPenugasan() {
		$.ajax({
		   url:'<?php echo base_url().$this->uri->segment(1, 0).'/'.$this->uri->segment(2, 0).'/addAccount' ?>',
		   type: 'POST',
		   data: $("#formInput").serialize(),
		   success: function(){
				currentHa = <?php echo $this->session->userdata['telah_masuk']['idha'] ?>;
				if(currentHa != 19)
				{
					document.getElementById("penugasan").hidden = false;
					document.getElementById("inputNoid").readOnly = true;
					document.getElementById("inputNama").readOnly = true;
					document.getElementById("inputAlamat").readOnly = true;
					document.getElementById("inputSex").readOnly = true;
					document.getElementById("inputTelepon").readOnly = true;
					document.getElementById("inputHandphone").readOnly = true;
					document.getElementById("inputEmail").readOnly = true;
					document.getElementById("inputAgama").readOnly = true;
					document.getElementById("inputStatus").readOnly = true;
				}				
		   },
		   error: function(){
			   alert("Input Kembali")
			}
		});
	}
</script>
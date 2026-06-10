<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!');
$dataseries = $record->kueri('
WITH TotalNilai AS (
    SELECT 
        a.nik,
        SUM(e.nilai + d.nilai + j.nilai + k.nilai + l.nilai + m.nilai + n.nilai) AS total_nilai
    FROM `data_warga` a 
    LEFT JOIN `aspek_keselamatan`  b ON a.nik = b.nik
    LEFT JOIN `jawab_milik` 	   d ON b.kd_pondasi = d.kd_jawabmlk
    LEFT JOIN `instrument_kondisi` e ON b.kd_rangka = e.kd_kondisi
    LEFT JOIN `instrument_kondisi` j ON b.kd_kond_dinding = j.kd_kondisi
    LEFT JOIN `instrument_kondisi` k ON b.kd_kond_lantai = k.kd_kondisi
	LEFT JOIN `instrument_atap`    l ON b.kd_bahan_atap = l.kd_atap
    LEFT JOIN `instrument_dinding` m ON b.kd_bahan_dinding = m.kd_dinding
    LEFT JOIN `instrument_lantai`  n ON b.kd_bahan_lantai = n.kd_lantai
    GROUP BY a.nik
)
SELECT 
    CASE 
        WHEN total_nilai > 60 THEN "TIDAK LAYAK HUNI"
        ELSE "LAYAK HUNI"
    END AS indikator,
    COUNT(*) AS jumlah
FROM TotalNilai
GROUP BY indikator;');
while($pecah = $dataseries->fetch_object()){
	$series[] = array('indikator' => $pecah->indikator,'jumlah' => (int)$pecah->jumlah);
};
echo preg_replace('/\r|\n|[\	]/','','
<div class="col-md-10 offset-md-1 text-center mb-5">
	<h2 class="text-uppercase text-muted font-weight-bold mb-3" style="font-size:16px;">Informasi Data</h2>
	<h3 class="font-weight-bold" style="font-size:2rem;color:#343f52;">Rekapitulasi Data RTLH di <br>Kecamatan Gunungwungkal</h3>	
</div>
<div class="container mb-5">
	<div class="row justify-content-center">
		<div class="col-xl-5">
			<div class="rounded p-5 h-100" style="box-shadow:0 .25rem 1.75rem rgba(30, 34, 40, .09);">
				<div id="container" style="width:100%; height:400px;"></div>
				<script type="text/javascript">
				$(document).ready(function () {
					var chartData = '.json_encode($series).';
					
					var dataSeries = chartData.map(function(item) {
						return {
							name: item.indikator,
							y: item.jumlah
						};
					});
				
					Highcharts.chart("container", {
						chart: {
							type: "pie"
						},
						title: {
							text: "Persentase Data Kelayakan Rumah"
						},
						series: [{
							name: "Jumlah",
							colorByPoint: true,
							data: dataSeries
						}]
					});
				});
				</script>

			</div>
		</div>
		<div class="col-xl-5">
			<div class="rounded p-5 h-100" style="box-shadow:0 .25rem 1.75rem rgba(30, 34, 40, .09);">
				<div class="row justify-content-center">');
				$query = $record->kueri("SELECT COUNT(nik) AS jml FROM data_warga");
				$data = $query->fetch_object();
				$hasil = $data->jml;
				echo preg_replace('/\r|\n|[\	]/','','
					<div class="col-sm-6 p-3">
						<div class="text-center bg-light rounded p-3 h-100">
							<span class="font-weight-bold" style="font-size:2rem; color:#60697b;">'.$data->jml.'</span><br>
							<span class="color:#60697b;">Jumlah Data</span>
						</div>
					</div>');
				$query = $record->kueri("SELECT COUNT(nama_warga) AS jml FROM data_warga LEFT JOIN aspek_keselamatan b ON data_warga.nik=b.nik WHERE b.kd_pondasi <> 0 AND b.kd_kond_atap <> 0 AND b.kd_rangka <> 0 AND 
							  b.kd_kond_dinding <> 0 AND b.kd_kond_lantai <> 0 AND b.kd_bahan_atap <> 0 AND
							  b.kd_bahan_dinding <> 0 AND b.kd_bahan_lantai <> 0");
				$data = $query->fetch_object();
				$hasil = $data->jml;
				echo preg_replace('/\r|\n|[\	]/','','
					<div class="col-sm-6 p-3">
						<div class="text-center bg-light rounded p-3 h-100">
							<span class="font-weight-bold" style="font-size:2rem; color:#60697b;">'.$data->jml.'</span><br>
							<span class="color:#60697b;">Jumlah RTLH</span>
						</div>
					</div>');
				$query = $record->kueri("SELECT COUNT(id_desa) AS jml FROM instrument_desa");
				$data = $query->fetch_object();
				$hasil = $data->jml;
				echo preg_replace('/\r|\n|[\	]/','','
					<div class="col-sm-6 p-3">
						<div class="text-center bg-light rounded p-3 h-100">
							<span class="font-weight-bold" style="font-size:2rem; color:#60697b;">'.$data->jml.'</span><br>
							<span class="color:#60697b;">Jumlah Desa</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>');
?>
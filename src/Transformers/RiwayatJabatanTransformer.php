<?php

namespace Kanekescom\Siasn\Api\Simpeg\Transformers;

use Carbon\Carbon;
use League\Fractal\TransformerAbstract;

class RiwayatJabatanTransformer extends TransformerAbstract
{
    /**
     * Transform the RiwayatJabatan model.
     *
     * @param  Kanekescom\Siasn\Simpeg\Models\RiwayatJabatan  $item
     */
    public function transform(array $item): array
    {
        return [
            'id' => $item['id'],
            'id_pns' => $item['idPns'],
            'nip_baru' => $item['nipBaru'],
            'nip_lama' => $item['nipLama'],
            'jenis_jabatan' => $item['jenisJabatan'],
            'instansi_kerja_id' => $item['instansiKerjaId'],
            'instansi_kerja_nama' => $item['instansiKerjaNama'],
            'satuan_kerja_id' => $item['satuanKerjaId'],
            'satuan_kerja_nama' => $item['satuanKerjaNama'],
            'unor_id' => $item['unorId'],
            'unor_nama' => $item['unorNama'],
            'unor_induk_id' => $item['unorIndukId'],
            'unor_induk_nama' => $item['unorIndukNama'],
            'eselon' => $item['eselon'],
            'eselon_id' => $item['eselonId'],
            'jabatan_fungsional_id' => $item['jabatanFungsionalId'],
            'jabatan_fungsional_nama' => $item['jabatanFungsionalNama'],
            'jabatan_fungsional_umum_id' => $item['jabatanFungsionalUmumId'],
            'jabatan_fungsional_umum_nama' => $item['jabatanFungsionalUmumNama'],
            'tmt_jabatan' => $item['tmtJabatan'],
            'nomor_sk' => $item['nomorSk'],
            'tanggal_sk' => $item['tanggalSk'],
            'nama_unor' => $item['namaUnor'],
            'nama_jabatan' => $item['namaJabatan'],
            'tmt_pelantikan' => $item['tmtPelantikan'],
            'path' => collect($item['path']),
        ];
    }
}
